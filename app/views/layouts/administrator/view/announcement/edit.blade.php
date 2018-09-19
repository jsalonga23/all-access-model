
<div id="page-wrapper">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{$PageTitle}}</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
       
        {{ Form::open(array('url' => 'data/announcement/edit/submit','role'=>'form',  'method' => 'post')) }}

        <a href="{{URL::to('data/announcement') }}" class="btn btn-primary">Announcement List</a>
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
                        
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="information">
                            <!-- Content Form --> 
                                  <div class="row">
                                    <div class="col-md-12">

                                         <div class="form-group">
                                                <label for="labelTitle">Date</label>
                                                <input type="text" class="form-control datepicker" name="txtDate" placeholder="mm/dd/yyyy" value="{{ date('m/m/Y', strtotime($rs->date_created) ) }}">
                                             </div>


                                        <div class="form-group">
                                                <label for="labelTitle">Title</label>
                                                <input type="text" class="form-control " name="txtTitle" placeholder="Title" value="{{$rs->title}}">
                                             </div>



                                            <div class="form-group">
                                                <label for="labelTitle">Annoucement</label>
                                                <textarea name="txtAnnoucement" class="form-control" placeholder="Your Annoucement" rows="10">{{$rs->content}}</textarea>
                                             </div>


                                      <div class="panel-heading text-right">
                            <input type="submit" class="btn btn-primary " value="Submit">
                        </div>


                                    </div>
                                  </div>
                            <!-- End Content Form -->
                            </div>
                        </div>
                    </div>
               <!-- /.panel-body -->
         </div>
         {{ Form::close() }}
    
        

</div>
        <!-- /#page-wrapper -->

        <!-- /#page-wrapper -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<script>
    

    $(document).ready(function(){
        $('.datepicker').datepicker();
    });

</script>