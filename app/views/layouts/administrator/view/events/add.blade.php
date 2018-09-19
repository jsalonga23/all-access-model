 @include('layouts.administrator.includes.error')


            <a href="{{URL::to('data/events') }}" class="btn btn-primary">Events List</a>
            <br/> <br/>
            <div class="panel panel-default">
            
                <!-- /.panel-heading -->
                <div class="panel-body">
                    
                    <ul class="nav nav-tabs">
                      <li class="active"><a data-toggle="tab" href="#home">Information</a></li>
                    </ul>
        
                    <div class="tab-content">
                      <div id="home" class="tab-pane fade in active">
                        {{ Form::open(array('url' => 'data/events/add/submit','role'=>'form',  'method' => 'post','id'=>'eventsInfo', 'enctype'=>'multipart/form-data')) }}
                        <div class="row">
                            <div class="col-lg-12">
                                <br>
                                <br>
                                <div class="checkbox">
                                  <label>
                                    <input type="hidden" name="txtId">
                                    <input type="checkbox" name="chkActive"> <abbr title="This will be available online">Active</abbr>&nbsp;&nbsp;
                                  </label>
                              </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Primary Image
                                    </div>
                                    <div class="panel-body">
                                      <input type="file" class="form-control-file" id="imageEventPrimary" aria-describedby="fileHelp" name="file">
                                    </div> 
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        File
                                    </div>
                                    <div class="panel-body">
                                      <input type="file" class="form-control-file" id="pdfFile" aria-describedby="fileHelp" name="filepdf">
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="form-group">
                                    <label for="txtEventName">Event Name</label>
                                    <input type="text" class="form-control" id="txtEventName" aria-describedby="emailHelp" name="txtEventName" placeholder="Event Name">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="form-group">
                                    <label for="txtVenue">Venue</label>
                                    <input type="text" class="form-control" id="txtVenue" aria-describedby="emailHelp" name="txtVenue" placeholder="Event Venue">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="form-group">
                                    <label for="txtStartDate">Event Date</label>
                                    <div class='input-group date' id='txtStartDate'>
                                        <input type='text' name="txtStartDate" class="form-control" />
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div id="categoryAdded"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <br>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4">
                                                <input type='text' name="txtCategory" class="form-control" placeholder="Category" />
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <input type='text' name="txtCatDesc" class="form-control" placeholder="Description" />
                                            </div>
                                            <div class="col-lg-1 col-md-1">
                                                 <input type='number' name="txtFees" class="form-control" placeholder="Fees" />
                                            </div>
                                            <div class="col-lg-1 col-md-1">
                                                <input type='number' name="txtMaxcars" class="form-control" placeholder="Max Cars Allowed" />
                                            </div>
                                            <div class="col-lg-2 col-md-2">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <button style="width:100%;" type="button" class="btn btn-success" onclick="submitCat()" id="btnCat">Add</button>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <button type="button" style="width:100%;" class="btn btn-primary" id="btnCatClear">Clear</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="txtDescription">Description</label>
                                    <textarea class="form-control" rows="8" name="txtDescription" id="txtDescription"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="pull-right">
                                    <input type="submit" class="btn btn-primary " value="Submit">
                    <input type="reset" class="btn btn-default " value="Cancel">
                                </div>
                            </div>
                        </div>
                        {{ Form::close() }}
                      </div>
                    </div>
                    
                </div>
            </div>

<script type="text/javascript" src="{{asset('admin/js/moment.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#txtStartDate').datetimepicker({
            format: 'YYYY-MM-DD'
         });
        $('#txtEndDate').datetimepicker({
            format: 'YYYY-MM-DD'
         });
        $('#txtStartTime').datetimepicker({
            format: 'LT'
         });
        $('#txtEndTime').datetimepicker({
            format: 'LT'
         });
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#btnCatClear').click(function() {
            $('input[name="txtCategory"').val('');
            $('input[name="txtCatDesc"').val('');
            $('input[name="txtFees"').val('');
            $('input[name="txtMaxcars"').val('');
        });
    });

    function submitCat() {

        $cat = $('input[name="txtCategory"]').val();
        $catDesc = $('input[name="txtCatDesc"]').val();
        $catFees = $('input[name="txtFees"]').val();
        $catMaxcars = $('input[name="txtMaxcars"]').val();
       
       var urlPathAddToCart = "{{ URL::to('data/events/add/category/submit?cat=') }}" + $cat + "catDesc=" + $catDesc;

        $.ajax({
            type: "GET",
            url: urlPathAddToCart,
            dataType: "json",
            success: function(data)
            {
                
            },
            error: function()
            {
                
            }
        });


    }
    
</script>