<div class="">
    <h1 class="display-lg w100p fwn ml10px">Colors</h1>

    <ul x-data="{ colors: AliasCSS.statementMaker.custom.color}" class=" df fww p0px">
        <template x-for="(color,index) in colors">
            <li class=" fs10px df fww aic fdc jcc br8px fww fdr f1 p10px m10px g8px"
                xx-bind:style="{border:'2px solid', borderColor:color}">

                <div x-bind:style="{background:color}" class="  w100px h100px br8px"></div>
                <span class="text-xs fw5" x-text="index"></span>
            </li>
        </template>
    </ul>
</div>
