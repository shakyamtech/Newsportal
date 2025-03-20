 <!DOCTYPE html>
 <html lang="en">
 @props(['meta_keywords', 'meta_description'])

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>

     {{-- SEO --}}
     <meta name="keywords" content="{{ $meta_keywords ?? 'Nepali News, Nepali Politics, Nepali Entertainment' }}">
     <meta name="description" content="{{ $meta_description ?? 'Visit our website to know more about us' }}">
     <meta name="language" content="English">
     <meta name="revisit-after" content="1 days">
     <meta name="author" content="Nepali News">
     <link rel="canonical" href="{{ Request::url() }}">
     <meta property="og:title" content="Code IT | Learn coding in Nepal" />
     <meta property="og:site_name" content="Nepali News" />
     <meta property="og:type" content="website" />
     <meta property="og:url" content="{{ Request::url() }}" />
     <meta property="og:image" content="{{ asset('frontend/images/logo.png') }}" />
     <meta property="og:description"
         content="Nepali News is a Nepali news website which provides latest news, politics, entertainment." />

     @vite(['resources/css/app.css', 'resources/js/app.js'])

     <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
     <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
     <script type='text/javascript'
         src='https://platform-api.sharethis.com/js/sharethis.js#property=67dae2db6eb4310012fddbec&product=inline-share-buttons'
         async='async'></script>
 </head>

 <body>
     <header class="sticky top-0 bg-white z-50">
         <x-frontend-navbar />
     </header>

     <main>
         {{ $slot }}
     </main>

     <footer></footer>
 </body>

 </html>
