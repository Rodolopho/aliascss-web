<x-app-layout>
<div class="wrapper">
@include('partials.header')

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
