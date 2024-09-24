@component('mail::message')
# Contact Details

{{$data['name']}}
{{$data['phone']}}
{{$data['email']}}
{{$data['message']}}

@component('mail::button', ['url' => ''])
View Email from Dashboard
@endcomponent

@endcomponent
