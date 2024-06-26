@foreach ($products->get() as $product)

<div class='p-4 rounded bg-gray-200 flex flex-col items-center justify-between h-80 w-60 m-2'>
    <img src={{$product->imageURL}} class='w-full h-32 object-cover mb-2'>
    <h3 class='text-2xl mb-2'>{{$product->name}}</h3>
    <hr class='w-full mb-2'>
    <div class='italic text-gray-500 flex-grow mb-2 overflow-hidden'>
        {{$product->description}}
    </div>
    <div class='text-4xl text-right text-orange-600'>
        {{$product->price}}
    </div>
</div>

@endforeach

<div id="addProductMessage" hx-swap-oob="true">
    <div class="bg-green-500 text-white text-center p-4">
        <h3>Product Added</h3>
    </div>
</div>


