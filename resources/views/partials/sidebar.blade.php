<section class="popular-post widget mb-4 d-inline-block w-100">
    <h3>{{ __('Popular Post', 'kkui') }}</h3>
    @php
        $args=array(
            'meta_key'=>'popular_posts',
            'orderby'=>'meta_value_num',
             'order'=>'DESC',
            'posts_per_page'=> 7,
        );
        $my_query = new WP_Query($args);
    @endphp

    @if($my_query->have_posts())
        <ul>
            @php $i=1; while ($my_query->have_posts()):  $my_query->the_post() @endphp
                <li>
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="pr-4 font-weight-light list-num">@php echo $i; @endphp</div>
                        <div class="flex-column">
                            <h4>
                                <a href="{{ get_permalink() }}">
                                    @php echo wp_trim_words( get_the_title(), 10, '...' ); @endphp
                                </a>
                            </h4>
                            <div class="d-block small "> @include('partials/entry-meta')</div>
                        </div>
                    </div>

                </li>
            @php $i++; endwhile; @endphp
        </ul>
    @endif
</section>
@php wp_reset_query(); @endphp
@php dynamic_sidebar('sidebar-primary') @endphp
