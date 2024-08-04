<x-dashboard>
    <x-slot:title>Post Pet Image</x-slot:title>
    <x-photoform action="{{ route('uploadImage') }}">
        Please enter pet's ID and url of the pet's photo you'd like to add:
    </x-photoform>
</x-dashboard>