<div class="p32px df fdc g64px">
    <h1 class="display-lg w100p fwn ">Checkbox</h1>
    <!------Container------------>
    <div class="df fdc jcc naic md-fdr
      gap32px ">
        <!------Square------------>
        <div class="df gap8px ">
         <div class="df g8px">
            <div class="w16px h16px bgc-fff b1px-s-gray300 br4px">

            </div>
            <div class="w16px h16px bgc-primary50 b1px-s-primary600 br4px df aic jcc">
                <span class="df">
                    <svg class="w12px h12px stroke-primary600 stroke-width4px stroke-linecap-round stroke-linejoin-round fill-none">
                        <use href="{{asset('icons/feather-sprite.svg')}}#check" />
                    </svg>
                </span>
            </div>
            <div class="w16px h16px bgc-primary50 b1px-s-primary600 br4px df aic jcc">
                <span class="df">
                    <svg class="w12px h12px stroke-primary600 stroke-width4px stroke-linecap-round stroke-linejoin-round fill-none">
                        <use href="{{asset('icons/feather-sprite.svg')}}#minus" />
                    </svg>
                </span>
            </div>

            <div class="df gap8px">
                <div class="w20px h20px bgc-fff b1px-s-gray300 br4px">

                </div>
                <div class="w20px h20px bgc-primary50 b1px-s-primary600 br4px df aic jcc">
                    <span class="df">
                        <svg
                            class="w14px h14px stroke-primary600 stroke-width4px stroke-linecap-round stroke-linejoin-round fill-none">
                            <use href="{{asset('icons/feather-sprite.svg')}}#check" />
                        </svg>
                    </span>
                </div>
                <div class="w20px h20px bgc-primary50 b1px-s-primary600 br4px df aic jcc">
                    <span class="df">
                        <svg
                            class="w14px h14px stroke-primary600 stroke-width4px stroke-linecap-round stroke-linejoin-round fill-none">
                            <use href="{{asset('icons/feather-sprite.svg')}}#minus" />
                        </svg>
                    </span>
                </div>
            </div>
        </div>

        <!------Circle------------>
        <div>
        <div class="df gap8px">
            <div class="w20px h20px br50p bgc-fff b1px-s-gray300 ">

            </div>
            <div class="w20px h20px bgc-primary50 b1px-s-primary600 br50p  df aic jcc">
                <span class="df bgc-primary600 br50p w10px h10px " >

                </span>
            </div>
            <div class="w20px h20px bgc-primary600 b1px-s-primary600 br50p df aic jcc">
                <span class="df">
                    <svg
                        class="w14px h14px stroke-fff stroke-width4px stroke-linecap-round stroke-linejoin-round fill-none">
                        <use href="{{asset('icons/feather-sprite.svg')}}#check" />
                    </svg>
                </span>
            </div>

        </div>
    </div>
        </div>
    <!------rember me------------>
   <div class="df gap8px" x-data="{checked:false}">
        <div @click="checked=!checked" :class="checked?'b1px-s-primary600':'b1px-s-gray300'" class="cp w16px h16px bgc-fff br4px df aic jcc">
            <span x-show="checked" class="df">
                <svg class="w12px h12px stroke-primary600 stroke-width4px stroke-linecap-round stroke-linejoin-round fill-none">
                    <use href="{{asset('icons/feather-sprite.svg')}}#check" />
                </svg>
            </span>
        </div>
        <div class="df fdc">
            <span class="text-sm fw5 c-gray700">Remember me</span>
            <span class="text-sm fw4 c-gray500">Save my logins details for next time</span>
        </div>
    </div>
    <!------remember me circle------------>
    <div class="df gap8px" x-data="{checked:false}">
        <div @click="checked=!checked" :class="checked?'b1px-s-primary600':'b1px-s-gray300'"
            class="cp w16px h16px bgc-fff br50px df aic jcc">
            <span x-show="checked" class="df w10px h10px br50p bgc-primary600">
            </span>
        </div>
        <div class="df fdc">
            <span class="text-sm fw5 c-gray700">Remember me</span>
            <span class="text-sm fw4 c-gray500">Save my logins details for next time</span>
        </div>
    </div>
    </div>
    <!------End container------------>
    <div class="  df g32px fdc">
        <h1>Checkgroup</h1>
        <div class=" br8px bgc-fff p12px df  jcsb" x-data="{checked:false}" :class="checked?'bgc-primary50 b1px-s-primary600':'b1px-s-gray200 bgc-fff'">
            <div class="df g8px ">
                <span class="df bgc-primary100  h36px aic jcc br50p b4px-s-primary50">
                    <svg  class="w16px  h16px stroke-primary600 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                        <use href="{{asset('icons/feather-sprite.svg')}}#layers" />
                    </svg>
                </span>
                <div class="text-sm df fdc fw4 " :class="checked?'c-primary600':'c-gray500'">
                    <span><strong class="fw7" :class="checked?'c-primary800':'c-gray700'">Basic Plan </strong> $10/month</span>
                    <span class="">Includes up to 10 users, 20GB indiviual data and access to all features.</span>

                </div>
            </div>
            <div class="df gap8px" >
                <div @click="checked=!checked" :class="checked?'b1px-s-primary600':'b1px-s-gray300'"
                    class="cp w16px h16px bgc-fff br50px df aic jcc">
                    <span x-show="checked" class="df w10px h10px br50p bgc-primary600">
                    </span>
                </div>
            </div>
        </div>
        <!------checkgroup2------------>
        <div x-data="{checked:false}" :class="checked?'b1px-s-primary600':'b1px-s-gray200 bgc-fff'" class=" df fdc br8px bgc-fff ">
            <div class="  df aic  jcsb p12px br8px8px0px0px"
                :class="checked?'bgc-primary50 bb1px-s-primary600':'bb1px-s-gray200'" acss-class="bb1px-s-primary600">
                <div class="df g8px aic">
                    <span class="df bgc-primary100  h36px aic jcc br50p b4px-s-primary50">
                        <svg
                            class="w16px  h16px stroke-primary600 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                            <use href="{{asset('icons/feather-sprite.svg')}}#layers" />
                        </svg>
                    </span>
                    <div class="text-sm df fdc fw4 " :class="checked?'c-primary600':'c-gray500'">
                        <span><strong class="fw7" :class="checked?'c-primary800':'c-gray700'">Basic Plan </strong>
                    </div>
                </div>
                <div class="df gap8px ">
                    <div @click="checked=!checked" :class="checked?'b1px-s-primary600':'b1px-s-primary300'"
                        class="cp w16px h16px bgc-fff br50px df aic jcc bxs0px0px1px4px-primary100">
                        <span x-show="checked" class="df w10px h10px br50p bgc-primary600">
                        </span>
                    </div>
                </div>
            </div>
            <div class="df jcsb p16px">
                <div class="df fdc c-gray500  gap4px text-sm fw4">
                    <span><strong class="c-gray700 display-sm fw6">$10</strong> per month</span>
                    <span class="">Includes up to 10 users, 20GB indiviual data and access to all features.</span>
                </div>
                <span class=" df c-success700 bgc-success50 text-xs fw5  h100p p4px8px br16px">Limited time only</span>
            </div>
        </div>
        <!------checkgroup three------------>
        <div class=" br8px bgc-fff p12px df  jcsb" x-data="{checked:false}"
            :class="checked?'bgc-primary50 b1px-s-primary600':'b1px-s-gray200 bgc-fff'">
            <div class="df g8px ">
                <div class="p0px w40px h40px as df">
                    <span class="df aic">
                        <svg class="w24px  h24px stroke-primary600 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                            <use href="{{asset('icons/feather-sprite.svg')}}#user" />
                        </svg>
                    </span>
                </div>
                <div class="df fdc g4px" :class="checked?'c-primary600':'c-gray500'">
                    <span class="text-sm "><span class="c-gray700 fw5" acss-class="c-primary700" :class="checked?'c-primary700':'c-gray700'">Olivia</span>@olivia</span>
                    <span class="text-sm ">Product Manager, Integrations</span>
                </div>
            </div>
            <div class="df gap8px">
                <div @click="checked=!checked" :class="checked?'b1px-s-primary600':'b1px-s-gray300'"
                    class="cp w16px h16px bgc-fff br50px df aic jcc">
                    <span x-show="checked" class="df w10px h10px br50p bgc-primary600">
                    </span>
                </div>
            </div>
        </div>

    </div>
</div>
