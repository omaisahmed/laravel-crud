@component('mail::message')
# Hi, {{$user->name}}

Someone checked your profile. For more info visit our website. 

@component('mail::button', ['url' => 'http://localhost:8000/contact'])
Visit Now
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
