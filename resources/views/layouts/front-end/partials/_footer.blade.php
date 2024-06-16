        <footer class="mt-5 py-3">
          <div class="row container mx-auto pt-5">
            <div class="footer-one col-lg-3 col-md-6 col-12">
              <img style="height: 60px;" src="{{static_assets('app/public/company/')}}/{{ $web_config['footer_logo']->value }}" alt="">
              <p class="pt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad sequi sint quis libero quam saepe laudantium provident ipsa animi nam, explicabo consequuntur molestiae dicta dolorum. Commodi repudiandae fugiat pariatur dolores.</p>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-12">
              <h5 class="pb-2">Featured</h5>
              <ul class="text-uppercase list-unstyled">
                <li>
                  <a href="#">Men</a>
                </li>
                <li>
                  <a href="#">Women</a>
                </li>
                <li>
                  <a href="#">Boys</a>
                </li>
                <li>
                  <a href="#">Girls</a>
                </li>
                <li>
                  <a href="#">New Arrivals</a>
                </li>
                <li>
                  <a href="#">Shoes</a>
                </li>
                <li>
                  <a href="#">Clothes</a>
                </li>
              </ul>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-12">
              <h5 class="pb-2">Contact-Us</h5>
              <div>
                <h6 class="text-uppercase">Address</h6>
                <p>{{ \App\CPU\Helpers::get_business_settings('shop_address')}}</p>
              </div>
              <div>
                <h6 class="text-uppercase">Phone</h6>
                <p>{{\App\CPU\Helpers::get_business_settings('company_phone')}}</p>
              </div>
              <div>
                <h6 class="text-uppercase">email</h6>
                <p>{{\App\CPU\Helpers::get_business_settings('company_email')}}</p>
              </div>
            </div>
            <div class="footer-one col-lg-2 col-md-6 col-12">
              <h5 class="pb-2">Instragram</h5>
              <div class="row">
                <img src="{{ static_assets('front-end/image/insta/1 (6).jpg')}}" alt="" class="img-fluid w-25 h-100 m-2">
                <img src="{{ static_assets('front-end/image/insta/2 (6).jpg')}}" alt="" class="img-fluid w-25 h-100 m-2">
                <img src="{{ static_assets('front-end/image/insta/3 (5).jpg')}}" alt="" class="img-fluid w-25 h-100 m-2">
                <img src="{{ static_assets('front-end/image/insta/4 (5).jpg')}}" alt="" class="img-fluid w-25 h-100 m-2">
              </div>
            </div>
          </div>
          <div class="copyright mt-5">
            <div class="row container mx-auto">
              <div class="col-lg-3 col-md-6 col-12">
                <img src="{{ static_assets('front-end/image/payment.png')}}" alt="">
              </div>
              <div class="col-lg-4 col-md-6 col-12">
                <p>{{ $web_config['copyright_text']->value }}</p>
              </div>
              <div class="col-lg-4 col-md-6 col-12">
                 @php($social_media = \App\Model\SocialMedia::where('active_status', 1)->get())
                    @if(isset($social_media))
                        @foreach ($social_media as $item)
                        <a class="social-btn sb-light sb-{{$item->name}} {{Session::get('direction') === "rtl" ? 'ml-2' : 'mr-2'}} mb-2"
                             target="_blank" href="{{$item->link}}" style="color: white!important;">
                              <i class="{{$item->icon}}" aria-hidden="true"></i>
                          </a>
                        @endforeach
                @endif
              </div>
            </div>
          </div>
        </footer>