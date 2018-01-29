@extends('admin.layouts.layout')

@section('title')
Add New Slider
@endsection

@section('content')

<section class="content-header">
        <h1> Add New Slider       </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li ><a href="">Sliders</a></li>
            <li class="active"><a href="">Add New Slider</a></li>

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

                      <form class="form-horizontal" method="POST" action="{{ url('/adminpanel/sliders') }}" enctype="multipart/form-data">

                        @include('admin.slider.form')


                      </form>


                  </div>
              </div>
          </div>
      </div>
  </section>


@endsection
