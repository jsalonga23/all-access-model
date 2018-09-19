
<!-- Custom Fonts -->

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-12">

                <h1 class="page-header">Website Setting</h1>
                              @include('layouts.administrator.includes.error')

            <div class="row">



                    <div class="col-md-8">

                         {{ Form::open(array('url' => 'data/site/submit','role'=>'form',  'method' => 'post', 'class'=>'form-horizontal')) }}
                                
                                      <div class="form-group">
                                        <label for="inputEmail3" class="control-label">Delivery Charge</label>
                                        <div class="">
                                          <input required type="number" class="form-control" id="txtDeliveryCharge" name="txtDeliveryCharge" placeholder="Delivery Charge" value="{{$rsWebsiteSettings[0]->value}}">
                                          <span class="text-muted"><small><em><small>This will be your default delivery charge</small></em></small></span>
                                        </div>
                                      </div>
                                     <br/>
                                      <div class="form-group">
                                        <div class="">
                                          <button type="submit" class="btn btn-default btn-primary">Save Configuration</button>
                                        </div>
                                      </div>
                                  
                         {{ Form::close() }}
                    </div>
            </div>

            </div>

            <!-- /.row -->
            <div class="row hide">
                <div class="col-md-12">
                    <div class="row">
                            <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Ordered (20)
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="morris-area-chart"></div> <img src="{{asset('chart.jpg')}}" style="width:82.5%;">
                        </div>

                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            New Users
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="morris-bar-chart"></div><img src="{{asset('chart2.jpg')}}">
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>

                    </div>
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Best Seller Items
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="morris-line-chart"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Featured Items
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="morris-donut-chart"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->


        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->