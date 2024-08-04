<x-dashboard>
    <x-slot:title>Get Pet Status</x-slot:title>
    <x-onefieldform action="{{ route('findByStatus') }}">
        <x-slot:field>Status:</x-slot:field>
        Please enter status of the the pets you'd like to get:
    </x-onefieldform>
</x-dashboard>