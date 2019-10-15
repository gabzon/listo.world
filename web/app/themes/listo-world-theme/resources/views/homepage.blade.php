{{--
  Template Name: Homepage Form
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
    <br>
    react down here
    <div id="react"></div>
  @endwhile
@endsection
