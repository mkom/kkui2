<article class="article-content">
  <header class="mb-4">
    <div class="mb-3">@include('partials/entry-meta')</div>
    <h1 class="entry-title">{{ get_the_title() }}</h1>
  </header>
  <div class="entry-content pt-2">
    @php the_content() @endphp
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  @php //comments_template('/partials/comments.blade.php') @endphp
</article>
