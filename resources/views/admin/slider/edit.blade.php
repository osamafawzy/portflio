@extends('admin.layouts.layout')

@section('title')
Edit Slider
@endsection

@section('content')

<section class="content-header">
        <h1> Edit Slider       </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li ><a href="">Sliders</a></li>
            <li class="active"><a href="">Edit Slider</a></li>

        </ol>
    </section>

    <section class="content">
      <div class="row">
          <div class="col-xs-12">
              <div class="box">
                  <div class="box-header">
                      <h3 class="box-title">Add New Slider</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">

                    {!! Form::model($slider , [ 'url' => 'adminpanel/sliders/'.$slider->id  , 'method' => 'PATCH' , 'files' => true ]) !!}

                                @include('admin.slider.form')

                            {!! Form::close() !!}

                  </div>
              </div>
          </div>
      </div>
  </section>


@endsection
