<div class="p32px">
    <h1 class="display-lg w100p fwn ">Inputs</h1>
    <div class="_button-m10px  df fdc g32px">
        <div class="df g8px fdc">
            <label class="text-md fw5">Email</label>
            <div class="df aic  g8px p8px12px bgc-fff br8px g8px b1px-s-gray300 shadow-xs xw400px">
                <div class="df jcsb aic w100p g8px text-lg ">
                    <input class="oln bn w100p " placeholder="hell@somemail.com" />
                    <span class="df">
                        <svg
                            class="w18px h18px stroke-gray400 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                            <use href="{{asset('icons/feather-sprite.svg')}}#help-circle" />
                        </svg>
                    </span>
                </div>
            </div>
            <small class="text-sm c-gray500">This is the user hint</small>
        </div>

        <div class="df g8px fdc">
            <label class="text-md fw5">Email</label>
            <div class="df aic  g8px p8px12px bgc-fff br8px g8px b1px-s-primary300 bxs0px0px0px5px-primary100 xw400px">
                <div class="df jcsb aic w100p g8px text-lg ">
                    <input class="oln bn w100p " placeholder="hell@somemail.com" />
                    <span class="df">
                        <svg
                            class="w18px h18px stroke-gray400 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                            <use href="{{asset('icons/feather-sprite.svg')}}#help-circle" />
                        </svg>
                    </span>
                </div>
            </div>
            <small class="text-sm c-gray500">This is the user hint</small>
        </div>

        <div class="df g8px fdc">
            <label class="text-md fw5">Email</label>
            <div class="df aic  g8px p8px12px bgc-fff br8px g8px b1px-s-primary300  xw400px">
                <div class="df jcsb aic w100p g8px text-lg ">
                    <span class="df">
                        <svg
                            class="w18px  h18px stroke-gray400 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                            <use href="{{asset('icons/feather-sprite.svg')}}#mail" />
                        </svg>
                    </span>
                    <input class="oln bn w100p " placeholder="hell@somemail.com" />
                    <span class="df">
                        <svg
                            class="w18px h18px stroke-gray400 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                            <use href="{{asset('icons/feather-sprite.svg')}}#help-circle" />
                        </svg>
                    </span>
                </div>
            </div>
            <small class="text-sm c-gray500">This is the user hint</small>
        </div>

        <div class="df g8px fdc">
            <label class="text-md fw5">Website</label>
            <div class="df aic  g16px p8px12px bgc-fff br8px g8px b1px-s-gray300  xw400px">
                <div class="text-md c-gray400  m-8px-12px p8px12px br8px0px0px8px brt1px-s-gray300">
                    https:\\
                </div>
                <div class="df jcsb aic w100p g8px text-lg ">

                    <input class="oln bn w100p " placeholder="www.example.com" />
                    <span class="df">
                        <svg
                            class="w18px h18px stroke-gray400 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                            <use href="{{asset('icons/feather-sprite.svg')}}#help-circle" />
                        </svg>
                    </span>
                </div>
            </div>
            <small class="text-sm c-gray500">This is the user hint</small>
        </div>

        <!------Phonenumber------------>
        <div class="df g8px fdc">
            <label class="text-md fw5">Phone</label>
            <div @click.away="showDropDown=false" x-data="{
                        showDropDown:false,country:'US', code:'+1',
                        countries:[{country:'US',code:'+1'},{country:'IND',code:'+91'},{country:'CAN',code:'+1'},{country:'JP',code:'+44'}]
                    }" class="df pr aic  g16px p8px12px bgc-fff br8px g8px b1px-s-gray300  xw400px">
                <div class="text-md c-gray400 df aic g8px  m-8px-12px p8px12px br8px0px0px8px cp brt1px-s-gray300"
                    @click="showDropDown=!showDropDown">
                    <span x-text="country">
                    </span>
                    <div class="dif">
                        <span class="df">
                            <svg
                                class="w18px  h18px stroke-gray400 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                                <use x-show="!showDropDown" href="{{asset('icons/feather-sprite.svg')}}#chevron-down" />
                                <use x-show="showDropDown" href="{{asset('icons/feather-sprite.svg')}}#chevron-up" />
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="df jcsb aic w100p g8px text-lg ">
                    <span class="df text-md c-gray400" x-text="code"></span>
                    <input class="oln bn w100p c-gray text-md " placeholder="(555) 000-00000" />
                    <span class="df">
                        <svg
                            class="w18px h18px stroke-gray400 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                            <use href="{{asset('icons/feather-sprite.svg')}}#help-circle" />
                        </svg>
                    </span>
                </div>
                <!--DropInput-->
                <div x-show="showDropDown"
                    class="zi123 drop pa b1px-s-gray300 w100p l0px t100p bgc-fff xh320px oya shadow-md mt2px br8px">
                    <ul class="p0px m0px lsn _li-h-bgc-gray300 text-md">
                        <template x-for="detail in countries">
                            <li class="df aic jcsb p8px12px cp" :class="country==detail.country?'bgc-success100':''"
                                @click="country=detail.country;code=detail.code; showDropDown=false;">
                                <div class="p0px">
                                    <span class="c-gray700" x-text="detail.country"></span>
                                    <span class="c-gray400" x-text="detail.code"></span>
                                </div>

                                <template x-if="country==detail.country">
                                    <span class="df">
                                        <svg
                                            class="w18px h18px stroke-success400 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                                            <use href="{{asset('icons/feather-sprite.svg')}}#check" />
                                        </svg>
                                    </span>
                                </template>



                            </li>
                        </template>

                    </ul>
                </div>
                <!-- end Input Drop-->
            </div>
            <small class="text-sm c-gray500">This is the user hint</small>
        </div>
        <!------End of Number------------>

        <!------Team Member------------>
        <div class="df g8px fdc">
            <label class="text-md fw5">Team Member</label>
            <div @click.away="showDropDown=false" x-data="{showDropDown:false, current:['Jason White','@jasonwh'],members:[
                ['Phoex Baker','@phonex'],['Olivia Rolly','@olivia'],['Jason White','@jasonwh'],['Udip Singh','@udaysi'],
                ['Biki John','@beekee'],['Robert Wright','@robert'],['Emily Bell','@emilybabe'],['Jenifer Larry','@jenylarry']
            ]}" class="df pr aic  g16px p8px12px bgc-fff br8px g8px b1px-s-gray300  xw400px">
                <div class="df jcsb aic w100p g8px text-lg  cp" @click="showDropDown=!showDropDown">
                    {{-- <input class="oln bn w100p c-gray text-md" value="" x-model="current[0]" /> --}}
                    <span class="oln bn w100p c-gray text-md" x-text="current[0]+current[1]"></span>
                    <span class="df">
                        <svg
                            class="w18px  h18px stroke-gray400 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                            <use x-show="!showDropDown" href="{{asset('icons/feather-sprite.svg')}}#chevron-down" />
                            <use x-show="showDropDown" href="{{asset('icons/feather-sprite.svg')}}#chevron-up" />
                        </svg>
                    </span>
                </div>
                <!--DropInput-->
                <div x-show="showDropDown"
                    class="drop zi1 pa b1px-s-gray300 w100p l0px t100p bgc-fff xh320px oya shadow-md mt2px br8px">
                    <ul class="p0px m0px lsn _li-h-bgc-gray300 text-md">
                        <template x-for="member in members">
                            <li class="df aic jcsb p8px12px cp" :class="current==member?'bgc-gray300':''"
                                @click="current=member;showDropDown=false">
                                <div class="p0px">
                                    <span class="c-gray700" x-text="member[0]"></span>
                                    <span class="c-gray400" x-text="member[1]"></span>
                                </div>
                                <template x-if="member==current">
                                    <span class="df">
                                        <svg
                                            class="w18px h18px stroke-gray400 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                                            <use href="{{asset('icons/feather-sprite.svg')}}#check" />
                                        </svg>
                                    </span>
                                </template>

                            </li>
                        </template>


                    </ul>
                </div>
                <!-- end Input Drop-->
            </div>
            <small class="text-sm c-gray500">This is the user hint</small>
        </div>
        <!------End of team member------------>


        <!------Team Member with profile pic ------------>
        <div class="df g8px fdc">
            <label class="text-md fw5">Team Member with profile pic</label>
            <div @click.away="showDropDown=false" x-data="{showDropDown:false, current:['Jason White','@jasonwh','Alec Whitten.jpg'],members:[
                        ['Phoex Baker','@phonex','Aliah Lane.jpg'],['Olivia Rolly','@olivia','Alisa Hester.jpg'],['Jason White','@jasonwh','Alec Whitten.jpg'],['Udip Singh','@udaysi','Kari Rasmussen.jpg'],
                        ['Biki John','@beekee','Anaiah Whitten.jpg'],['Robert Wright','@robert','Andi Lane.jpg'],['Emily Bell','@emilybabe','Candice Wu.jpg'],['Jenifer Larry','@jenylarry','Demi Wilkinson.jpg']
                    ]}" class="df pr aic  g16px p8px12px bgc-fff br8px g8px b1px-s-gray300  xw400px">
                <div class="df jcsb aic w100p g12px text-lg  cp" @click="showDropDown=!showDropDown">
                    {{-- <input class="oln bn w100p c-gray text-md" value="" x-model="current[0]" /> --}}

                    <span class="df">
                        <img class="br50px w24px " :src="'{{asset('additionalassets/avatarsquare')}}/'+current[2]" />
                    </span>
                    <span class="oln bn w100p c-gray text-md" x-text="current[0]+current[1]"></span>
                    <span class="df">
                        <svg
                            class="w18px  h18px stroke-gray400 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                            <use x-show="!showDropDown" href="{{asset('icons/feather-sprite.svg')}}#chevron-down" />
                            <use x-show="showDropDown" href="{{asset('icons/feather-sprite.svg')}}#chevron-up" />
                        </svg>
                    </span>
                </div>
                <!--DropInput-->
                <div x-show="showDropDown"
                    class="drop pa zi1 b1px-s-gray300 w100p l0px t100p bgc-fff xh320px oya shadow-md mt2px br8px">
                    <ul class="p0px m0px lsn _li-h-bgc-gray300 text-md">
                        <template x-for="member in members">
                            <li class="df aic jcsb p8px12px cp" :class="current==member?'bgc-gray100':''"
                                @click="current=member;showDropDown=false">
                                <div class="df g12px">
                                    <span class="df">
                                        <img class="br50px w24px "
                                            :src="'{{asset('additionalassets/avatarsquare')}}/'+member[2]" />
                                    </span>
                                    <div class="p0px">
                                        <span class="c-gray700" x-text="member[0]"></span>
                                        <span class="c-gray400" x-text="member[1]"></span>
                                    </div>
                                </div>
                                <template x-if="member==current">
                                    <span class="df">
                                        <svg
                                            class="w18px h18px stroke-gray400 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                                            <use href="{{asset('icons/feather-sprite.svg')}}#check" />
                                        </svg>
                                    </span>
                                </template>

                            </li>
                        </template>


                    </ul>
                </div>
                <!-- end Input Drop-->
            </div>
            <small class="text-sm c-gray500">This is the user hint</small>
        </div>
        <!------End Team Member with profile pic ------------>


        <!------Search team member------------>
        <div class="df g8px fdc">
            <label class="text-md fw5">Search Team Member</label>
            <div @click.away="showDropDown=false" x-init="$watch('searchTerm',value=>{
                    if(!value.trim()){searchList=[];return;}
                    searchList=members.filter(function(each){return each[0].toLowerCase().startsWith(value.toLowerCase())})
                })" x-data="{
                    showDropDown:false,
                     searchList:[],
                     members:[
                        ['Phoex Baker','@phonex','Aliah Lane.jpg'],['Olivia Rolly','@olivia','Alisa Hester.jpg'],['Jason White','@jasonwh','Alec Whitten.jpg'],['Udip Singh','@udaysi','Kari Rasmussen.jpg'],
                        ['Biki John','@beekee','Anaiah Whitten.jpg'],['Robert Wright','@robert','Andi Lane.jpg'],['Emily Bell','@emilybabe','Candice Wu.jpg'],['Jenifer Larry','@jenylarry','Demi Wilkinson.jpg']
                     ],
                    selected:[],
                    searchTerm:'',
                    removeData(data){this.selected.splice(this.selected.indexOf(data),1)},
                    pushData(data){if(this.selected.length==3){return};this.selected.push(data)},
                    }" class="df pr aic  g16px p8px12px bgc-fff br8px g8px b1px-s-gray300  xw400px">
                <div class="df  aic w100p g12px text-lg oya">
                    <span class="df">
                        <svg
                            class="w18px  h18px stroke-gray400 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                            <use href="{{asset('icons/feather-sprite.svg')}}#search" />

                        </svg>
                    </span>

                    <template x-for="member in selected">
                        <div class="df aic jcsb text-xs b1px-s-gray300 br5px g4px p4px bgc-fff">
                            <span class="df">
                                <img class="br50px w16px "
                                    :src="'{{asset('additionalassets/avatarsquare')}}/'+member[2]" />
                            </span>
                            <span class="oln bn w100p c-gray " x-text="member[0].split(' ')[0]"></span>
                            <span class="df" @click="removeData(member)">
                                <svg
                                    class="w16px h16px stroke-gray400 stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                                    <use href="{{asset('icons/feather-sprite.svg')}}#x" />
                                </svg>
                            </span>

                        </div>
                    </template>
                    <input class="oln bn  c-gray text-md w100p " value="" x-model="searchTerm" />



                </div>
                <!--DropInput-->
                <div x-show="searchList.length"
                    class="drop pa b1px-s-gray300 w100p l0px t100p bgc-fff xh320px oya shadow-md mt2px br8px">
                    <ul class="p0px m0px lsn _li-h-bgc-gray300 text-md">
                        <template x-for="member in searchList">
                            <template x-if="selected.indexOf(member)==-1">
                                <li class="df aic jcsb p8px12px cp"
                                    @click="pushData(member);showDropDown=false;searchTerm='';">
                                    <div class="df g12px">
                                        <span class="df">
                                            <img class="br50px w24px "
                                                :src="'{{asset('additionalassets/avatarsquare')}}/'+member[2]" />
                                        </span>
                                        <div class="p0px">
                                            <span class="c-gray700" x-text="member[0]"></span>
                                            <span class="c-gray400" x-text="member[1]"></span>
                                        </div>
                                    </div>

                                </li>
                            </template>
                        </template>


                    </ul>
                </div>
                <!-- end Input Drop-->
            </div>
            <small class="text-sm c-warning300">Maximum 3 members</small>
        </div>
        <!------End Search team member------------>
    </div>
</div>
