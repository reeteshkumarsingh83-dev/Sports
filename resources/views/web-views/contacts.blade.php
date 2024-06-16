@extends('layouts.front-end.app')

@section('title',\App\CPU\translate('Contact Us'))

@push('css_or_js')
    <meta property="og:image" content="{{static_assets('app/public/company')}}/{{$web_config['web_logo']->value}}"/>
    <meta property="og:title" content="Contact {{$web_config['name']->value}} "/>
    <meta property="og:url" content="{{env('APP_URL')}}">
    <meta property="og:description" content="{!! substr($web_config['about']->value,0,100) !!}">

    <meta property="twitter:card" content="{{static_assets('app/public/company')}}/{{$web_config['web_logo']->value}}"/>
    <meta property="twitter:title" content="Contact {{$web_config['name']->value}}"/>
    <meta property="twitter:url" content="{{env('APP_URL')}}">
    <meta property="twitter:description" content="{!! substr($web_config['about']->value,0,100) !!}">

    <style>
        .headerTitle {
            font-size: 25px;
            font-weight: 700;
            margin-top: 2rem;
        }

        .for-contac-image {
            padding: 6%;
        }

        .for-send-message {
            padding: 26px;
            margin-bottom: 2rem;
            margin-top: 2rem;
        }

        @media (max-width: 600px) {
            .sidebar_heading {
                background: {{$web_config['primary_color']}}

            }

            .headerTitle {

                font-weight: 700;
                margin-top: 1rem;
            }

            .sidebar_heading h1 {
                text-align: center;
                color: aliceblue;
                padding-bottom: 17px;
                font-size: 19px;
            }
        }
    </style>
@endpush
@section('content')
    <div class="container rtl">
        <div class="row">
            <div class="col-md-12 sidebar_heading text-center mb-2">
                <h1 class="h3  mb-0 folot-left headerTitle">{{\App\CPU\translate('contact_us')}}</h1>
            </div>
        </div>
    </div>

    <!-- Split section: Map + Contact form-->
    <div class="container rtl" style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};">
        <div class="row no-gutters">
            <div class="col-lg-6 iframe-full-height-wrap ">
                <img style="" class="for-contac-image" src="{{static_assets('front-end/png/sport_conatc.jpg')}}" alt="">
            </div>
            <div class="col-lg-6 for-send-message px-4 px-xl-5  box-shadow-sm">
                <h2 class="h4 mb-4 text-center"
                    style="color: #030303; font-weight:600;">{{\App\CPU\translate('send_us_a_message')}}</h2>
                    <form action="{{route('contact.store')}}" method="POST" id="getResponse">
                        @csrf
                        <div class="row">
                          <div class="col-sm-6">
                              <div class="form-group">
                                <label >{{\App\CPU\translate('your_name')}}</label>
                                <input class="form-control name" name="name" type="text" 
                                  value="{{ old('name') }}" placeholder="John Doe" required>

                              </div>
                            </div>
                          <div class="col-sm-6">
                              <div class="form-group">
                                <label for="cf-email">{{\App\CPU\translate('email_address')}}</label>
                                <input class="form-control email" name="email" type="email" 
                                  value="{{ old('email') }}"
                                  placeholder="johndoe@email.com" required >

                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label for="cf-phone">{{\App\CPU\translate('your_phone')}}</label>
                                <input class="form-control mobile_number"  type="text" name="mobile_number"
                                  value="{{ old('mobile_number') }}"  placeholder="{{\App\CPU\translate('Contact Number')}}" required>

                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label for="cf-subject">{{\App\CPU\translate('Subject')}}:</label>
                                <input class="form-control subject" type="text" name="subject" 
                                  value="{{ old('subject') }}"   placeholder="{{\App\CPU\translate('Short title')}}" required>

                              </div>
                            </div>
                             <div class="col-md-12">
                            <div class="form-group">
                              <label for="cf-message">{{\App\CPU\translate('Message')}}</label>
                              <textarea class="form-control message" name="message"   rows="6" required>{{ old('subject') }}</textarea>
                            </div>
                          </div>
                        </div>
                        {{-- recaptcha --}}
                        @php($recaptcha = \App\CPU\Helpers::get_business_settings('recaptcha'))
                        @if(isset($recaptcha) && $recaptcha['status'] == 1)
                            <div id="recaptcha_element" style="width: 100%;" data-type="image"></div>
                            <br/>
                        @else
                            <div class="row p-2">
                                <div class="col-6 pr-0">
                                    <input type="text" class="form-control form-control-lg" name="default_captcha_value" value=""
                                        placeholder="{{\App\CPU\translate('Enter captcha value')}}" style="border: none" autocomplete="off">
                                </div>
                                <div class="col-6 input-icons" style="border-radius: 5px;">
                                    <a onclick="javascript:re_captcha();">
                                        <img src="{{ URL('/contact/code/captcha/1') }}" class="input-field" id="default_recaptcha_id" style="display: inline;width: 90%;height: auto;">
                                        <i class="tio-refresh icon"></i>
                                    </a>
                                </div>
                            </div>
                        @endif
                        <div class=" ">
                          <button class="btn btn-primary" type="submit" >{{\App\CPU\translate('send')}}</button>
                      </div>
                    </form>
            </div>
        </div>
    </div>

@endsection


@push('script')
{{-- recaptcha scripts start --}}
@if(isset($recaptcha) && $recaptcha['status'] == 1)
    <script type="text/javascript">
        var onloadCallback = function () {
            grecaptcha.render('recaptcha_element', {
                'sitekey': '{{ \App\CPU\Helpers::get_business_settings('recaptcha')['site_key'] }}'
            });
        };
    </script>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async
            defer></script>
    <script>
        $("#getResponse").on('submit', function (e) {
            var response = grecaptcha.getResponse();
        
            if (response.length === 0) {
                e.preventDefault();
                toastr.error("{{\App\CPU\translate('Please check the recaptcha')}}");
            }
        });
    </script>
@else
<script type="text/javascript">
    function re_captcha() {
        $url = "{{ URL('/contact/code/captcha') }}";
        $url = $url + "/" + Math.random();
        document.getElementById('default_recaptcha_id').src = $url;
        console.log('url: '+ $url);
    }
</script>
@endif
{{-- recaptcha scripts end --}}
@endpush

