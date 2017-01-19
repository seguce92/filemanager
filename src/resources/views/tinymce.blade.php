<script type="text/javascript" src="{{ asset('vendor/seguce92/filemanager/prism/coy/prism.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/seguce92/filemanager/tinymce/tinymce.min.js') }}"></script>
<script>
    tinymce.init({
        selector: "textarea#tinymce",
        theme: "modern",
        language: "es",
        menubar: false,
        relative_urls : false,
        toolbar_items_size: 'small',
        fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt",
        plugins: [
            "responsivefilemanager advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
            "searchreplace wordcount visualblocks visualchars code insertdatetime media nonbreaking",
            "save table contextmenu directionality emoticons paste textcolor importcss colorpicker textpattern codesample fullpage"
        ],

        external_filemanager_path:"{!! str_finish(asset(config('seguce92.filemanager.filemanager')),'/') !!}",
        filemanager_title:"{{ config('seguce92.filemanager.filemanager_title') }}" ,
        external_plugins: {
            "filemanager" : "/filemanager/plugin.min.js",
        },

        toolbar1: "responsivefilemanager insertfile undo redo | fontsizeselect bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent blockquote | forecolor backcolor emoticons searchreplace | code codesample",
        toolbar2: "fullpage hr removeformat | link image media | table print preview"
    });
</script>
