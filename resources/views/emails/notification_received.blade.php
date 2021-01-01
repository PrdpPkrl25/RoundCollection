@component('mail::message')
Dear {{$notification->user->name}},
{{$notification->message}}

@if(!isNull($notification->link))
@component('mail::button', ['url' => $notification->link])
Open Link
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
