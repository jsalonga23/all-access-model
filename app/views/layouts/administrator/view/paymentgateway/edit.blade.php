
<div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{$PageTitle}}</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
       
            {{ Form::open(array('url' => 'data/payment-gateway/edit/submit','role'=>'form',  'method' => 'post','id'=>'CategoryForm','enctype'=>'multipart/form-data')) }}

            <a href="{{URL::to('data/payment-gateway') }}" class="btn btn-primary">Payment Gateway List</a>
                        <input type="hidden" name="txtId" value="{{$rs->id}}">

            <br/> <br/>
            <div class="panel panel-default">
                        <div class="panel-heading text-right">
                            <input type="submit" class="btn btn-primary " value="Submit">
                            <input type="reset" class="btn btn-default " value="Cancel">
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                             @include('layouts.administrator.includes.error')
        

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="information">
                                      <div class="row">

                                        <div class="col-md-8">

                                            <div class="checkbox">
                                                <label>
                                    <input type="checkbox" value="1" name="chkStatus" {{ utilities::chkBoxChecked($rs->status) }}  > <abbr title="This will be available online">Active</abbr>&nbsp;&nbsp;

                                                </label>
                                            </div>

                                            <div class="form-group">
                                                <label for="labelTitle">Payment Title</label>
                                                <input type="text" class="form-control" name="txtPaymentTitle" placeholder="Payment Title" value="{{$rs->payment_option}}">
                                             </div>


                                            <div class="form-group">
                                                <label for="labelTitle">Payment Description</label>
                                                <textarea class="form-control" name="txtPaymentDescription" placeholder="Payment Description">{{$rs->payment_description}}</textarea>
                                             </div>

                                             
                                        </div>

                                        <div class="col-md-4">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    Photo
                                                </div>
                                                <div class="panel-body">
                                                    <img src="{{utilities::getPaymentOptionPictureThumb($rs->filename)}}" class="img-responsive pull-right" style="width:150px;margin-bottom:20px;"><br/>
                                                    <input type="file" class="form-control" name="file">
                                                </div>
                                            </div>
                                        </div>
                                      
                                      </div>

                                </div>
                              
                            </div>
                        </div>
                   <!-- /.panel-body -->
             </div>
             {{ Form::close() }}
        
        

</div>
        <!-- /#page-wrapper -->

