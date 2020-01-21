@php
$query = new WP_Query( ['posts_per_page' => '3'] );
@endphp

<div class="container mx-auto">
  @if ($query->have_posts())
  <div class="flex align-center justify-between">
    @while ($query->have_posts())
    @php $query->the_post(); @endphp
    <div class="w-1/3 mx-3">
      <a href="{{ get_permalink()}}" class="text-lg mr-10 hover:no-underline hover:text-gray-900">
        <div class="uk-card uk-card-default uk-card-hover rounded-lg">
          <div class="uk-card-media-top">
            <img src="{{get_the_post_thumbnail_url()}}" alt="" class="rounded-t-lg">
          </div>
          <div class="uk-card-body">
            <h3 class="uk-card-title">{{get_the_title()}}</h3>
            <p>{{ get_the_excerpt()}}</p>
          </div>
        </div>
      </a>
    </div>
    @endwhile
    @else
    <h3>
      Not posts found
    </h3>
  </div>
  @endif
</div>

@php wp_reset_postdata(); @endphp