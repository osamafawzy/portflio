
    {{ csrf_field() }}

    <div class="{{ $errors->has('title') ? ' has-error' : '' }}">

        <div class="col-md-12">
            {!! Form::text("title" , null , ['class' => 'form-control', 'placeholder' => 'Title']) !!}
            @if ($errors->has('title'))
                <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
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

    <div class="text2 {{ $errors->has('other') ? ' has-error' : '' }}">

        <div class="col-md-12">
            {!! Form::text("other" , null , ['class' => 'form-control', 'placeholder' => 'Other']) !!}
            @if ($errors->has('other'))
                <span class="help-block">
                                        <strong>{{ $errors->first('other') }}</strong>
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
