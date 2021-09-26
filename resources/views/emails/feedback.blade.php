@component('mail::message')
Hello, {{$name}}!

{{$message}}

@component('mail::button', ['url' => 'http://127.0.0.1:8000/'])
Let's go to NASA news
@endcomponent

Thanks,<br>
Nasa news!
@endcomponent
