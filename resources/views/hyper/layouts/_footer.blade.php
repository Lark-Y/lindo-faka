<!-- Footer Start -->
<footer class="hyper-footer">
    <div class="container">
        <div class="row">
            @if(dujiaoka_config_get('is_open_power_by') == \App\Models\BaseModel::STATUS_OPEN)
            <div class="col-md-6">
            	<div class="footer-links">
                    <a href="https://t.me/LindoStudio" target="_blank">零度工作室:@LindoStudio</a>
                </div>
            </div>
            @endif
            <div class="col-md-6">
                <div class="text-md-right footer-links d-none d-md-block">
                    {!! dujiaoka_config_get('footer') !!}
                </div>
            </div>
        </div>
    </div>
    <div class="back-to-top">
        <button class=" btn btn-primary" id="back-to-top">
            <i class="dripicons-chevron-up"></i>
        </button>
    </div>
</footer>
<!-- end Footer -->
