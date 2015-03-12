@extends('/layouts.main')

@section('title')
NAES: Add Candidate

@stop

@section('body')
<div class="container-fluid">
<div class="row">
<div class="col-md-3">
</div>
<div class="col-md-6">
<div class="jumbotron">
  <h1 style="text-align:center;">Admin Panel Login</h1>
<form class="form-horizontal">
  <div class="form-group">
    <label for="inputUsername" class="col-sm-2 control-label">Username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="username" id="inputUsername" placeholder="Username">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>
</div>
</div>
<div class="col-md-3">
</div>
</div><!-- End of row -->
</div> <!-- End of container -->

</body>
</html>