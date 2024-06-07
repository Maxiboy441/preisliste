@php
    use App\Models\Product;
    use App\Enums\ProductTypeEnum;
@endphp

@foreach(ProductTypeEnum::cases() as $type )
    @if(Product::where('type', $type)->count() > 0)
        <h3 class="text-lg font-medium mb-2 mt-5 d-flex justify-content-between align-items-center">
            {{$type}}
        </h3>
    @endif
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-12">
        @foreach(Product::where('type', $type)->get() as $product)
            <a href=""><x-product-item title="{{$product->name}}" description="{{$product->description}}" price="{{$product->price}}"/></a>
        @endforeach
        <a href="">
            <div class="shadow-md rounded-lg p-4">
                <h3 class="text-lg font-medium mb-2">Produkt Hinzufügen</h3>
            </div>
        </a>

    </div>
@endforeach
