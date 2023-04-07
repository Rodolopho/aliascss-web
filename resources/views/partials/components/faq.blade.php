<div class="p32px">
    <h1 class="display-lg w100p fwn ">FAQ</h1>
    <div class="  mla w100p mra">
        <ul x-data="{show:false}" class="p0px lsn df gap32px fdc _li-bt1px-s-gray200 _li-pt24px _li-fc-bn">
            <li class="df jcsb" x-data="{show:false}">
                <div class="">
                    <h5 class="c-gray900 text-lg fw5 m0px ">What is AliasCSS?</h5>
                    <p x-show="show" x-collapse class="  m0px  mt8px text-md fw4 c-gray500">AliaCSS is a post processor css framework. Which lets you to quickly experiment with
                        design of your layout. It is very easy to use</p>

                </div>

                <span @click="show=!show">
                    <svg
                        class="w16px h16px stroke-currentColor stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                        <use x-show="show" x-transition href="{{asset('icons/feather-sprite.svg')}}#minus-circle" />
                        <use x-show="!show" x-transition href="{{asset('icons/feather-sprite.svg')}}#plus-circle" />
                    </svg>
                </span>

            </li>
            <li class="df jcsb" x-data="{show:false}">
                <div class="">
                    <h5 class="c-gray900 text-lg fw5 m0px ">Learning Curve?</h5>
                    <p x-show="show" x-collapse class="  m0px  mt8px text-md fw4 c-gray500">If you know CSS you alreay know AlisCSS. Every Aliscss classnames are
                        derived from property and value your want to apply. For example .display-flex will apply disply:flex to the element . There are just few rules to follow thats all.
                    </p>

                </div>

                <span @click="show=!show">
                    <svg
                        class="w16px h16px stroke-currentColor stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                        <use x-show="show" x-transition href="{{asset('icons/feather-sprite.svg')}}#minus-circle" />
                        <use x-show="!show" x-transition href="{{asset('icons/feather-sprite.svg')}}#plus-circle" />
                    </svg>
                </span>

            </li>
            <li class="df jcsb" x-data="{show:false}">
                <div class="">
                    <h5 class="c-gray900 text-lg fw5 m0px ">Do i need to know javascript?</h5>
                    <p x-show="show" x-collapse class="  m0px  mt8px text-md fw4 c-gray500">There is not a single javascript code you need to write, But if you  know
                        javascript and npm , it will make you flow and design process very effective and quick. As module it can unlock more powerful features.
                    </p>

                </div>

                <span @click="show=!show">
                    <svg
                        class="w16px h16px stroke-currentColor stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                        <use x-show="show" x-transition href="{{asset('icons/feather-sprite.svg')}}#minus-circle" />
                        <use x-show="!show" x-transition href="{{asset('icons/feather-sprite.svg')}}#plus-circle" />
                    </svg>
                </span>

            </li>

        </ul>

    </div>
</div>
