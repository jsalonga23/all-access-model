
  <!-- /.row --> 

  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading"> <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#addNewEvent">New Event</a> </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
          <div class="dataTable_wrapper">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
              <thead>
                <tr>
                  <th>Event Name</th>
                  <th>Event Date</th>
                  <th>Closing Date</th>
                  <th>Venue</th>
                  <th>No. of Registrants</th>
                  <th>Status</th>
                  <th style="width:50px;">Action</th>
                </tr>
              </thead>
              <tbody>
             {{-- {{utilities::debug($rsEvents)}} --}}
             @foreach($rsEvents as $item)
              <!--Image-->
              <tr class="odd gradeX" id="row_{{ $item->id }}">
                <td width="200">
                  <a href="{{ URL::to('data/events/edit/'.$item->id) }}" >
                    {{ $item->title }}
                  </a> 
                </td>
                <td>{{date('Y-m-d', strtotime($item->start_date))}}</td>
                <td>{{date('Y-m-d', strtotime($item->end_date))}}</td>

                <td>{{ $item->venue }}</td>
                <td>{{utilities::countMember($item->id)}}</td>
                <td width="100" class="text-center">{{ $item->status?'
                  <button class="btn btn-xs btn-success btn-xs">Active</button>
                  ':'
                  <button class="btn btn-xs btn-default btn-xs">Inactive</button>
                  '}}
                </td>
                <td width="70"><ul class="nav navbar-top-links navbar-right removeAttribute">

                    <li class="dropdown removeAttribute"> <a class="dropdown-toggle removeAttribute" data-toggle="dropdown" href="#"><!-- <i class="fa fa-bars" aria-hidden="true"></i>&nbsp; --><i class="fa fa-chevron-circle-down" aria-hidden="true"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ URL::to('data/events/view/participants/'.$item->id) }}" ><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;View Participants</a></li>
                        <li><a href="{{ URL::to('data/events/edit/'.$item->id) }}" ><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;Edit</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:actionType('delete','{{$item->id}}', '{{$item->year}}','{{$item->month}}')"><i class="fa fa-times" aria-hidden="true"></i>&nbsp;&nbsp;Delete</a></li>
                      </ul>
                      <!-- /.dropdown-messages --> 
                    </li>
                  </ul>
                  </a>
                </td>
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



 @include('layouts.administrator.view.events.includes.popup_add')

