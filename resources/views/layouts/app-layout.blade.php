<!DOCTYPE html>
<html lang="en" class="sbs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Style webpage using in your html page, easy to make UI components, AliasCSS let you  design on your terms">
    <link rel="icon" type="image/svg" href="logo-acss-icon.svg" sizes="32x32" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://rsms.me/">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <title>AliasCSS: CSS Post Processor </title>

    <style> [x-cloak] { display: none !important; } </style>
    <script src="https://kit.fontawesome.com/1231d5188c.js" crossorigin="anonymous"></script>
    {{-- Alpine --}}
    <script defer src="{{asset('js/alpine-collapse-3.1x.x.js')}}"></script>
    <script defer src="{{asset('js/alpine3.10.2.js')}}"></script>

    @vite(['resources/js/app.js','resources/css/app.css'])
    {{-- @vite(['resources/js/app.js']) --}}

    @stack('script-head')
    @stack('style-head')
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}
    <style >
        /* :root{
            --lorem:'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero, est veritatis quis sapiente quo quidem harum fuga
            assumenda odio tempore, vel corrupti consequuntur quas doloribus ab deserunt, voluptates aliquam temporibus.'
        } */
        :root {
            --lorem: "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero, est veritatis quis sapiente quo quidem harum fuga assumenda odio tempore, vel corrupti consequuntur quas doloribus ab deserunt, voluptates aliquam temporibus.";
        }

        :root { font-family: 'Inter', sans-serif; }
        @supports (font-variation-settings: normal) {
        :root { font-family: 'Inter var', sans-serif; }
        }

    </style>
</head>

<body class="ff-inter _all-bsbb ">

    {{$slot}}


    <script src="{{asset('js/aliascss.js')}}"></script>
    @stack('script')
</body>

</html>
