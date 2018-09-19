 @include('layouts.administrator.includes.error')
{{ Form::open(array('url' => 'data/committee/edit/submit','role'=>'form',  'method' => 'post','id'=>'memberInfo', 'enctype'=>'multipart/form-data')) }}

            <a href="{{URL::to('data/committee') }}" class="btn btn-primary">Committee List</a>
            <br/> <br/>
            <div class="panel panel-default">
                <div class="panel-heading text-right">
                    <input type="submit" class="btn btn-primary " value="Submit">
                    <input type="reset" class="btn btn-default " value="Cancel">
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-2">
                             <div class="form-group">
                                <label for="txtName">Photo</label>
                                <img src="{{asset('assets/images/team/'.$rsCommittee->image)}}" alt="" style="width:100%;">
                                <input type="file" class="form-control" id="file" name="file">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <input type="hidden" value="{{$rsCommittee->id}}" name="txtId">
                        <div class="col-lg-4">
                             <div class="form-group">
                                <label for="txtName">Full Name</label>
                                <input type="text" class="form-control" id="txtName" aria-describedby="emailHelp" required name="txtFullname" placeholder="Full Name" value="{{$rsCommittee->name}}">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label for="txtName">Designation</label>
                                <input type="text" class="form-control" id="txtLastname" aria-describedby="emailHelp" required name="txtDesignation" placeholder="Designation" value="{{$rsCommittee->designation}}">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="txtEmail">Email Address</label>
                                <input type="email" class="form-control" id="txtEmail" aria-describedby="emailHelp" name="txtEmail" placeholder="Email Address" value="{{$rsCommittee->email}}">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="txtMobile">Mobile Number</label>
                                <input type="tel" class="form-control" id="txtMobile" aria-describedby="emailHelp" name="txtMobile" placeholder="Mobile Number" value="{{$rsCommittee->mobile}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="txtMobile">Description</label>
                                <textarea class="form-control" rows='8' name="txtDescription" id="txtDescription">{{$rsCommittee->description}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
{{ Form::close() }}


