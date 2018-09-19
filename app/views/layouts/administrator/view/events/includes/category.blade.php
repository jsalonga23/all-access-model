<?php 

  // utilities::debug($rsEvents->id,1);

  $rsCategory = EventCategory::getCategoryByEventId($rsEvents->id);

?>
<br/>
<div class="row">
    <div class="col-lg-12">
    <a href="" class="btn btn-primary"  data-toggle="modal" data-target="#addNewCategory">Add New Category</a><br/><br/>
    <table class="table table-bordered" id="tblCategories">
        <thead>
          <tr>
            <th>Category</th>
            <th>Description</th>
            <th>Fees</th>
            <th>Max</th>
            <!-- <th>Cars Allowed</th> -->
            <th></th>


          </tr>
        </thead>
        <tbody>

          @foreach($rsCategory as $item)

            <tr id="row_{{ $item->id}}">
              <td width="15%">{{ $item->title }}</td>
              <td width="45%">{{ Str::limit($item->description, 150) }}</td>
              <td width="10%">{{ utilities::getCurrectCurrency($item->fees) }}</td>
              <td width="10%">{{ $item->max_people }}</td>
              <!-- <td width="10%">{{ $item->maxcars }}</td> -->
              <td width="10%" class="text-center">
                  <!-- <a href="javascript:editRecord({{ $item->id }})" class="btn btn-primary btn-xs">Edit</a> -->
                  <a href="javascript:deleteRecord({{ $item->id }})" class="btn btn-danger btn-xs">Delete</a>
              </td>
            </tr>
          @endforeach
        
        </tbody>
      </table>

    </div>
</div>



<!-- Modal -->
<div id="addNewCategory" class="modal fade" role="dialog">
  <div class="modal-dialog">

    {{ Form::open(array('url' => 'data/events/add/category/submit','role'=>'form',  'method' => 'post','id'=>'eventCategory', 'enctype'=>'multipart/form-data')) }}
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">New Category</h4>
      </div>
      <input type="hidden" class="form-control" id="txtEventId" name="txtEventId" value="{{ $rsEvents->id }}">
      <div class="modal-body">
          <div class="form-group">
            <label for="email">Title</label>
            <input type="text" class="form-control" id="txtCategory" name="txtCategory" value="" placeholder="Category" required>
          </div>
          <div class="form-group">
            <label for="pwd">Description</label>
            <textarea name="txtEventDescription" class="form-control" id="txtEventDescription" rows="5"></textarea>
          </div>

          <div class="form-group">
            <label for="Fees"><FIELDSET>Fees</FIELDSET></label>
            <input type="text" class="form-control" id="txtFees" name="txtFees" placeholder="0.00" required>
          </div>

          <div class="form-group">
            <label for="Fees"><FIELDSET>Number of People</FIELDSET></label>
            <input type="text" class="form-control" id="txtMaxPeople" name="txtMaxPeople" placeholder="" required>
          </div>


            <div class="form-group hide">
            <label for="txtCarsAllowed">Cars Allowed</label>
            <input type="text" class="form-control" id="txtFees" name="txtCarsAllowed" placeholder="">
          </div>

          <div class="form-group">
            <input type="checkbox" name="optActive" value="1">&nbsp;<label for="txtCarsAllowed">Active</label> 
          </div>
      </div>

      <div class="modal-footer">
      <input type="submit" class="btn btn-default btn-primary" value="Submit">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    {{ Form::close() }}

  </div>
</div>


<script>
  $(document).ready(function() {

      $('#eventCategory').submit(function() {

         $.ajax({
            type: "POST",
            url: $(this).attr('action'),
            dataType: "json",
            data  : $(this).serializeArray(),
            success: function(data)
            {
                if (data.status){ 
                
                  $('#tblCategories tbody').html('');
                  $('#tblCategories tbody').html(data.htmlContent);

                } 
                else {
                 alert('Sorry!, we are not able to process your request. Please refresh your page and try again.')
                }
            },
            error: function() {
                alert('Sorry!, we are not able to process your request. Please refresh your page and try again.')
            }

          });

            return false;

      });
  });

  function deleteRecord(passValue)  {

    var r = confirm("Are you sure want to delete this record?");
    if (r == true) {
          
          var mainSite = "{{ URL::to('delete/event/category') }}"
          $.ajax({
            type: "POST",
            url: mainSite,
            dataType: "json",
            data:{value:passValue},
            success: function(data) {

                if (data.status) { 
                  $('#tblCategories tbody tr#row_'+passValue).remove();
                } 
                else {
                    alert('Sorry!, we are not able to process your request. Please refresh your page and try again.')
                }

           },
           error: function() {
             alert('Sorry!, we are not able to process your request. Please refresh your page and try again.')
            }

        });


    } 


    

  }
</script>