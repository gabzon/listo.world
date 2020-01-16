@extends('layouts.app')

@section('content')

  <div uk-grid>
    <div class="uk-width-auto@m bg-teal-700">
      <h3 class="text-white mx-3 my-4">
        Hi {{ get_the_author_meta('user_firstname') ? get_the_author_meta('user_firstname') : get_the_author_meta('display_name') }}!
      </h3>
      <ul class="uk-tab-left" uk-tab="connect: #component-tab-left; animation: uk-animation-fade">
        <li><a href="#" class="text-white important"><span uk-icon="thumbnails"></span> Dashboard</a></li>
        <li><a href="#" class="text-white"><span uk-icon="album"></span> Enquiries</a></li>
        <li><a href="#"><span uk-icon="location"></span> Activities</a></li>
        <li><a href="#"><span uk-icon="star"></span> Challenges</a></li>
        <li><a href="#"><span uk-icon="settings"></span> Profile</a></li>
        <li><a href="#"><span uk-icon="copy"></span> Posts</a></li>
      </ul>
    </div>
    <div class="uk-width-expand@m">
      <a href="{{ home_url('/') }}" class="uk-button uk-button-primary uk-icon br-pill fr">New Enquiry</a>
      <ul id="component-tab-left" class="uk-switcher">
        <li>@include('profile.dashboard')</li>
        <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
        <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur, sed do eiusmod.</li>
        <li></li>
        <li></li>
        <li>Profile (passports, expiry date, flyer clubs, vaccins, embassies, insurance)</li>
        <li>@include('profile.posts')</li>
      </ul>
    </div>
  </div>


@endsection
