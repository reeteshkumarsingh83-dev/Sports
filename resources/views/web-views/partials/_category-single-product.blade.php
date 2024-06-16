@php($overallRating = \App\CPU\ProductManager::get_overall_rating($product->reviews))

<div class="product text-center col-lg-3 col-md-4 col-12">
<img src="{{static_assets('app/public/product/thumbnail/'.$product->thumbnail)}}"
            onerror="this.src='{{static_assets("front-end/img/image-place-holder.png")}}'"
             class="">
<div class="star">
  @for($inc=0;$inc<5;$inc++)
            @if($inc<$overallRating[0])
                <i class="sr-star czi-star-filled active"></i>
            @else
                <i class="sr-star czi-star" style="color:#fea569 !important"></i>
            @endif
        @endfor
</div>
<h5 class="p-name">{{ Str::limit($product['name'], 18) }}</h5>
<h4 class="p-price">Rs. {{$product->unit_price-(\App\CPU\Helpers::get_product_discount($product,$product->unit_price))}}</h4>
<button class="buy-btn" onclick="quickView('{{$product->id}}')"><i class="czi-eye align-middle {{Session::get('direction') === "rtl" ? 'ml-1' : 'mr-1'}}"></i> Quick View</button>
</div>
    

