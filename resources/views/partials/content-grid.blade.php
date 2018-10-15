<div class="col-md-4 mb-4">
  <div class="card h-100">
    <a href="{{ get_permalink() }}">
      <div class="preview-image w-100">
        @if(has_post_thumbnail())
          <img src="{{the_post_thumbnail_url('medium')}}" class="object-fit_cover h-100 w-100 card-img-top"  alt="{!!  get_post(get_post_thumbnail_id())->post_title !!}" />
        @endif
      </div>
    </a>
    <div class="card-body p-3">
      <div class="d-block small mb-3 "> @include('partials/entry-meta')</div>
      <h5 class="card-title entry-title">
        <a href="{{ get_permalink() }}">
          @php echo wp_trim_words( get_the_title(), 10, '...' ); @endphp
        </a>
      </h5>
    </div>
  </div>
</div>