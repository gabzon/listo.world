@if ( tr_posts_field('flight_options') == 1)
<h3 class="text-xl py-3"><i class="fas fa-plane-departure"></i> Flight options</h3>
<table class="table-auto w-full">
    <tbody>
        <tr class="border-b">
            <td class="font-bold py-2">Flight class</td>
            <td class="py-2">{{ tr_posts_field('flight_class') }}</td>
        </tr>
        <tr class="border-b">
            <td class="font-bold py-2">Food type</td>
            <td class="py-2">{{ tr_posts_field('food_type') }}</td>
        </tr>
        <tr class="border-b">
            <td class="font-bold py-2">Seat Preference</td>
            <td class="py-2">{{ tr_posts_field('seat_preference') }}</td>
        </tr>
    </tbody>
</table>
@endif