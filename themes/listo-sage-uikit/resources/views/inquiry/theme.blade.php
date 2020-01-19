@if (tr_posts_field('themes'))
<h3 class="text-xl py-3"><i class="fas fa-theater-masks"></i> Themes</h3>
<table class="table-auto w-full">
    <tbody>
        <tr class="border-b">
            <td class="font-bold py-2">Type</td>
            <td class="py-2">{{ tr_posts_field('themes') }}</td>
        </tr>
    </tbody>
</table>
@endif