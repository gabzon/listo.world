<tr>
  <td>{!! get_the_title() !!}</td>
  <td>
    <time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
  </td>
  <td>
    <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
      {{ get_the_author() }}
    </a>
  </td>
  <td>
    <a href="{{ get_the_permalink() }}" class="uk-icon-button" uk-icon="info"></a>
  </td>
</tr>
