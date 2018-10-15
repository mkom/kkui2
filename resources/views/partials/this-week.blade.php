@php
    wp_reset_query();
    global $post;
    $args = array(
        'post__not_in' => array($post->ID),
        'posts_per_page'=> 9,
        'date_query' => array(
            array(
               'year' => date( 'Y' ),
			    'week' => date( 'W' ),
            ),
        ),
    );
    $my_query = new WP_Query($args);
    if ($my_query->have_posts()):
@endphp

<section class="mt-5 mb-5 wrapper-list-article">
    <header class="section-header">
        <h1>{{ __('This Week', 'kkui') }}</h1>
    </header>
    <div class="wrapper-list-article__inner row">
        @while ($my_query->have_posts()) @php $my_query->the_post() @endphp
        @include('partials.content-grid')
        @endwhile

    </div>
</section>
@php endif; wp_reset_query(); @endphp