<div class="p32px df fdc g64px">
    <h1 class="display-lg w100p fwn ">Modal</h1>
    <!------Container------------>
    <div class="df g12px">
    <div x-data="{showModal:false}">
        <div class="bgc-gray300 dib p12px18px br8px cp " @click="showModal=!showModal">
            Modal1
        </div>
        <div x-show="showModal" class="pf zi1234567 w100vw h100vh t0px l0px bgc-0000000000d5 df aic jcc">
            <div x@click.away="showModal=false" class="df bgc-fff aic jcsb p18px w400px br12px fdc g20px">
                <div class="df aic jcsb w100p">
                    <span class="bgc-success100 b8px-s-success50 w48px h48px aic jcc df br50pc">
                        <svg
                            class="w16px h16px stroke-success600 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                            <use href="{{asset('icons/feather-sprite.svg')}}#check-circle"></use>
                        </svg>
                    </span>
                    <span class="d " @click="showModal=false">
                        <svg
                            class="w24px h24px stroke-gray500 -h-stroke-gray900 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                            <use href="{{asset('icons/feather-sprite.svg')}}#x"></use>
                        </svg>
                    </span>
                </div>
                <div class="w100p df fdc g8px">
                    <span class="text-lg fw5 m0pc c-gray900 ">
                        Blog Plublished Succefully
                    </span>
                    <span class="c-gray500 text-sm fw4 ">
                        This blog post has been published. Team members will be able to edit this post and republish
                        changes.
                    </span>
                </div>
                <div class="df g12px _button-p10px18px _button-w170px _button-shadow-xs">
                    <button @click="showModal=false" class="button-lg text-md fw5 bgc-fff c-gray700  b1px-s-gray300 br8px">
                        Cancel
                    </button>
                    <button @click="showModal=false"  class="button-lg text-md fw5 bgc-blue400 c-fff b1px-s-blue400 br8px">
                        Confirm
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!------demo------------>
    <div x-data="{showModal:false}">
        <div class="bgc-gray300 dib p12px18px br8px cp " @click="showModal=!showModal">
            Modal2
        </div>
        <div x-show="showModal" class="pf zi1234567 w100vw h100vh t0px r0px bgc-0000000000d5 df aic jcc">
            <div x@click.away="showModal=false" class="df m10px bgc-fff aic jcsb p18px w554px br12px fdc g32px">
                <div class="df aic  w100p g24px ">
                    <span class="bgc-error100 b8px-s-error50   aic jcc df br50pc">
                        <svg
                            class="w24px h24px stroke-error600 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                            <use href="{{asset('icons/feather-sprite.svg')}}#save"></use>
                        </svg>
                    </span>
                    <div class="df fdc g8px w100p">
                        <span class="text-lg c-gray900 ">Unsaved Changes</span>
                        <span class="text-sm c-gray500">Do you want to save or discard changes?</span>
                    </div>
                    <span class="d " @click="showModal=false">
                        <svg
                            class="w24px h24px stroke-gray500 -h-stroke-gray900 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                            <use href="{{asset('icons/feather-sprite.svg')}}#x"></use>
                        </svg>
                    </span>
                </div>

                <div class="df jcfe  w100p g12px _button-p10px18px _button-fw4-i _button-w170px _button-shadow-xs">
                    <button @click="showModal=false" class="button-lg text-md  bgc-fff c-gray700  b1px-s-gray300 br8px">
                        Discard
                    </button>
                    <button @click="showModal=false" class="button-lg text-md  bgc-blue400 c-fff b1px-s-blue400 br8px">
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!------demo------------>
    <div x-data="{showModal:false}">
        <div class="bgc-gray300 dib p12px18px br8px cp " @click="showModal=!showModal">
            Sign in
        </div>
        <div x-show="showModal" x-transition.duration.5000ms x-transition.scale.origin.top class="pf zi1234567 w100vw h100vh  t0px r0px bgc-0000000000d5 df aic jcc">
            <div   class="df bgc-fff aic jcsb p24px br12px fdc g20px">
                <div class="df aic jcfe  w100p  ">
                    <span class=" mra mla bgc-primary100 b8px-s-primary50  aic jcc df br50pc">
                        <svg
                            class="w24px h24px stroke-primary600 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                            <use href="{{asset('icons/feather-sprite.svg')}}#shield"></use>
                        </svg>
                    </span>
                    <span class="d " @click="showModal=false">
                        <svg
                            class="w24px h24px stroke-gray500 -h-stroke-gray900 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                            <use href="{{asset('icons/feather-sprite.svg')}}#x"></use>
                        </svg>
                    </span>
                </div>
                <div class="df fdc g8px w100p aic">
                    <span class="text-lg fw5 c-gray900 ">Please Enter your Password</span>
                    <span class="text-sm fw4 c-gray500">Enter the password to make this change</span>
                </div>
                <div class=" w100p df fdc jcc ">
                    <div class="df g8px fdc">
                        <label class="text-sm c-gray500 fw5">Email</label>
                        <div class="df aic  g8px p8px12px bgc-fff br8px g8px b1px-s-gray300 shadow-xs xw400px">
                            <div class="df jcsb aic w100p g8px text-lg ">
                                <input class="oln bn w100p " placeholder="hell@somemail.com">
                            </div>
                        </div>
                        <div class="df g8px fdc mt20px">
                            <label class="text-sm fw5 c-gray500">Password</label>
                            <div class="df aic  g8px p8px12px bgc-fff br8px g8px b1px-s-gray300 shadow-xs xw400px">
                                <div class="df jcsb aic w100p g8px text-lg ">
                                    <input class="oln bn w100p c-gray500 " value="password" type="password">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="df jcfe  w100p g12px _button-p10px18px _button-fw4-i _button-w170px _button-shadow-xs">
                    <button @click="showModal=false" class="button-lg text-md  bgc-fff c-gray700  b1px-s-gray300 br8px">
                        cancel
                    </button>
                    <button @click="showModal=false"
                        class="button-lg text-md  bgc-primary600 c-fff b1px-s-primary600 br8px">
                        Sign in
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!------------------>
    </div>
    <!------End Container------------>
</div>
