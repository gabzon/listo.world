{{-- <header class="banner">
<div class="container">
<a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
<nav class="nav-primary">
@if (has_nav_menu('primary_navigation'))
{!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
@endif
</nav>
</div>
</header> --}}

<div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
  <nav class="uk-navbar-container" uk-navbar>
    <a class="uk-navbar-item" href="{{ home_url('/') }}"><span class="uk-margin-small-right" uk-icon="check"></span>{{ get_bloginfo('name', 'display') }}</a>
    <div class="uk-navbar-right">
      <ul class="uk-navbar-nav">
        <li><a href="" uk-icon="icon: user"></a></li>
        <li>
          <a href="#offcanvas-slide" uk-toggle><span class="uk-icon uk-margin-small-right" uk-icon="icon: menu"></span></a>
        </li>
      </ul>
    </div>
  </nav>
</div>

<div id="offcanvas-slide" uk-offcanvas>
  <div class="uk-offcanvas-bar">

    <ul class="uk-nav uk-nav-default">
      <li class="uk-active"><a href="#">Active</a></li>
      <li><a href="#">Item</a></li>
      <li class="uk-nav-header">Header</li>
      <li><a href="#">Item</a></li>
      <li><a href="#">Item</a></li>
      <li class="uk-nav-divider"></li>
      <li><a href="#">Item</a></li>
    </ul>

    @if (has_nav_menu('primary_navigation'))
    {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
    @endif
    </nav>

  </div>
</div>
