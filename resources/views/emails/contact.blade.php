<x-mail::message>
# Client Name: 
{{ $name }}
# Client Email: 
{{ $email }}
# Client Phone Number: 
{{ $phone }}
# Service Type: 
{{ $service }}
# Message:
{{ $content }}

<x-mail::button :url="'mailto:' . $email">
    Reply to Email
</x-mail::button>

{{ config('app.name') }}
</x-mail::message>
