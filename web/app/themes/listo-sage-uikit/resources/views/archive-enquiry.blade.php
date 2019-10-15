@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif


  <table class="uk-table uk-table-divider uk-table-hover uk-table-small">
    <thead>
      <tr>
        <th>Request</th>
        <th>Date</th>
        <th>User</th>
        <th class="uk-table-shrink">View</th>
      </tr>
    </thead>
    <tbody>
      @while (have_posts()) @php the_post() @endphp
        @include('partials.content-'.get_post_type())
      @endwhile
    </tbody>
  </table>



  {!! get_the_posts_navigation() !!}
@endsection
