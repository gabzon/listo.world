<div class="uk-card ba b--near-white">
  <div class="uk-card-header">
    <div class="uk-grid-small uk-flex-middle" uk-grid>
      <div class="uk-width-auto">
        <img class="uk-border-circle" width="40" height="40" src="{{ get_avatar_url( get_the_author_meta('ID') )}}">
      </div>
      <div class="uk-width-expand">
        <h3 class="uk-card-title uk-margin-remove-bottom">
          <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
            {{ get_the_author() }}
          </a>
        </h3>
      </div>
    </div>
  </div>
  <div class="uk-card-body uk-padding-small">
    <table class="uk-table uk-table-hover uk-table-small">
      <tbody>
        @if ( tr_posts_field('by_email') == 1 )
          <tr>
            <td><small><i class="fas fa-envelope"></i></small></td>
            <td><small>{{ tr_posts_field('email')}}</small></td>
          </tr>
        @endif

        @if ( tr_posts_field('by_phone_call') == 1 )
          <tr>
            <td><small><i class="fas fa-phone"></i></small></td>
            <td><small>{{ tr_posts_field('phone_number') }}</small></td>
          </tr>
        @endif

        @if ( tr_posts_field('by_skype') == 1 )
          <tr>
            <td><i class="fab fa-skype"></i></td>
            <td>{{ tr_posts_field('skype') }}</td>
          </tr>
        @endif

        @if ( tr_posts_field('by_sms') == 1 )
          <tr>
            <td><small><i class="fas fa-sms"></i></small></td>
            <td><small>{{ tr_posts_field('sms_number') }}</small></td>
          </tr>
        @endif

        @if ( tr_posts_field('by_whatsapp') == 1 )
          <tr>
            <td><small><i class="fab fa-whatsapp"></i></small> </td>
            <td><small>{{ tr_posts_field('whatsapp') }}</small></td>
          </tr>
        @endif

        @if ( tr_posts_field('by_viber') == 1 )
          <tr>
            <td><small><i class="fab fa-viber"></i></small></td>
            <td><small>{{ tr_posts_field('viber') }}</small></td>
          </tr>
        @endif

        @if ( tr_posts_field('by_facebook_messenger') == 1 )
          <tr>
            <td><small><i class="fab fa-facebook-messenger"></i></small></td>
            <td><small>{{ tr_posts_field('facebook_messenger') }}</small></td>
          </tr>
        @endif
      </tbody>
    </table>
  </div>
  <div class="uk-card-footer">
    <a href="" class="uk-icon-button uk-margin-small-right" uk-icon="twitter"></a>
    <a href="" class="uk-icon-button  uk-margin-small-right" uk-icon="facebook"></a>
    <a href="" class="uk-icon-button  uk-margin-small-right" uk-icon="instagram"></a>
    <a href="" class="uk-icon-button" uk-icon="linkedin"></a>
  </div>
</div>
