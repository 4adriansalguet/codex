@component('mail::message')
# Quore Request

<p>{{$quoteRequestData['model_firstname'] .' '. $quoteRequestData['model_lastname']}}</p>
<p>{{$quoteRequestData['model_email']}}</p>
<p>{{$quoteRequestData['model_phone']}}</p>
<p>{{$quoteRequestData['model_country']}}</p>
<p>{{$quoteRequestData['model_projectType']}}</p>
<p>{{$quoteRequestData['model_message']}}</p>
<p>{{$quoteRequestData['model_price']}}</p>
<p>{{$quoteRequestData['model_pricing_name']}}</p>
<p>{{$quoteRequestData['model_email_created']}}</p>
<p>{{$quoteRequestData['model_reference_id']}}</p>

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

@endcomponent
