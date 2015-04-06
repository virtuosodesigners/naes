@extends('/layouts.main')

@section('title')
NAES: Add New User

@stop

@section('body')
<div class="container-fluid">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">New Adventures Employment</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/addcandidate">Add Candidate<span class="sr-only">(current)</span></a></li>
                    <li><a href="#">Search Candidates</a></li>

                </ul>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/logout">Logout</a></li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
<div class="row">
<div class="col-md-3">
</div>
<div class="col-md-6">
<div class="jumbotron">
  <h1 style="text-align:center;">Add New User</h1>

    {{Form::open(array('url'=>'adduser','class'=>'form-horizontal'))}}
  <div class="form-group">

      {{Form::label('username','Username',array('class'=>'col-sm-2 control-label'))}}
    <div class="col-sm-10">
        {{Form::text('username',null,array('class'=>'form-control','id'=>'inputUsername','placeholder'=>'Username'))}}
        {{$errors->first('username')}}
    </div>
  </div>
  <div class="form-group">
      {{Form::label('password','Password',array('class'=>'col-sm-2 control-label'))}}

    <div class="col-sm-10">
        {{Form::text('password',null,array('class'=>'form-control','id'=>'inputPassword3','placeholder'=>'Password'))}}
        {{$errors->first('password')}}


    </div>
  </div>
    <div class="form-group">

        {{Form::label('email','Email Address',array('class'=>'col-sm-2 control-label'))}}
        <div class="col-sm-10">
            {{Form::text('email',null,array('class'=>'form-control','id'=>'inputEmail','placeholder'=>'Email Address'))}}
            {{$errors->first('email','<p class=bg-danger>:message</p>')}}
        </div>
    </div>

    <div class="form-group">

        {{Form::label('codverify1','Verification Code',array('class'=>'col-sm-2 control-label'))}}
        <div class="col-sm-10">
            {{Form::text('codverify',null,array('class'=>'form-control','id'=>'codverify1','placeholder'=>''))}}
            {{$errors->first('codverify','<p class=bg-danger>:message</p>')}}
        </div>
    </div>

    <div class="form-group">

        {{Form::label('user_type','User Type',array('class'=>'col-sm-2 control-label'))}}
        <div class="col-sm-10">
            {{Form::select('user_type',
            array(
            'staff'=>'Staff',
            'manager'=>'Manager',
            'admin'=>'Admin')
            ,null,array(
            'class'=>'form-control',
            'id'=>'inputUserType',
            'placeholder'=>'Username'))}}
        </div>
    </div>




  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        {{Form::submit('Add New User',array('class'=>'btn btn-default'))}}

    </div>
  </div>
{{Form::close()}}
</div>
</div>
<div class="col-md-3">
</div>
</div><!-- End of row -->
</div> <!-- End of container -->

@stop();