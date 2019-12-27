{{--
  Template Name: Landing
--}}

@extends('layouts.app')

@section('content')
  <div class="uk-background-primary uk-light uk-padding uk-panel">
            <p class="uk-h4">Primary
            dkdkdk</p>
        </div>
  @if ( is_user_logged_in() )
    @while(have_posts()) @php the_post() @endphp
      {{-- @include('partials.page-header')
      @include('partials.content-page') --}}
      <div id="enquiry-form"></div>
      @include('partials.latests-posts')
    @endwhile
  @else
    <h1>If you want to get a travel estimate you need to be signed in</h1>
    <a href="{{ esc_url(bloginfo('url'))}}/login" class="uk-button uk-button-default" uk-icon="icon: sign-in">Sign in</a>
    <a href="{{ esc_url(bloginfo('url'))}}/wp/wp-login.php?action=register" class="uk-button uk-button-default" uk-icon="icon: file-edit">Sign up</a>
    <br>
    @include('partials.latests-posts')
  @endif
@endsection
