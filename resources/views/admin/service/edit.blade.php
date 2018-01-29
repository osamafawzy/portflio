@extends('admin.layouts.layout')

@section('title')
Edit Service
@endsection

@section('content')

<section class="content-header">
        <h1> Add New Service       </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li ><a href="">Services</a></li>
            <li class="active"><a href="">Edit Service</a></li>

        </ol>
    </section>

    <section class="content">
      <div class="row">
          <div class="col-xs-12">
              <div class="box">
                  <div class="box-header">
                      <h3 class="box-title">Edit {{$service->name}} Service</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">

                    {!! Form::model($service , [ 'url' => 'adminpanel/services/'.$service->id  , 'method' => 'PATCH' , 'files' => true ]) !!}

                                @include('admin.service.form')

                            {!! Form::close() !!}


                  </div>
              </div>
          </div>
      </div>
  </section>


@endsection
