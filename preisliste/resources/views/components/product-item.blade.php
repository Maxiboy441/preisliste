@props(['title', 'description', 'price'])

<div class="wine-card bg-gray-100 shadow-md rounded-lg p-4">
    <h3 class="text-lg font-medium mb-2">{{ $title }}</h3>
    <p class="text-gray-600">{{ $description }}</p>
    <p class="text-green-600 font-bold">{{ $price }} €</p>
</div>
