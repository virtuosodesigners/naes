@extends('/layouts.main')

@section('title')
    NAES: Add Candidate

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
        <li class="active"><a href="/adduser">Add User<span class="sr-only">(current)</span></a></li>
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
<div class="col-lg-8">
<h1>Edit Candidate</h1>
</div>
    {{Form::model($candidate,array('route'=>'candidates.update', $candidate->id,'class'=>'form-horizontal'))}}
    <div class="col-lg-6">
    <div class="form-group">

        {{Form::label('inputname','Name',array('class'=>'col-sm-2 control-label'))}}
        <div class="col-sm-10">
            {{Form::text('name',null,array('class'=>'form-control','id'=>'inputname','placeholder'=>'Enter Candidate\'s Name'))}}
        </div>
    </div>

        <div class="form-group">

            {{Form::label('inputaddress','Address',array('class'=>'col-sm-2 control-label'))}}
            <div class="col-sm-10">
                {{Form::text('address',null,array('class'=>'form-control','id'=>'inputaddress','placeholder'=>'Enter Candidate\'s Address'))}}
            </div>
        </div>

        <div class="form-group">

            {{Form::label('inputnumber','Contact Number',array('class'=>'col-sm-2 control-label'))}}
            <div class="col-sm-10">
                {{Form::text('tel',null,array('class'=>'form-control','id'=>'inputnumber','placeholder'=>'Enter Candidate\'s Number'))}}
            </div>
        </div>

        <div class="form-group">

            {{Form::label('inputemail','Email address',array('class'=>'col-sm-2 control-label'))}}
            <div class="col-sm-10">
                {{Form::text('email',null,array('class'=>'form-control','id'=>'inputemail','placeholder'=>'Enter Candidate\'s Email'))}}
            </div>
        </div>

        <div class="form-group">

            {{Form::label('user_type','Candidate Type',array('class'=>'col-sm-2 control-label'))}}
            <div class="col-sm-10">
                {{Form::select('candidate_type',
                array(
                'Bartender'=>'Bartender',
                'Beverage Server'=>'Beverage Server',
                'Beverage Steward'=>'Beverage Steward',
                 'Chef de Cuisine'=>'Chef de Cuisine',
                'Chef de Partie'=>'Chef de Partie',
                'Commis Chef'=>'Commis Chef',
                 'Cruise Staff/DJ'=>'Cruise Staff/DJ',
                'Custodial Host/ess'=>'Custodial Host/ess',
                'Custodial Floor Care'=>'Custodial Floor Care',
                 'Demi Chef de Partie'=>'Demi Chef de Partie',
                'Dining Room Server'=>'Dining Room Server',
                'Entertainment Host/ess'=>'Entertainment Host/ess',
                 'Entertainment Technician'=>'Entertainment Technician',
                'First Housekeeper'=>'First Housekeeper',
                'First Steward'=>'First Steward',
                 'Galley Steward'=>'Galley Steward',
                'Guest Services Agents'=>'Guest Services Agents',
                'Housekeeper'=>'Housekeeper',
                 'Houseman'=>'Houseman',
                'Junior Sous Chef'=>'Junior Sous Chef',
                'Lifeguard'=>'Lifeguard',
                 'Merchandise Host/ess'=>'Merchandise Host/ess',
                'Other'=>'Other',
                'Pool Attendant'=>'Pool Attendant',
                 'Quick Service Host/ess'=>'Quick Service Host/ess',
                'Quick Service Assistant Manager'=>'Quick Service Assistant Manager',
                'Restaurant Manager'=>'Restaurant Manager',
                 'Second Housekeeper'=>'Second Housekeeper',
                'Second Steward'=>'Second Steward',

                )
                ,null,array(
                'class'=>'form-control',
                'id'=>'inputUserType',
                'placeholder'=>'Username'))}}
            </div>
        </div>

        <div class="form-group">

            {{Form::label('inputpassport','Passport',array('class'=>'col-sm-2 control-label'))}}
            <div class="col-sm-10">
                {{Form::text('passport',null,array('class'=>'form-control','id'=>'inputpassport','placeholder'=>'Enter Candidate\'s Passport Number'))}}
            </div>
        </div>


        <div class="form-group">

            {{Form::label('inputpassportexpiry','Passport Expiry Date',array('class'=>'col-sm-2 control-label'))}}
            <div class="col-sm-10">
                {{Form::text('passportexpiry',null,array('class'=>'form-control','id'=>'datepicker','placeholder'=>'Enter Candidate\'s Passport Expiry Date'))}}
            </div>
        </div>


        <div class="form-group">

            {{Form::label('inputtelephone','Telephone',array('class'=>'col-sm-2 control-label'))}}
            <div class="col-sm-10">
                {{Form::text('tel1',null,array('class'=>'form-control','id'=>'inputtelephone','placeholder'=>'Enter Candidate\'s Telephone'))}}
            </div>
        </div>

        <div class="form-group">

            {{Form::label('inputorientation','Orientation Date',array('class'=>'col-sm-2 control-label'))}}
            <div class="col-sm-10">
                {{Form::text('orientationdate',null,array('class'=>'form-control','id'=>'inputorientation','placeholder'=>'Enter Candidate\'s Orientation Date'))}}
            </div>
        </div>

        <div class="form-group">

            {{Form::label('inputinterview','Job interview Date',array('class'=>'col-sm-2 control-label'))}}
            <div class="col-sm-10">
                {{Form::text('interviewdate',null,array('class'=>'form-control','id'=>'inputinterview','placeholder'=>'Enter Candidate\'s Job interview Date'))}}
            </div>
        </div>


        <div class="form-group">

            {{Form::label('inputmedical','Medical Date',array('class'=>'col-sm-2 control-label'))}}
            <div class="col-sm-10">
                {{Form::text('medicaldate',null,array('class'=>'form-control','id'=>'inputmedical','placeholder'=>'Enter Candidate\'s Job Medical Date'))}}
            </div>
        </div>

        <div class="form-group">

            {{Form::label('inputposition','CBC',array('class'=>'col-sm-2 control-label'))}}
            <div class="col-sm-10">
                {{Form::select('cbc',
                array(
                'Pass'=>'Pass',
                'Fail'=>'Fail')
                ,null,array(
                'class'=>'form-control',
                'id'=>'inputposition',
                'placeholder'=>'Username'))}}
            </div>
        </div>

        <div class="form-group">

            {{Form::label('inputembassy','Embassy Date',array('class'=>'col-sm-2 control-label'))}}
            <div class="col-sm-10">
                {{Form::text('embassydate',null,array('class'=>'form-control','id'=>'inputembassy','placeholder'=>'Enter Candidate\'s Job Embassy Date'))}}
            </div>
        </div>

        <div class="form-group">

            {{Form::label('inputtravel','Travel Date',array('class'=>'col-sm-2 control-label'))}}
            <div class="col-sm-10">
                {{Form::text('traveldate',null,array('class'=>'form-control','id'=>'inputtravel','placeholder'=>'Enter Candidate\'s Travel Date'))}}
            </div>
        </div>


  
</div>
<div class="col-lg-6">

    <div class="form-group">

        {{Form::label('candidatephoto','Candidate\'s Picture',array('class'=>'col-sm-2 control-label'))}}
        <div class="col-sm-10">
            {{Form::file('image');}}
        </div>
        <p class="help-block">Please upload candidate's picture file here...</p>
    </div>

    <div class="form-group">

        {{Form::label('inputemployer','Employer',array('class'=>'col-sm-2 control-label'))}}
        <div class="col-sm-10">
            {{Form::text('employer',null,array('class'=>'form-control','id'=>'inputemployer','placeholder'=>'Enter Candidate\'s Employer'))}}
        </div>
    </div>

    <div class="form-group">

        {{Form::label('inputposition2','Position 2',array('class'=>'col-sm-2 control-label'))}}
        <div class="col-sm-10">
            {{Form::text('position2',null,array('class'=>'form-control','id'=>'inputposition2','placeholder'=>'Enter Candidate\'s Second Position'))}}
        </div>
    </div>

    <div class="form-group">

        {{Form::label('inputissuedate','Passport Issue Date',array('class'=>'col-sm-2 control-label'))}}
        <div class="col-sm-10">
            {{Form::text('passissuedate',null,array('class'=>'form-control','id'=>'inputissuedate','placeholder'=>'Enter Candidate\'s Passport Issue Date'))}}
        </div>
    </div>

    <div class="form-group">

        {{Form::label('inputemergency','Emergency Contact',array('class'=>'col-sm-2 control-label'))}}
        <div class="col-sm-10">
            {{Form::text('emergency',null,array('class'=>'form-control','id'=>'inputemergency','placeholder'=>'Enter Candidate\'s Emergency Contact'))}}
        </div>
    </div>

    <div class="form-group">

        {{Form::label('inputemergencyaddress','Emergency Contact Address',array('class'=>'col-sm-2 control-label'))}}
        <div class="col-sm-10">
            {{Form::text('emergencyaddress',null,array('class'=>'form-control','id'=>'inputemergencyaddress','placeholder'=>'Enter Candidate\'s Emergency Contact Address'))}}
        </div>
    </div>



  

<h3>Please check where applicable</h3>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
                {{Form::checkbox('contract','Yes - Applicant Contract',false)}}
                {{Form::label('contract','Applicant Contract')}}

            </div>
            <div class="checkbox">
                {{Form::checkbox('passpictures','Yes - Passport Pictures',false)}}
                {{Form::label('passpictures','Passport Pictures')}}

            </div>
            <div class="checkbox">
                {{Form::checkbox('passport1','Yes - Passport',false)}}
                {{Form::label('passport1','Passport')}}

            </div>
            <div class="checkbox">
                {{Form::checkbox('recommendations','Yes - Recommendations/Reference Letters',false)}}
                {{Form::label('recommendations','Recommendations/Reference Letters')}}

            </div>
            <div class="checkbox">
                {{Form::checkbox('regfee','Yes - Registration Fee',false)}}
                {{Form::label('regfee','Registration Fee')}}

            </div>
            <div class="checkbox">
                {{Form::checkbox('visa','Yes - Visa',false)}}
                {{Form::label('visa','Yes - Visa')}}

            </div>
        </div>
    </div>


<h3>Payment Information</h3>

    <div class="form-group">

        {{Form::label('inputpaymenttype','Payment Type Options',array('class'=>'col-sm-2 control-label'))}}
        <div class="col-sm-10">
            {{Form::select('paymenttype',
            array(
            'Registration Fee'=>'Registration Fee',
            'Program Fee'=>'Program Fee',
            'Miscellaneous Sales'=>'Miscellaneous Sales')
            ,null,array(
            'class'=>'form-control',
            'id'=>'inputUserType',
            'placeholder'=>'Username'))}}
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            {{Form::submit('Add Candidate',array('class'=>'btn btn-primary'))}}

        </div>
    </div>
    {{Form::close()}}

</div>

</div>
</form>
</div><!-- End of row -->
</div> <!-- End of container -->
@stop