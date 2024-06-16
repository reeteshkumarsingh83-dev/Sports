<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

	<!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- old css -->
    <linl href="{{static_assets('app/public/company')}}/{{$web_config['fav_icon']->value}}">
    <link rel="icon" type="image/png" sizes="32x32"
          href="{{ static_assets('app/public/company')}}/{{$web_config['fav_icon']->value}}">

    <link rel="stylesheet" media="screen"
          href="{{static_assets('front-end')}}/vendor/simplebar/dist/simplebar.min.css"/>
    <link rel="stylesheet" media="screen"
          href="{{static_assets('front-end')}}/vendor/tiny-slider/dist/tiny-slider.css"/>
    <link rel="stylesheet" media="screen"
          href="{{static_assets('front-end')}}/vendor/drift-zoom/dist/drift-basic.min.css"/>
    <link rel="stylesheet" media="screen"
          href="{{static_assets('front-end')}}/vendor/lightgallery.js/dist/css/lightgallery.min.css"/>
    <link rel="stylesheet" href="{{static_assets('back-end')}}/css/toastr.css"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{static_assets('front-end')}}/css/theme.min.css">
    <link rel="stylesheet" media="screen" href="{{static_assets('front-end')}}/css/slick.css">
    <link rel="stylesheet" media="screen" href="{{static_assets('front-end')}}/css/font-awesome.min.css">
    <!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
    <link rel="stylesheet" href="{{static_assets('back-end')}}/css/toastr.css"/>
    <link rel="stylesheet" href="{{static_assets('front-end')}}/css/master.css"/>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Titillium+Web:wght@400;600;700&display=swap"
        rel="stylesheet">
    {{-- light box --}}
    <link rel="stylesheet" href="{{static_assets('css/lightbox.css')}}">
    <link rel="stylesheet" href="{{static_assets('back-end')}}/vendor/icon-set/style.css">
    @stack('css_or_js')

    <link rel="stylesheet" href="{{static_assets('front-end/css/home.css')}}">
    <link rel="stylesheet" href="{{static_assets('front-end')}}/css/responsive1.css"/>
    <link rel="stylesheet" href="{{static_assets('front-end/css/responsive.css')}}"/>
    <!-- end css -->

        <link rel="alternate" type="application/rss+xml" title="Dimita – Electronics WordPress Theme for WooCommerce &raquo; Feed" href="feed/index.html" />
    <link rel="alternate" type="application/rss+xml" title="Dimita – Electronics WordPress Theme for WooCommerce &raquo; Comments Feed" href="comments/feed/index.html" />
    <script defer src="data:text/javascript;base64,Ci8qIDwhW0NEQVRBWyAqLwp3aW5kb3cuX3dwZW1vamlTZXR0aW5ncyA9IHsiYmFzZVVybCI6Imh0dHBzOlwvXC9zLncub3JnXC9pbWFnZXNcL2NvcmVcL2Vtb2ppXC8xNC4wLjBcLzcyeDcyXC8iLCJleHQiOiIucG5nIiwic3ZnVXJsIjoiaHR0cHM6XC9cL3Mudy5vcmdcL2ltYWdlc1wvY29yZVwvZW1vamlcLzE0LjAuMFwvc3ZnXC8iLCJzdmdFeHQiOiIuc3ZnIiwic291cmNlIjp7ImNvbmNhdGVtb2ppIjoiaHR0cHM6XC9cL3dwYmluZ29zaXRlLmNvbVwvd29yZHByZXNzXC9kaW1pdGFcL3dwLWluY2x1ZGVzXC9qc1wvd3AtZW1vamktcmVsZWFzZS5taW4uanM/dmVyPTYuNC40In19OwovKiEgVGhpcyBmaWxlIGlzIGF1dG8tZ2VuZXJhdGVkICovCiFmdW5jdGlvbihpLG4pe3ZhciBvLHMsZTtmdW5jdGlvbiBjKGUpe3RyeXt2YXIgdD17c3VwcG9ydFRlc3RzOmUsdGltZXN0YW1wOihuZXcgRGF0ZSkudmFsdWVPZigpfTtzZXNzaW9uU3RvcmFnZS5zZXRJdGVtKG8sSlNPTi5zdHJpbmdpZnkodCkpfWNhdGNoKGUpe319ZnVuY3Rpb24gcChlLHQsbil7ZS5jbGVhclJlY3QoMCwwLGUuY2FudmFzLndpZHRoLGUuY2FudmFzLmhlaWdodCksZS5maWxsVGV4dCh0LDAsMCk7dmFyIHQ9bmV3IFVpbnQzMkFycmF5KGUuZ2V0SW1hZ2VEYXRhKDAsMCxlLmNhbnZhcy53aWR0aCxlLmNhbnZhcy5oZWlnaHQpLmRhdGEpLHI9KGUuY2xlYXJSZWN0KDAsMCxlLmNhbnZhcy53aWR0aCxlLmNhbnZhcy5oZWlnaHQpLGUuZmlsbFRleHQobiwwLDApLG5ldyBVaW50MzJBcnJheShlLmdldEltYWdlRGF0YSgwLDAsZS5jYW52YXMud2lkdGgsZS5jYW52YXMuaGVpZ2h0KS5kYXRhKSk7cmV0dXJuIHQuZXZlcnkoZnVuY3Rpb24oZSx0KXtyZXR1cm4gZT09PXJbdF19KX1mdW5jdGlvbiB1KGUsdCxuKXtzd2l0Y2godCl7Y2FzZSJmbGFnIjpyZXR1cm4gbihlLCJcdWQ4M2NcdWRmZjNcdWZlMGZcdTIwMGRcdTI2YTdcdWZlMGYiLCJcdWQ4M2NcdWRmZjNcdWZlMGZcdTIwMGJcdTI2YTdcdWZlMGYiKT8hMTohbihlLCJcdWQ4M2NcdWRkZmFcdWQ4M2NcdWRkZjMiLCJcdWQ4M2NcdWRkZmFcdTIwMGJcdWQ4M2NcdWRkZjMiKSYmIW4oZSwiXHVkODNjXHVkZmY0XHVkYjQwXHVkYzY3XHVkYjQwXHVkYzYyXHVkYjQwXHVkYzY1XHVkYjQwXHVkYzZlXHVkYjQwXHVkYzY3XHVkYjQwXHVkYzdmIiwiXHVkODNjXHVkZmY0XHUyMDBiXHVkYjQwXHVkYzY3XHUyMDBiXHVkYjQwXHVkYzYyXHUyMDBiXHVkYjQwXHVkYzY1XHUyMDBiXHVkYjQwXHVkYzZlXHUyMDBiXHVkYjQwXHVkYzY3XHUyMDBiXHVkYjQwXHVkYzdmIik7Y2FzZSJlbW9qaSI6cmV0dXJuIW4oZSwiXHVkODNlXHVkZWYxXHVkODNjXHVkZmZiXHUyMDBkXHVkODNlXHVkZWYyXHVkODNjXHVkZmZmIiwiXHVkODNlXHVkZWYxXHVkODNjXHVkZmZiXHUyMDBiXHVkODNlXHVkZWYyXHVkODNjXHVkZmZmIil9cmV0dXJuITF9ZnVuY3Rpb24gZihlLHQsbil7dmFyIHI9InVuZGVmaW5lZCIhPXR5cGVvZiBXb3JrZXJHbG9iYWxTY29wZSYmc2VsZiBpbnN0YW5jZW9mIFdvcmtlckdsb2JhbFNjb3BlP25ldyBPZmZzY3JlZW5DYW52YXMoMzAwLDE1MCk6aS5jcmVhdGVFbGVtZW50KCJjYW52YXMiKSxhPXIuZ2V0Q29udGV4dCgiMmQiLHt3aWxsUmVhZEZyZXF1ZW50bHk6ITB9KSxvPShhLnRleHRCYXNlbGluZT0idG9wIixhLmZvbnQ9IjYwMCAzMnB4IEFyaWFsIix7fSk7cmV0dXJuIGUuZm9yRWFjaChmdW5jdGlvbihlKXtvW2VdPXQoYSxlLG4pfSksb31mdW5jdGlvbiB0KGUpe3ZhciB0PWkuY3JlYXRlRWxlbWVudCgic2NyaXB0Iik7dC5zcmM9ZSx0LmRlZmVyPSEwLGkuaGVhZC5hcHBlbmRDaGlsZCh0KX0idW5kZWZpbmVkIiE9dHlwZW9mIFByb21pc2UmJihvPSJ3cEVtb2ppU2V0dGluZ3NTdXBwb3J0cyIscz1bImZsYWciLCJlbW9qaSJdLG4uc3VwcG9ydHM9e2V2ZXJ5dGhpbmc6ITAsZXZlcnl0aGluZ0V4Y2VwdEZsYWc6ITB9LGU9bmV3IFByb21pc2UoZnVuY3Rpb24oZSl7aS5hZGRFdmVudExpc3RlbmVyKCJET01Db250ZW50TG9hZGVkIixlLHtvbmNlOiEwfSl9KSxuZXcgUHJvbWlzZShmdW5jdGlvbih0KXt2YXIgbj1mdW5jdGlvbigpe3RyeXt2YXIgZT1KU09OLnBhcnNlKHNlc3Npb25TdG9yYWdlLmdldEl0ZW0obykpO2lmKCJvYmplY3QiPT10eXBlb2YgZSYmIm51bWJlciI9PXR5cGVvZiBlLnRpbWVzdGFtcCYmKG5ldyBEYXRlKS52YWx1ZU9mKCk8ZS50aW1lc3RhbXArNjA0ODAwJiYib2JqZWN0Ij09dHlwZW9mIGUuc3VwcG9ydFRlc3RzKXJldHVybiBlLnN1cHBvcnRUZXN0c31jYXRjaChlKXt9cmV0dXJuIG51bGx9KCk7aWYoIW4pe2lmKCJ1bmRlZmluZWQiIT10eXBlb2YgV29ya2VyJiYidW5kZWZpbmVkIiE9dHlwZW9mIE9mZnNjcmVlbkNhbnZhcyYmInVuZGVmaW5lZCIhPXR5cGVvZiBVUkwmJlVSTC5jcmVhdGVPYmplY3RVUkwmJiJ1bmRlZmluZWQiIT10eXBlb2YgQmxvYil0cnl7dmFyIGU9InBvc3RNZXNzYWdlKCIrZi50b1N0cmluZygpKyIoIitbSlNPTi5zdHJpbmdpZnkocyksdS50b1N0cmluZygpLHAudG9TdHJpbmcoKV0uam9pbigiLCIpKyIpKTsiLHI9bmV3IEJsb2IoW2VdLHt0eXBlOiJ0ZXh0L2phdmFzY3JpcHQifSksYT1uZXcgV29ya2VyKFVSTC5jcmVhdGVPYmplY3RVUkwocikse25hbWU6IndwVGVzdEVtb2ppU3VwcG9ydHMifSk7cmV0dXJuIHZvaWQoYS5vbm1lc3NhZ2U9ZnVuY3Rpb24oZSl7YyhuPWUuZGF0YSksYS50ZXJtaW5hdGUoKSx0KG4pfSl9Y2F0Y2goZSl7fWMobj1mKHMsdSxwKSl9dChuKX0pLnRoZW4oZnVuY3Rpb24oZSl7Zm9yKHZhciB0IGluIGUpbi5zdXBwb3J0c1t0XT1lW3RdLG4uc3VwcG9ydHMuZXZlcnl0aGluZz1uLnN1cHBvcnRzLmV2ZXJ5dGhpbmcmJm4uc3VwcG9ydHNbdF0sImZsYWciIT09dCYmKG4uc3VwcG9ydHMuZXZlcnl0aGluZ0V4Y2VwdEZsYWc9bi5zdXBwb3J0cy5ldmVyeXRoaW5nRXhjZXB0RmxhZyYmbi5zdXBwb3J0c1t0XSk7bi5zdXBwb3J0cy5ldmVyeXRoaW5nRXhjZXB0RmxhZz1uLnN1cHBvcnRzLmV2ZXJ5dGhpbmdFeGNlcHRGbGFnJiYhbi5zdXBwb3J0cy5mbGFnLG4uRE9NUmVhZHk9ITEsbi5yZWFkeUNhbGxiYWNrPWZ1bmN0aW9uKCl7bi5ET01SZWFkeT0hMH19KS50aGVuKGZ1bmN0aW9uKCl7cmV0dXJuIGV9KS50aGVuKGZ1bmN0aW9uKCl7dmFyIGU7bi5zdXBwb3J0cy5ldmVyeXRoaW5nfHwobi5yZWFkeUNhbGxiYWNrKCksKGU9bi5zb3VyY2V8fHt9KS5jb25jYXRlbW9qaT90KGUuY29uY2F0ZW1vamkpOmUud3BlbW9qaSYmZS50d2Vtb2ppJiYodChlLnR3ZW1vamkpLHQoZS53cGVtb2ppKSkpfSkpfSgod2luZG93LGRvY3VtZW50KSx3aW5kb3cuX3dwZW1vamlTZXR0aW5ncyk7Ci8qIF1dPiAqLwo="></script>
    <link rel='stylesheet' id='dashicons-css' href='wp-includes/css/dashicons.min5352.css?ver=6.4.4' type='text/css' media='all' />


    <link rel='stylesheet' id='redux-extendify-styles-css' href='wp-content/cache/autoptimize/css/autoptimize_single_b49e6b83f7bd47e2b24fae34688e415c0ad8.css?ver=4.4.11' type='text/css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css' href='wp-content/cache/autoptimize/css/autoptimize_single_3fd2afa98866679439097f4ab102fe0adfc9.css?ver=5.8.5' type='text/css' media='all' />
    <link rel='stylesheet' id='rs-plugin-settings-css' href='wp-content/cache/autoptimize/css/autoptimize_single_21867fde12d174f02d5b6646e28de7f0a8d6.css?ver=6.4.6' type='text/css' media='all' />
    <style id='rs-plugin-settings-inline-css' type='text/css'>
      .tp-caption a {
        color: #ff7302;
        text-shadow: none;
        -webkit-transition: all 0.2s ease-out;
        -moz-transition: all 0.2s ease-out;
        -o-transition: all 0.2s ease-out;
        -ms-transition: all 0.2s ease-out
      }

      .tp-caption a:hover {
        color: #ffa902
      }
    </style>
    <style id='woocommerce-inline-inline-css' type='text/css'>
      .woocommerce form .form-row .required {
        visibility: visible;
      }
    </style>
    <link rel='stylesheet' id='ppress-frontend-css' href='wp-content/plugins/wp-user-avatar/assets/css/frontend.min0d03.css?ver=4.14.2' type='text/css' media='all' />
    <link rel='stylesheet' id='ppress-flatpickr-css' href='wp-content/plugins/wp-user-avatar/assets/flatpickr/flatpickr.min0d03.css?ver=4.14.2' type='text/css' media='all' />
    <link rel='stylesheet' id='ppress-select2-css' href='wp-content/plugins/wp-user-avatar/assets/select2/select2.min5352.css?ver=6.4.4' type='text/css' media='all' />
    <link rel='stylesheet' id='bwp_woocommerce_filter_products-css' href='wp-content/cache/autoptimize/css/autoptimize_single_d89ec3fa6d12c62fb023f4edb4f4c7015352.css?ver=6.4.4' type='text/css' media='all' />
    <link rel='stylesheet' id='hint-css' href='wp-content/plugins/woo-smart-compare/assets/libs/hint/hint.min5352.css?ver=6.4.4' type='text/css' media='all' />
    <link rel='stylesheet' id='perfect-scrollbar-css' href='wp-content/plugins/woo-smart-compare/assets/libs/perfect-scrollbar/css/perfect-scrollbar.min5352.css?ver=6.4.4' type='text/css' media='all' />
    <link rel='stylesheet' id='perfect-scrollbar-wpc-css' href='wp-content/cache/autoptimize/css/autoptimize_single_a63661c87c52ee0223347574b903a53e5352.css?ver=6.4.4' type='text/css' media='all' />
    <link rel='stylesheet' id='woosc-frontend-css' href='wp-content/cache/autoptimize/css/autoptimize_single_4d1dce26eed6894a471d9d31b8eb3aa2fe13.css?ver=6.1.8' type='text/css' media='all' />
    <link rel='stylesheet' id='woosw-icons-css' href='wp-content/cache/autoptimize/css/autoptimize_single_388d6fcf37c26779087a4e32051d87cc287d.css?ver=4.8.0' type='text/css' media='all' />
    <link rel='stylesheet' id='woosw-frontend-css' href='wp-content/cache/autoptimize/css/autoptimize_single_270dad49e95aef376e5e5e20fef09aa6287d.css?ver=4.8.0' type='text/css' media='all' />
    <style id='woosw-frontend-inline-css' type='text/css'>
      .woosw-popup .woosw-popup-inner .woosw-popup-content .woosw-popup-content-bot .woosw-notice {
        background-color: #ed1d24;
      }

      .woosw-popup .woosw-popup-inner .woosw-popup-content .woosw-popup-content-bot .woosw-popup-content-bot-inner a:hover {
        color: #ed1d24;
        border-color: #ed1d24;
      }
    </style>
    <link rel='stylesheet' id='dimita-fonts-css' href='https://fonts.googleapis.com/css?family=Rubik%3A300%2C300i%2C400%2C400i%2C500%2C500i%2C700%2C700i%7CLato%3A300%2C300i%2C400%2C400i%2C700%2C700i%7COpen%2BSans&amp;subset=latin%2Clatin-ext' type='text/css' media='all' />
    <link rel='stylesheet' id='dimita-style-css' href='wp-content/cache/autoptimize/css/autoptimize_single_41b9a91f07528a11f047f783942fa59d5352.css?ver=6.4.4' type='text/css' media='all' />
    <!--[if lt IE 9]>
						<link rel='stylesheet' id='dimita-ie-css' href='https://wpbingosite.com/wordpress/dimita/wp-content/themes/dimita/css/ie.css?ver=20131205' type='text/css' media='all' />
						<![endif]-->
    <link rel='stylesheet' id='bootstrap-css' href='wp-content/cache/autoptimize/css/autoptimize_single_22dc503270d3228fba4ffa7b19d8e4c15352.css?ver=6.4.4' type='text/css' media='all' />
    <link rel='stylesheet' id='fancybox-css' href='wp-content/cache/autoptimize/css/autoptimize_single_66672d88d622309ed6c16ef5a5627292.css' type='text/css' media='all' />
    <link rel='stylesheet' id='circlestime-css' href='wp-content/cache/autoptimize/css/autoptimize_single_72acc8876c5261cde42de2e20e42eda6.css' type='text/css' media='all' />
    <link rel='stylesheet' id='mmenu-all-css' href='wp-content/cache/autoptimize/css/autoptimize_single_ca21a83005be15d1c99b117a697d7bd55352.css?ver=6.4.4' type='text/css' media='all' />
    <link rel='stylesheet' id='slick-css' href='wp-content/cache/autoptimize/css/autoptimize_single_e5bddc8219a627810978dd5a2fd7fe2b.css' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/font-awesome.min1849.css?ver=4.7.0' type='text/css' media='all' />
    <link rel='stylesheet' id='materia-css' href='wp-content/cache/autoptimize/css/autoptimize_single_d5e3e2452e727e95b0c2679edf1043915352.css?ver=6.4.4' type='text/css' media='all' />
    <link rel='stylesheet' id='elegant-css' href='wp-content/cache/autoptimize/css/autoptimize_single_c6c1321229d1ffcb3d3f3ce3898e62f15352.css?ver=6.4.4' type='text/css' media='all' />
    <link rel='stylesheet' id='wpbingo-css' href='wp-content/cache/autoptimize/css/autoptimize_single_7c1c11fbab2024b0b36adf95fe58489f5352.css?ver=6.4.4' type='text/css' media='all' />
    <link rel='stylesheet' id='ionicons-css' href='wp-content/cache/autoptimize/css/autoptimize_single_b54d7ec3abad43ce0944786282d2f0f55352.css?ver=6.4.4' type='text/css' media='all' />
    <link rel='stylesheet' id='icomoon-css' href='wp-content/cache/autoptimize/css/autoptimize_single_7ea634d8e196210c0a3b6423b5ee4c5c5352.css?ver=6.4.4' type='text/css' media='all' />
    <link rel='stylesheet' id='Pe-icon-7-stroke-css' href='wp-content/cache/autoptimize/css/autoptimize_single_b00cc8055c7c4b0abeb7aa4e825160745352.css?ver=6.4.4' type='text/css' media='all' />
    <link rel='stylesheet' id='flaticon-css' href='wp-content/cache/autoptimize/css/autoptimize_single_b4fa0fd056d632fb388164f4931e0bd85352.css?ver=6.4.4' type='text/css' media='all' />
    <link rel='stylesheet' id='dimita-style-template-css' href='wp-content/cache/autoptimize/css/autoptimize_single_5d47d71ca879e3e22d9afe677ef9a6ba5352.css?ver=6.4.4' type='text/css' media='all' />
    <style id='dimita-style-template-inline-css' type='text/css'>
      .product_title {
        font-family: Open Sans;
        font-size: 14px;
        font-weight: 400;
      }
    </style>
    <link rel='stylesheet' id='dokan-style-css' href='wp-content/cache/autoptimize/css/autoptimize_single_f746265bb77c5f42eea92507cf20e1e3500f.css?ver=1704354898' type='text/css' media='all' />
    <link rel='stylesheet' id='dokan-modal-css' href='wp-content/plugins/dokan-lite/assets/vendors/izimodal/iziModal.min2ade.css?ver=1704354899' type='text/css' media='all' />
    <link rel='stylesheet' id='dokan-fontawesome-css' href='wp-content/plugins/dokan-lite/assets/vendors/font-awesome/font-awesome.minc063.css?ver=3.9.5' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-css' href='wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min7bb8.css?ver=5.25.0' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css' href='wp-content/plugins/elementor/assets/css/frontend.minf3b2.css?ver=3.18.3' type='text/css' media='all' />
    <link rel='stylesheet' id='swiper-css' href='wp-content/plugins/elementor/assets/lib/swiper/css/swiper.min48f5.css?ver=5.3.6' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-9482-css' href='wp-content/cache/autoptimize/css/autoptimize_single_3de159ac7c8eca3681393af8dd8c609cc77a.css?ver=1704355242' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-global-css' href='wp-content/cache/autoptimize/css/autoptimize_single_953f94779f5ae871f5669c6b4bb84a71c77a.css?ver=1704355242' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-8951-css' href='wp-content/cache/autoptimize/css/autoptimize_single_3268b231a9e86b49a9d7ae8995509e1ac77a.css?ver=1704355242' type='text/css' media='all' />
    <link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Rubik%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CLato%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.4.4' type='text/css' media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <script type="text/template" id="tmpl-unavailable-variation-template"> <p>Sorry, this product is unavailable. Please choose a different combination.</p>
							</script>
    <script type="text/javascript" src="wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1" id="jquery-core-js"></script>
    <script defer type="text/javascript" src="wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1" id="jquery-migrate-js"></script>
    <script defer type="text/javascript" src="wp-content/plugins/dokan-lite/assets/vendors/izimodal/iziModal.minc063.js?ver=3.9.5" id="dokan-modal-js"></script>
    <script defer id="dokan-i18n-jed-js-extra" src="data:text/javascript;base64,Ci8qIDwhW0NEQVRBWyAqLwp2YXIgZG9rYW4gPSB7ImFqYXh1cmwiOiJodHRwczpcL1wvd3BiaW5nb3NpdGUuY29tXC93b3JkcHJlc3NcL2RpbWl0YVwvd3AtYWRtaW5cL2FkbWluLWFqYXgucGhwIiwibm9uY2UiOiJmYjBlY2JmM2I3IiwiYWpheF9sb2FkZXIiOiJodHRwOlwvXC93cGJpbmdvc2l0ZS5jb21cL3dvcmRwcmVzc1wvZGltaXRhXC93cC1jb250ZW50XC9wbHVnaW5zXC9kb2thbi1saXRlXC9hc3NldHNcL2ltYWdlc1wvYWpheC1sb2FkZXIuZ2lmIiwic2VsbGVyIjp7ImF2YWlsYWJsZSI6IkF2YWlsYWJsZSIsIm5vdEF2YWlsYWJsZSI6Ik5vdCBBdmFpbGFibGUifSwiZGVsZXRlX2NvbmZpcm0iOiJBcmUgeW91IHN1cmU/Iiwid3JvbmdfbWVzc2FnZSI6IlNvbWV0aGluZyB3ZW50IHdyb25nLiBQbGVhc2UgdHJ5IGFnYWluLiIsInZlbmRvcl9wZXJjZW50YWdlIjoiMTAwIiwiY29tbWlzc2lvbl90eXBlIjoicGVyY2VudGFnZSIsInJvdW5kaW5nX3ByZWNpc2lvbiI6IjYiLCJtb25fZGVjaW1hbF9wb2ludCI6Ii4iLCJwcm9kdWN0X3R5cGVzIjpbInNpbXBsZSJdLCJsb2FkaW5nX2ltZyI6Imh0dHA6XC9cL3dwYmluZ29zaXRlLmNvbVwvd29yZHByZXNzXC9kaW1pdGFcL3dwLWNvbnRlbnRcL3BsdWdpbnNcL2Rva2FuLWxpdGVcL2Fzc2V0c1wvaW1hZ2VzXC9sb2FkaW5nLmdpZiIsInN0b3JlX3Byb2R1Y3Rfc2VhcmNoX25vbmNlIjoiMTkxZjY1OGFiYSIsImkxOG5fZG93bmxvYWRfcGVybWlzc2lvbiI6IkFyZSB5b3Ugc3VyZSB5b3Ugd2FudCB0byByZXZva2UgYWNjZXNzIHRvIHRoaXMgZG93bmxvYWQ/IiwiaTE4bl9kb3dubG9hZF9hY2Nlc3MiOiJDb3VsZCBub3QgZ3JhbnQgYWNjZXNzIC0gdGhlIHVzZXIgbWF5IGFscmVhZHkgaGF2ZSBwZXJtaXNzaW9uIGZvciB0aGlzIGZpbGUgb3IgYmlsbGluZyBlbWFpbCBpcyBub3Qgc2V0LiBFbnN1cmUgdGhlIGJpbGxpbmcgZW1haWwgaXMgc2V0LCBhbmQgdGhlIG9yZGVyIGhhcyBiZWVuIHNhdmVkLiIsIm1heGltdW1fdGFnc19zZWxlY3RfbGVuZ3RoIjoiLTEiLCJtb2RhbF9oZWFkZXJfY29sb3IiOiIjRjA1MDI1IiwicmVzdCI6eyJyb290IjoiaHR0cHM6XC9cL3dwYmluZ29zaXRlLmNvbVwvd29yZHByZXNzXC9kaW1pdGFcL3dwLWpzb25cLyIsIm5vbmNlIjoiOTA5MTA4NDJiYyIsInZlcnNpb24iOiJkb2thblwvdjEifSwiYXBpIjpudWxsLCJsaWJzIjpbXSwicm91dGVDb21wb25lbnRzIjp7ImRlZmF1bHQiOm51bGx9LCJyb3V0ZXMiOltdLCJ1cmxzIjp7ImFzc2V0c1VybCI6Imh0dHA6XC9cL3dwYmluZ29zaXRlLmNvbVwvd29yZHByZXNzXC9kaW1pdGFcL3dwLWNvbnRlbnRcL3BsdWdpbnNcL2Rva2FuLWxpdGVcL2Fzc2V0cyJ9fTsKLyogXV0+ICovCg=="></script>
    <script defer type="text/javascript" src="wp-content/cache/autoptimize/js/autoptimize_single_8390027ea5f7c29dfc8e57ffa84d367ac063.js?ver=3.9.5" id="dokan-i18n-jed-js"></script>
    <script defer type="text/javascript" src="wp-content/plugins/dokan-lite/assets/vendors/sweetalert2/sweetalert2.all.min2ade.js?ver=1704354899" id="dokan-sweetalert2-js"></script>
    <script defer type="text/javascript" src="wp-includes/js/dist/vendor/moment.min1bc8.js?ver=2.29.4" id="moment-js"></script>
    <script defer id="moment-js-after" src="data:text/javascript;base64,Ci8qIDwhW0NEQVRBWyAqLwptb21lbnQudXBkYXRlTG9jYWxlKCAnZW5fVVMnLCB7Im1vbnRocyI6WyJKYW51YXJ5IiwiRmVicnVhcnkiLCJNYXJjaCIsIkFwcmlsIiwiTWF5IiwiSnVuZSIsIkp1bHkiLCJBdWd1c3QiLCJTZXB0ZW1iZXIiLCJPY3RvYmVyIiwiTm92ZW1iZXIiLCJEZWNlbWJlciJdLCJtb250aHNTaG9ydCI6WyJKYW4iLCJGZWIiLCJNYXIiLCJBcHIiLCJNYXkiLCJKdW4iLCJKdWwiLCJBdWciLCJTZXAiLCJPY3QiLCJOb3YiLCJEZWMiXSwid2Vla2RheXMiOlsiU3VuZGF5IiwiTW9uZGF5IiwiVHVlc2RheSIsIldlZG5lc2RheSIsIlRodXJzZGF5IiwiRnJpZGF5IiwiU2F0dXJkYXkiXSwid2Vla2RheXNTaG9ydCI6WyJTdW4iLCJNb24iLCJUdWUiLCJXZWQiLCJUaHUiLCJGcmkiLCJTYXQiXSwid2VlayI6eyJkb3ciOjF9LCJsb25nRGF0ZUZvcm1hdCI6eyJMVCI6Imc6aSBhIiwiTFRTIjpudWxsLCJMIjpudWxsLCJMTCI6IkYgaiwgWSIsIkxMTCI6IkYgaiwgWSBnOmkgYSIsIkxMTEwiOm51bGx9fSApOwovKiBdXT4gKi8K"></script>
    <script defer id="dokan-util-helper-js-extra" src="data:text/javascript;base64,Ci8qIDwhW0NEQVRBWyAqLwp2YXIgZG9rYW5faGVscGVyID0geyJpMThuX2RhdGVfZm9ybWF0IjoiRiBqLCBZIiwiaTE4bl90aW1lX2Zvcm1hdCI6Imc6aSBhIiwid2Vla19zdGFydHNfZGF5IjoiMSIsInJldmVyc2Vfd2l0aGRyYXdhbCI6eyJlbmFibGVkIjpmYWxzZX0sInRpbWVwaWNrZXJfbG9jYWxlIjp7ImFtIjoiYW0iLCJwbSI6InBtIiwiQU0iOiJBTSIsIlBNIjoiUE0iLCJociI6ImhyIiwiaHJzIjoiaHJzIiwibWlucyI6Im1pbnMifSwiZGF0ZXJhbmdlX3BpY2tlcl9sb2NhbCI6eyJ0b0xhYmVsIjoiVG8iLCJmaXJzdERheSI6MSwiZnJvbUxhYmVsIjoiRnJvbSIsInNlcGFyYXRvciI6IiAtICIsIndlZWtMYWJlbCI6IlciLCJhcHBseUxhYmVsIjoiQXBwbHkiLCJjYW5jZWxMYWJlbCI6IkNsZWFyIiwiY3VzdG9tUmFuZ2VMYWJlbCI6IkN1c3RvbSIsImRheXNPZldlZWsiOlsiU3UiLCJNbyIsIlR1IiwiV2UiLCJUaCIsIkZyIiwiU2EiXSwibW9udGhOYW1lcyI6WyJKYW51YXJ5IiwiRmVicnVhcnkiLCJNYXJjaCIsIkFwcmlsIiwiTWF5IiwiSnVuZSIsIkp1bHkiLCJBdWd1c3QiLCJTZXB0ZW1iZXIiLCJPY3RvYmVyIiwiTm92ZW1iZXIiLCJEZWNlbWJlciJdfX07Ci8qIF1dPiAqLwo="></script>
    <script defer type="text/javascript" src="wp-content/cache/autoptimize/js/autoptimize_single_d189791d27a33f468ff55b9d89a41dbf500f.js?ver=1704354898" id="dokan-util-helper-js"></script>
    <script type="text/javascript" src="wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.minb8c8.js?ver=2.7.0-wc.8.4.0" id="jquery-blockui-js" defer="defer" data-wp-strategy="defer"></script>
    <script defer id="wc-add-to-cart-js-extra" src="data:text/javascript;base64,Ci8qIDwhW0NEQVRBWyAqLwp2YXIgd2NfYWRkX3RvX2NhcnRfcGFyYW1zID0geyJhamF4X3VybCI6Ilwvd29yZHByZXNzXC9kaW1pdGFcL3dwLWFkbWluXC9hZG1pbi1hamF4LnBocCIsIndjX2FqYXhfdXJsIjoiXC93b3JkcHJlc3NcL2RpbWl0YVwvP3djLWFqYXg9JSVlbmRwb2ludCUlIiwiaTE4bl92aWV3X2NhcnQiOiJWaWV3IGNhcnQiLCJjYXJ0X3VybCI6Imh0dHBzOlwvXC93cGJpbmdvc2l0ZS5jb21cL3dvcmRwcmVzc1wvZGltaXRhXC9jYXJ0XC8iLCJpc19jYXJ0IjoiIiwiY2FydF9yZWRpcmVjdF9hZnRlcl9hZGQiOiJubyJ9OwovKiBdXT4gKi8K"></script>
    <script type="text/javascript" src="wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min2678.js?ver=8.4.0" id="wc-add-to-cart-js" defer="defer" data-wp-strategy="defer"></script>
    <script defer type="text/javascript" src="wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min48a0.js?ver=2.1.4-wc.8.4.0" id="js-cookie-js" data-wp-strategy="defer"></script>
    <script defer id="woocommerce-js-extra" src="data:text/javascript;base64,Ci8qIDwhW0NEQVRBWyAqLwp2YXIgd29vY29tbWVyY2VfcGFyYW1zID0geyJhamF4X3VybCI6Ilwvd29yZHByZXNzXC9kaW1pdGFcL3dwLWFkbWluXC9hZG1pbi1hamF4LnBocCIsIndjX2FqYXhfdXJsIjoiXC93b3JkcHJlc3NcL2RpbWl0YVwvP3djLWFqYXg9JSVlbmRwb2ludCUlIn07Ci8qIF1dPiAqLwo="></script>
    <script type="text/javascript" src="wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min2678.js?ver=8.4.0" id="woocommerce-js" defer="defer" data-wp-strategy="defer"></script>
    <script defer type="text/javascript" src="wp-content/plugins/wp-user-avatar/assets/flatpickr/flatpickr.min0d03.js?ver=4.14.2" id="ppress-flatpickr-js"></script>
    <script defer type="text/javascript" src="wp-content/plugins/wp-user-avatar/assets/select2/select2.min0d03.js?ver=4.14.2" id="ppress-select2-js"></script>
    <script defer type="text/javascript" src="wp-includes/js/underscore.mind584.js?ver=1.13.4" id="underscore-js"></script>
    <script defer id="wp-util-js-extra" src="data:text/javascript;base64,Ci8qIDwhW0NEQVRBWyAqLwp2YXIgX3dwVXRpbFNldHRpbmdzID0geyJhamF4Ijp7InVybCI6Ilwvd29yZHByZXNzXC9kaW1pdGFcL3dwLWFkbWluXC9hZG1pbi1hamF4LnBocCJ9fTsKLyogXV0+ICovCg=="></script>
    <script defer type="text/javascript" src="wp-includes/js/wp-util.min5352.js?ver=6.4.4" id="wp-util-js"></script>
    <script defer id="wc-add-to-cart-variation-js-extra" src="data:text/javascript;base64,Ci8qIDwhW0NEQVRBWyAqLwp2YXIgd2NfYWRkX3RvX2NhcnRfdmFyaWF0aW9uX3BhcmFtcyA9IHsid2NfYWpheF91cmwiOiJcL3dvcmRwcmVzc1wvZGltaXRhXC8/d2MtYWpheD0lJWVuZHBvaW50JSUiLCJpMThuX25vX21hdGNoaW5nX3ZhcmlhdGlvbnNfdGV4dCI6IlNvcnJ5LCBubyBwcm9kdWN0cyBtYXRjaGVkIHlvdXIgc2VsZWN0aW9uLiBQbGVhc2UgY2hvb3NlIGEgZGlmZmVyZW50IGNvbWJpbmF0aW9uLiIsImkxOG5fbWFrZV9hX3NlbGVjdGlvbl90ZXh0IjoiUGxlYXNlIHNlbGVjdCBzb21lIHByb2R1Y3Qgb3B0aW9ucyBiZWZvcmUgYWRkaW5nIHRoaXMgcHJvZHVjdCB0byB5b3VyIGNhcnQuIiwiaTE4bl91bmF2YWlsYWJsZV90ZXh0IjoiU29ycnksIHRoaXMgcHJvZHVjdCBpcyB1bmF2YWlsYWJsZS4gUGxlYXNlIGNob29zZSBhIGRpZmZlcmVudCBjb21iaW5hdGlvbi4ifTsKLyogXV0+ICovCg=="></script>
    <script type="text/javascript" src="wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min2678.js?ver=8.4.0" id="wc-add-to-cart-variation-js" defer="defer" data-wp-strategy="defer"></script>
    <link rel="https://api.w.org/" href="wp-json/index.html" />
    <link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/8951.json" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
    <meta name="generator" content="WordPress 6.4.4" />
    <meta name="generator" content="WooCommerce 8.4.0" />
    <link rel="canonical" href="index.html" />
    <link rel='shortlink' href='index.html' />
    <link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed251d.json?url=https%3A%2F%2Fwpbingosite.com%2Fwordpress%2Fdimita%2F" />
    <link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embeda352?url=https%3A%2F%2Fwpbingosite.com%2Fwordpress%2Fdimita%2F&amp;format=xml" />
    <meta name="generator" content="Redux 4.4.11" />
    <noscript>
      <style>
        .woocommerce-product-gallery {
          opacity: 1 !important;
        }
      </style>
    </noscript>
    <meta name="generator" content="Elementor 3.18.3; features: e_dom_optimization, e_optimized_assets_loading, additional_custom_breakpoints, block_editor_assets_optimize, e_image_loading_optimization; settings: css_print_method-external, google_font-enabled, font_display-auto">
    <meta name="generator" content="Powered by Slider Revolution 6.4.6 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <link rel="icon" href="wp-content/uploads/2020/02/cropped-80x80-1-1-32x32.png" sizes="32x32" />
    <link rel="icon" href="wp-content/uploads/2020/02/cropped-80x80-1-1-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="wp-content/uploads/2020/02/cropped-80x80-1-1-180x180.png" />
    <meta name="msapplication-TileImage" content="https://wpbingosite.com/wordpress/dimita/wp-content/uploads/2020/02/cropped-80x80-1-1-270x270.png" />
    <script type="text/javascript">
      function setREVStartSize(e) {
        //window.requestAnimationFrame(function() {				 
        window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
        window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
        try {
          var pw = document.getElementById(e.c).parentNode.offsetWidth,
            newh;
          pw = pw === 0 || isNaN(pw) ? window.RSIW : pw;
          e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
          e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
          e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
          e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
          e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
          e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
          e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
          if (e.layout === "fullscreen" || e.l === "fullscreen") newh = Math.max(e.mh, window.RSIH);
          else {
            e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
            for (var i in e.rl)
              if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
            e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
            e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
            for (var i in e.rl)
              if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];
            var nl = new Array(e.rl.length),
              ix = 0,
              sl;
            e.tabw = e.tabhide >= pw ? 0 : e.tabw;
            e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
            e.tabh = e.tabhide >= pw ? 0 : e.tabh;
            e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
            for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
            sl = nl[0];
            for (var i in nl)
              if (sl > nl[i] && nl[i] > 0) {
                sl = nl[i];
                ix = i;
              }
            var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
            newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
          }
          if (window.rs_init_css === undefined) window.rs_init_css = document.head.appendChild(document.createElement("style"));
          document.getElementById(e.c).height = newh + "px";
          window.rs_init_css.innerHTML += "#" + e.c + "_wrapper { height: " + newh + "px }";
        } catch (e) {
          console.log("Failure at Presize of Slider:" + e)
        }
        //});
      };
    </script>
    <style type="text/css" id="wp-custom-css">
      .bwp-brand .item-image img {
        max-height: 70px;
        width: auto;
      }

      .bwp-header .wpbingoLogo img {
        width: auto;
      }

      .wpcf7-form .your-email {
        margin-bottom: 1rem;
      }

      .wpbingo-newsletter.newsletter-default .content-newsletter p {
        display: contents;
      }
    </style>
   
    <title>Hello Mistri Digital</title>
    @yield('styles')

</head>

  <body class="home page-template page-template-page-templates page-template-homepage page-template-page-templateshomepage-php page page-id-8951 theme-dimita woocommerce-no-js banners-effect-6 elementor-default elementor-kit-9482 elementor-page elementor-page-8951 dokan-theme-dimita">

  <body class="toolbar-enabled">
  <!-- Sign in / sign up modal-->
  <!-- @include('layouts.front-end.partials._modals') -->
  <!-- Navbar-->
  <!-- Quick View Modal-->
  <!-- @include('layouts.front-end.partials._quick-view-modal') -->
  <!-- Navbar Electronics Store-->
  @include('layouts.front-end.partials._header')

  <!-- Page title-->

  {{--loader--}}
      <div class="row">
          <div class="col-12" style="margin-top:10rem;position: fixed;z-index: 9999;">
              <div id="loading" style="display: none;">
                 <center>
                  <img width="200"
                       src="{{static_assets('app/public/company')}}/{{\App\CPU\Helpers::get_business_settings('loader_gif')}}"
                       onerror="this.src='{{static_assets("front-end/img/loader.gif")}}'">
                 </center>
              </div>
          </div>
      </div>
  {{--loader--}}

  <!-- Page Content-->
  @yield('content')

  @include('layouts.front-end.partials._footer')
  
  @yield('scripts')




  <!-- Back To Top Button-->
  <a class="btn-scroll-top" href="#top" data-scroll>
      <span class="btn-scroll-top-tooltip text-muted font-size-sm mr-2">Top</span><i
          class="btn-scroll-top-icon czi-arrow-up"> </i>
  </a>     

    <link href="https://fonts.googleapis.com/css?family=Lato:400%7CRubik:700%7CRoboto:400" rel="stylesheet" property="stylesheet" media="all" type="text/css">
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script defer src="data:text/javascript;base64,CgkJKGZ1bmN0aW9uICgpIHsKCQkJdmFyIGMgPSBkb2N1bWVudC5ib2R5LmNsYXNzTmFtZTsKCQkJYyA9IGMucmVwbGFjZSgvd29vY29tbWVyY2Utbm8tanMvLCAnd29vY29tbWVyY2UtanMnKTsKCQkJZG9jdW1lbnQuYm9keS5jbGFzc05hbWUgPSBjOwoJCX0pKCk7Cgk="></script>

    <link rel='stylesheet' id='elementor-post-9414-css' href='wp-content/cache/autoptimize/css/autoptimize_single_a22d10393fe694a53fc384d65ca61b56c77a.css?ver=1704355242' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-9416-css' href='wp-content/cache/autoptimize/css/autoptimize_single_1d94de0429630e0f7e964b7183947fbec77a.css?ver=1704355242' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-9538-css' href='wp-content/cache/autoptimize/css/autoptimize_single_0129c3398b92623a71908e6855f4a071c77a.css?ver=1704355242' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-9121-css' href='wp-content/cache/autoptimize/css/autoptimize_single_9f441fa19609a87d7f65a4781b403811c77a.css?ver=1704355242' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-9124-css' href='wp-content/cache/autoptimize/css/autoptimize_single_9e3fe6b76281bc2023a7f246f2c20ed3c77a.css?ver=1704355242' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-8975-css' href='wp-content/cache/autoptimize/css/autoptimize_single_8d923aa43c22479925490c89c2b8a0e67049.css?ver=1704355243' type='text/css' media='all' />
    <script defer type="text/javascript" src="wp-content/cache/autoptimize/js/autoptimize_single_a53a916adf48efefd5a2aa0861ebbc07dfc9.js?ver=5.8.5" id="swv-js"></script>
    <script defer id="contact-form-7-js-extra" src="data:text/javascript;base64,Ci8qIDwhW0NEQVRBWyAqLwp2YXIgd3BjZjcgPSB7ImFwaSI6eyJyb290IjoiaHR0cHM6XC9cL3dwYmluZ29zaXRlLmNvbVwvd29yZHByZXNzXC9kaW1pdGFcL3dwLWpzb25cLyIsIm5hbWVzcGFjZSI6ImNvbnRhY3QtZm9ybS03XC92MSJ9LCJjYWNoZWQiOiIxIn07Ci8qIF1dPiAqLwo="></script>
    <script defer type="text/javascript" src="wp-content/cache/autoptimize/js/autoptimize_single_83a062cf6545b990c13b4398035a29d0dfc9.js?ver=5.8.5" id="contact-form-7-js"></script>
    <script type="text/javascript" src="wp-content/plugins/revslider/public/assets/js/rbtools.min5352.js?ver=6.4.4" id="tp-tools-js"></script>
    <script type="text/javascript" src="wp-content/plugins/revslider/public/assets/js/rs6.mina8d6.js?ver=6.4.6" id="revmin-js"></script>
    <script defer id="ppress-frontend-script-js-extra" src="data:text/javascript;base64,Ci8qIDwhW0NEQVRBWyAqLwp2YXIgcHBfYWpheF9mb3JtID0geyJhamF4dXJsIjoiaHR0cHM6XC9cL3dwYmluZ29zaXRlLmNvbVwvd29yZHByZXNzXC9kaW1pdGFcL3dwLWFkbWluXC9hZG1pbi1hamF4LnBocCIsImNvbmZpcm1fZGVsZXRlIjoiQXJlIHlvdSBzdXJlPyIsImRlbGV0aW5nX3RleHQiOiJEZWxldGluZy4uLiIsImRlbGV0aW5nX2Vycm9yIjoiQW4gZXJyb3Igb2NjdXJyZWQuIFBsZWFzZSB0cnkgYWdhaW4uIiwibm9uY2UiOiI3NmVjNzk5NjhjIiwiZGlzYWJsZV9hamF4X2Zvcm0iOiJmYWxzZSIsImlzX2NoZWNrb3V0IjoiMCIsImlzX2NoZWNrb3V0X3RheF9lbmFibGVkIjoiMCJ9OwovKiBdXT4gKi8K"></script>
    <script defer type="text/javascript" src="wp-content/plugins/wp-user-avatar/assets/js/frontend.min0d03.js?ver=4.14.2" id="ppress-frontend-script-js"></script>
    <script defer type="text/javascript" src="wp-includes/js/jquery/ui/core.min3f14.js?ver=1.13.2" id="jquery-ui-core-js"></script>
    <script defer type="text/javascript" src="wp-includes/js/jquery/ui/mouse.min3f14.js?ver=1.13.2" id="jquery-ui-mouse-js"></script>
    <script defer type="text/javascript" src="wp-includes/js/jquery/ui/slider.min3f14.js?ver=1.13.2" id="jquery-ui-slider-js"></script>
    <script defer type="text/javascript" src="wp-content/cache/autoptimize/js/autoptimize_single_d2d80bfcbf3745b2ac0ded42c3af36685352.js?ver=6.4.4" id="bwp_wpbingo_js-js"></script>
    <script defer type="text/javascript" src="wp-content/plugins/woocommerce/assets/js/jquery-cookie/jquery.cookie.minca5f.js?ver=1.4.1-wc.8.4.0" id="jquery-cookie-js" data-wp-strategy="defer"></script>
    <script defer type="text/javascript" src="wp-content/cache/autoptimize/js/autoptimize_single_fde1fd3e4bf748640ae1fa9f6102ea52.js" id="wpbingo-newsletter-js"></script>
    <script defer id="bwp_woocommerce_filter-js-extra" src="data:text/javascript;base64,Ci8qIDwhW0NEQVRBWyAqLwp2YXIgZmlsdGVyX2FqYXggPSB7ImFqYXh1cmwiOiJodHRwczpcL1wvd3BiaW5nb3NpdGUuY29tXC93b3JkcHJlc3NcL2RpbWl0YVwvd3AtYWRtaW5cL2FkbWluLWFqYXgucGhwIn07Ci8qIF1dPiAqLwo="></script>
    <script defer type="text/javascript" src="wp-content/cache/autoptimize/js/autoptimize_single_0d1fccc369a9ab27b7bee930afa06dcc.js" id="bwp_woocommerce_filter-js"></script>
    <script defer type="text/javascript" src="wp-content/cache/autoptimize/js/autoptimize_single_e62aa30bcc0e150f64afc20a97388ce9fe13.js?ver=6.1.8" id="print-js"></script>
    <script defer type="text/javascript" src="wp-content/cache/autoptimize/js/autoptimize_single_c67adc1d2b17eba3ab3a7859a140c1f5fe13.js?ver=6.1.8" id="table-head-fixer-js"></script>
    <script type="text/javascript" src="wp-content/plugins/woo-smart-compare/assets/libs/perfect-scrollbar/js/perfect-scrollbar.jquery.minfe13.js?ver=6.1.8" id="perfect-scrollbar-js"></script>
    <script defer type="text/javascript" src="wp-includes/js/jquery/ui/sortable.min3f14.js?ver=1.13.2" id="jquery-ui-sortable-js"></script>
    <script defer id="woosc-frontend-js-extra" src="data:text/javascript;base64,Ci8qIDwhW0NEQVRBWyAqLwp2YXIgd29vc2NfdmFycyA9IHsiYWpheF91cmwiOiJodHRwczpcL1wvd3BiaW5nb3NpdGUuY29tXC93b3JkcHJlc3NcL2RpbWl0YVwvd3AtYWRtaW5cL2FkbWluLWFqYXgucGhwIiwibm9uY2UiOiIyZjgxOTA2OWIxIiwiaGFzaCI6IjYiLCJ1c2VyX2lkIjoiMGNkYjY0ZmFiMzJhMDViZDM5M2IyMGM4YzM1MWRlOWYiLCJwYWdlX3VybCI6IiMiLCJvcGVuX2J1dHRvbiI6IiIsImhpZGVfZW1wdHlfcm93IjoieWVzIiwib3Blbl9idXR0b25fYWN0aW9uIjoib3Blbl9wb3B1cCIsIm1lbnVfYWN0aW9uIjoib3Blbl9wb3B1cCIsImJ1dHRvbl9hY3Rpb24iOiJzaG93X3RhYmxlIiwic2lkZWJhcl9wb3NpdGlvbiI6InJpZ2h0IiwibWVzc2FnZV9wb3NpdGlvbiI6InJpZ2h0LXRvcCIsIm1lc3NhZ2VfYWRkZWQiOiJ7bmFtZX0gaGFzIGJlZW4gYWRkZWQgdG8gQ29tcGFyZSBsaXN0LiIsIm1lc3NhZ2VfcmVtb3ZlZCI6IntuYW1lfSBoYXMgYmVlbiByZW1vdmVkIGZyb20gdGhlIENvbXBhcmUgbGlzdC4iLCJtZXNzYWdlX2V4aXN0cyI6IntuYW1lfSBpcyBhbHJlYWR5IGluIHRoZSBDb21wYXJlIGxpc3QuIiwib3Blbl9iYXIiOiJubyIsImJhcl9idWJibGUiOiJubyIsImFkZGluZyI6InByZXBlbmQiLCJjbGlja19hZ2FpbiI6Im5vIiwiaGlkZV9lbXB0eSI6Im5vIiwiY2xpY2tfb3V0c2lkZSI6InllcyIsImZyZWV6ZV9jb2x1bW4iOiJ5ZXMiLCJmcmVlemVfcm93IjoieWVzIiwic2Nyb2xsYmFyIjoieWVzIiwibGltaXQiOiIxMDAiLCJyZW1vdmVfYWxsIjoiRG8geW91IHdhbnQgdG8gcmVtb3ZlIGFsbCBwcm9kdWN0cyBmcm9tIHRoZSBjb21wYXJlPyIsImxpbWl0X25vdGljZSI6IllvdSBjYW4gYWRkIGEgbWF4aW11bSBvZiB7bGltaXR9IHByb2R1Y3RzIHRvIHRoZSBjb21wYXJpc29uIHRhYmxlLiIsImNvcGllZF90ZXh0IjoiU2hhcmUgbGluayAlcyB3YXMgY29waWVkIHRvIGNsaXBib2FyZCEiLCJidXR0b25fdGV4dCI6IkNvbXBhcmUiLCJidXR0b25fdGV4dF9hZGRlZCI6IkNvbXBhcmUiLCJidXR0b25fbm9ybWFsX2ljb24iOiJ3b29zYy1pY29uLTEiLCJidXR0b25fYWRkZWRfaWNvbiI6Indvb3NjLWljb24tNzQifTsKLyogXV0+ICovCg=="></script>
    <script defer type="text/javascript" src="wp-content/cache/autoptimize/js/autoptimize_single_30986208bbcc53933e52d64ce116af18fe13.js?ver=6.1.8" id="woosc-frontend-js"></script>
    <script defer id="woosw-frontend-js-extra" src="data:text/javascript;base64,Ci8qIDwhW0NEQVRBWyAqLwp2YXIgd29vc3dfdmFycyA9IHsiYWpheF91cmwiOiJodHRwczpcL1wvd3BiaW5nb3NpdGUuY29tXC93b3JkcHJlc3NcL2RpbWl0YVwvd3AtYWRtaW5cL2FkbWluLWFqYXgucGhwIiwibm9uY2UiOiIyZGFmZTEwYjIyIiwibWVudV9hY3Rpb24iOiJvcGVuX3BhZ2UiLCJwZXJmZWN0X3Njcm9sbGJhciI6InllcyIsIndpc2hsaXN0X3VybCI6Imh0dHBzOlwvXC93cGJpbmdvc2l0ZS5jb21cL3dvcmRwcmVzc1wvZGltaXRhXC93aXNobGlzdFwvIiwiYnV0dG9uX2FjdGlvbiI6Imxpc3QiLCJtZXNzYWdlX3Bvc2l0aW9uIjoicmlnaHQtdG9wIiwiYnV0dG9uX2FjdGlvbl9hZGRlZCI6InBvcHVwIiwiZW1wdHlfY29uZmlybSI6IlRoaXMgYWN0aW9uIGNhbm5vdCBiZSB1bmRvbmUuIEFyZSB5b3Ugc3VyZT8iLCJkZWxldGVfY29uZmlybSI6IlRoaXMgYWN0aW9uIGNhbm5vdCBiZSB1bmRvbmUuIEFyZSB5b3Ugc3VyZT8iLCJjb3BpZWRfdGV4dCI6IkNvcGllZCB0aGUgd2lzaGxpc3QgbGluazoiLCJtZW51X3RleHQiOiJXaXNobGlzdCIsImJ1dHRvbl90ZXh0IjoiQWRkIHRvIHdpc2hsaXN0IiwiYnV0dG9uX3RleHRfYWRkZWQiOiJCcm93c2Ugd2lzaGxpc3QiLCJidXR0b25fbm9ybWFsX2ljb24iOiJ3b29zdy1pY29uLTUiLCJidXR0b25fYWRkZWRfaWNvbiI6Indvb3N3LWljb24tOCIsImJ1dHRvbl9sb2FkaW5nX2ljb24iOiJ3b29zdy1pY29uLTQifTsKLyogXV0+ICovCg=="></script>
    <script defer type="text/javascript" src="wp-content/cache/autoptimize/js/autoptimize_single_b1e2495ddd21dfbe0fc79c42ac23225d287d.js?ver=4.8.0" id="woosw-frontend-js"></script>
    <script defer type="text/javascript" src="wp-content/themes/dimita/js/bootstrap.min.js" id="bootstrap-js"></script>
    <script defer type="text/javascript" src="wp-content/themes/dimita/js/jquery.mmenu.all.min.js" id="jquery-mmenu-all-js"></script>
    <script defer type="text/javascript" src="wp-content/themes/dimita/js/slick.min.js" id="slick-js"></script>
    <script defer type="text/javascript" src="wp-content/themes/dimita/js/instafeed.min.js" id="instafeed-js"></script>
    <script defer type="text/javascript" src="wp-content/themes/dimita/js/jquery.countdown.min.js" id="jquery-countdown-js"></script>
    <script defer type="text/javascript" src="wp-content/themes/dimita/js/jquery.fancybox.min.js" id="jquery-fancybox-js"></script>
    <script defer type="text/javascript" src="wp-content/cache/autoptimize/js/autoptimize_single_4f1a867f286a7e7b63faf8bd38d803b3.js" id="jquery-elevatezoom-js"></script>
    <script defer type="text/javascript" src="wp-content/cache/autoptimize/js/autoptimize_single_42d5a0139e07d2b3d9dad2c3e4786715.js" id="jquery-circlestime-js"></script>
    <script defer type="text/javascript" src="wp-content/cache/autoptimize/js/autoptimize_single_ba9181e96eaf007ee78ee133a33cc3b0.js" id="360imagerotate-js"></script>
    <script defer id="dimita-script-js-extra" src="data:text/javascript;base64,Ci8qIDwhW0NEQVRBWyAqLwp2YXIgZGltaXRhX2FqYXggPSB7ImRpbWl0YV9hamF4X3VybCI6Ilwvd29yZHByZXNzXC9kaW1pdGFcL3dwLWFkbWluXC9hZG1pbi1hamF4LnBocCIsImFqYXhfbm9uY2UiOiI4MWY5ODUyZDBmIn07Ci8qIF1dPiAqLwo="></script>
    <script defer type="text/javascript" src="wp-content/cache/autoptimize/js/autoptimize_single_294437136e5f5d071f21ccd5a5a23512.js" id="dimita-script-js"></script>
    <script defer id="dimita-script-js-after" src="data:text/javascript;base64,Ci8qIDwhW0NEQVRBWyAqLwpqUXVlcnkoZnVuY3Rpb24oJCl7ICJ1c2Ugc3RyaWN0IjsgJChkb2N1bWVudCkub24oImNsaWNrIiwiLnBsdXMsIC5taW51cyIsZnVuY3Rpb24oKXt2YXIgdD0kKHRoaXMpLmNsb3Nlc3QoIi5xdWFudGl0eSIpLmZpbmQoIi5xdHkiKSxhPXBhcnNlRmxvYXQodC52YWwoKSksbj1wYXJzZUZsb2F0KHQuYXR0cigibWF4IikpLHM9cGFyc2VGbG9hdCh0LmF0dHIoIm1pbiIpKSxlPXQuYXR0cigic3RlcCIpO2EmJiIiIT09YSYmIk5hTiIhPT1hfHwoYT0wKSwoIiI9PT1ufHwiTmFOIj09PW4pJiYobj0iIiksKCIiPT09c3x8Ik5hTiI9PT1zKSYmKHM9MCksKCJhbnkiPT09ZXx8IiI9PT1lfHx2b2lkIDA9PT1lfHwiTmFOIj09PXBhcnNlRmxvYXQoZSkpJiYoZT0xKSwkKHRoaXMpLmlzKCIucGx1cyIpP3QudmFsKG4mJihuPT1hfHxhPm4pP246YStwYXJzZUZsb2F0KGUpKTpzJiYocz09YXx8cz5hKT90LnZhbChzKTphPjAmJnQudmFsKGEtcGFyc2VGbG9hdChlKSksdC50cmlnZ2VyKCJjaGFuZ2UiKX0pfSk7Ci8qIF1dPiAqLwo="></script>
    <script defer type="text/javascript" src="wp-content/cache/autoptimize/js/autoptimize_single_50036a8cbc52e5f22c340352d25fba3977e6.js?ver=2.2.1" id="tawcvs-frontend-js"></script>
    <script defer type="text/javascript" src="wp-content/plugins/elementor/assets/js/webpack.runtime.minf3b2.js?ver=3.18.3" id="elementor-webpack-runtime-js"></script>
    <script defer type="text/javascript" src="wp-content/plugins/elementor/assets/js/frontend-modules.minf3b2.js?ver=3.18.3" id="elementor-frontend-modules-js"></script>
    <script defer type="text/javascript" src="wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2" id="elementor-waypoints-js"></script>
    <script defer id="elementor-frontend-js-before" src="data:text/javascript;base64,Ci8qIDwhW0NEQVRBWyAqLwp2YXIgZWxlbWVudG9yRnJvbnRlbmRDb25maWcgPSB7ImVudmlyb25tZW50TW9kZSI6eyJlZGl0IjpmYWxzZSwid3BQcmV2aWV3IjpmYWxzZSwiaXNTY3JpcHREZWJ1ZyI6ZmFsc2V9LCJpMThuIjp7InNoYXJlT25GYWNlYm9vayI6IlNoYXJlIG9uIEZhY2Vib29rIiwic2hhcmVPblR3aXR0ZXIiOiJTaGFyZSBvbiBUd2l0dGVyIiwicGluSXQiOiJQaW4gaXQiLCJkb3dubG9hZCI6IkRvd25sb2FkIiwiZG93bmxvYWRJbWFnZSI6IkRvd25sb2FkIGltYWdlIiwiZnVsbHNjcmVlbiI6IkZ1bGxzY3JlZW4iLCJ6b29tIjoiWm9vbSIsInNoYXJlIjoiU2hhcmUiLCJwbGF5VmlkZW8iOiJQbGF5IFZpZGVvIiwicHJldmlvdXMiOiJQcmV2aW91cyIsIm5leHQiOiJOZXh0IiwiY2xvc2UiOiJDbG9zZSIsImExMXlDYXJvdXNlbFdyYXBwZXJBcmlhTGFiZWwiOiJDYXJvdXNlbCB8IEhvcml6b250YWwgc2Nyb2xsaW5nOiBBcnJvdyBMZWZ0ICYgUmlnaHQiLCJhMTF5Q2Fyb3VzZWxQcmV2U2xpZGVNZXNzYWdlIjoiUHJldmlvdXMgc2xpZGUiLCJhMTF5Q2Fyb3VzZWxOZXh0U2xpZGVNZXNzYWdlIjoiTmV4dCBzbGlkZSIsImExMXlDYXJvdXNlbEZpcnN0U2xpZGVNZXNzYWdlIjoiVGhpcyBpcyB0aGUgZmlyc3Qgc2xpZGUiLCJhMTF5Q2Fyb3VzZWxMYXN0U2xpZGVNZXNzYWdlIjoiVGhpcyBpcyB0aGUgbGFzdCBzbGlkZSIsImExMXlDYXJvdXNlbFBhZ2luYXRpb25CdWxsZXRNZXNzYWdlIjoiR28gdG8gc2xpZGUifSwiaXNfcnRsIjpmYWxzZSwiYnJlYWtwb2ludHMiOnsieHMiOjAsInNtIjo0ODAsIm1kIjo3NjgsImxnIjoxMDI1LCJ4bCI6MTQ0MCwieHhsIjoxNjAwfSwicmVzcG9uc2l2ZSI6eyJicmVha3BvaW50cyI6eyJtb2JpbGUiOnsibGFiZWwiOiJNb2JpbGUgUG9ydHJhaXQiLCJ2YWx1ZSI6NzY3LCJkZWZhdWx0X3ZhbHVlIjo3NjcsImRpcmVjdGlvbiI6Im1heCIsImlzX2VuYWJsZWQiOnRydWV9LCJtb2JpbGVfZXh0cmEiOnsibGFiZWwiOiJNb2JpbGUgTGFuZHNjYXBlIiwidmFsdWUiOjg4MCwiZGVmYXVsdF92YWx1ZSI6ODgwLCJkaXJlY3Rpb24iOiJtYXgiLCJpc19lbmFibGVkIjpmYWxzZX0sInRhYmxldCI6eyJsYWJlbCI6IlRhYmxldCBQb3J0cmFpdCIsInZhbHVlIjoxMDI0LCJkZWZhdWx0X3ZhbHVlIjoxMDI0LCJkaXJlY3Rpb24iOiJtYXgiLCJpc19lbmFibGVkIjp0cnVlfSwidGFibGV0X2V4dHJhIjp7ImxhYmVsIjoiVGFibGV0IExhbmRzY2FwZSIsInZhbHVlIjoxMjAwLCJkZWZhdWx0X3ZhbHVlIjoxMjAwLCJkaXJlY3Rpb24iOiJtYXgiLCJpc19lbmFibGVkIjpmYWxzZX0sImxhcHRvcCI6eyJsYWJlbCI6IkxhcHRvcCIsInZhbHVlIjoxMzY2LCJkZWZhdWx0X3ZhbHVlIjoxMzY2LCJkaXJlY3Rpb24iOiJtYXgiLCJpc19lbmFibGVkIjpmYWxzZX0sIndpZGVzY3JlZW4iOnsibGFiZWwiOiJXaWRlc2NyZWVuIiwidmFsdWUiOjI0MDAsImRlZmF1bHRfdmFsdWUiOjI0MDAsImRpcmVjdGlvbiI6Im1pbiIsImlzX2VuYWJsZWQiOmZhbHNlfX19LCJ2ZXJzaW9uIjoiMy4xOC4zIiwiaXNfc3RhdGljIjpmYWxzZSwiZXhwZXJpbWVudGFsRmVhdHVyZXMiOnsiZV9kb21fb3B0aW1pemF0aW9uIjp0cnVlLCJlX29wdGltaXplZF9hc3NldHNfbG9hZGluZyI6dHJ1ZSwiYWRkaXRpb25hbF9jdXN0b21fYnJlYWtwb2ludHMiOnRydWUsImJsb2NrX2VkaXRvcl9hc3NldHNfb3B0aW1pemUiOnRydWUsImxhbmRpbmctcGFnZXMiOnRydWUsImVfaW1hZ2VfbG9hZGluZ19vcHRpbWl6YXRpb24iOnRydWUsImVfZ2xvYmFsX3N0eWxlZ3VpZGUiOnRydWV9LCJ1cmxzIjp7ImFzc2V0cyI6Imh0dHA6XC9cL3dwYmluZ29zaXRlLmNvbVwvd29yZHByZXNzXC9kaW1pdGFcL3dwLWNvbnRlbnRcL3BsdWdpbnNcL2VsZW1lbnRvclwvYXNzZXRzXC8ifSwic3dpcGVyQ2xhc3MiOiJzd2lwZXItY29udGFpbmVyIiwic2V0dGluZ3MiOnsicGFnZSI6W10sImVkaXRvclByZWZlcmVuY2VzIjpbXX0sImtpdCI6eyJhY3RpdmVfYnJlYWtwb2ludHMiOlsidmlld3BvcnRfbW9iaWxlIiwidmlld3BvcnRfdGFibGV0Il0sImdsb2JhbF9pbWFnZV9saWdodGJveCI6InllcyIsImxpZ2h0Ym94X2VuYWJsZV9jb3VudGVyIjoieWVzIiwibGlnaHRib3hfZW5hYmxlX2Z1bGxzY3JlZW4iOiJ5ZXMiLCJsaWdodGJveF9lbmFibGVfem9vbSI6InllcyIsImxpZ2h0Ym94X2VuYWJsZV9zaGFyZSI6InllcyIsImxpZ2h0Ym94X3RpdGxlX3NyYyI6InRpdGxlIiwibGlnaHRib3hfZGVzY3JpcHRpb25fc3JjIjoiZGVzY3JpcHRpb24ifSwicG9zdCI6eyJpZCI6MTg2LCJ0aXRsZSI6IkRpbWl0YSUyMCVFMiU4MCU5MyUyMEVsZWN0cm9uaWNzJTIwV29yZFByZXNzJTIwVGhlbWUlMjBmb3IlMjBXb29Db21tZXJjZSUyMCVFMiU4MCU5MyUyMEp1c3QlMjBhbm90aGVyJTIwV29yZFByZXNzJTIwc2l0ZSIsImV4Y2VycHQiOiI8aDI+RmFyIGV4Y2VlZGVkIGV4cGVjdGF0aW9uczxcL2gyPkxvcmVtIGlwc3VtIGRvbG9yIHNpdCBhbWV0LCBjb25zZWN0ZXR1ciBhZGlwaXNjaW5nIGVsaXQuIEN1cmFiaXR1ciBub24gbWF0dGlzIGR1aSwgc2l0IGFtZXQgaGVuZHJlcml0IG5pYmguIER1aXMgY29uZ3VlIHZvbHV0cGF0IHVybmEgdXQgYWNjdW1zYW4uIFZpdmFtIG1hdXJpcyBhdWd1ZSwgdWx0cmljZXMgYXQgZmF1Y2lidXMgdml0YWUsIG1hdHRpcyBldSBsYWN1cy5cdTAwYTBFdGlhbSBlZ2VzdGFzIHdvIGhlbHVjdHVzIGxlY3R1cyBwcmFlc2VudCByaG9uY3VzIHByZXRpdW0gZHVpLCBpZCBtb2xlc3RpZSBxdWFtIHRpbmNpZHVudCB2ZXN0aWJ1bHVtLiIsImZlYXR1cmVkSW1hZ2UiOiJodHRwczpcL1wvd3BiaW5nb3NpdGUuY29tXC93b3JkcHJlc3NcL2RpbWl0YVwvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAxNlwvMDNcL2ltZy10ZXN0LnBuZyJ9fTsKLyogXV0+ICovCg=="></script>
    <script defer type="text/javascript" src="wp-content/plugins/elementor/assets/js/frontend.minf3b2.js?ver=3.18.3" id="elementor-frontend-js"></script>
    <script type="text/javascript">
      setREVStartSize({
        c: 'rev_slider_67_1',
        rl: [1240, 1240, 778, 480],
        el: [835, 835, 400, 350],
        gw: [1920, 1920, 778, 480],
        gh: [835, 835, 400, 350],
        type: 'standard',
        justify: '',
        layout: 'fullwidth',
        mh: "0"
      });
      var revapi67,
        tpj;

      function revinit_revslider671() {
        jQuery(function() {
          tpj = jQuery;
          revapi67 = tpj("#rev_slider_67_1");
          if (revapi67 == undefined || revapi67.revolution == undefined) {
            revslider_showDoubleJqueryError("rev_slider_67_1");
          } else {
            revapi67.revolution({
              visibilityLevels: "1240,1240,778,480",
              gridwidth: "1920,1920,778,480",
              gridheight: "835,835,400,350",
              spinner: "spinner0",
              perspectiveType: "local",
              editorheight: "835,768,400,350",
              responsiveLevels: "1240,1240,778,480",
              progressBar: {
                disableProgressBar: true
              },
              navigation: {
                mouseScrollNavigation: false,
                arrows: {
                  enable: true,
                  style: "bullet-1",
                  hide_onmobile: true,
                  hide_under: "1023px",
                  left: {},
                  right: {}
                }
              },
              fallbacks: {
                allowHTML5AutoPlayOnAndroid: true
              },
            });
          }
        });
      } // End of RevInitScript
      var once_revslider671 = false;
      if (document.readyState === "loading") {
        document.addEventListener('readystatechange', function() {
          if ((document.readyState === "interactive" || document.readyState === "complete") && !once_revslider671) {
            once_revslider671 = true;
            revinit_revslider671();
          }
        });
      } else {
        once_revslider671 = true;
        revinit_revslider671();
      }
    </script>

    <!-- old script -->
    <script src="{{static_assets('front-end')}}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script
      src="{{static_assets('front-end')}}/vendor/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
    <script src="{{static_assets('front-end')}}/vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="{{static_assets('front-end')}}/vendor/tiny-slider/dist/min/tiny-slider.js"></script>
    <script src="{{static_assets('front-end')}}/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

    {{-- light box --}}
    <script src="{{static_assets('js/lightbox.min.js')}}"></script>
    <script src="{{static_assets('front-end')}}/vendor/drift-zoom/dist/Drift.min.js"></script>
    <script src="{{static_assets('front-end')}}/vendor/lightgallery.js/dist/js/lightgallery.min.js"></script>
    <script src="{{static_assets('front-end')}}/vendor/lg-video.js/dist/lg-video.min.js"></script>
    {{--Toastr--}}
    <script src="{{static_assets('back-end/js/toastr.js')}}"></script>
    <!-- Main theme script-->
    <script src="{{static_assets('front-end')}}/js/theme.min.js"></script>
    <script src="{{static_assets('front-end')}}/js/slick.min.js"></script>

    <script src="{{static_assets('front-end')}}/js/sweet_alert.js"></script>
    {{--Toastr--}}
    <script src="{{static_assets('back-end/js/toastr.js')}}"></script>
    {!! Toastr::message() !!}
    <!-- end old script -->


    <script defer src="data:text/javascript;base64,CgkJCQkJdmFyIGh0bWxEaXZDc3MgPSB1bmVzY2FwZSgiJTIzcmV2X3NsaWRlcl82N18xX3dyYXBwZXIlMjAuYnVsbGV0LTEudHBhcnJvd3MlMjAlN0IlMEElMDljdXJzb3IlM0Fwb2ludGVyJTNCJTBBJTA5d2lkdGglM0E0NHB4JTNCJTBBJTA5aGVpZ2h0JTNBNDRweCUzQiUwQSUwOXBvc2l0aW9uJTNBYWJzb2x1dGUlM0IlMEElMDlkaXNwbGF5JTNBYmxvY2slM0IlMEElMDl6LWluZGV4JTNBMTAwJTNCJTBBJTIwJTIwJTIwJTIwYm9yZGVyJTNBMXB4JTIwc29saWQlMjAlMjM2NjYlM0IlMEElMjAlMjAlMjAlMjBiYWNrZ3JvdW5kJTNBdHJhbnNwYXJlbnQlM0IlMEElN0QlMEElMjNyZXZfc2xpZGVyXzY3XzFfd3JhcHBlciUyMC5idWxsZXQtMS50cGFycm93cyUzQWhvdmVyJTIwJTdCJTBBJTA5Ym9yZGVyJTNBMXB4JTIwc29saWQlMjAlMjNlZDFkMjQlM0IlMEElN0QlMEElMjNyZXZfc2xpZGVyXzY3XzFfd3JhcHBlciUyMC5idWxsZXQtMS50cGFycm93cyUzQWhvdmVyJTNBYmVmb3JlJTIwJTdCJTBBJTA5Y29sb3IlM0ElMjNlZDFkMjQlM0IlMEElMjAlMjAlMDlyaWdodCUzQTEwcHglM0IlMEElMjAlMjAlMDl0ZXh0LWFsaWduJTNBY2VudGVyJTNCJTBBJTdEJTIwJTBBJTIzcmV2X3NsaWRlcl82N18xX3dyYXBwZXIlMjAuYnVsbGV0LTEudHBhcnJvd3MudHAtcmlnaHRhcnJvdyUzQWhvdmVyJTNBYmVmb3JlJTIwJTdCJTBBJTA5Y29sb3IlM0ElMjNlZDFkMjQlM0IlMEElMjAlMjAlMDlsZWZ0JTNBMTBweCUzQiUwQSUyMCUyMCUwOXRleHQtYWxpZ24lM0FjZW50ZXIlM0IlMEElN0QlMEElMjNyZXZfc2xpZGVyXzY3XzFfd3JhcHBlciUyMC5idWxsZXQtMS50cGFycm93cyUzQWJlZm9yZSUyMCU3QiUwQSUwOWZvbnQtZmFtaWx5JTNBJTIwJTIyRWxlZ2FudEljb25zJTIyJTNCJTBBJTA5Zm9udC1zaXplJTNBMThweCUzQiUwQSUwOWNvbG9yJTNBJTIwJTIzOTk5OTk5JTNCJTIwJTBBJTA5ZGlzcGxheSUzQWJsb2NrJTNCJTBBJTA5dGV4dC1hbGlnbiUzQSUyMGNlbnRlciUzQiUwQSUyMCUyMCUwOWxpbmUtaGVpZ2h0JTNBNDJweCUzQiUwQSUyMCUyMCUwOXJpZ2h0JTNBLTEwcHglM0IlMEElMjAlMjAlMDlwb3NpdGlvbiUzQWFic29sdXRlJTNCJTBBJTIwJTIwJTA5LXdlYmtpdC10cmFuc2l0aW9uJTNBJTIwYWxsJTIwMC4zcyUyMGVhc2UlM0IlMEElMjAlMjAlMjAlMjB0cmFuc2l0aW9uJTNBJTIwYWxsJTIwMC4zcyUyMGVhc2UlM0IlMEElN0QlMEElMjNyZXZfc2xpZGVyXzY3XzFfd3JhcHBlciUyMC5idWxsZXQtMS50cGFycm93cyUzQWFmdGVyJTIwJTdCJTBBJTA5Zm9udC1mYW1pbHklM0ElMjAlMjJFbGVnYW50SWNvbnMlMjIlM0IlMEElMDlmb250LXNpemUlM0ExOHB4JTNCJTBBJTA5Y29sb3IlM0ElMjAlMjM5OTk5OTklM0IlMEElMDlkaXNwbGF5JTNBYmxvY2slM0IlMEElMDlsaW5lLWhlaWdodCUzQTQycHglM0IlMEElMDl0ZXh0LWFsaWduJTNBJTIwY2VudGVyJTNCJTBBJTIwJTIwJTA5bGVmdCUzQS0xMHB4JTNCJTBBJTIwJTIwJTA5cG9zaXRpb24lM0FhYnNvbHV0ZSUzQiUwQSUyMCUyMCUwOS13ZWJraXQtdHJhbnNpdGlvbiUzQSUyMGFsbCUyMDAuM3MlMjBlYXNlJTNCJTBBJTIwJTIwJTIwJTIwdHJhbnNpdGlvbiUzQSUyMGFsbCUyMDAuM3MlMjBlYXNlJTNCJTBBJTdEJTBBJTIzcmV2X3NsaWRlcl82N18xX3dyYXBwZXIlMjAuYnVsbGV0LTEudHBhcnJvd3MudHAtbGVmdGFycm93JTNBYmVmb3JlJTIwJTdCJTBBJTA5Y29udGVudCUzQSUyMCUyMiU1QzIzJTIyJTNCJTBBJTdEJTBBJTIzcmV2X3NsaWRlcl82N18xX3dyYXBwZXIlMjAuYnVsbGV0LTEudHBhcnJvd3MudHAtcmlnaHRhcnJvdyUzQWJlZm9yZSUyMCU3QiUwQSUwOWNvbnRlbnQlM0ElMjAlMjIlNUMyNCUyMiUzQiUwQSUyMCUyMCUwOXJpZ2h0JTNBYXV0byUzQiUwQSUyMCUyMCUwOWxlZnQlM0EtMTBweCUzQiUwQSU3RCUwQSUwQSUwQSIpOwoJCQkJCXZhciBodG1sRGl2ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ3JzLXBsdWdpbi1zZXR0aW5ncy1pbmxpbmUtY3NzJyk7CgkJCQkJaWYoaHRtbERpdikgewoJCQkJCQlodG1sRGl2LmlubmVySFRNTCA9IGh0bWxEaXYuaW5uZXJIVE1MICsgaHRtbERpdkNzczsKCQkJCQl9ZWxzZXsKCQkJCQkJdmFyIGh0bWxEaXYgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdkaXYnKTsKCQkJCQkJaHRtbERpdi5pbm5lckhUTUwgPSAnPHN0eWxlPicgKyBodG1sRGl2Q3NzICsgJzwvc3R5bGU+JzsKCQkJCQkJZG9jdW1lbnQuZ2V0RWxlbWVudHNCeVRhZ05hbWUoJ2hlYWQnKVswXS5hcHBlbmRDaGlsZChodG1sRGl2LmNoaWxkTm9kZXNbMF0pOwoJCQkJCX0KCQkJCQ=="></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vef91dfe02fce4ee0ad053f6de4f175db1715022073587" integrity="sha512-sDIX0kl85v1Cl5tu4WGLZCpH/dV9OHbA4YlKCuCiMmOQIk4buzoYDZSFj+TvC71mOBLh8CDC/REgE0GX0xcbjA==" data-cf-beacon='{"rayId":"88ad06c04e475d66","version":"2024.4.1","r":1,"token":"f0504b75471641599863d12d9668259a","b":1}' crossorigin="anonymous"></script>

<script>
    function addWishlist(product_id) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{route('store-wishlist')}}",
            method: 'POST',
            data: {
                product_id: product_id
            },
            success: function (data) {
                if (data.value == 1) {
                    Swal.fire({
                        position: 'top-end',
                        type: 'success',
                        title: data.success,
                        showConfirmButton: false,
                        timer: 1500
                    });
                    $('.countWishlist').html(data.count);
                    $('.countWishlist-' + product_id).text(data.product_count);
                    $('.tooltip').html('');

                } else if (data.value == 2) {
                    Swal.fire({
                        type: 'info',
                        title: 'WishList',
                        text: data.error
                    });
                } else {
                    Swal.fire({
                        type: 'error',
                        title: 'WishList',
                        text: data.error
                    });
                }
            }
        });
    }

    function removeWishlist(product_id) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{route('delete-wishlist')}}",
            method: 'POST',
            data: {
                id: product_id
            },
            beforeSend: function () {
                $('#loading').show();
            },
            success: function (data) {
                Swal.fire({
                    type: 'success',
                    title: 'WishList',
                    text: data.success
                });
                $('.countWishlist').html(data.count);
                $('#set-wish-list').html(data.wishlist);
                $('.tooltip').html('');
            },
            complete: function () {
                $('#loading').hide();
            },
        });
    }

    function quickView(product_id) {
        $.get({
            url: '{{route('quick-view')}}',
            dataType: 'json',
            data: {
                product_id: product_id
            },
            beforeSend: function () {
                $('#loading').show();
            },
            success: function (data) {
                console.log("success...")
                $('#quick-view').modal('show');
                $('#quick-view-modal').empty().html(data.view);
            },
            complete: function () {
                $('#loading').hide();
            },
        });
    }

    function addToCart(form_id = 'add-to-cart-form', redirect_to_checkout=false) {
        if (checkAddToCartValidity()) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.post({
                url: '{{ route('cart.add') }}',
                data: $('#' + form_id).serializeArray(),
                beforeSend: function () {
                    $('#loading').show();
                },
                success: function (response) {
                    console.log(response);
                    if (response.status == 1) {
                        updateNavCart();
                        toastr.success(response.message, {
                            CloseButton: true,
                            ProgressBar: true
                        });
                        $('.call-when-done').click();
                        if(redirect_to_checkout)
                        {
                            location.href = "{{route('checkout-details')}}";
                        }
                        return false;
                    } else if (response.status == 0) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Cart',
                            text: response.message
                        });
                        return false;
                    }
                },
                complete: function () {
                    $('#loading').hide();

                }
            });
        } else {
            Swal.fire({
                type: 'info',
                title: 'Cart',
                text: '{{\App\CPU\translate('please_choose_all_the_options')}}'
            });
        }
    }

    function buy_now() {
        addToCart('add-to-cart-form',true);
        /* location.href = "{{route('checkout-details')}}"; */
    }

    function currency_change(currency_code) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: '{{route('currency.change')}}',
            data: {
                currency_code: currency_code
            },
            success: function (data) {
                toastr.success('{{\App\CPU\translate('Currency changed to')}}' + data.name);
                location.reload();
            }
        });
    }

    function removeFromCart(key) {
        $.post('{{ route('cart.remove') }}', {_token: '{{ csrf_token() }}', key: key}, function (response) {
            console.log(response)
            updateNavCart();
            $('#cart-summary').empty().html(response.data);
            toastr.info('{{\App\CPU\translate('Item has been removed from cart')}}', {
                CloseButton: true,
                ProgressBar: true
            });
        });
    }

    function updateNavCart() {
        $.post('{{route('cart.nav-cart')}}', {_token: '{{csrf_token()}}'}, function (response) {
            $('#cart_items').html(response.data);
        });
    }

    function cartQuantityInitialize() {
        $('.btn-number').click(function (e) {
            e.preventDefault();

            fieldName = $(this).attr('data-field');
            type = $(this).attr('data-type');
            var input = $("input[name='" + fieldName + "']");
            var currentVal = parseInt(input.val());

            if (!isNaN(currentVal)) {
                if (type == 'minus') {

                    if (currentVal > input.attr('min')) {
                        input.val(currentVal - 1).change();
                    }
                    if (parseInt(input.val()) == input.attr('min')) {
                        $(this).attr('disabled', true);
                    }

                } else if (type == 'plus') {

                    if (currentVal < input.attr('max')) {
                        input.val(currentVal + 1).change();
                    }
                    if (parseInt(input.val()) == input.attr('max')) {
                        $(this).attr('disabled', true);
                    }

                }
            } else {
                input.val(0);
            }
        });

        $('.input-number').focusin(function () {
            $(this).data('oldValue', $(this).val());
        });

        $('.input-number').change(function () {

            minValue = parseInt($(this).attr('min'));
            maxValue = parseInt($(this).attr('max'));
            valueCurrent = parseInt($(this).val());

            var name = $(this).attr('name');
            if (valueCurrent >= minValue) {
                $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Cart',
                    text: '{{\App\CPU\translate('Sorry, the minimum value was reached')}}'
                });
                $(this).val($(this).data('oldValue'));
            }
            if (valueCurrent <= maxValue) {
                $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Cart',
                    text: '{{\App\CPU\translate('Sorry, stock limit exceeded')}}.'
                });
                $(this).val($(this).data('oldValue'));
            }


        });
        $(".input-number").keydown(function (e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                // Allow: Ctrl+A
                (e.keyCode == 65 && e.ctrlKey === true) ||
                // Allow: home, end, left, right
                (e.keyCode >= 35 && e.keyCode <= 39)) {
                // let it happen, don't do anything
                return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });
    }

    function updateQuantity(key, element) {
        $.post('<?php echo e(route('cart.updateQuantity')); ?>', {
            _token: '<?php echo e(csrf_token()); ?>',
            key: key,
            quantity: element.value
        }, function (data) {
            updateNavCart();
            $('#cart-summary').empty().html(data);
        });
    }

    function updateCartQuantity(key) {
        var quantity = $("#cartQuantity" + key).children("option:selected").val();
        $.post('{{route('cart.updateQuantity')}}', {
            _token: '{{csrf_token()}}',
            key: key,
            quantity: quantity
        }, function (response) {
            if (response.status == 0) {
                toastr.error(response.message, {
                    CloseButton: true,
                    ProgressBar: true
                });
                $("#cartQuantity" + key).val(response['qty']);
            } else {
                updateNavCart();
                $('#cart-summary').empty().html(response);
            }
        });
    }

    $('#add-to-cart-form input').on('change', function () {
        getVariantPrice();
    });

    function getVariantPrice() {
        if ($('#add-to-cart-form input[name=quantity]').val() > 0 && checkAddToCartValidity()) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: '{{ route('cart.variant_price') }}',
                data: $('#add-to-cart-form').serializeArray(),
                success: function (data) {
                    console.log(data)
                    $('#add-to-cart-form #chosen_price_div').removeClass('d-none');
                    $('#add-to-cart-form #chosen_price_div #chosen_price').html(data.price);
                    $('#set-tax-amount').html(data.tax);
                    $('#set-discount-amount').html(data.discount);
                    $('#available-quantity').html(data.quantity);
                    $('.cart-qty-field').attr('max', data.quantity);
                }
            });
        }
    }

    function checkAddToCartValidity() {
        var names = {};
        $('#add-to-cart-form input:radio').each(function () { // find unique names
            names[$(this).attr('name')] = true;
        });
        var count = 0;
        $.each(names, function () { // then count them
            count++;
        });
        if ($('input:radio:checked').length == count) {
            return true;
        }
        return false;
    }

    @if(Request::is('/') &&  \Illuminate\Support\Facades\Cookie::has('popup_banner')==false)
    $(document).ready(function () {
        $('#popup-modal').appendTo("body").modal('show');
    });
    @php(\Illuminate\Support\Facades\Cookie::queue('popup_banner', 'off', 1))
    @endif

    $(".clickable").click(function () {
        window.location = $(this).find("a").attr("href");
        return false;
    });
</script>

@if ($errors->any())
    <script>
        @foreach($errors->all() as $error)
        toastr.error('{{$error}}', Error, {
            CloseButton: true,
            ProgressBar: true
        });
        @endforeach
    </script>
@endif

<script>
    function couponCode() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: '{{ route('coupon.apply') }}',
            data: $('#coupon-code-ajax').serializeArray(),
            success: function (data) {
                /* console.log(data);
                return false; */
                if (data.status == 1) {
                    let ms = data.messages;
                    ms.forEach(
                        function (m, index) {
                            toastr.success(m, index, {
                                CloseButton: true,
                                ProgressBar: true
                            });
                        }
                    );
                } else {
                    let ms = data.messages;
                    ms.forEach(
                        function (m, index) {
                            toastr.error(m, index, {
                                CloseButton: true,
                                ProgressBar: true
                            });
                        }
                    );
                }
                setInterval(function () {
                    location.reload();
                }, 2000);
            }
        });
    }

    jQuery(".search-bar-input").keyup(function () {
        $(".search-card").css("display", "block");
        let name = $(".search-bar-input").val();
        if (name.length > 0) {
            $.get({
                url: '{{url('/')}}/searched-products',
                dataType: 'json',
                data: {
                    name: name
                },
                beforeSend: function () {
                    $('#loading').show();
                },
                success: function (data) {
                    $('.search-result-box').empty().html(data.result)
                },
                complete: function () {
                    $('#loading').hide();
                },
            });
        } else {
            $('.search-result-box').empty();
        }
    });

    jQuery(".search-bar-input-mobile").keyup(function () {
        $(".search-card").css("display", "block");
        let name = $(".search-bar-input-mobile").val();
        if (name.length > 0) {
            $.get({
                url: '{{url('/')}}/searched-products',
                dataType: 'json',
                data: {
                    name: name
                },
                beforeSend: function () {
                    $('#loading').show();
                },
                success: function (data) {
                    $('.search-result-box').empty().html(data.result)
                },
                complete: function () {
                    $('#loading').hide();
                },
            });
        } else {
            $('.search-result-box').empty();
        }
    });

    jQuery(document).mouseup(function (e) {
        var container = $(".search-card");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            container.hide();
        }
    });

    const img = document.getElementByTagName("img")
    img.addEventListener("error", function (event) {
        event.target.src = '{{static_assets("front-end/img/image-place-holder.png")}}';
        event.onerror = null
    })

    function route_alert(route, message) {
        Swal.fire({
            title: '{{\App\CPU\translate('Are you sure')}}?',
            text: message,
            type: 'warning',
            showCancelButton: true,
            cancelButtonColor: 'default',
            confirmButtonColor: '{{$web_config['primary_color']}}',
            cancelButtonText: 'No',
            confirmButtonText: 'Yes',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                location.href = route;
            }
        })
    }
</script>

@stack('script')

</body>
</html>


