<article class="article-content mb-5">
  <div class="banner row ml-md-0 mr-md-0 mb-5">
    <div class="preview-image">
      @if(has_post_thumbnail())
        <img src="{{the_post_thumbnail_url('large')}}" class="object-fit_cover h-100 w-100"  alt="{!!  get_the_title() !!}" />
      @endif
    </div>
    <div class="mb-3 banner__caption">
      Gambar: <a href="">{{get_the_post_thumbnail_caption($post)}}</a>
    </div>
  </div>
  <header class="mb-4">
    <div class="mb-3 color-primary">@include('partials/entry-meta')</div>
    <h1 class="entry-title">{!! get_the_title() !!}</h1>
  </header>
  <div class="entry-content pt-2">
    @php the_content() @endphp
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  @php //comments_template('/partials/comments.blade.php') @endphp
</article>
