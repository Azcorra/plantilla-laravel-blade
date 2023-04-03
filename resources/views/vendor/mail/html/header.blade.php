@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
@else
<img src="https://demo.royalpocket.com/assets/header/RP_escudo.svg" class="logo" alt="Royal Pocket Logo">
@endif
</a>
</td>
</tr>
