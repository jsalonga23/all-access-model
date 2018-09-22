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
          <div class="col-lg-12 text-center">
            <h3>Thank you!</h3>
            <p>Your registration has been sent to <em>All Access Talents</em> administrator for review.<br>
            Your profile will be live on the website on the next 48 hours.</p>
            <p>Kindly check your email as we sent you an email confirmation that you register with us.</p>
            <p><em>Also, please download Telegram App on your mobile for easy update for jobs.</em></p>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12 text-right">
            <p>All Access Talent Team</p>
          </div>
        </div>

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
