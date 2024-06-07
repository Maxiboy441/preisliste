@php
 use App\Models\Product;
 use App\Enums\ProductTypeEnum;
@endphp

@foreach(ProductTypeEnum::cases() as $type )
    @if(Product::where('type', $type)->count() > 0)
        <h3 class="text-lg font-medium mb-2">{{$type}}</h3>
    @endif
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach(Product::where('type', $type)->get() as $product)
            <x-product-item title="{{$product->name}}" description="{{$product->description}}" price="{{$product->price}}"/>
        @endforeach
    </div>
@endforeach
