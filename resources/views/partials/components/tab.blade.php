<div class="p32px oh ">
    <h1 class="display-lg w100p fwn ">Tab</h1>

<div class="df c-gray500   g32px pr" x-data="{selectedId:'tab-1'}">
    <div class="df fdc g8px wxc brt1px-s-gray200">
        <div class="c-gray500 cp" acss-class="brt1px-s-blue600 c-blue600 bgc-blue50" x-id="['tab']">
            <span  @click="selectedId=$el.id" :id="$id('tab')" :class="$el.id==selectedId?'bgc-blue50 brt1px-s-blue600 c-blue600 ':''"
                class="df ccc  g8px p8px12px tdn  -h-bgc-blue50 text-sm fw5">Overview</span>
        </div>
        <div class=" cp c-gray500" x-id="['tab']">
            <span  @click="selectedId=$el.id" :id="$id('tab')" :class="$el.id==selectedId?'bgc-blue50 brt1px-s-blue600 c-blue600':''"
                class="df ccc  g8px p8px12px tdn  -h-bgc-blue50 text-sm fw5">Introduction</span>
        </div>
        <div class="cp c-gray500" x-id="['tab']">
            <span  @click="selectedId=$el.id" :id="$id('tab')" :class="$el.id==selectedId?'bgc-blue50 brt1px-s-blue600 c-blue600':''"
                class="df ccc  g8px p8px12px tdn  -h-bgc-blue50 text-sm fw5">Conclusion</span>
        </div>
    </div>
    <div class="_div-p8px12px _div-pa _div-bgc-fff ">
        <div :id="$id('tab-body')" x-transition x-show="selectedId==$el.id.replace('-body','')">
            AliasCSS is CSS post processor, it first let you define classname then it will compile to corresponding CSS
            defination. There are two way to define classname shorthand and full semenatic approach.
            <p>
                If you CSS then you already know Aliascss, there are hardly 10-12 things you need to know before you
                start
                using it. It is very simple to use .
            </p>
        </div>
        <div :id="$id('tab-body')"x-transition  x-show="selectedId==$el.id.replace('-body','')">
            <p class="p0px m0px">
                With aliascss you can style your webpages using class attribute with post-define classname, for
                example<br><br>
                <code
                    class="bgc-gray100">&lt;h1 class="color-red font-size12px display-inline-block"&gt; Hello world&lt;/h1&gt;</code><br><br>
                OR, using shorthand<br><br>
                <code class="bgc-gray100">&lt;h1 class="c-red fs12px dib"&gt; Hello world&lt;/h1&gt;</code><br><br>
                Here we have defined the color, font size, display properties of h1 element first, then aliascss will
                compiles and
                defines the classname with the corresponing property and value/s in the styles tag or stylesheets.
                Generally every
                aliascss classname hold single propery and value for it.
            </p>
        </div>
        <div :id="$id('tab-body')"  x-transition x-show="selectedId==$el.id.replace('-body','')">
            In conclusion , Alias CSS will help you quicky develop your front end design. There are lots of room for
            experimenting  your design very easily. Also
            you can reuse you ui components anywhere.
        </div>
    </div>
</div>

</div>




{{-- <div class="df fdc g8px wmc">
    <div class="c-gray500">
        <a href="#" class="df ccc br6px g8px p8px12px tdn  -h-bgc-primary50 text-sm fw5">My Details</a>
    </div>
    <div class="c-gray500">
        <a href="#" class="df ccc br6px g8px p8px12px tdn  -h-bgc-primary50 text-sm fw5">Profile</a>
    </div>
    <div class="c-gray500">
        <a href="#" class="df ccc br6px g8px p8px12px tdn  -h-bgc-primary50 text-sm fw5">Password</a>
    </div>
    <div class="c-gray500">
        <a href="#" class="df ccc br6px g8px p8px12px tdn  -h-bgc-primary50 text-sm fw5">Team</a>
    </div>
    <div class="c-gray500">
        <a href="#" class="df ccc br6px g8px p8px12px tdn  -h-bgc-primary50 text-sm fw5">Plan</a>
    </div>
    <div class="c-gray500">
        <a href="#" class="df ccc br6px g8px p8px12px tdn  -h-bgc-primary50 text-sm fw5">Billing</a>
    </div>
    <div class="c-gray500">
        <a href="#" class="df ccc br6px g8px p8px12px tdn  -h-bgc-primary50 text-sm fw5">Email</a>
    </div>
    <div class="c-gray500">
        <a href="#" class="df jcsb IC ccc br6px g8px p8px12px tdn  -h-bgc-primary50 text-sm fw5">Notification
            <span class=" df bgc-gray100 w24px h24px aic jcc  br50p">2</span></a>
    </div>
    <div class="c-gray500">
        <a href="#" class="df ccc br6px g8px p8px12px tdn  -h-bgc-primary50 text-sm fw5">Interegration</a>
    </div>
    <div class="c-gray500">
        <a href="#" class="df ccc br6px g8px p8px12px tdn  -h-bgc-primary50 text-sm fw5">Api</a>
    </div>
</div> --}}
