<div class="footer">
    <div class="layui-row">
        <div class="layui-col-md8 layui-col-md-offset2 layui-col-sm12">
            <div style="text-align: center">{!! dujiaoka_config_get('footer') !!}</div>
            @if(dujiaoka_config_get('is_open_power_by') == \App\Models\BaseModel::STATUS_OPEN)
                <p><a href="https://t.me/LindoStudio" target="_blank">零度工作室:@LindoStudio</a></p>
            @endif
        </div>
    </div>
</div>
