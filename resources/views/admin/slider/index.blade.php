@extends('admin.layouts.layout')

@section('title')

All Sliders
@endsection






@section('content')

    <section class="content-header">
        <h1>
All Sliders
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><a href="{{url('/adminpanel/sliders')}}">Sliders</a></li>

        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">All Sliders</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="data" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Photo</th>
                                <th>Description</th>
                                <th>Other</th>
                                <th>Controls</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($slider as $sliderinfo)
                            <tr>

                                <td>{{$sliderinfo->id}}</td>
                                <td>{{$sliderinfo->title}}</td>
                                <td><img src="/images/{{$sliderinfo->photo}}" width="150" height="150"></td>
                                <td>{{$sliderinfo->description}}</td>
                                <td>{{$sliderinfo->other}}</td>

                                <td>
                                    <a href="{{url('/adminpanel/sliders/'.$sliderinfo->id.'/edit')}}" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a>
                                    <a href="{{url('/adminpanel/sliders/'.$sliderinfo->id.'/delete')}}" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                              <tr>
                                  <th>#</th>
                                  <th>Title</th>
                                  <th>Photo</th>
                                  <th>Description</th>
                                  <th>Other</th>
                                  <th>Controls</th>
                              </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection
