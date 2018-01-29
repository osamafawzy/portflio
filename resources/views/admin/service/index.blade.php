@extends('admin.layouts.layout')

@section('title')

All Services
@endsection






@section('content')

    <section class="content-header">
        <h1>
All Services
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><a href="{{url('/adminpanel/sliders')}}">Services</a></li>

        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">All Services</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="data" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Photo</th>
                                <th>Description</th>
                                <th>Slider</th>
                                <th>Controls</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($service as $serviceinfo)
                            <tr>

                                <td>{{$serviceinfo->id}}</td>
                                <td>{{$serviceinfo->name}}</td>
                                <td><img src="/images/{{$serviceinfo->photo}}" width="150" height="150"></td>
                                <td>{{$serviceinfo->description}}</td>
                                <td>{{$serviceinfo->slider->title}}</td>

                                <td>
                                    <a href="{{url('/adminpanel/services/'.$serviceinfo->id.'/edit')}}" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a>
                                    <a href="{{url('/adminpanel/services/'.$serviceinfo->id.'/delete')}}" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                              <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Photo</th>
                                <th>Description</th>
                                <th>Slider</th>
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
