<a href="{{ route('product', ['product' => $product->id]) }}" class="product_card">
    <div>
        <img src="{{ asset('storage/'.$product->image) }}" alt="{{ ucfirst($product->title) }}">
    </div>
    <h3>{{ ucfirst($product->title) }}</h3>
    <!-- <p>{{ "Rp.".number_format($product->price) }} {{  $product->discount }}%</p> -->
    


    <p>
    @if($product->discount > 0)
    <s>Rp. {{ number_format($product->price) }} </s> {{ $product->discount }}%
    @else
        Rp. {{ number_format($product->price) }}%
    @endif
    </p>
    @if($product->discount > 0)
        <!-- <p>Rp. {{ number_format((1 - ($product->discount / 100)) * $product->price) }}</p> -->
        <p>Rp.{{$product->diskonlabel}}</p>
    @endif
</a>