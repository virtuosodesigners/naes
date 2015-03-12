@extends('/layouts.main')

@section('title')
NAES: New User

@stop

@section('body')
<div class="container-fluid">
<div class="row">
<div class="col-md-3">
</div>
<div class="col-md-6">
<div class="jumbotron">


    <p>The user: {{$theUsername}} was added successfully.</p>
</div>
</div>
<div class="col-md-3">
</div>
</div><!-- End of row -->
</div> <!-- End of container -->

@stop();