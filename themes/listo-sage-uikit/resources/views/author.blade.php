@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  name
  Profile (passports, expiry date, flyer clubs, vaccins, embassies, insurance)
  New enquiry
  Enquiries
  Places visited
  visited countries
  Challenges
  Activities

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  @while (have_posts()) @php the_post() @endphp
    @include('partials.content-'.get_post_type())
  @endwhile

  {!! get_the_posts_navigation() !!}
@endsection
