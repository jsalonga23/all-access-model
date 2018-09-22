<div class="col-lg-12">

      <div class="row">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-4">
              <span>Willing to travel?</span>
            </div>
            <div class="col-lg-8">
              <div class="form-group">
                <label class="radio-inline"><input type="radio" name="willingTravel" value="1">Yes</label>
                <label class="radio-inline"><input type="radio" name="willingTravel" value="0">No</label>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <div class="form-group">
            <label for="ethnicity"><span class="red">*</span>Ethnicity <em>(you can choose only one)</em></label>
            <select class="form-control required" required name="ethnicity" id="ethnicity">
              @foreach($rsEthnicity as $category)
              <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="form-group">
            <label for="language"><span class="red">*</span>Fluent Spoken Language</label>
            <select class="form-control required" required name="language" id="language">
              <option value="English">English</option>
              <option value="Arabic">Arabic</option>
              <option value="Russian">Russian</option>
              <option value="German">German</option>
            </select>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <div class="form-group">
            <label for="hair"><span class="red">*</span>Hair Color</label>
            <input type="text" required class="form-control required" name="hairColor" id="hair">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="form-group">
            <label for="eye"><span class="red">*</span>Eye Color</label>
            <input type="text" required class="form-control required" name="eyeColor" id="eye">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <div class="form-group">
            <label for="height"><span class="red">*</span>Height <em>(20cm to 22cm)</em></label>
            <input type="text" required class="form-control required" name="height" id="height">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="form-group">
            <label for="shoe"><span class="red">*</span>Shoe Size <em>(15 EU to 48 EU)</em></label>
            <input type="text" required class="form-control required" name="shoeSize" id="shoe">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <div class="form-group">
            <label for="chest">Chest Size <em>(46cm to 250cm)</em></label>
            <input type="text" class="form-control" name="chestSize" id="chest">
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <label for="waist">Waist Size <em>(46cm to 250cm)</em></label>
            <input type="text" class="form-control" name="waistSize" id="waist">
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <label for="hip">Hip Size <em>(46cm to 250cm)</em></label>
            <input type="text" class="form-control" name="hip" id="hip">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <div class="form-group">
            <label for="tshirt">Tshirt Size</label>
            <select class="form-control" name="tshirt" id="tshirt">
              <option value="Small">Small</option>
              <option value="Medium">Medium</option>
              <option value="Large">Large</option>
            </select>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <label for="pants">Pants Size</label>
            <select class="form-control" name="pants" id="pants">
              <option value="Small">Small</option>
              <option value="Medium">Medium</option>
              <option value="Large">Large</option>
            </select>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <label for="jacket">Jacket Size</label>
            <select class="form-control" name="jacket" id="jacket">
              <option value="Small">Small</option>
              <option value="Medium">Medium</option>
              <option value="Large">Large</option>
            </select>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <div class="form-group">
            <label for="features"><span class="red">*</span>Special Features <em>(can select more than one)</em></label>
              <select id="features" required name="features[]" class="multiselect required form-control" multiple="multiple">
              <option value="Dread Locks">Dread Locks</option>
              <option value="Foot Model">Foot Model</option>
              <option value="Hand Model">Hand Model</option>
              <option value="Piercing">Piercing</option>
              <option value="Plus Size">Plus Size</option>
              <option value="Practicing Sports">Practicing Sports</option>
              <option value="Tattoos">Tattoos</option>
              <option value="Twins">Twins</option>
              <option value="Triplets">Triplets</option>
            </select>
          </div>
        </div>
        <div class="col-lg-6">
          <label for="experience"><span class="red">*</span>Level of Experience</label>
          <select class="form-control required" required name="experience" id="experience">
            <option value="New">New</option>
            <option value="Beginner">Beginner</option>
            <option value="Intermediate">Intermediate</option>
            <option value="Experience">Experience</option>
          </select>
        </div>
      </div>

      <div class="row button">
        <div class="col-lg-10"></div>
        <div class="col-lg-2">
          <div class="form-group">
            <input type="submit" class="form-control btn-reg" data-container="register3" id="btn-reg2" value="Next">
          </div>
        </div>
      </div>

    </div>
