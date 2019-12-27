@php
$query = new WP_Query( ['posts_per_page' => '3'] );
@endphp

@if ($query->have_posts())
  @while ($query->have_posts())
    @php $query->the_post(); @endphp
    {{get_the_title()}}<br>
  @endwhile
@else
	<h3>
    Not posts found
  </h3>
@endif

@php wp_reset_postdata(); @endphp
