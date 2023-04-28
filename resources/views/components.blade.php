<x-app-layout>
<div class="wrapper">
@include('partials.header')
{{--<pre class="text-xs bgc-000000">
 <x-torchlight-code language='html'>
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
</x-torchlight-code>
</pre> --}}
<div class="p32px df g32px w100p">
    <div class="pr w128px dn md-db">
        <div class="pf ">
        @include('partials.side-navigation')
        </div>
    </div>

    <div class=" w100p oh">

         <div id="input">@include('partials.components.input')</div>
         <div id="button">@include('partials.components.button')</div>
         <div id="tooltip">@include('partials.components.tooltip')</div>
         <div id="checkbox">@include('partials.components.checkbox')</div>
         <div id="modal">@include('partials.components.modal')</div>
         <div id="dropdown">@include('partials.components.dropdown')</div>
         <div id="tab">@include('partials.components.tab')</div>
         <div id="faq">@include('partials.components.faq')</div>
         <div id="typography">@include('partials.components.typography')</div>
    </div>

</div>


@include('partials.footer')

</div>
{{-- @push('script')

@endpush --}}
</x-app-layout>
