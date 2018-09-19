<div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{$pageTitle}}</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        @if($pageAction=="view")
            @include('layouts.administrator.view.committee.list')
        @endif
        @if($pageAction=="edit")
            @include('layouts.administrator.view.committee.edit')
        @endif
        @if($pageAction=="add")
            @include('layouts.administrator.view.committee.add')
        @endif

</div>
        <!-- /#page-wrapper -->

