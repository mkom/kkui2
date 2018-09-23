<article class="list-article mb-4">
  <div class="row">
    <div class="col-md-3 order-md-3 mb-3">
      <header class="d-block d-md-none">
        <h2 class="entry-title">
          <a href="{{ get_permalink() }}">
            @php echo wp_trim_words( get_the_title(), 12, '...' ); @endphp
          </a>
        </h2>
        <div class="d-block d-md-none mb-3"> @include('partials/entry-meta')</div>
      </header>
      <div class="d-flex justify-content-md-end align-items-center">
        @if(has_post_thumbnail())
          <a class="d-none d-md-block" href="{{ get_permalink() }}"><img src="{{the_post_thumbnail_url('thumbnail')}}" class="img-fluid " alt="{{ get_the_title()}}" /></a>
          <a class="d-block d-md-none" href="{{ get_permalink() }}"><img src="{{the_post_thumbnail_url('medium')}}" class="img-fluid " alt="{{ get_the_title()}}" /></a>
        @else
          <a href="{{ get_permalink() }}" class="preview-image"></a>
        @endif
      </div>
    </div>
    <div class="col-md-9">
      <div class="preview-post d-flex flex-column  mb-md-4">
        <header class="d-none d-md-block">
          <h2 class="entry-title">
            <a href="{{ get_permalink() }}">
              @php echo wp_trim_words( get_the_title(), 12, '...' ); @endphp
            </a>
          </h2>
          <div class="d-block d-md-none mb-3"> @include('partials/entry-meta')</div>
        </header>
        <div class="entry-summary">
          @php echo '<p>'. wp_trim_words( get_the_content(), 25, '...' ).'</p>'; @endphp
        </div>
        <div class="d-none d-md-block mt-auto"> @include('partials/entry-meta')</div>
      </div>
    </div>
  </div>
</article>
