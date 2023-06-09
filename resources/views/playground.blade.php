<x-app-layout>
    @push('script-head')
    <script src="{{asset('/codemirror5-master/lib/codemirror.js')}}"></script>
    <script src="{{asset('codemirror5-master/mode/xml/xml.js')}}"></script>
    <script src="{{asset('codemirror5-master/mode/css/css.js')}}"></script>
    <script src="{{asset('codemirror5-master/mode/javascript/javascript.js')}}"></script>
    <script src="{{asset('/codemirror5-master/mode/htmlmixed/htmlmixed.js')}}"></script>
    <script src="{{asset('/codemirror5-master/addon/edit/closetag.js')}}"></script>
    <script src="{{asset('/codemirror5-master/addon/edit/matchtags.js')}}"></script>
    <script src="{{asset('/codemirror5-master/addon/edit/closebrackets.js')}}"></script>
    <script src="{{asset('/js/browser.js')}}"></script>
    @endpush
    @push('style-head')
    <link rel="stylesheet" href="{{asset('codemirror5-master/lib/codemirror.css')}}">
    <link rel="stylesheet" href="{{asset('codemirror5-master/theme/zenburn.css')}}">
    <style id="playground" ></style>
    @endpush
<div class="wrapper">
@include('partials.header')

<div class="m16px">
    <div class=" p4px10px4px4px br16px bgc-blue50 text-xs fw5 c-gray500 dif wxc aic g12px">
        <span class="bgc-fff p2px10px br16px df aic g4px">Note
            <svg
                class="w16px h16px stroke-currentColor stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                <use href="{{asset('icons/feather-sprite.svg')}}#arrow-right"></use>
            </svg>
        </span>
        <span class="df aic gap4px">write some html code here to try aliascss.

        </span>
    </div>
</div>
{{-- Main Body --}}
<div class=" df g32px w100p">
<div class="w100vw mh100vh df fdc  b1px-s-gray300 c-gray600" x-data="{
            code:'',
            runCode:'',
            live:false,
            get getCode(){
                return this.live?this.code:'';

            }

        }" x-init="$watch('code',(value)=>{
            if(live){
                document.getElementById('playground').innerText=AliasCSS.classPrinter.returnStatement(document.getElementById('output-area'));
            }

            })">
    <!------Code Area------------>
    <div class=" p0px32px jcfe action_bar  g32px df aic md-w6col bgc-blue100 h40px">
        <div class="df g4px cp" @click="live=!live" :class="live?'c-blue700 bgc-gray300 p4px8px br4px':''"
            acss-class="bgc-gray300 p4px8px br4px c-blue700">
            <svg :class="live?'stroke-blue700':'stroke-currentColor'" acss-class="stroke-currentColor  stroke-blue700"
                class="w16px h16px  stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                <use href="{{asset('icons/feather-sprite.svg')}}#eye"></use>
            </svg>
            live
        </div>
        <span class="df aic cp "
            @click="$refs.output.innerHTML=code;
            document.getElementById('playground').innerText=AliasCSS.classPrinter.returnStatement(document.getElementById('output-area'));
            ">
            <svg
                class="w16px h16px stroke-currentColor stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                <use href="{{asset('icons/feather-sprite.svg')}}#terminal"></use>
            </svg>
            Run
        </span>
        <span @click="show=true;copyContent(code);showCopy()" class=" pr df c-gray500 cp" x-data="{
                    show:false,
                    showCopy(){
                        setTimeout(()=>{
                            this.show=false;
                        },1000)
                    },

                }">
            <svg
                class="w16px h16px stroke-currentColor stroke-width2px stroke-linecap-round stroke-linejoin-round fill-none">
                <use href="{{asset('icons/feather-sprite.svg')}}#copy"></use>
            </svg>
            <div x-show="show" x-transition
                class="pa p8px12px t100p mt12px  zi10 bgc-fff b1px-s-gray100 shadow-lg text-xs bgc-gray700 c-fff br8px fw5 dif jcc aic">
                Copied!
            </div>
        </span>

    </div>
    <div class="df fdc md-fdr">
        <div class="pr md-w6col bgc-gray100 bl12px-s-blue100 " @keyup="code=editor.getValue()">
            <textarea id="code-editor"></textarea>
        </div>

        <!------End code Area------------>
        <!------Output Area------------>
        <div x-ref="output" class="md-w6col pl20px bl1px-s-gray300 " id="output-area" x-html="getCode">

        </div>
    </div>


    <!------end output Area------------>
</div>


</div>


@include('partials.footer')

</div>
@push('script')
    <script>
        var editor=CodeMirror.fromTextArea(document.getElementById('code-editor'),{
                mode:'htmlmixed',
                htmlMode:true,
                theme:'zenburn',
                lineNumbers:true,
                autoCloseTags:true,
                autoCloseBrackets:true,
                tabSize: 4,
                lineWrapping:true,
                extraKeys: {
                'Tab': 'emmetExpandAbbreviation',
                'Esc': 'emmetResetAbbreviation',
                'Enter': 'emmetInsertLineBreak'
                },
            })

            editor.setSize('0.5'*window.innerWith, '100vh');

            async function copyContent(con) {

            try {
            await navigator.clipboard.writeText(con);
            console.log('Content copied to clipboard');

            } catch (err) {
            console.error('Failed to copy: ', err);

            }
            }

    </script>
@endpush
</x-app-layout>
