<!------Search team member------------>
<div class="df pr g8px fdc" @click.away="searchTerm=''" x-init="$watch('searchTerm',value=>{
                    value=value.trim();
                    if(!value.trim()){classNames={};return;}
                    classNames={};
                    for (const cn in staticClassNames) {
                        if(cn.toLowerCase().startsWith(value.toLowerCase()) || staticClassNames[cn].toLowerCase().includes(value.toLowerCase())){
                            classNames[cn]=staticClassNames[cn];
                        }

                    }
                    {{-- classNames=staticClassNames.filter(function(each){return each[0].toLowerCase().startsWith(value.toLowerCase())}) --}}
                })" x-data="{
                    showDropDown:false,
                     searchList:this.members,
                     classNames:{},

                    searchTerm:'',
                    }">

    <div  class="df pr aic asfe  g16px p8px12px bgc-gray100 br8px g8px b1px-s-gray300  xw400px">
        <div class="df  aic w100p g12px text-lg oya">
            <span class="df">
                <svg
                    class="w18px  h18px stroke-gray400 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                    <use href="{{asset('icons/feather-sprite.svg')}}#search" />

                </svg>
            </span>


            <input class="oln bn  c-gray bgc-transparent text-md w100p " value="" placeholder=" Static classnames" x-model="searchTerm" />



        </div>

        <!-- end Input Drop-->
    </div>
    <!--DropInput-->
    <div  x-cloak x-show="Object.keys(classNames).length"
        class="  pa  zi12345 b1px-s-gray300 w100p p8px12px l0px t100p bgc-fff xh60vh  mw320px oya shadow-md mt2px br8px">
        <ul class="p0px m0px lsn  text-md _li-nc-2n-bgc-gray50">
            <template x-for="( key , i) in Object.keys(classNames)">

                <li class="df aic jcsb p8px12px ">
                    <div class="df  fdc w100p  ">

                        <div class="c-primary700 fsi text-sm" x-text="'.'+key"></div>
                        <div class="c-blue700 text-xs fw4 asfe " x-text="'{ '+ classNames[key] + ' }'"></div>

                    </div>

                </li>


            </template>

        </ul>
    </div>

</div>
<!------End Search team member------------>
