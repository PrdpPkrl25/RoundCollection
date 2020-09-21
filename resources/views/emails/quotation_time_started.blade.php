@component('mail::message')
Hello Participant,

The Quotation form for kista {{$round->round_number}} is opened. It will be opened till {{$round->quotation_end_time}}.
Fill your quotation form by clicking link below:

@component('mail::button', ['url' => route('quotations.create',$round->id)])
Open Form
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
