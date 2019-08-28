@extends('layouts.admin')


@push('css')
<link href="{{ asset('css/aire.css') }}" rel="stylesheet" />
@endpush


@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('global.news.title_singular') }}
    </div>

    <div class="card-body">
        {{ 
            Aire::open()
            ->route('store')
            ->rules([
            'title' => 'required|alpha',
            'discrioption' => 'required|alpha',
            'photo'=> 'required|file',
            ])
            ->messages([
            'title' => 'You must accept the terms',
            'photo' => 'Cover Photo is Rrequired',
            ]) 
            ->enctype('multipart/form-data')
            ->method('POST')
        }}

        {{ 
            Aire::input()
            ->label('Title*')
            ->id('title')
            ->name('title')
            ->class('form-control') 
        }}

        {{ 
            Aire::textarea()
            ->label('Discription*')
            ->id('discrioption')
            ->name('discrioption')
            ->class('form-control') 
        }}

        {{
            Aire::input()
            ->type('file')
            ->label('News Cover Photo*')
            ->id('cover-photo')
            ->name('photo')
            
        }}

<img src="" id="cover-img-tag" width="200px" class="mb-2" />

        {{ 
            Aire::button()
            ->labelHtml('<strong>Next</strong>')
            ->class('btn btn-danger')
            ->class('mt-2') 
        }}


        {{ Aire::close() }}
    </div>
</div>


<script src="{{ asset('js/js/http _ajax.googleapis.com_ajax_libs_jquery_1.9.1_jquery.js') }}"></script>

<script type="text/javascript">

    function readURL(input) {

        if (input.files && input.files[0]) {

            var reader = new FileReader();

            

            reader.onload = function (e) {

                $('#cover-img-tag').attr('src', e.target.result);

            }

            reader.readAsDataURL(input.files[0]);

        }

    }

    $("#cover-photo").change(function(){

        readURL(this);

    });

</script>
@endsection

