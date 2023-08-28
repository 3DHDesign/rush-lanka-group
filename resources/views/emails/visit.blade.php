<x-mail::message>
    <h1> Schedule a visit</h1>

    Client Name: {{ $data['name'] }}
    Building Name: {{ $building->name }}
    Client Email: {{ $data['email'] }}
    Schedule Date: {{ $data['date'] }}
    Mobile Number: {{ $data['number'] }}

    Thanks,
    {{ config('app.name') }}
</x-mail::message>
