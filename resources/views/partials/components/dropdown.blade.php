<div class="p32px ">
    <h1 class="display-lg w100p fwn ">Dropdown</h1>
    <!------Container------------>
    <div class="df aic gap32px">
    <div class="pr mw240px" x-data="{showDropDown:false}">
        <button @click="showDropDown=!showDropDown" class="dif fdr jcc aic g8px p10px14px  bgc-fff br8px bsbb shadow-md text-md c-000 b1px-s-gray300 oln">
            <span class="df c-gray600">Account</span>
            <span class="df">
                <svg class="w24px  h24px stroke-gray400 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                    <use x-show="!showDropDown" href="{{asset('icons/feather-sprite.svg')}}#chevron-down" />
                    <use x-show="showDropDown" href="{{asset('icons/feather-sprite.svg')}}#chevron-up" />
                </svg>
            </span>
        </button>
        <!--Dropdown-->
        <div @click.away="showDropDown=false" x-show="showDropDown"
            class="drop zi1 pa b1px-s-gray100 xw240px w100p l0px t100p bgc-fff  shadow-lg mt2px br8px">
            <ul class="p0px m0px lsn _li-h-bgc-gray100 text-md ">

                    <li class="df aic  p8px12px g12px bb1px-s-gray200">
                        <div class="p0px pr w40px h40px as df">
                            <img class="br50px w40px " src="{{asset('additionalassets/avatarsquare/Olivia Rhye.jpg')}}">
                            <span class="pa dib w12px h12px br50p bgc-success500 b2px-s-fff t30px r0px"></span>
                        </div>
                        <div class="df fdc ">
                            <span>Olivia Rhye</span>
                            <span class="text-sm c-gray500">olivia@acssui.com</span>
                        </div>

                    </li>
                    <li class="df aic p8px12px g8px" >
                        <span class="df">
                            <svg class="w18px  h18px stroke-gray400 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
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
                            <svg class="w18px  h18px stroke-gray400 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
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
                            <svg class="w18px  h18px stroke-gray400 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
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
                            <svg class="w18px  h18px stroke-gray400 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
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
                            <svg class="w18px  h18px stroke-gray400 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
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
                            <svg class="w18px  h18px stroke-gray400 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
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
                            <svg class="w18px  h18px stroke-gray400 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
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
                            <svg class="w18px  h18px stroke-gray400 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
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
                            <svg class="w18px  h18px stroke-gray400 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
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
                            <svg class="w18px  h18px stroke-gray400 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
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
                            <svg class="w18px  h18px stroke-gray400 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
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
    <!------Dotverticles------------>
    <div class="pr df mw240px jcfe" x-data="{showDropDown:false}">
        <span @click="showDropDown=!showDropDown"
            class="" acss-class="stroke-gray900">
                <svg
                    :class="showDropDown?'stroke-gray900':'stroke-gray400'" class="w24px  h24px  stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
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
                        <img class="br50px w40px " src="{{asset('additionalassets/avatarsquare/Olivia Rhye.jpg')}}">
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
    <!------End container------------>
</div>
