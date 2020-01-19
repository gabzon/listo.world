<table class="table-fixed w-full">
  <tbody>
    <tr class="border-b">
      <td class="w-1/3 py-2 font-bold"><i class="fas fa-users"></i> Travalling with:</td>
      <td class="w-2/3 py-2">{{ tr_posts_field('companions') }}</td>
    </tr>
    <tr class="border-b">
      <td class="py-2 font-bold"><i class="fas fa-male"></i> Adults</td>
      <td class="py-2 capitalize">{{ tr_posts_field('number_of_adults') }}</td>
    </tr>
    <tr class="border-b">
      <td  class="py-2 font-bold"><i class="fas fa-child"></i> Kids</td>
      <td class="py-2">{{ tr_posts_field('number_of_kids') }}</td>
    </tr>
    <tr class="border-b">
      <td class="py-2 font-bold"><i class="fas fa-baby"></i> Babies</td>
      <td class="py-2">{{ tr_posts_field('number_of_babies') }}</td>
    </tr>
    <tr>
      <td class="py-2 font-bold"><i class="far fa-comment"></i> Comments</td>
      <td>
        @php the_content() @endphp
      </td>
    </tr>
  </tbody>
</table>