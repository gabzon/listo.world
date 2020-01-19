@if ( tr_posts_field('accommodation_options') == 1 )
<h3 class="text-xl py-3"><i class="fas fa-hotel"></i> Accomodation options</h3>
<table class="table-auto w-full">
    <tbody>
        <tr class="border-b">
            <td class="font-bold py-2">Property type</td>
            <td class="py-2">{{ tr_posts_field('property_type') }}</td>
        </tr>
        <tr class="border-b">
            <td class="font-bold py-2">Property rating</td>
            <td class="py-2">{{ tr_posts_field('property_rating') }}</td>
        </tr>
    </tbody>
</table>
@endif
