@if ( tr_posts_field('transport_options') == 1)
<h3 class="text-xl py-3"><i class="fas fa-car"></i> Transportation options</h3>
<table class="table-auto w-full">
    <tbody>
        <tr class="border-b">
            <td class="font-bold py-2">Type</td>
            <td class="py-2">{{ tr_posts_field('transport_type') }}</td>
        </tr>
        <tr class="border-b">
            <td class="font-bold py-2">Car type</td>
            <td class="py-2">{{ tr_posts_field('car_type') }}</td>
        </tr>
    </tbody>
</table>
@endif