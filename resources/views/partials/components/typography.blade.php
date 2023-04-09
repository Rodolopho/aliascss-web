<div class="p32px">
    <h1 class="display-lg w100p fwn ">Typography</h1>

    {{-- <div class="m16px">
        <div class=" p4px10px4px4px br16px bgc-blue50 text-xs fw5 c-gray500 dif wxc aic g12px">
            <span class="bgc-fff p2px10px br16px df aic g4px">Note
                <svg
                    class="w16px h16px stroke-currentColor stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                    <use href="{{asset('icons/feather-sprite.svg')}}#arrow-right"></use>
                </svg>
            </span>
            <span class="df aic gap4px"> Inter font is used in this site , if you like this free font you can <a href="https://rsms.me/inter">download here.</a>

            </span>
        </div>
    </div> --}}

    <h3 class="tdu">Text </h3>

    <ul x-data="{ textClasses: ['text-xl','text-lg','text-md', 'text-sm','text-xs']}" class="p0px">
        <template x-for="className in textClasses">


                <p x-bind:class="className" class="p0px20px c-gray700 brt1px-s-gray400">It's the world of technology and innovation. Make your self ready to explore<small class=" bgc-blue50 text-xs fw5 c-gray500 dib br5px  p2px8px ml8px " x-text="'.' + className+ ' '"></small></p>

        </template>
    </ul>

    <h3 class="m64px0px tdu ">Title and Heading</h1>
    <ul x-data="{ displayClasses: ['heading-2xl','heading-xl','heading-lg','heading-md','heading-sm','heading-xs']}" class="p0px">
        <template x-for="className in displayClasses">
            <div class="" acss-class="heading-2xl heading-xl heading-lg heading-md heading-sm heading-xs">
                <p x-bind:class="className" class=" df aic p0px20px c-gray700 brt2px-s-gray400" >Title & Headings <small class=" dib br5px  p2px8px ml8px bgc-blue50 text-xs fw5 c-gray500" x-text="'.' + className+ ' '"></small></p>
            </div>
        </template>
    </ul>


</div>
