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
          @php echo '<p>'. wp_trim_words( get_the_content(), 18, '...' ).'</p>'; @endphp
        </div>
        <div class="d-block mt-auto"> @include('partials/entry-meta')</div>
      </div>
    </div>
    <div class="col-4 col-md-3 mb-3 p-md-0 pl-0">
      <div class="d-flex justify-content-center justify-content-md-end align-items-center mr-md-3">
        @if(has_post_thumbnail())
          <a class="d-block" href="{{ get_permalink() }}"><img src="{{the_post_thumbnail_url('thumbnail')}}" class="img-fluid " alt="{{ get_the_title()}}" /></a>
        @else
          <a href="{{ get_permalink() }}" class="preview-image"></a>
        @endif
      </div>
    </div>
  </div>
</article>
