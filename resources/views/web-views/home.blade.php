@extends('layouts.front-end.app') 
@section('content')

 <section>
  @php
      $main_banner = \App\Model\Banner::where('banner_type','Main Banner')->where('published',1)->orderBy('id','desc')->get();
  @endphp
  <div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        @foreach($main_banner as $key=>$banner)
        <div class="carousel-item {{$key==0?'active':''}}">
         <a href="{{$banner['url']}}"> <img class="d-block w-100 sliderbanner" src="{{static_assets('app/public/banner/'.$banner->photo)}}" onerror="this.src='{{static_assets("front-end/img/image-place-holder.png")}}'" alt="First slide"></a>
        </div>
        @endforeach
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</section>

 <!-- <section id="home">
  <div class="container">
    <h5>NEW ARRIVALS</h5>
    <h1>
      <span>BEST PRICE</span> THIS YEAR
    </h1>
    <p>
      <b>Shoomatic offers your way comfortable time <br>on walking and exercise </b>
    </p>
    <button>Shop Now</button>
  </div>
</section> -->
<section id="brand" class="container">
  <div class="row m-0 py-5">
    @foreach($brands->take(5) as $brand)
    <img class="img-fluid  col-lg-2 col-md-4 col-6" onerror="this.src='{{static_assets("front-end/img/image-place-holder.png")}}'"
        src="{{static_assets('app/public/brand/'.$brand->image)}}" alt="" style="height:100px;margin:5px;">
    @endforeach
   </div>
</section>
<section id="new" class="w-100">
  @php
      $main_section_banner = \App\Model\Banner::where('banner_type','Main Section Banner')->where('published',1)->orderBy('id','desc')->get();
  @endphp
  <div class="row p-0 m-0">
    @foreach($main_section_banner as $key=>$banner)
    <div class="one col-lg-4 col-md-12 col-12 p-0">
      <img class="img-fluid" src="{{static_assets('app/public/banner/'.$banner->photo)}}" onerror="this.src='{{static_assets("front-end/img/image-place-holder.png")}}'" alt="" class="main_section_banner">
      <div class="details">
        <!-- <h2>Extreme Rare Sneakers</h2><button class="text-uppercase">Shop Now</button> -->
      </div>
      <!-- <h2><a href="">Extreme Rare Sneakers</a></h2> -->
      <button class="text-uppercase">Shop Now</button>
    </div>
   @endforeach
  </div>
</section>
<section id="featured" class="my-5 py-3">
  <div class="container text-center mt-5 py-3">
    <h3>Our Featured</h3>
    <hr class="mx-auto">
    <p>Here you can check out our new product with fair price in rymo.</p>
  </div>
  <div class="row mx-auto container-fluid">
   @if ($featured_products->count() > 0 )
    @foreach($featured_products as $product)
          @include('web-views.partials._feature-product',['product'=>$product])
    @endforeach
   @endif 
  </div>
  </div>
  </div>
  </div>
</section>
<section id="banner" class="my-5 py-3">
  <div class="container">
    <h4>MID SEASON'S SALE</h4>
    <h1>AUTUMN COLLECTION <br> UPTO 20% OFF </h1>
    <Button class="text-uppercase">Shop Now</Button>
  </div>
</section>
@foreach($home_categories as $category)
<section id="clothes" class="my-5 py-3">
  <div class="container text-center mt-5 py-3">
    <h3>{{ \App\CPU\translate($category->name)}}</h3>
    <hr class="mx-auto">
    <p>Here you can check out our new product with fair price in rymo.</p>
    <div class="justify-content-between" style="text-align:right;">
        <div style="margin-right: 4px;">
            <a class="text-capitalize view-all-text"
               href="{{route('products',['id'=> $category['id'],'data_from'=>'category','page'=>1])}}">
                {{ \App\CPU\translate('view_all')}}
                <i class="czi-arrow-{{Session::get('direction') === "rtl" ? 'left-circle mr-1 ml-n1 mt-1 float-left' : 'right-circle ml-1 mr-n1'}}"></i>
            </a>
        </div>
    </div>
  </div>
  <div class="row mx-auto container-fluid">
    @foreach($category['products'] as $key=>$product)
        @if ($key<4)
              @include('web-views.partials._category-single-product',['product'=>$product])
      @endif
    @endforeach
  </div>
  </div>
  </div>
  </div>
</section>
@endforeach

<section id="stationary" class="my-5 pb-5 ">
  <div class="container text-center mt-5 py-3">
    <h3>Stationar Items</h3>
    <hr class="mx-auto">
    <p>Here you can check out our new product with fair price in rymo.</p>
  </div>
  <div class="row mx-auto container-fluid">
    <div class="product text-center col-lg-3 col-md-4 col-12">
      <img src="{{ static_assets('front-end/image/stationary/6.png')}}" alt="" class="img-fluid mb-3">
      <div class="star">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
      </div>
      <h5 class="p-name">Sports Boots</h5>
      <h4 class="p-price">$92</h4>
      <button class="buy-btn">Buy Now</button>
    </div>
    <div class="product text-center col-lg-3 col-md-4 col-12">
      <img src="{{ static_assets('front-end/image/stationary/2.png')}}" alt="" class="img-fluid mb-3">
      <div class="star">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
      </div>
      <h5 class="p-name">Sports Boots</h5>
      <h4 class="p-price">$92</h4>
      <button class="buy-btn">Buy Now</button>
    </div>
    <div class="product text-center col-lg-3 col-md-4 col-12">
      <img src="{{ static_assets('front-end/image/stationary/3.png')}}" alt="" class="img-fluid mb-3">
      <div class="star">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
      </div>
      <h5 class="p-name">Sports Boots</h5>
      <h4 class="p-price">$92</h4>
      <button class="buy-btn">Buy Now</button>
    </div>
    <div class="product text-center col-lg-3 col-md-4 col-12">
      <img src="{{ static_assets('front-end/image/stationary/7.png')}}" alt="" class="img-fluid mb-3">
      <div class="star">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
      </div>
      <h5 class="p-name">Sports Boots</h5>
      <h4 class="p-price">$92</h4>
      <button class="buy-btn">Buy Now</button>
    </div>
  </div>
  </div>
  </div>
  </div>
</section>
<section id="gifts" class="my-5 pb-5 ">
  <div class="container text-center mt-5 py-3">
    <h3>Gifts Corner</h3>
    <hr class="mx-auto">
    <p>Here you can check out our new product with fair price in rymo.</p>
  </div>
  <div class="row mx-auto container-fluid">
    <div class="product text-center col-lg-3 col-md-4 col-12">
      <img src="{{ static_assets('front-end/image/gifts/1.png')}}" alt="" class="img-fluid mb-3">
      <div class="star">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
      </div>
      <h5 class="p-name">Sports Boots</h5>
      <h4 class="p-price">$92</h4>
      <button class="buy-btn">Buy Now</button>
    </div>
    <div class="product text-center col-lg-3 col-md-4 col-12">
      <img src="{{ static_assets('front-end/image/gifts/2.png')}}" alt="" class="img-fluid mb-3">
      <div class="star">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
      </div>
      <h5 class="p-name">Sports Boots</h5>
      <h4 class="p-price">$92</h4>
      <button class="buy-btn">Buy Now</button>
    </div>
    <div class="product text-center col-lg-3 col-md-4 col-12">
      <img src="{{ static_assets('front-end/image/gifts/4.png')}}" alt="" class="img-fluid mb-3">
      <div class="star">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
      </div>
      <h5 class="p-name">Sports Boots</h5>
      <h4 class="p-price">$92</h4>
      <button class="buy-btn">Buy Now</button>
    </div>
    <div class="product text-center col-lg-3 col-md-4 col-12">
      <img src="{{ static_assets('front-end/image/gifts/5.png')}}" alt="" class="img-fluid mb-3">
      <div class="star">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
      </div>
      <h5 class="p-name">Sports Boots</h5>
      <h4 class="p-price">$92</h4>
      <button class="buy-btn">Buy Now</button>
    </div>
  </div>
  </div>
  </div>
  </div>
</section> 
@endsection