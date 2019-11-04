@extends('layouts.app')

@section('content')
  @if ( is_user_logged_in() )
    @while(have_posts()) @php the_post() @endphp
      @include('partials.page-header')
      @include('partials.content-page')
      <div id="wpackio-reactapp"></div>
    @endwhile
  @else
    @php
    wp_redirect(site_url('login'));
    exit;
    @endphp
  @endif
@endsection
