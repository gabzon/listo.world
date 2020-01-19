<table class="table-auto w-full">
  <tbody>
    <tr class="border-b">
      <td class="font-bold py-2"><i class="fas fa-globe-americas"></i> Destination</td>
      <td class="py-2">{{ tr_posts_field('destination') }}</td>
    </tr>
    <tr class="border-b" style="padding-bottom: 30px">
      <td class="py-2 font-bold"><i class="fas fa-random"></i> Flexibility</td>
      <td class="py-2">{{ tr_posts_field('flexibility') }}</td>
    </tr>
    <tr class="border-b">
      <td class="py-2 font-bold"><i class="fas fa-arrows-alt-h"></i> Trip type</td>
      <td class="py-2 capitalize">{{ tr_posts_field('round_trip') }}</td>
    </tr>
    <tr class="border-b">
      <td  class="py-2 font-bold"><i class="far fa-calendar"></i> Departure</td>
      <td class="py-2">{{ tr_posts_field('departure_date') }}</td>
    </tr>
    <tr class="border-b">
      <td class="py-2 font-bold"><i class="far fa-calendar"></i> Return</td>
      <td class="py-2">{{ tr_posts_field('return_date') }}</td>
    </tr>
    <tr class="border-b bg-gray-200">
      <td class="font-bold py-2"><i class="fas fa-money-bill-alt"></i> Budget</td>
      <td class="py-2 font-bold">CHF {{ tr_posts_field('budget') }}</td>
    </tr>
  </tbody>
</table>
