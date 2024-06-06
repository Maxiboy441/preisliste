<!DOCTYPE html>
<x-head/>

<section class="wine-menu container mx-auto px-4 py-8">
    <h2 class="text-3xl font-bold text-center mb-4">Wine List</h2>

    <h3 class="text-lg font-medium mb-2">Red Wines</h3>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <div class="wine-card bg-gray-100 shadow-md rounded-lg p-4">
            <h3 class="text-lg font-medium mb-2">Pinot Noir</h3>
            <p class="text-gray-600">Domaine Drouhin, Oregon - 2022</p>
            <p class="text-green-600 font-bold">$42.00</p>
        </div>

        <div class="wine-card bg-gray-100 shadow-md rounded-lg p-4">
            <h3 class="text-lg font-medium mb-2">Malbec</h3>
            <p class="text-gray-600">Mendoza, Argentina - 2022</p>
            <p class="text-green-600 font-bold">$45.00</p>
        </div>

        <div class="wine-card bg-gray-100 shadow-md rounded-lg p-4">
            <h3 class="text-lg font-medium mb-2">Cabernet Sauvignon</h3>
            <p class="text-gray-600">Napa Valley, California - 2021</p>
            <p class="text-green-600 font-bold">$58.00</p>
        </div>
    </div>

    <h3 class="text-lg font-medium mb-2">White Wines</h3>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <div class="wine-card bg-gray-100 shadow-md rounded-lg p-4">
            <h3 class="text-lg font-medium mb-2">Sauvignon Blanc</h3>
            <p class="text-gray-600">Marlborough Sounds, New Zealand - 2023</p>
            <p class="text-green-600 font-bold">$35.00</p>
        </div>

        <div class="wine-card bg-gray-100 shadow-md rounded-lg p4">
            <h3 class="text-lg font-medium mb-2">Chardonnay</h3>
            <p class="text-gray-600">Sonoma Coast, California - 2023</p>
            <p class="text-green-600 font-bold">$38.00</p>
        </div>
    </div>

    <h3 class="text-lg font-medium mb-2">Rosé Wines</h3>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <div class="wine-card bg-gray-100 shadow-md rounded-lg p-4">
            <h3 class="text-lg font-medium mb-2">Rosé (Provence)</h3>
            <p class="text-gray-600">Château d'Esclans, France - 2023</p>
            <p class="text-green-600 font-bold">$40.00</p>
        </div>
    </div>

    <div class="wine-categories">
        <h3 class="text-lg font-medium mb-2">Sparkling Wines</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="wine-card bg-gray-100 shadow-md rounded-lg p-4">
                <h3 class="text-lg font-medium mb-2">Sparkling (Blanc de Blancs)</h3>
                <p class="text-gray-600">Champagne, France - NV (Non-Vintage)</p>
                <p class="text-green-600 font-bold">$65.00</p>
            </div>
        </div>
    </div>
</section>
