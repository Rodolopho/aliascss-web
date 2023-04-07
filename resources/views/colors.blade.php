<x-app-layout>
<div class="wrapper">
@include('partials.header')

<div class="p32px  g32px w100p">
    <div class="m16px w100p dn tab-db">
        <div class=" ml32px p4px10px4px4px br16px bgc-blue50 text-xs fw5 c-gray500 dif wxc aic g12px">
            <span class="bgc-fff p2px10px br16px df aic g4px">Note
                <svg
                    class="w16px h16px stroke-currentColor stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                    <use href="{{asset('icons/feather-sprite.svg')}}#arrow-right"></use>
                </svg>
            </span>
            <span class="df aic  gap4px"> These are custom color created just for reference , you can also create your own
                custom color.

            </span>
        </div>
    </div>
    <div class="df g32px tab-p16px" x-data="{
                colorTitle:'All',
                show:true,
                colorCato:['Primary','Success','Error','Warning','Gray','Indigo','violet','Orange','Green','Blue','Moss','Teal','Cyan','purple',
                    'fuchsia','Pink','Rose','Orange','Yellow','info','Danger',],
                    colors: AliasCSS.statementMaker.custom.color,
                     filterColor(color){
                        return this.colors.filter((e)=>e.includes(color))
                    }
                }">

        <div class="tab-ml32px">
            <div class="bgc-fff" x-data acss-class="_span-c-blue600 _span-bgc-blue50">
                <div class="df fdc g8px wmc">
                    <div class="c-gray500" x-data="{selected:true}" :class="selected?'_span-c-blue600 _span-bgc-blue50':''"
                        @@click="$dispatch('selected',{el:$el,currentColor:''}); colorTitle='All';"
                        @@selected.window="$event.detail.el==$el?selected=true:selected=false">
                        <span class="df ccc br6px g8px p4px8px tdn  -h-bgc-blue50 text-xs fw5" x-text="'All'"></span>
                    </div>
                    <template x-for="colorName in colorCato">
                        <div class="c-gray500 cp" x-data="{selected:false}"
                            :class="selected?'_span-c-blue600 _span-bgc-blue50':''"
                            @@click="$dispatch('selected',{el:$el, currentColor:colorName});colorTitle=colorName"
                            @@selected.window="$event.detail.el==$el?selected=true:selected=false">
                            <span class="df ccc br6px g8px p4px8px tdn  -h-bgc-blue50 text-xs fw5"
                                x-text="colorName "></span>
                        </div>
                    </template>
                </div>
            </div>
        </div>
        <div>
            <div class="">
                <h1 class="display-sm w100p fwn ml10px" x-text="colorTitle + ' Colors'">Colors</h1>
                <ul class=" df fww p0px"
                    acss-class="">
                    <template x-for="(color,index) in colors">
                        <li x-transition
                            @@selected.window="index.toLowerCase().includes($event.detail.currentColor.toLowerCase())?$el.style.display='initial':$el.style.display='none'"
                            class=" fs10px df   aic fdc jcc br8px  p10px m10px md-g8px"
                            xx-bind:style="{border:'2px solid', borderColor:color}">

                            <div x-bind:style="{background:color}" class="w72px h72px md-w100px md-h100px br8px"></div>
                            <span class="text-xs fw5" x-text="index"></span>
                        </li>
                    </template>
                </ul>
            </div>
        </div>
    </div>

</div>



@include('partials.footer')

</div>
{{-- @push('script')

@endpush --}}
</x-app-layout>
