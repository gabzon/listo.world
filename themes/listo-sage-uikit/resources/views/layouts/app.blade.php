<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body class="<?php $allClasses = get_post_class(); foreach ($allClasses as $class) { echo $class . " "; } ?> bg-gray-100">
    @php do_action('get_header') @endphp
    @include('partials.header')
    <div class="wrap" role="document">
      <div class="content">
        <main class="main">
          @yield('content')
        </main>
        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif
      </div>
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>

<!--  .uk-container This class allows me to do the same as container in bootstrap -->