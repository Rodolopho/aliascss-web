{{-- header --}}
<header class="h80px  md-fdr pr bb1px-s-blue100 df md-aic" x-data="{show:false}">

    <div class="df jcsb aic w100p p0px32px g24px pr">
        <div class="logo w120px">
            <a href="{{route('home')}}">
               <x-acss-logo />
            </a>
        </div>

        <div class="">
            @include('partials.static-classnames')
        </div>
        {{-- <div sx-show="" class="w100p pa mh150px t0px mt64px b1px-s-eee br15px bgc-fff shadow-md ">

        </div> --}}
        <div x-on:click="show=!show" class="md-dn">
            {{-- @include('svg.icons.feather.menu') --}}
            <span>
                <svg class="w18px  h18px stroke-gray400 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                    <use href="{{asset('icons/feather-sprite.svg')}}#more-vertical" />
                </svg>
            </span>
        </div>
    </div>

    <nav x-show="show" @click.outside="show=false" sx-collapse
        class=" w100p zi123456789  md-pr-i md-g32px  p0px32px df fdc jcsb  xs-mt80px mla mra pa bgc-fff  bb1px-s-ccc md-df-i md-fdr-i md-aic md-mt0px md-bbn md-bgn">
        <ul
            class="p0px lsn  _a-tdn _a-c-inherit c-gray500 fdc nav-items df  _a-h-tdu _a-w100p _a-p16px md-fdr-i text-md fw5 md-aic">

            <li class="">
                <a href="{{route('components')}}" class="df aic g4px ">

                    <svg
                        class="w18px  h18px stroke-gray400 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                        <use href="{{asset('icons/feather-sprite.svg')}}#layout" />
                    </svg>

                    Components
                </a>

            </li>
            <li class="">
                <a href="{{route('color')}}" class="df aic  g4px">
                    <svg
                        class="w18px  h18px stroke-gray400 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                        <use href="{{asset('icons/feather-sprite.svg')}}#box" />
                    </svg>
                    Color_Reference
                </a>

            </li>
            <li class="">
                <a href="{{route('playground')}}" class="df aic  g4px">
                    <svg
                        class="w18px  h18px stroke-gray400 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                        <use href="{{asset('icons/feather-sprite.svg')}}#terminal" />
                    </svg>
                    Playground
                </a>

            </li>

            {{-- <li><a href="#">Pricing</a></li> --}}

        </ul>
        <div class="rright-nav dn md-df aic">
            <div class="pr df mw240px jcfe" x-data="{showDropDown:false}">
                <span @click="showDropDown=!showDropDown" class="" acss-class="stroke-gray900">
                    <svg :class="showDropDown?'stroke-gray900':'stroke-gray400'"
                        class="w24px  h24px  stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                        <use x-show="!showDropDown" href="{{asset('icons/feather-sprite.svg')}}#more-vertical" />
                        <use x-show="showDropDown" href="{{asset('icons/feather-sprite.svg')}}#more-vertical" />
                    </svg>
                </span>

                <!--Dropdown-->
                <div @click.away="showDropDown=false" x-show="showDropDown"
                    class="drop zi1 pa b1px-s-gray100 xw240px w100p l0px t100p bgc-fff  shadow-lg mt2px br8px">
                    <ul class="p0px m0px lsn _li-h-bgc-gray100 text-md ">

                        <li class="df aic  p8px12px g12px bb1px-s-gray200">
                            <div class="p0px pr w40px h40px as df">
                                <img class="br50px w40px "
                                    src="{{asset('additionalassets/avatarsquare/Olivia Rhye.jpg')}}">
                                <span class="pa dib w12px h12px br50p bgc-success500 b2px-s-fff t30px r0px"></span>
                            </div>
                            <div class="df fdc ">
                                <span>Olivia Rhye</span>
                                <span class="text-sm c-gray500">olivia@acssui.com</span>
                            </div>

                        </li>
                        <li class="df aic p8px12px g8px">
                            <span class="df">
                                <svg
                                    class="w18px  h18px stroke-gray400 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                                    <use href="{{asset('icons/feather-sprite.svg')}}#user" />
                                </svg>
                            </span>
                            <div class="w100p df aic jcsb">
                                <a href="#" class="tdn c-gray600 text-sm">View Profile</a>
                                <span class="text-xs c-gray600">⌘K->P</span>
                            </div>

                        </li>
                        <li class="df aic p8px12px g8px">
                            <span class="df">
                                <svg
                                    class="w18px  h18px stroke-gray400 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                                    <use href="{{asset('icons/feather-sprite.svg')}}#settings" />
                                </svg>
                            </span>
                            <div class="w100p df aic jcsb">
                                <a href="#" class="tdn c-gray600 text-sm">Setting</a>
                                <span class="text-xs c-gray600">⌘S</span>
                            </div>

                        </li>
                        <li class="df aic p8px12px g8px bb1px-s-gray200">
                            <span class="df">
                                <svg
                                    class="w18px  h18px stroke-gray400 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                                    <use href="{{asset('icons/feather-sprite.svg')}}#zap" />
                                </svg>
                            </span>
                            <div class="w100p df aic jcsb">
                                <a href="#" class="tdn c-gray600 text-sm">Keyboard hortcuts</a>
                                <span class="text-xs c-gray600">?</span>
                            </div>

                        </li>
                        <li class="df aic p8px12px g8px ">
                            <span class="df">
                                <svg
                                    class="w18px  h18px stroke-gray400 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                                    <use href="{{asset('icons/feather-sprite.svg')}}#home" />
                                </svg>
                            </span>
                            <div class="w100p df aic jcsb">
                                <a href="#" class="tdn c-gray600 text-sm">Company profile</a>
                                <span class="text-xs c-gray600">⌘K->C</span>
                            </div>

                        </li>
                        <li class="df aic p8px12px g8px ">
                            <span class="df">
                                <svg
                                    class="w18px  h18px stroke-gray400 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                                    <use href="{{asset('icons/feather-sprite.svg')}}#users" />
                                </svg>
                            </span>
                            <div class="w100p df aic jcsb">
                                <a href="#" class="tdn c-gray600 text-sm">Team</a>
                                <span class="text-xs c-gray600">⌘K->T</span>
                            </div>

                        </li>
                        <li class="df aic p8px12px g8px bb1px-s-gray200">
                            <span class="df">
                                <svg
                                    class="w18px  h18px stroke-gray400 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                                    <use href="{{asset('icons/feather-sprite.svg')}}#user-plus" />
                                </svg>
                            </span>
                            <div class="w100p df aic jcsb">
                                <a href="#" class="tdn c-gray600 text-sm">Invite colleagues</a>
                                <span class="text-xs c-gray600">⌘I</span>
                            </div>

                        </li>
                        <li class="df aic p8px12px g8px ">
                            <span class="df">
                                <svg
                                    class="w18px  h18px stroke-gray400 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                                    <use href="{{asset('icons/feather-sprite.svg')}}#message-circle" />
                                </svg>
                            </span>
                            <div class="w100p df aic jcsb">
                                <a href="#" class="tdn c-gray600 text-sm">Slack Community</a>
                                <span class="text-xs c-gray600">⌘K->S</span>
                            </div>

                        </li>
                        <li class="df aic p8px12px g8px ">
                            <span class="df">
                                <svg
                                    class="w18px  h18px stroke-gray400 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                                    <use href="{{asset('icons/feather-sprite.svg')}}#layers" />
                                </svg>
                            </span>
                            <div class="w100p df aic jcsb">
                                <a href="#" class="tdn c-gray600 text-sm">Changelog</a>
                                <span class="text-xs c-gray600">⌘K->C</span>
                            </div>

                        </li>
                        <li class="df aic p8px12px g8px ">
                            <span class="df">
                                <svg
                                    class="w18px  h18px stroke-gray400 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                                    <use href="{{asset('icons/feather-sprite.svg')}}#help-circle" />
                                </svg>
                            </span>
                            <div class="w100p df aic jcsb">
                                <a href="#" class="tdn c-gray600 text-sm">Support</a>
                                <span class="text-xs c-gray600">⌘/</span>
                            </div>

                        </li>
                        <li class="df aic p8px12px g8px bb1px-s-gray200  ">
                            <span class="df">
                                <svg
                                    class="w18px  h18px stroke-gray400 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                                    <use href="{{asset('icons/feather-sprite.svg')}}#box" />
                                </svg>
                            </span>
                            <div class="w100p df aic jcsb">
                                <a href="#" class="tdn c-gray600 text-sm">API</a>
                                <span class="text-xs c-gray600">⌘A</span>
                            </div>

                        </li>
                        <li class="df aic p8px12px g8px ">
                            <span class="df">
                                <svg
                                    class="w18px  h18px stroke-gray400 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                                    <use href="{{asset('icons/feather-sprite.svg')}}#log-out" />
                                </svg>
                            </span>
                            <div class="w100p df aic jcsb">
                                <a href="#" class="tdn c-gray600 text-sm">Log out</a>
                                <span class="text-xs c-gray600">⌥⇧Q</span>
                            </div>

                        </li>




                    </ul>
                </div>
                <!-- end  Dropdown-->
            </div>
            <!------end dot verticles------------>
        </div>
    </nav>
    @push('script')
    <script type="text/javascript" src="{{asset('js/static-classnames.js')}}"> </script>
    @endpush

</header>
{{-- /header --}}
