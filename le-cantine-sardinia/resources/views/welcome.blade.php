<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NG3HWCF');</script>
        <!-- End Google Tag Manager -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.22/dist/css/uikit.min.css" />
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
        <link rel="icon" href="{{ asset('media/favicon.ico') }}?v={{ date('YmdHis') }}">
        <script src="https://kit.fontawesome.com/3fe17b639c.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <title>Cantina Chessa Salvatore</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NG3HWCF"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Navbar -->
    <div class="main-container">

        <nav class="uk-navbar-container uk-flex-column uk-flex-top" data-uk-navbar data-uk-toggle="media: @s; cls: uk-flex-row uk-flex-top; mode: media" style="background: none">
            <button type="button" data-uk-toggle="target: .navbar-collapse; cls: hidden-up-to-s" class="uk-navbar-toggle uk-hidden@s" data-uk-navbar-toggle-icon style="color:#FFF !important"></button>
            <div class="navbar-collapse hidden-up-to-s">
                <div class="uk-navbar-left">
                    <ul data-uk-toggle="media: @s; cls: uk-navbar-nav uk-padding-remove; mode: media" class="uk-nav uk-nav-primary uk-padding-small">
                        <li><a href="#about-us" class="link-nav">{{ __('messages.about-us') }}</a></li>
                        <li><a href="#wines" class="link-nav">{{ __('messages.our-wines') }}</a></li>
                        <li><a href="#service" class="link-nav">{{ __('messages.services') }}</a></li>
                        <li><a href="#contact" class="link-nav">{{ __('messages.contact-us') }}</a></li>
                        <select class="form-control changeLang" style="background:none;color:white;outline:none;font-size:large;padding-top:4px">
                            <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>ENG</option>
                            <option value="it" {{ session()->get('locale') == 'it' ? 'selected' : '' }}>ITA</option>
                        </select>
                    </ul>
                </div>
            </div>
        </nav>


        <nav class="og-navbar uk-margin uk-navbar-container uk-navbar-transparent"uk-sticky  uk-navbar="mode: click">
            <div class="uk-navbar-left">
                <ul class="uk-navbar-nav uk-text-emphasis">
                    <li><a href="#about-us" class="link-nav">{{ __('messages.about-us') }}</a></li>
                    <li><a href="#wines" class="link-nav">{{ __('messages.our-wines') }}</a></li>
                    <li><a href="#service" class="link-nav">{{ __('messages.services') }}</a></li>
                    <li><a href="#contact" class="link-nav">{{ __('messages.contact-us') }}</a></li>
                </ul>
            </div>
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav uk-text-emphasis">
                    <li><a target="_blank" href="https://www.instagram.com/cantina_chessa_salvatore/" class="link-nav"><i class="fab fa-instagram"></i></a></li>
                    <li><a target="_blank" href="https://www.instagram.com/cantina_chessa_salvatore/" class="link-nav"><i class="fab fa-facebook"></i></a></li>
                    <select class="form-control changeLang" style="background:none;color:white;outline:none;padding-left: 5px; padding-right:10px;">
                        <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>ENG</option>
                        <option value="it" {{ session()->get('locale') == 'it' ? 'selected' : '' }}>ITA</option>
                    </select>
                </ul>
            </div>
        </nav>

        <!-- title -->
        <div class="uk-container uk-container-large uk-height-1-1">
            <div class="title">
                <h1 id="top">{{ __('messages.title') }}</h1>
            </div>
        </div>

        <!-- Chi siamo -->
        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin cr-wrapper" id="about-us" uk-grid>
            <div class="uk-card-media-left uk-cover-container">
                <img src="{{ asset('media/about-us.jpg') }}" alt="{{ __('messages.about-us') }}" uk-cover>
                <canvas width="600" height="400"></canvas>
            </div>
            <div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title">{{ __('messages.about-us') }}</h3>
                    <p style="text-align:justify">{{ __('messages.story') }}</p>
                </div>
            </div>
        </div>

        <!-- Sinzeru  -->
        <h2 class="wine-title" id="wines">SINZERU</h2>
        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin cr-wrapper" id="about-us" style="background: none" uk-grid>
            <div class="uk-text-center">
                <img src="{{ asset('media/sinzeru-1.png') }}" alt="{{ __('messages.classification-text') }}">
            </div>

            <div class="uk-text-center">
                <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                    <img src="{{ asset('media/sinzeru2.png') }}" alt="">
                    <div class="uk-transition-fade uk-position-cover uk-position-small uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">
                       <p class="uk-margin-remove">
                            <strong>{{ __('messages.classification') }}:</strong> {{ __('messages.classification-text') }}<br>
                            <strong>{{ __('messages.production') }}:</strong> {{ __('messages.production-text') }}<br>
                            <strong>{{ __('messages.grape-variety') }}:</strong> {{ __('messages.grape-variety-text') }}<br>
                            <strong>{{ __('messages.vinification') }}:</strong> {{ __('messages.vinification-text') }}<br>
                            <strong>{{ __('messages.color') }}:</strong> {{ __('messages.color-text') }}<br>
                            <strong>{{ __('messages.perfume') }}:</strong> {{ __('messages.perfume-text') }}<br>
                            <strong>{{ __('messages.taste') }}:</strong> {{ __('messages.taste-text') }}<br>
                            <strong>{{ __('messages.alcohol') }}:</strong> {{ __('messages.alcohol-text') }}<br>
                            <strong>{{ __('messages.serving-temperature') }}:</strong> {{ __('messages.serving-temperature-text') }}<br>
                            <strong>{{ __('messages.pairing') }}:</strong> {{ __('messages.pairing-text') }}<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <!-- Anninnia  -->
        <h2 class="wine-title">ANNINNIA</h2>
        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin cr-wrapper" id="about-us" style="background: none" uk-grid>
            <div class="uk-text-center">
                <img src="{{ asset('media/anninnia.png') }}" alt="{{ __('messages.classification-text-2') }}">
            </div>

            <div class="uk-text-center">
                <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                    <img src="{{ asset('media/anninnia2.png') }}" alt="">
                    <div class="uk-transition-fade uk-position-cover uk-position-small uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">
                        <p class="uk-margin-remove">
                            <strong>{{ __('messages.classification') }}:</strong> {{ __('messages.classification-text-2') }}<br>
                            <strong>{{ __('messages.production') }}:</strong> {{ __('messages.production-text-2') }}<br>
                            <strong>{{ __('messages.grape-variety') }}:</strong> {{ __('messages.grape-variety-text-2') }}<br>
                            <strong>{{ __('messages.vinification') }}:</strong> {{ __('messages.vinification-text-2') }}<br>
                            <strong>{{ __('messages.color') }}:</strong> {{ __('messages.color-text-2') }}<br>
                            <strong>{{ __('messages.perfume') }}:</strong> {{ __('messages.perfume-text-2') }}<br>
                            <strong>{{ __('messages.taste') }}:</strong> {{ __('messages.taste-text-2') }}<br>
                            <strong>{{ __('messages.alcohol') }}:</strong> {{ __('messages.alcohol-text-2') }}<br>
                            <strong>{{ __('messages.serving-temperature') }}:</strong> {{ __('messages.serving-temperature-text-2') }}<br>
                            <strong>{{ __('messages.pairing') }}:</strong> {{ __('messages.pairing-text-2') }}<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- I servizi  -->
        <div class="cr-wrapper" style="padding-top:10vh" id="service">
            <div class="uk-card uk-card-default service">
                <div class="uk-card-body">
                    <h3 class="uk-card-title">{{ __('messages.services') }}</h3>
                    <p><strong>{{ __('messages.services-1') }}</strong> {{ __('messages.services-1-text') }}</p>
                    <p><strong>{{ __('messages.services-2') }}</strong> {{ __('messages.services-2-text') }}</p>
                    <p><strong>{{ __('messages.services-3') }}</strong> {{ __('messages.services-3-text') }}</p>
                </div>
                <div class="uk-card-media-bottom">
                    <video src="{{ asset('media/Servizi.mp4') }}" controls loop muted playsinline uk-video="autoplay: false"></video>
                </div>
            </div>
        </div>

        <!-- Contatti  -->

        <div class="cr-wrapper hidden-up-to-s contact-web" id="contact" style="padding-bottom:50px">
            <div class="info-container uk-container uk-margin contact-container">
                <div class="info" id="contact-text">
                    <img src="{{ asset('media/chessa-salvatore-logo.png') }}" alt="" width="300px">
                    <p>CANTINA SALVATORE CHESSA</p>
                    <p>Via Sotgia, 11 - Usini 07049
                        Sassari - Sardegna (Italia)
                        Tel: 347 028 9441 - Email: chessasalvatore@hotmail.com
                    </p>
                </div>
                <form
                    action="https://formspree.io/f/mwkabjrl"
                    method="POST"
                    class="form">
                    <label>
                        <input class="uk-input" type="email" name="_replyto" placeholder="{{ __('messages.placeholder-1') }}">
                    </label>
                    <label>
                        <input class="uk-input" type="email" name="_replyto" placeholder="{{ __('messages.placeholder-2') }}">
                    </label>
                    <label>
                        <textarea class="uk-textarea" name="message" placeholder="{{ __('messages.placeholder-3') }}"></textarea>
                    </label>
                    <button class="button uk-button" type="submit">{{ __('messages.submit') }}</button>
                </form>
            </div>
        </div>


        <div class="uk-card uk-card-small uk-card-default cr-wrapper chessa-card contact-card" style="margin-top:30px">
            <img src="{{ asset('media/chessa-salvatore-logo.png') }}" alt="" width="300px">
            <p>CANTINA SALVATORE CHESSA</p>
            <p>Via Sotgia, 11 - Usini 07049
                Sassari - Sardegna (Italia)
                <strong>Tel</strong>: 347 028 9441 - <strong>Email</strong>: chessasalvatore@hotmail.com
            </p>
        </div>

        <div class="uk-card uk-card-small uk-card-default cr-wrapper chessa-card form-container">
            <form
                action="https://formspree.io/f/mwkabjrl"
                method="POST"
                class="form"
                style="margin-left: 0px">
                <label>
                    <input class="uk-input" style="margin-left: 0px" type="email" name="_replyto" placeholder="{{ __('messages.placeholder-1') }}">
                </label>
                <label>
                    <input class="uk-input" style="margin-left: 0px" type="email" name="_replyto" placeholder="{{ __('messages.placeholder-2') }}">
                </label>
                <label>
                    <textarea class="uk-textarea" name="message" placeholder="{{ __('messages.placeholder-3') }}"></textarea>
                </label>
                <button class="button uk-button" type="submit">{{ __('messages.submit') }}</button>
            </form>
        </div>



        <a href="#top" uk-totop uk-scroll>TOP</a>
        <!-- Footbar  -->


        <footer>
            <div class="bottom-details">
                <div class="bottom_text">
                    <span class="copyright_text">Copyright © <?=date("Y");?> Cantina Chessa Salvatore - P.Iva:  IT 01582920904 - tel. +39 347 028 9441</span>
                </div>
            </div>
        </footer>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.22/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.22/dist/js/uikit-icons.min.js"></script>
    <script type="text/javascript">
    var url = "{{ route('changeLang') }}";
    $(".changeLang").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
    });
</script>
    </body>
</html>
