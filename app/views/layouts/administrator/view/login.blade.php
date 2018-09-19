<div class="admin-logo">
    <a href="{{URL::to('/')}}" target="_blank"><img src="{{asset('admin/images/logo.png')}}" class="img-responsive"></a>
</div>
<div class="login-panel panel panel-default">

    <div class="panel-heading">
        <h3 class="panel-title">Please Sign In</h3>
    </div>

    @include('layouts.administrator.includes.error')
    
    <div class="panel-body">
        {{ Form::open(array('url' => 'administrator/login/submit','role'=>'form',  'method' => 'post')) }}
            <fieldset>
                <div class="form-group  @if ($errors->has('username')) has-error @endif">
                    <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                    @if ($errors->has('username')) <p class="help-block">{{ $errors->first('username') }}</p> @endif
                </div>
                <div class="form-group @if ($errors->has('password')) has-error @endif">
                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                    @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
                </div>
                <div class="checkbox">
                    <label>
                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                    </label>
                </div>
                <!-- Change this to a button or input when using this as a form -->
                <input type="submit" class="btn btn-lg btn-success btn-block" value="Login">
            </fieldset>

              <p style="margin-top:30px;">
            <a href="{{URL::to('data/forgot-password')}}">Forgot Password</a>
            </p>


        {{ Form::close() }}
    </div>

</div>