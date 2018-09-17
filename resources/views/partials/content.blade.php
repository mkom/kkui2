<div class="col-md-6 col-lg-4 p-0 mb-1 pr-1 card-content">
  <div class="card h-100 no-radius">
    <div class="card-body">
      <header class="card-title">
        <h5 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h5>
        @include('partials/entry-meta')
      </header>
      <div class="entry-summary card-text">
        @php the_excerpt() @endphp
      </div>
    </div>
  </div>
</div>
