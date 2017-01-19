<script type="text/javascript" src="{{ asset('vendor/seguce92/filemanager/fancybox/jquery.fancybox.js') }}"></script>
<script>
    jQuery(document).ready(function ($) {
        $('.filemanager-modal').fancybox({
            'width'   : 900,
            'height'  : 600,
            'type'    : 'iframe',
            'autoScale'   : false,
            'autoDimensions': false,
            'autoSize' : false
        });
    });

    $(document).on('click','.clear_picker[data-inputid=image-filemanager]',function (event) {
        event.preventDefault();
        var updateID = $(this).attr('data-inputid');
        $("#"+updateID).val("");
    });
</script>
