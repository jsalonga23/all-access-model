<div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">

                <h1 class="page-header">{{ $rsEvent->title }} ({{ count($rsEventParticipants) }})</h1><p>{{ nl2br( $rsEvent->description)  }}</p>
            </div>
            <!-- /.col-lg-12 -->

            <!-- /.row --> 

            <div class="row">
              <div class="col-lg-12">
                <div class="panel panel-default">
                  <div class="panel-heading"> <a href="{{URL::to('data/events')}}" class="btn btn-primary" >Back</a> </div>
                  <!-- /.panel-heading -->
                  <div class="panel-body">
                    <div class="dataTable_wrapper">
                      <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                          <tr>
                                <th>Event Name</th>
                                <th>Event Date</th>
                                <th>Date Registered</th>
                                <th>Fullname</th>
                                <th>Number Of Person</th>
                                <th>Number of Cars</th>
                                <th>Total Amount</th>
                          </tr>
                        </thead>
                        <tbody>

                            @foreach($rsEventParticipants as $list) 

                            <tr>
                                    <td>{{ $list->title }}</td>
                                <td>{{ date('F d, Y', strtotime($list->start_date) ) }}</td>
                                <td>{{ date('F d, Y', strtotime($list->created_at) ) }}</td>

                                <td>{{ $list->fullname }}</td>
                                <td>{{ $list->car_person }}</td>
                                <td>{{ $list->no_car }}</td>
                                <td>{{ utilities::getCurrectCurrency($list->amount) }}</td>
                             
                            </tr>

                            @endforeach
                        </tbody>
                        
                      </table>
                    </div>
                    <!-- /.table-responsive --> 
                  </div>
                  <!-- /.panel-body --> 
                </div>
                <!-- /.panel --> 
              </div>
              <!-- /.col-lg-12 --> 
            </div>
            <!-- /.row --> 
          <!-- /#page-wrapper --> 



        </div>
        <!-- /.row -->
     

</div>

<script>
    
  
