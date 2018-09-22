<div class="row">
  <div class="col-lg-12">

    <div class="form-group">
      <label for="profession"><em>(Can select more than one profession, maximum of 5)</em></label>
      <select id="profession" required name="profession[]" class="multiselect form-control required" multiple="multiple">

        @foreach($rsTalentCategory as $category)
        <option value="{{$category->id}}">{{$category->category}}</option>
        @endforeach

      </select>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-6">
    <div class="form-group">
      <label for="email"><span class="red">*</span>Email</label>
      <input type="email" name="email" class="form-control required" id="email" required>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="form-group">
      <label for="email2"><span class="red">*</span>Re-enter Email <em>(must be the same)</em></label>
      <input type="email" name="emailVerif" class="form-control required" id="email2" required>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-6">
    <div class="form-group">
      <label for="password"><span class="red">*</span>Password</label>
      <input type="password" name="password" class="form-control required" id="password" required>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="form-group">
      <label for="password2"><span class="red">*</span>Re-enter Password <em>(must be the same)</em></label>
      <input type="password" name="passwordVerif"  class="form-control required" id="password2" required>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-4">
    <div class="form-group">
      <label for="fname"><span class="red">*</span>First Name</label>
      <input type="text" name="fname" class="form-control required" id="fname" required>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="form-group">
      <label for="mname">Middle Name (optional)</label>
      <input type="text" name="mname" class="form-control" id="mname">
    </div>
  </div>
  <div class="col-lg-4">
    <div class="form-group">
      <label for="lname"><span class="red">*</span>Last Name</label>
      <input type="text" name="lname" class="form-control required" id="lname" required>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-4">
    <div class="form-group">
      <label for="birth"><span class="red">*</span>Date of Birth</label>
      <input type="date" name="birthday" class="form-control required" id="birth" required>
    </div>
  </div>
  <div class="col-lg-4"></div>
  <div class="col-lg-4"></div>
</div>

<div class="row">
  <div class="col-lg-6">
    <div class="form-group">
      <label for="birth"><span class="red">*</span>Nationality by Born/Ethnicity</label>
      <select class="form-control required" name="nationalityBorn" id="byborn" required>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="form-group">
      <label for="passport"><span class="red">*</span>Nationality by Passport <em>(not visible to public)</em></label>
      <select class="form-control required" name="nationalityPassport" id="bypassport" required>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-12">
    <div class="checkbox">
      <label><input type="checkbox" id="chkSelect" class="required" name="chkTerms" required value="1">By clicking here and proceeding to the next step, I declare that I have read and accept the <a href="#">Terms & Conditions</a> of All Access Talents.</label>
    </div>
  </div>
</div>

<div class="row button">
  <div class="col-lg-10"></div>
  <div class="col-lg-2">
    <div class="form-group">
      <input type="submit" class="btn-reg form-control" data-container="register2" id="btn-reg1" value="Next">
      <!-- <button type="submit" name="button" class="btn-reg" data-container="register2" id="btn-reg1">Next</button> -->
    </div>
  </div>
</div>
