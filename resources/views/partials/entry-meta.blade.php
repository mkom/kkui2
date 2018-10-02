<div class="d-flex entry-meta">
  {{--<span class="byline author vcard">
    <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
      {{ get_the_author() }}
    </a>
  </span>
  <span class="ml-1 mr-1">/</span>--}}
  <time class="updated" datetime="{{ get_post_time('c', true) }}">{!! App::indoDate() !!}</time>
</div>
