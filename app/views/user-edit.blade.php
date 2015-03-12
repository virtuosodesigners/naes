@extends('/layouts.main')

@section('title')
NAES: Add New User

@stop

@section('body')
<div class="container-fluid">
<div class="row">
<div class="col-md-3">
</div>
<div class="col-md-6">
<div class="jumbotron">
  <h1 style="text-align:center;">Add New User</h1>

    {{Form::model($user,array('route'=>'user.edit', $user->id,'class'=>'form-horizontal'))}}

     <div class="form-group">

      {{Form::label('username','Username',array('class'=>'col-sm-2 control-label'))}}
    <div class="col-sm-10">
        {{Form::text('username',null,array('class'=>'form-control','id'=>'inputUsername','placeholder'=>'Username'))}}
    </div>
  </div>
  <div class="form-group">
      {{Form::label('password','Password',array('class'=>'col-sm-2 control-label'))}}
    <div class="col-sm-10">
        {{Form::text('password',null,array('class'=>'form-control','id'=>'inputPassword3','placeholder'=>'Password'))}}


    </div>
  </div>
    <div class="form-group">

        {{Form::label('email','Email Address',array('class'=>'col-sm-2 control-label'))}}
        <div class="col-sm-10">
            {{Form::text('email',null,array('class'=>'form-control','id'=>'inputEmail','placeholder'=>'Email Address'))}}
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
        {{Form::submit('Update User',array('class'=>'btn btn-default'))}}

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