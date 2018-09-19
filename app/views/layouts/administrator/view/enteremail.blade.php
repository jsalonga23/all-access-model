<div class="admin-logo">
    <a href="{{URL::to('/')}}"><img src="{{asset('admin/images/logo.png')}}" class="img-responsive"></a>
</div>

<div class="login-panel panel panel-default">

    <div class="panel-heading">
        <h3 class="panel-title">Forgot Password</h3>
    </div>

    @include('layouts.administrator.includes.error')
    
    <div class="panel-body">
        {{ Form::open(array('url' => 'data/forgot-password/submit','role'=>'form',  'method' => 'post')) }}
            <fieldset>
                <div class="form-group  @if ($errors->has('txtEmailAddress')) has-error @endif">
                    <input class="form-control" placeholder="Enter Email address" name="txtEmailAddress" type="text" value="{{Input::old('txtEmailAddress')}}">
                    @if ($errors->has('txtEmailAddress')) <p class="help-block">{{ $errors->first('username') }}</p> @endif
                </div>
                <!-- Change this to a button or input when using this as a form -->
                <input type="submit" class="btn btn-lg btn-success btn-block" value="Submit">
            </fieldset>

          

        {{ Form::close() }}
    </div>

</div>