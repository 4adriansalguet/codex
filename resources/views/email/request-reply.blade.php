@component('mail::message')
# Online Codex

{{$data['message']}}

@component('mail::button', ['url' => ''])
View Email from Dashboard
@endcomponent
<p>From: </p>{{$data['sender_email']}}
@endcomponent
