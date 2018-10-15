<article class="list-article mb-4">
  <div class="row">
    <div class="col-8 col-md-9">
      <div class="preview-post d-flex flex-column  mb-md-4">
        <header class="d-block">
          <h2 class="entry-title">
            <a href="{{ get_permalink() }}">
              @php echo wp_trim_words( get_the_title(), 10, '...' ); @endphp
            </a>
          </h2>
        </header>
        <div class="entry-summary d-none d-md-block">
          @php the_excerpt() @endphp
        </div>
        <div class="d-block mt-auto"> @include('partials/entry-meta')</div>
      </div>
    </div>
    <div class="col-4 col-md-3 mb-3 p-md-0 pl-0">
      <div class="d-flex justify-content-center justify-content-md-end align-items-center mr-md-3">
        <a href="{{ get_permalink() }}">
          <div class="preview-image">
            @if(has_post_thumbnail())
              <img src="{{the_post_thumbnail_url('thumbnail')}}" class="object-fit_cover h-100 w-100"  alt="{!!  get_post(get_post_thumbnail_id())->post_title !!}" />
            @endif
          </div>
        </a>
      </div>
    </div>
  </div>
</article>
