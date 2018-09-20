<!--Content-->
<div id="content" class="container-fluid reverse">
  <div class="row">

    <!--Left-->
    <div id="cnt-left" class="col-lg-8">

      <!--Header-->
      @include('layouts.front.views.includes.navi-header')

      <!--Register-->
      <div id="register" class="row">
        <div class="col-lg-12">

        <div class="row">
          <div class="col-lg-12">
            <h3><span class="red">*</span>Register Now</h3>
          </div>
        </div>
        {{ Form::open(array('url' => 'register/submit','role'=>'form',  'method' => 'post')) }}
        <!-- / Register 1 -->
        <div id="register1">
          @include('layouts.front.views.pages.registration.register-1')
        </div>
        <!-- / Register 1 -->
        <!-- / Register 2 -->
        <div id="register2">
          @include('layouts.front.views.pages.registration.register-2')
        </div>
        <!-- / Register 2 -->
        <!-- / Register 3 -->
        <div id="register3">
          @include('layouts.front.views.pages.registration.register-3')
        </div>
        <!-- / Register 3 -->
        <!-- / Register 4 -->
        <div id="register3">
          @include('layouts.front.views.pages.registration.register-4')
        </div>
        <!-- / Register 4 -->
        {{ Form::close() }}
        </div>
      </div>
    </div>

    <!--Right-->
    <div id="cnt-right" class="col-lg-4">
      <!--Testimonial-->
      @include('layouts.front.views.includes.testimonial')
      <!--Footer-->
      @include('layouts.front.views.includes.navi-footer')
    </div>

  </div>
</div>
