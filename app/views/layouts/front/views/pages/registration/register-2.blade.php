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
          <div class="col-lg-6">
            <div class="row">
              <div class="col-lg-4">
                <span>Willing to travel?</span>
              </div>
              <div class="col-lg-8">
                <div class="form-group">
                  <label class="radio-inline"><input type="radio" name="optradio">Yes</label>
                  <label class="radio-inline"><input type="radio" name="optradio">No</label>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="ethnicity"><span class="red">*</span>Ethnicity <em>(you can choose only one)</em></label>
              <select class="form-control" id="ethnicity">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label for="language"><span class="red">*</span>Fluent Spoken Language <em>(you can choose more than one)</em></label>
              <select class="form-control" id="language">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="email"><span class="red">*</span>Hair Color</label>
              <input type="text" class="form-control" id="hair">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label for="email2"><span class="red">*</span>Eye Color</label>
              <input type="text" class="form-control" id="eye">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="password"><span class="red">*</span>Height <em>(20cm to 22cm)</em></label>
              <input type="text" class="form-control" id="height">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label for="password2"><span class="red">*</span>Shoe Size <em>(15 EU to 48 EU)</em></label>
              <input type="text" class="form-control" id="shoe">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <div class="form-group">
              <label for="fname">Chest Size <em>(46cm to 250cm)</em></label>
              <input type="text" class="form-control" id="chest">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <label for="fname">Waist Size <em>(46cm to 250cm)</em></label>
              <input type="text" class="form-control" id="waist">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <label for="fname">Hip Size <em>(46cm to 250cm)</em></label>
              <input type="text" class="form-control" id="hip">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <div class="form-group">
              <label for="tshirt">Tshirt Size</label>
              <select class="form-control" id="tshirt">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <label for="pants">Pants Size</label>
              <select class="form-control" id="pants">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <label for="jacket">Jacket Size</label>
              <select class="form-control" id="jacket">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="features"><span class="red">*</span>Special Features <em>(can select more than one)</em></label>
              <select class="form-control" id="features">
                <option>Dread Locks</option>
                <option>Foot Model</option>
                <option>Hand Model</option>
                <option>Piercing</option>
                <option>Plus Size</option>
                <option>Practicing Sports</option>
                <option>Tattoos</option>
                <option>Twins</option>
                <option>Triplets</option>
              </select>
            </div>
          </div>
          <div class="col-lg-6">
            <label for="experience"><span class="red">*</span>Level of Experience</label>
            <select class="form-control" id="experience">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
            </select>
          </div>
        </div>

        <div class="row button">
          <div class="col-lg-10"></div>
          <div class="col-lg-2">
            <div class="form-group">
              <input type="submit" class="form-control" value="Next">
            </div>
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