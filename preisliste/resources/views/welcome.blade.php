@php
    use App\Models\Product;
@endphp
    <!DOCTYPE html>
<x-head/>
<section class="wine-menu container mx-auto px-4 py-8">
    <h2 class="text-3xl font-bold text-center mb-4">Preisliste</h2>
    <x-product-category/>
</section>

<script>
    // Reload the page every 1 minute (60000 milliseconds)
    setInterval(function() {
        location.reload();
    }, 60000);
</script>
