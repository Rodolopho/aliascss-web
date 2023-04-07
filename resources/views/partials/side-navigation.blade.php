<div class="bgc-fff" x-data="{
    components:['Input','Button','Tooltip','Checkbox','Modal','Dropdown','Tab','FAQ','Typography','Notification'],
}"
acss-class="_a-c-blue600 _a-bgc-blue50">
    <div class="df fdc g8px wmc">
        <template x-for="component in components">
            <div class="c-gray500" x-data="{selected:false}" :class="selected?'_a-c-blue600 _a-bgc-blue50':''"
                @@click="$dispatch('selected',{el:$el})"
                @@selected.window="$event.detail.el==$el?selected=true:selected=false">
                <a :href= "'#'+component.toLowerCase()" class="df ccc br6px g8px p8px12px tdn  -h-bgc-blue50 text-md fw5" x-text="component">Input</a>
            </div>
        </template>
    </div>
</div>
