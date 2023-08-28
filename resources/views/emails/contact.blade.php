<x-mail::message>
    <h1>Contact inquiry</h1>

    Client Name: {{ $data['fullname'] }}
    Client Email: {{ $data['email'] }}
    Mobile Number: {{ $data['number'] }}
    Message: {{ $data['message'] }}

    Thanks,
    {{ config('app.name') }}
</x-mail::message>
