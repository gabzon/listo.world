<div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
  <nav class="uk-navbar-container" uk-navbar>

    <div class="uk-navbar-left">
      <ul class="uk-navbar-nav">
        <li>
          <a href="#offcanvas-slide" uk-toggle><span class="uk-icon uk-margin-small-right" uk-icon="icon: menu"></span></a>
        </li>
      </ul>
    </div>

    <div class="uk-navbar-center">
      <a href="{{ home_url('/') }}" class="uk-navbar-item uk-logo"><span class="uk-margin-small-right" uk-icon="check"></span>{{ get_bloginfo('name', 'display') }}</a>
    </div>

    <div class="uk-navbar-right">
      <ul class="uk-navbar-nav">
        @if ( is_user_logged_in() )
          <li><a href="" uk-icon="icon: user"></a></li>
          <li><a href="{{ esc_url(bloginfo('url'))}}/wp/wp-login.php?action=logout" uk-icon="icon: sign-out"> Sign out</a></li>
        @else
          <li><a href="{{ esc_url(bloginfo('url'))}}/login" uk-icon="icon: sign-in"> Sign in</a></li>
          <li><a href="" uk-icon="icon: file-edit"> Sign up</a></li>
        @endif
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
