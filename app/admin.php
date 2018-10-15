<?php

namespace App;

/**
 * Theme customizer
 */
add_action('customize_register', function (\WP_Customize_Manager $wp_customize) {
    // Add postMessage support
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->selective_refresh->add_partial('blogname', [
        'selector' => '.brand',
        'render_callback' => function () {
            bloginfo('name');
        }
    ]);
});

/**
 * Customizer JS
 */
add_action('customize_preview_init', function () {
    wp_enqueue_script('sage/customizer.js', asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
});

/*
 * Add  Meta box
 * Source: https://gist.github.com/da1nonly/2057532
 */

add_action('admin_init', __NAMESPACE__ . '\\add_meta_boxes', 1);

function add_meta_boxes() {
    add_meta_box( 'source-fields', 'Sources',  __NAMESPACE__ . '\\source_meta_box_display', 'post', 'normal', 'high');
}

function source_meta_box_display() {
    global $post;
    $source_fields = get_post_meta($post->ID, 'source_fields', true);
    wp_nonce_field( 'source_meta_box_nonce', 'source_meta_box_nonce' );
    ?>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('.metabox_submit').click(function(e) {
                e.preventDefault();
                $('#publish').click();
            });
            $('#add-row').on('click', function() {
                var row = $('.empty-row.screen-reader-text').clone(true);
                row.removeClass('empty-row screen-reader-text');
                row.insertBefore('#source-fieldset-one tbody>tr:last');
                return false;
            });
            $('.remove-row').on('click', function() {
                $(this).parents('tr').remove();
                return false;
            });
            $('#source-fieldset-one tbody').sortable({
                opacity: 0.6,
                revert: true,
                cursor: 'move',
                handle: '.sort'
            });
        });
    </script>

    <table id="source-fieldset-one" width="100%">
        <thead>
        <tr>
            <th width="2%"></th>
            <th width="30%">Name</th>
            <th width="60%">URL</th>
            <th width="2%"></th>
        </tr>
        </thead>
        <tbody>
        <?php
        if ( $source_fields ) :
            foreach ( $source_fields as $field ) {
                ?>
                <tr>
                    <td><a class="button remove-row" href="#">-</a></td>
                    <td><input type="text" class="widefat" name="name[]" value="<?php if($field['name'] != '') echo esc_attr( $field['name'] ); ?>" /></td>

                    <td><input type="text" class="widefat" name="url[]" value="<?php if ($field['url'] != '') echo esc_attr( $field['url'] ); else echo 'http://'; ?>" /></td>
                    <td><a class="sort">|||</a></td>

                </tr>
                <?php
            }
        else :
            // show a blank one
            ?>
            <tr>
                <td><a class="button remove-row" href="#">-</a></td>
                <td><input type="text" class="widefat" name="name[]" /></td>


                <td><input type="text" class="widefat" name="url[]" value="http://" /></td>
                <td><a class="sort">|||</a></td>

            </tr>
        <?php endif; ?>

        <!-- empty hidden one for jQuery -->
        <tr class="empty-row screen-reader-text">
            <td><a class="button remove-row" href="#">-</a></td>
            <td><input type="text" class="widefat" name="name[]" /></td>


            <td><input type="text" class="widefat" name="url[]" value="http://" /></td>
            <td><a class="sort">|||</a></td>

        </tr>
        </tbody>
    </table>

    <p><a id="add-row" class="button" href="#">Add another</a>
        <input type="submit" class="metabox_submit" value="Save" />
    </p>

    <?php
}
add_action('save_post', __NAMESPACE__ . '\\source_meta_box_save');

function source_meta_box_save($post_id) {
    if ( ! isset( $_POST['source_meta_box_nonce'] ) ||
        ! wp_verify_nonce( $_POST['source_meta_box_nonce'], 'source_meta_box_nonce' ) )
        return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return;
    if (!current_user_can('edit_post', $post_id))
        return;
        $old = get_post_meta($post_id, 'source_fields', true);
        $new = array();
        $names = $_POST['name'];
        $urls = $_POST['url'];
        $count = count( $names );
        for ( $i = 0; $i < $count; $i++ ) {
            if ( $names[$i] != '' ) :
                $new[$i]['name'] = stripslashes( strip_tags( $names[$i] ) );
                if ( $urls[$i] == 'http://' )
                    $new[$i]['url'] = '';
                else
                    $new[$i]['url'] = stripslashes( $urls[$i] ); // and however you want to sanitize
            endif;
        }
    if ( !empty( $new ) && $new != $old )
        update_post_meta( $post_id, 'source_fields', $new );
    elseif ( empty($new) && $old )
        delete_post_meta( $post_id, 'source_fields', $old );
}
