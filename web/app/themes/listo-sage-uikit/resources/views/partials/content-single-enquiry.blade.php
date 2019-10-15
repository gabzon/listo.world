<article @php post_class() @endphp>
  <div class="uk-child-width-expand@s mt5" uk-grid>
    <div class="ui-width-1-2">
      <header class="mv3">
        <h1 class="entry-title pa0 ma0">
          {!! get_the_title() !!}
        </h1>
        <time class="updated f6" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
      </header>
    </div>
    <div class="ui-width-1-2">
      {{-- <div class="uk-grid-small uk-child-width-auto" uk-grid uk-countdown="date: 2019-10-18T09:42:04+00:00">
          <div>
              <div class="uk-countdown-number uk-countdown-days"></div>
              <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Days</div>
          </div>
          <div class="uk-countdown-separator">:</div>
          <div>
              <div class="uk-countdown-number uk-countdown-hours"></div>
              <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Hours</div>
          </div>
          <div class="uk-countdown-separator">:</div>
          <div>
              <div class="uk-countdown-number uk-countdown-minutes"></div>
              <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Minutes</div>
          </div>
          <div class="uk-countdown-separator">:</div>
          <div>
              <div class="uk-countdown-number uk-countdown-seconds"></div>
              <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Seconds</div>
          </div>
      </div> --}}
    </div>
  </div>


  <div class="uk-flex uk-flex-wrap uk-flex-wrap-around" uk-grid>
    <div class="uk-width-1-4">
      @include('inquiry/general')
    </div>
    <div class="uk-width-1-2">
      <div class="uk-card uk-card-body uk-grid-small uk-padding-small">
        <table class="uk-table uk-table-hover uk-table-divider uk-table-small">
          <tbody>
            <tr>
              <td><i class="fas fa-wallet"></i> Budget</td>
              <td><strong>CHF {{ tr_posts_field('budget') }}</strong></td>
            </tr>
            <tr>
              <td><small class="b"><i class="fas fa-users"></i> Travalling with:</small></td>
              <td><small>{{ tr_posts_field('companions') }}</small></td>
            </tr>
            <tr>
              <td><small class="b"><i class="fas fa-male"></i> Adults</small></td>
              <td><small>{{ tr_posts_field('number_of_adults') }}</small></td>
            </tr>
            <tr>
              <td><small class="b"><i class="fas fa-child"></i> Kids</small></td>
              <td><small>{{ tr_posts_field('number_of_kids') }}</small></td>
            </tr>
            <tr>
              <td><small class="b"><i class="fas fa-baby"></i> Babies</small></td>
              <td>{{ tr_posts_field('number_of_babies') }}</td>
            </tr>
          </tbody>
        </table>
        @php the_content() @endphp
      </div>
    </div>
    <div class="uk-width-1-4">
      @include('inquiry/passenger')
    </div>
  </div>

  <hr>

  @if ( tr_posts_field('advanced_options') == 1 )
    @include('inquiry/options')
  @endif

  <div class="themes">
    {{ tr_posts_field('themes') }}
  </div>


  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  @php comments_template('/partials/comments.blade.php') @endphp
</article>
