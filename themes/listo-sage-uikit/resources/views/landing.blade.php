{{--
  Template Name: Landing
--}}
{{-- @include('partials.page-header')
      @include('partials.content-page') --}}

@extends('layouts.app')

@section('content')
@if ( is_user_logged_in() )

@while(have_posts()) @php the_post() @endphp
<div class="container mx-auto">
  <br>
  <div class="uk-alert-danger" uk-alert>
    <a class="uk-alert-close" uk-close></a>
    <h3 class="font-bold">Beta version</h3>
    <p>You can use <em class="underline">Listo</em> normally but know that we are currently under development and you
      may encounter some bugs. If you have any question, comment or observation please tell us <a
        href="{{ esc_url(site_url('feedback'))}}">here</a></p>
  </div>
  <h1 class="font-bold text-4xl my-10">
    Travel smart. Be listo! <br>
    <small class="text-gray-600 font-light">
      Listo allows you to send a call to tender to a network of travel agencies that will find you the best prices,
      offers and services for your next trip.
    </small>
  </h1>
</div>

<div class="bg-gray-600 my-20 py-24 text-center">
  <a href="{{ site_url('enquiry-form') }}"
    class="bg-transparent hover:bg-red-500 text-gray-200 font-semibold hover:text-white text-xl py-6 px-24 border border-gray-200 hover:border-transparent rounded hover:no-underline uppercase">Call
    to tender</a>
</div>

@include('partials.latests-posts')

@endwhile
@else
<div class="bg-gray-100 h-screen">
  <div class="text-center py-24">
    <h1 class="font-bold text-4xl text-gray-600">If you want to get a travel estimate you need to be signed in</h1>
    <div class="flex justify-center my-24">
      <div class="w-1/4">
        <a href="{{ esc_url(bloginfo('url'))}}/login"
          class="my-5 inline-block text-gray-600 border-gray-600 hover:bg-red-500 font-semibold hover:text-white text-xl py-6 px-24 border hover:border-transparent rounded hover:no-underline uppercase">
          <i class="fas fa-sign-in-alt"></i> Sign in
        </a>
        <a href="{{ esc_url(bloginfo('url'))}}/wp/wp-login.php?action=register"
          class="my-5 inline-block text-gray-600 border-gray-600 hover:bg-red-500 font-semibold hover:text-white text-xl py-6 px-24 border hover:border-transparent rounded hover:no-underline uppercase">
          <i class="fas fa-user-plus"></i> Sign up
        </a>
      </div>
    </div>
    @include('partials.latests-posts')
  </div>
</div>
@endif
@endsection