<x-mail::message>
# Name: {{ $name }}
# Email: {{ $email }}

{{ $content }}

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
