<div class="admin-logo">
    <a href="{{URL::to('/')}}"><img src="{{asset('admin/images/logo.png')}}" class="img-responsive"></a>
</div>

<div class="login-panel panel panel-default">

    <div class="panel-heading">
        <h3 class="panel-title">Enter your password</h3>
    </div>

    @include('layouts.administrator.includes.error')
    
    <div class="panel-body">
        {{ Form::open(array('url' => 'register/reset/submit','role'=>'form',  'method' => 'post')) }}
            <fieldset>
                

                <div class="form-group @if ($errors->has('password')) has-error @endif">
                    <input class="form-control" placeholder="Password" name="txtPassword" type="text" value="">
                    @if ($errors->has('txtPassword')) <p class="help-block">{{ $errors->first('txtPassword') }}</p> @endif
                </div>
                  <div class="form-group  @if ($errors->has('txtConfirmPassword')) has-error @endif">
                    <input class="form-control" placeholder="Confirm Password" name="txtConfirmPassword" type="text" value="{{Input::old('txtConfirmPassword')}}">
                    @if ($errors->has('txtConfirmPassword')) <p class="help-block">{{ $errors->first('txtConfirmPassword') }}</p> @endif
                </div>
                <br/>
                
                 <input type="hidden" name="txtConfirmationcode" value="{{$confirmCode}}">

                <!-- Change this to a button or input when using this as a form -->
                <input type="submit" class="btn btn-lg btn-success btn-block" value="Submit">
            </fieldset>

            
        {{ Form::close() }}
    </div>

</div>