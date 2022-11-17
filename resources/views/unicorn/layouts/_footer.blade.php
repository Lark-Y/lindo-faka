<!-- footer start-->
<footer class="footer p-3">
    <div class="row">
        <div class="col-12 text-center">
            @if(dujiaoka_config_get('is_open_power_by') == \App\Models\BaseModel::STATUS_OPEN)
                <div class="author">
                    <a href="https://t.me/LindoStudio" target="_blank">零度工作室:@LindoStudio</a>
                </div>
            @endif
            <div class="custom">
                {!! dujiaoka_config_get('footer') !!}
            </div>
        </div>
    </div>
</footer>
<!-- footer end-->
