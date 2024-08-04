<x-dashboard>
    <x-slot:title>Get Pet</x-slot:title>
    <x-onefieldform action="{{ route('findByID') }}">
        <x-slot:field>ID:</x-slot:field>
        Please enter ID of the the pet you'd like to get:
    </x-onefieldform>
</x-dashboard>