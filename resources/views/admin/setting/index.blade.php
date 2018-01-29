@extends('admin.layouts.layout')

@section('title')
Edit Site Setting
@endsection

@section('content')
<section class="content-header">
  <h1>
    Dashboard
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active">Setting</li>
  </ol>
</section>


<section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"> Edit Site Setting</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <form class="" action="{{url('/adminpanel/setting')}}" method="post">
                        {{csrf_field()}}
                        @foreach($setting as $set)

                        <div class="col-lg-2">
                            {{$set->namesetting}}
                        </div>

                        <div class="{{ $errors->has('name') ? ' has-error' : '' }}">



                             <div class="col-md-10">
                                 @if($set->type==0)
                                     {!! Form::text($set->namesetting , $set->value , ['class' => 'form-control']) !!}
                                 @else
                                     {!! Form::textarea($set->namesetting , $set->value , ['class' => 'form-control']) !!}

                                 @endif
                                 <br>
                                 @if ($errors->has($set->namesetting))
                                     <span class="help-block">
                                     <strong>{{ $errors->first($set->namesetting) }}</strong>
                                 </span>
                                 @endif
                             </div>

                         </div>



                         <div class="clearfix"></div>


                        @endforeach

                        <button name="submit" type="submit" class="btn btn-primary pull-right">
                          Save Setting
                            <i class="fa fa-save"></i>
                            </button>

                      </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
