<div class="">
  <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn hover:no-underline text-lg font-bold">
    <img class="object-cover rounded-full overflow-hidden inline-block" height="40" width="40"
      src="{{ get_avatar_url( get_the_author_meta('ID') ) }}" alt="{{ $user->display_name }}">
      @if (get_the_author_meta('first_name') || get_the_author_meta('last_name'))
      {{ get_the_author_meta('first_name') . ' ' . get_the_author_meta('last_name') }}        
      @else
          {{ get_the_author()}}      
      @endif
  </a>
</div>


<table class="table-auto">
  <tbody>
    @if ( tr_posts_field('by_email') == 1 )
    <tr>
      <td class="py-2"><i class="fas fa-envelope"></i></td>
      <td class="py-2">{{ tr_posts_field('email')}}</td>
    </tr>
    @endif

    @if ( tr_posts_field('by_phone_call') == 1 )
    <tr>
      <td class="py-2"><i class="fas fa-phone"></i></td>
      <td class="py-2">{{ tr_posts_field('phone_number') }}</td>
    </tr>
    @endif

    @if ( tr_posts_field('by_skype') == 1 )
    <tr>
      <td class="py-2"><i class="fab fa-skype"></i></td>
      <td class="py-2">{{ tr_posts_field('skype') }}</td>
    </tr>
    @endif

    @if ( tr_posts_field('by_sms') == 1 )
    <tr>
      <td class="py-2"><i class="fas fa-sms"></i></td>
      <td class="py-2">{{ tr_posts_field('sms_number') }}</td>
    </tr>
    @endif

    @if ( tr_posts_field('by_whatsapp') == 1 )
    <tr>
      <td class="py-2"><i class="fab fa-whatsapp"></i></td>
      <td class="py-2">{{ tr_posts_field('whatsapp') }}</td>
    </tr>
    @endif

    @if ( tr_posts_field('by_viber') == 1 )
    <tr>
      <td class="py-2"><i class="fab fa-viber"></i></td>
      <td class="py-2">{{ tr_posts_field('viber') }}</td>
    </tr>
    @endif

    @if ( tr_posts_field('by_facebook_messenger') == 1 )
    <tr>
      <td class="py-2"><i class="fab fa-facebook-messenger"></i></td>
      <td class="py-2">{{ tr_posts_field('facebook_messenger') }}</td>
    </tr>
    @endif
  </tbody>
</table>
