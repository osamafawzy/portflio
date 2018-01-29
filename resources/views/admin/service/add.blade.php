@extends('admin.layouts.layout')

@section('title')
Add New Service
@endsection

@section('content')

<section class="content-header">
        <h1> Add New Service       </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li ><a href="">Services</a></li>
            <li class="active"><a href="">Add New Service</a></li>

        </ol>
    </section>

    <section class="content">
      <div class="row">
          <div class="col-xs-12">
              <div class="box">
                  <div class="box-header">
                      <h3 class="box-title">Add New Service</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">

                      <form class="form-horizontal" method="POST" action="{{ url('/adminpanel/services') }}" enctype="multipart/form-data">

                        @include('admin.service.form')


                      </form>


                  </div>
              </div>
          </div>
      </div>
  </section>


@endsection
