@php
    wp_reset_query();
    global $post;
    $tags = wp_get_post_tags($post->ID);
    if ($tags):
@endphp

<section class="mt-5 mb-5 wrapper-list-article">
    <header class="section-header">
        <h1>Related</h1>
    </header>
    <div class="wrapper-list-article__inner">
        @php
            $first_tag = $tags[0]->term_id;
            $args=array(
                'tag__in' => array($first_tag),
                'post__not_in' => array($post->ID),
                'posts_per_page'=>5,
            );
            $my_query = new WP_Query($args);
        @endphp

        @if($my_query->have_posts())
            @while ($my_query->have_posts()) @php $my_query->the_post() @endphp
                @include('partials.content')
            @endwhile
        @endif

    </div>
</section>
@php endif; wp_reset_query(); @endphp