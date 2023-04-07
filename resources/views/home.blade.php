<x-app-layout>
<div class="wrapper">
@include('partials.header')

<div class="p32px df fdc lg-fdr g32px w100p">
    <div class="lg-w6col ">
        @include('partials.quick-compiler')
    </div>

    <div class="lg-w6col df fdc">
        <div class="w200px  asc mt150px mb50px">
            <x-acss-logo />
        </div>
        <div class=" text-sm ">

            <h3>Welcome to Aliascss!</h3>
            <p>


                AliasCSS or in short acss, is a post css processor/compiler means it lets you first define classnames in your
                html
                element then get processed to corresponig css declaration.
            </p>
            <h3>What it is?</h3>
            <p>
                With aliascss you can style your webpages using class attribute with post-define classname, for example<br><br>

                <code
                    class="bgc-gray100">&lt;h1 class="color-red font-size12px display-inline-block"&gt; Hello world&lt;/h1&gt;</code><br><br>
                OR, using shorthand<br><br>

                <code class="bgc-gray100">&lt;h1 class="c-red fs12px dib"&gt; Hello world&lt;/h1&gt;</code><br><br>
                Here we have defined the color, font size, display properties of h1 element first, then aliascss will compiles
                and
                defines the classname with the corresponing property and value/s in the styles tag or stylesheets. Generally
                every
                aliascss classname hold single propery and value for it.
            </p>
        </div>

        <a href="https://github.com/Rodolopho/aliascss#introduction"
            class="dif mt50px mra g8px bgc-gray600 c-fff p12px14px br8px tdn -h-bgc-gray400 text-md aic">
            <svg class="w24px h24px stroke-currentColor stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                <use href="{{asset('icons/feather-sprite.svg')}}#github" />
            </svg>
            Documentation on Github
        </a>
    </div>
</div>


@include('partials.footer')

</div>
@push('script')
    <script src="{{asset('js/quick-compiler.js')}}"></script>
@endpush
</x-app-layout>
