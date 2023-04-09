<div class="df g16px fdc xw720px">
    <h1 class="display-md  c-gray700 p0px m24px0px">
        Quick Classname Compiler</h1>

    <form id="acss-form" action="#">
        <div class="df jcsb g8px">
            <div class="df aic w100p g8px p8px12px bgc-fff br8px b1px-s-gray300 shadow-xs">
                <div class="df jcsb aic w100p g8px  ">
                    <input class="oln bn w100p text-sm fw4 c-gray500 " id="acss-input"
                        placeholder="Type ACSS classname/s and get its compiled CSS defination e.g br5px" />
                    <span class="df">
                        {{-- <svg
                            class="w18px h18px stroke-gray400 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                            <use href="{{asset('icons/feather-sprite.svg')}}#help-circle" />
                        </svg> --}}
                    </span>
                </div>

            </div>
            <button class="button-sm text-sm   b1px-s-blue200 bgc-blue100 c-gray700 cp -h-bgc-blue300" id="acss-button"
                type="submit">
                <svg
                    class="w18px  h18px stroke-gray700 stroke-width1px stroke-linecap-round stroke-linejoin-round fill-none">
                    <use href="{{asset('icons/feather-sprite.svg')}}#cpu" />
                </svg>
                Compile
            </button>
        </div>
    </form>
    <div class=" p4px10px4px4px br16px bgc-blue50 text-xs fw5 c-gray500 dif wxc aic g12px">
        <span class="bgc-fff p2px10px br16px df aic g4px">Note
            <svg
                class="w16px h16px stroke-currentColor stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                <use href="{{asset('icons/feather-sprite.svg')}}#arrow-right" />
            </svg>
        </span>
        <span class="df aic gap4px"> input  classname/s  seperated by space.

        </span>
    </div>


    <div id="acss-box" class="h27rem b1px-s-ccc br5px pl20px bl15px-s-blueLight600 ff-courier text-sm oa">
        <br>
        <h1 id="" class="fw5 text-md lh2rem">[Here you can view Compiled ACSS className]</h1>
    </div>
</div>
