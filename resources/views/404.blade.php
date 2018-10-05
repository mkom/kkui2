@extends('layouts.app')

@section('content')
  <section class="mt-3 mb-3 mt-md-5 mb-md-5">
    @include('partials.page-header')

    @if (!have_posts())
      <div class="alert alert-warning text-center">
        {{ __('Sorry, but the page you were trying to view does not exist.', 'sage') }}
      </div>
      {{--{!! get_search_form(false) !!}--}}
    @endif
  </section>
@endsection
