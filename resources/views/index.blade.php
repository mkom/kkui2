@extends('layouts.app')

@section('content')
  <div class="wrapper-list-article">
    @include('partials.page-header')

    <div class="wrapper-list-article__inner">
      @if (!have_posts())
        <div class="alert alert-warning">
          {{ __('Sorry, no results were found.', 'sage') }}
        </div>
       {{-- {!! get_search_form(false) !!}--}}
      @endif

    @while (have_posts()) @php the_post() @endphp
      @include('partials.content-'.get_post_type())
      @endwhile

      <nav class="posts-navigation text-center " role="navigation">
          {{next_posts_link('Next Entries','')}}
      </nav>

    </div>
  </div>
@endsection
