@extends('layouts.admin')


@section('styles')
<link href="{{ asset('Modules/News/Resources/assets/css/https _maxcdn.bootstrapcdn.com_bootstrap_4.0.0-beta_css_bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('Modules/News/Resources/assets/css/https _cdnjs.cloudflare.com_ajax_libs_bootstrap-fileinput_4.4.7_css_fileinput.css') }}" rel="stylesheet">
@endsection

@section('content')
 <div class="container">
    
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">jQuery, Bootstrap Fileinput Example</h1><br>                
                    <div class="form-group">
                        <div class="file-loading">
                            <input id="image-file" type="file" name="file" accept="image/*" data-min-file-count="1" multiple>
                        </div>
                    </div>                
            </div>
        </div>
    </div>
@section('scripts')
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
@endsection
@endsection