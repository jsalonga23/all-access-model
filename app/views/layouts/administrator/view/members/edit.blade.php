 @include('layouts.administrator.includes.error')
{{ Form::open(array('url' => 'data/member/edit/submit','role'=>'form',  'method' => 'post','id'=>'memberInfo', 'enctype'=>'multipart/form-data')) }}

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

                                {{-- {{utilities::debug($rsCategory)}} --}}
                                <input type="hidden" name="txtId" value="{{$rsMembers->id}}">
                                <input type="checkbox" name="chkActive" value="1" {{ utilities::chkBoxChecked($rsMembers->status) }}> <abbr title="This will be available online">Active</abbr>&nbsp;&nbsp;
                              </label>
                          </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <div class="form-group">
                                <label for="txtMemberId">Member ID</label>
                                <input type="text" disabled class="form-control" id="txtMemberId" aria-describedby="emailHelp" name="txtMemberId" placeholder="Member ID" value="{{$rsMembers->member_id}}">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="form-group">
                                <label for="txtTempId">Temporary ID</label>
                                <input type="text" class="form-control" id="txtTempId" aria-describedby="emailHelp" name="txtTempId" placeholder="Temporary ID" value="{{$rsMembers->temp_id}}">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="form-group">
                                <label for="txtstartMem">Start Membership</label>
                                <input type="text" class="form-control" id="txtstartMem" aria-describedby="emailHelp" name="txtstartMem" placeholder="" value="{{$rsMembers->start_date}}">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="form-group">
                                <label for="txtendMem">End Membership</label>
                                <input type="text" class="form-control" id="txtendMem" aria-describedby="emailHelp" name="txtendMem" placeholder="" value="{{$rsMembers->end_date}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                             <div class="form-group">
                                <label for="txtName">Firstname</label>
                                <input type="text" class="form-control" id="txtName" aria-describedby="emailHelp" required name="txtFirstname" placeholder="First Name" value="{{$rsMembers->firstname}}">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                             <div class="form-group">
                                <label for="txtName">Lastname</label>
                                <input type="text" class="form-control" id="txtLastname" aria-describedby="emailHelp" required name="txtLastname" placeholder="Last Name" value="{{$rsMembers->lastname}}">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                             <div class="form-group">
                                <label for="txtEmail">Email Address</label>
                                <input type="email" required class="form-control" id="txtEmail" aria-describedby="emailHelp" name="txtEmail" placeholder="Email Address" value="{{$rsMembers->email}}">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                             <div class="form-group">
                                <label for="txtMobile">Mobile Number</label>
                                <input type="tel" required class="form-control" id="txtMobile" aria-describedby="emailHelp" name="txtMobile" placeholder="Mobile Number" value="{{$rsMembers->mobile}}">
                            </div>
                        </div>
                    </div>
                   
                    
                </div>
            </div>
{{ Form::close() }}