 @include('layouts.administrator.includes.error')
{{ Form::open(array('url' => 'data/member/add/submit','role'=>'form',  'method' => 'post','id'=>'memberInfo', 'enctype'=>'multipart/form-data')) }}

            <a href="{{URL::to('data/members') }}" class="btn btn-primary">Members List</a>
            <br/> <br/>
            <div class="panel panel-default">
                <div class="panel-heading text-right">
                    <input type="submit" class="btn btn-primary " value="Submit">
                    <input type="reset" class="btn btn-default " value="Cancel">
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="chkActive" value="1"> <abbr title="This will be available online">Active</abbr>&nbsp;&nbsp;
                              </label>
                          </div>
                        </div>
                    </div>
                    <br>
                    <br>
                        
                    <div class="row">
                        <div class="col-lg-6">
                                 <div class="form-group">
                                    <label for="txtName">Firstname</label>
                                    <input type="text" class="form-control" id="txtName" aria-describedby="emailHelp" required name="txtFirstname" placeholder="First Name" value="">
                                </div>
                                 <div class="form-group">
                                    <label for="txtName">Lastname</label>
                                    <input type="text" class="form-control" id="txtLastname" aria-describedby="emailHelp" required name="txtLastname" placeholder="Last Name" value="">
                                </div>

                                 <div class="form-group">
                                    <label for="txtEmail">Email Address</label>
                                    <input type="email" required class="form-control" id="txtEmail" aria-describedby="emailHelp" name="txtEmail" placeholder="Email Address">
                                </div>
                                 <div class="form-group">
                                    <label for="txtMobile">Mobile Number</label>
                                    <input type="tel" required class="form-control" id="txtMobile" aria-describedby="emailHelp" name="txtMobile" placeholder="Mobile Number">
                                </div>


                            <hr/>
                                 <div class="form-group">
                                    <label for="txtMobile">Password Generated</label>
                                    <input type="text" required class="form-control" id="txtConfPassword"  name="txtPassword" placeholder="Password" value="{{ Str::random(6) }}">
                                </div>
                        </div>

                    </div>
            </div>
{{ Form::close() }}