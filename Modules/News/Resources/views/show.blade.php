@extends('layouts.admin')
@section('style')
@parent
<link href="{{ asset('Modules/News/Resources/assets/css/https _maxcdn.bootstrapcdn.com_bootstrap_4.0.0-beta_css_bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('Modules/News/Resources/assets/css/https _cdnjs.cloudflare.com_ajax_libs_bootstrap-fileinput_4.4.7_css_fileinput.css') }}" rel="stylesheet">
@endsection

section('content')
<div class="file-loading"></div>

<div class="file-preview-thumbnails">
    
<div class="file-preview-frame krajee-default  kv-preview-thumb" id="preview-1566896777842_77-0" data-fileindex="0" data-template="image"><div class="kv-file-content">
<img src="{{ asset('unnamed.jpg')}}" class="file-preview-image kv-preview-data" title="databse.png" alt="databse.png" style="width:auto;height:auto;max-width:100%;max-height:100%;">
</div><div class="file-thumbnail-footer">
    <div class="file-footer-caption" title="databse.png">
        <div class="file-caption-info">databse.png</div>
        <div class="file-size-info"> <samp>(111.38 KB)</samp></div>
    </div>
    <div class="file-thumb-progress kv-hidden"><div class="progress">
    <div class="progress-bar bg-success progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%;">
        Initializing...
     </div>
</div></div>
<div class="file-upload-indicator" title="Not uploaded yet"><i class="fa fa-plus-circle text-warning"></i></div>
<div class="file-actions">
    <div class="file-footer-buttons">
         <button type="button" class="kv-file-upload btn btn-kv btn-default btn-outline-secondary" title="Upload file"><i class="fa fa-upload"></i></button> <button type="button" class="kv-file-remove btn btn-kv btn-default btn-outline-secondary" title="Remove file"><i class="fa fa-trash"></i></button>
 <button type="button" class="kv-file-zoom btn btn-kv btn-default btn-outline-secondary" title="View Details"><i class="fa fa-search-plus"></i></button>     </div>
</div>

<div class="clearfix"></div>
</div>
</div>

</div>

section('scripts')
    @parent
    <script src="{{ asset('Modules/News/Resources/assets/js/https _code.jquery.com_jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('Modules/News/Resources/assets/js/https _cdnjs.cloudflare.com_ajax_libs_bootstrap-fileinput_4.4.7_js_fileinput.js') }}"></script>
    <script src="{{ asset('Modules/News/Resources/assets/js/https _cdnjs.cloudflare.com_ajax_libs_bootstrap-fileinput_4.4.7_themes_fa_theme.js') }}"></script>
    <script src="{{ asset('Modules/News/Resources/assets/js/https _cdnjs.cloudflare.com_ajax_libs_popper.js_1.11.0_umd_popper.min.js') }}"></script>
    <script src="{{ asset('Modules/News/Resources/assets/js/https _maxcdn.bootstrapcdn.com_bootstrap_4.0.0-beta_js_bootstrap.min.js') }}"></script>
    <script type="text/javascript">
        $("#image-file").fileinput({
            theme: 'fa',
            uploadUrl: "{{route('image.upload')}}",
            uploadExtraData: function() {
                return {
                    _token: "{{ csrf_token() }}",
                };
            },
            allowedFileExtensions: ['jpg', 'png', 'gif','jpeg'],
            overwriteInitial: false,
            maxFileSize:2048,
            maxFilesNum: 10
        });
    </script>
endsection
endsection