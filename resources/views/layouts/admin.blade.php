<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ trans('global.site_title') }}</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/css/https _stackpath.bootstrapcdn.com_bootstrap_4.1.3_css_bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/css/https _cdnjs.cloudflare.com_ajax_libs_font-awesome_4.7.0_css_font-awesome.css')}}">
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('css/css/https _use.fontawesome.com_releases_v5.2.0_css_all.css')}}"> -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/css/https _use.fontawesome.com_releases_v5.2.0_css_all.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/css/https _cdn.datatables.net_1.10.19_css_jquery.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/css/https _cdn.datatables.net_1.10.19_css_dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/css/https _cdn.datatables.net_buttons_1.2.4_css_buttons.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/css/https _cdn.datatables.net_select_1.3.0_css_select.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/css/https _unpkg.com_@coreui_coreui@2.1.12_dist_css_coreui.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/css/https _cdnjs.cloudflare.com_ajax_libs_select2_4.0.5_css_select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/css/https _cdnjs.cloudflare.com_ajax_libs_bootstrap-datetimepicker_4.17.47_css_bootstrap-datetimepicker.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/css/https _cdnjs.cloudflare.com_ajax_libs_dropzone_5.5.1_min_dropzone.min.css')}}">
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" /> -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" /> -->
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" />
    <!-- <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" /> -->
    <!-- <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" /> -->
    <!-- <link href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" rel="stylesheet" /> -->
    <!-- <link href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css" rel="stylesheet" /> -->
    <!-- <link href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css" rel="stylesheet" /> -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" /> -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" /> -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" /> -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" /> -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />

    @yield('styles')

<link rel="apple-touch-icon" sizes="57x57" href="{{ asset('public/img/favicon/apple-icon-57x57.png') }}">
<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('public/img/favicon/apple-icon-60x60.png') }}">
<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('public/img/favicon/apple-icon-72x72.png') }}">
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('public/img/favicon/apple-icon-76x76.png') }}">
<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('public/img/favicon/apple-icon-114x114.png') }}">
<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('public/img/favicon/apple-icon-120x120.png') }}">
<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('public/img/favicon/apple-icon-144x144.png') }}">
<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('public/img/favicon/apple-icon-152x152.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('public/img/favicon/apple-icon-180x180.png') }}">
<link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('public/img/favicon/android-icon-192x192.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('public/img/favicon/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('public/img/favicon/favicon-96x96.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/img/favicon/favicon-16x16.png') }}">
<link rel="manifest" href="{{ asset('public/img/favicon/manifest.json') }}">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="{{ asset('public/img/favicon//ms-icon-144x144.png') }}">
<meta name="theme-color" content="#ffffff">
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed pace-done sidebar-lg-show">
    <header class="app-header navbar">
        <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <span class="navbar-brand-full">Management</span>
            <span class="navbar-brand-minimized">M</span>
        </a>
        <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
            <span class="navbar-toggler-icon"></span>
        </button>

        <ul class="nav navbar-nav ml-auto">
            @if(count(config('panel.available_languages', [])) > 1)
                <li class="nav-item dropdown d-md-down-none">
                    <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        {{ strtoupper(app()->getLocale()) }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        @foreach(config('panel.available_languages') as $langLocale => $langName)
                            <a class="dropdown-item" href="{{ url()->current() }}?change_language={{ $langLocale }}">{{ strtoupper($langLocale) }} ({{ $langName }})</a>
                        @endforeach
                    </div>
                </li>
            @endif
        </ul>
    </header>

    <div class="app-body">
        @include('partials.menu')
        <main class="main">


            <div style="padding-top: 20px" class="container-fluid">

                @yield('content')

            </div>


        </main>
        <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </div>
    <script src="{{ asset('js/js/http _cdn.datatables.net_1.10.19_js_jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/js/https _cdnjs.cloudflare.com_ajax_libs_jquery_3.3.1_jquery.min.js') }}"></script>
    <script src="{{ asset('js/js/https _stackpath.bootstrapcdn.com_bootstrap_4.1.1_js_bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/js/https _cdnjs.cloudflare.com_ajax_libs_popper.js_1.14.3_umd_popper.min.js') }}"></script>
    <script src="{{ asset('js/js/https _unpkg.com_@coreui_coreui@2.1.12_dist_js_coreui.min.js') }}"></script>
    <script src="{{ asset('js/js/https _cdn.datatables.net_1.10.19_js_dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/js/http _cdn.datatables.net_buttons_1.2.4_js_dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/js/http _cdn.datatables.net_buttons_1.2.4_js_buttons.flash.min.js') }}"></script>
    <script src="{{ asset('js/js/https _cdn.datatables.net_buttons_1.2.4_js_buttons.html5.min.js') }}"></script>
    <script src="{{ asset('js/js/https _cdn.datatables.net_buttons_1.2.4_js_buttons.print.min.js') }}"></script>
    <script src="{{ asset('js/js/https _cdn.datatables.net_buttons_1.2.4_js_buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('js/js/https _cdn.rawgit.com_bpampuch_pdfmake_0.1.18_build_pdfmake.min.js') }}"></script>
    <script src="{{ asset('js/js/https _cdn.rawgit.com_bpampuch_pdfmake_0.1.18_build_vfs_fonts.js') }}"></script>
    <script src="{{ asset('js/js/https _cdnjs.cloudflare.com_ajax_libs_jszip_2.5.0_jszip.min.js') }}"></script>
    <script src="{{ asset('js/js/https _cdn.datatables.net_select_1.3.0_js_dataTables.select.min.js') }}"></script>
    <script src="{{ asset('js/js/https _cdn.ckeditor.com_ckeditor5_11.0.1_classic_ckeditor.js') }}"></script>
    <script src="{{ asset('js/js/https _cdnjs.cloudflare.com_ajax_libs_moment.js_2.22.2_moment.min.js') }}"></script>
    <script src="{{ asset('js/js/https _cdnjs.cloudflare.com_ajax_libs_bootstrap-datetimepicker_4.17.47_js_bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('js/js/https _cdnjs.cloudflare.com_ajax_libs_select2_4.0.5_js_select2.full.min.js') }}"></script>
    <script src="{{ asset('js/js/https _cdnjs.cloudflare.com_ajax_libs_dropzone_5.5.1_min_dropzone.min.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        $(function() {
  let copyButtonTrans = '{{ trans('global.datatables.copy') }}'
  let csvButtonTrans = '{{ trans('global.datatables.csv') }}'
  let excelButtonTrans = '{{ trans('global.datatables.excel') }}'
  let pdfButtonTrans = '{{ trans('global.datatables.pdf') }}'
  let printButtonTrans = '{{ trans('global.datatables.print') }}'
  let colvisButtonTrans = '{{ trans('global.datatables.colvis') }}'

  let languages = {
    'en': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/English.json'
  };

  $.extend(true, $.fn.dataTable.Buttons.defaults.dom.button, { className: 'btn' })
  $.extend(true, $.fn.dataTable.defaults, {
    language: {
      url: languages.{{ app()->getLocale() }}
    },
    columnDefs: [{
        orderable: false,
        className: 'select-checkbox',
        targets: 0
    }, {
        orderable: false,
        searchable: false,
        targets: -1
    }],
    select: {
      style:    'multi+shift',
      selector: 'td:first-child'
    },
    order: [],
    scrollX: true,
    pageLength: 100,
    dom: 'lBfrtip<"actions">',
    buttons: [
      {
        extend: 'copy',
        className: 'btn-default',
        text: copyButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'csv',
        className: 'btn-default',
        text: csvButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'excel',
        className: 'btn-default',
        text: excelButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'pdf',
        className: 'btn-default',
        text: pdfButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'print',
        className: 'btn-default',
        text: printButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'colvis',
        className: 'btn-default',
        text: colvisButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      }
    ]
  });

  $.fn.dataTable.ext.classes.sPageButton = '';
});

    </script>
    @yield('scripts')
</body>

</html>