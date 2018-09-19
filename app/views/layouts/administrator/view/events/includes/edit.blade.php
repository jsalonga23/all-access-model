{{ Form::open(array('url' => 'data/events/edit/submit','role'=>'form',  'method' => 'post','id'=>'eventsInfo', 'enctype'=>'multipart/form-data')) }}

<div class="row">
    <div class="col-lg-12">

    <div class="checkbox">
        <label>
            <input type="hidden" name="txtId" value="{{$rsEvents->id}}">
            <input type="checkbox" name="chkActive" value="1" {{ utilities::chkBoxChecked($rsEvents->status) }}> <abbr title="This will be available online">Active</abbr>&nbsp;&nbsp;
        </label>
    </div>

    <div class="checkbox">
        <label>
            <input type="checkbox" name="chkClosed" value="1" {{ utilities::chkBoxChecked($rsEvents->is_closed) }}> <abbr title="This will be available online">Closed Event</abbr>&nbsp;&nbsp;
        </label>
    </div>

    </div>
</div>


<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <label for="txtEventName">Event Name</label>
            <input type="text" class="form-control" id="txtEventName" aria-describedby="emailHelp" name="txtEventName" placeholder="Event Name" value="{{$rsEvents->title}}">
        </div>
    </div>
</div>

<div class="row">

    <div class="col-lg-6">
        <div class="form-group">
            <label for="txtStartDate">Event Date</label>
            <div class='input-group date' id='txtStartDate'>
                <input type='text' name="txtStartDate" class="form-control"  placeholder="Y-m-d" value="{{date('Y-m-d', strtotime($rsEvents->start_date))}}" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form-group">
            <label for="txtEndDate">Closing Date</label>
            <div class='input-group date' id='txtEndDate'>
                <input type='text' name="txtEndDate" class="form-control" placeholder="Y-m-d" value="{{date('Y-m-d', strtotime($rsEvents->end_date))}}" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <label for="txtDescription">Description</label>
            <textarea class="form-control textarea" rows="10" name="txtDescription" id="txtDescription">{{$rsEvents->description}}</textarea>
        </div>
    </div>
</div>



<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <label for="txtDescription">Upload Image</label>
            @if($rsEvents->image != "")
            <img src="{{asset('assets/images/events/small/'.$rsEvents->image)}}" alt="" class="img-responsive" style="margin-bottom:25px;">
            @endif
            <input type="file" class="form-control-file" id="imageEventPrimary" aria-describedby="fileHelp" name="file">

        </div>


    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <label for="txtDescription">Uploaded File</label>
            @if($rsEvents->file != "")
            <a href="{{asset('assets/images/events/'.$rsEvents->id.'/'.$rsEvents->file)}}">Download File</a>
            @endif
            <input type="file" class="form-control-file" id="filepdf" name="filepdf" aria-describedby="fileHelp" name="file">
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

