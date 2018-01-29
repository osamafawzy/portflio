
    {{ csrf_field() }}

    <div class="{{ $errors->has('name') ? ' has-error' : '' }}">

        <div class="col-md-12">
            {!! Form::text("name" , null , ['class' => 'form-control', 'placeholder' => 'Name']) !!}
            @if ($errors->has('name'))
                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
            @endif
        </div>
        <br>
    </div>
    <br>

    <div class="{{ $errors->has('photo') ? ' has-error' : '' }}">

        <div class="col-md-12">

            {!! Form::file("photo" , ['class' => 'form-control', 'placeholder' => 'Photo']) !!}

            @if ($errors->has('photo'))
                <span class="help-block">
                                        <strong>{{ $errors->first('photo') }}</strong>
                                    </span>
            @endif
        </div>
        <br>
    </div>


    <br>

    <div class="text2 {{ $errors->has('description') ? ' has-error' : '' }}">

        <div class="col-md-12">
            {!! Form::text("description" , null , ['class' => 'form-control', 'placeholder' => 'Description']) !!}
            @if ($errors->has('description'))
                <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
            @endif
        </div>
        <br>
    </div>

    <br>



    <div class="text2 {{ $errors->has('slider_id') ? ' has-error' : '' }}">

        <div class="col-md-12">
            <!-- {!! Form::select("slider_id" ,[ '{{$sliders->id}}' => '{{$sliders->title}}']) !!} -->
            <select class="form-control" name="slider_id">
              @foreach ($sliders as $slider)
                <option value="{{$slider->id}}"> {{$slider->title}} </option>
              @endforeach
            </select>
            @if ($errors->has('slider_id'))
                <span class="help-block">
                                        <strong>{{ $errors->first('slider_id') }}</strong>
                                    </span>
            @endif
        </div>
        <br>
    </div>
    <div class="text2">
        <div class="col-md-6 col-md-offset-6">
            <br>
            <button type="submit" class="btn btn-warning">
Save            </button>
        </div>
        <br>
    </div>
    <br>
