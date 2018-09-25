<article class="article-content">
    <header class="mb-4">
        <h1 class="entry-title">{!! App::title() !!}</h1>
        {{--@include('partials/entry-meta')--}}
    </header>
    <div class="entry-content pt-2">
        @php the_content() @endphp
    </div>
    <footer>
        {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
    </footer>
    @php //comments_template('/partials/comments.blade.php') @endphp
</article>