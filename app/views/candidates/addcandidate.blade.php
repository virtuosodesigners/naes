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

                <a class="navbar-brand" href="#">New Adventures Employment</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="/candidates">View All Candidates</a></li>
                    <li><a href="/candidates/create">Add Candidate</a></li>
                    <li><a href="/allpayments">Payments</a></li>


                </ul>

                {{Form::open(array('route'=>'candidates.index','class'=>'navbar-form navbar-left','method'=>'GET'))}}
                <div class="form-group">


                    {{Form::text('searchf',null,array('class'=>'form-control','id'=>'searchf','placeholder'=>'Search Candidate'))}}
                </div>


                {{Form::submit('Search',array('class'=>'btn btn-default'))}}



                {{Form::close()}}



                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/logout">Logout</a></li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
<div class="row">
<div class="col-lg-8">
<h1>Add A New Candidate</h1>
</div>
    {{Form::open(array('route' => 'candidates.store','class'=>'form-horizontal','files'=>true))}}
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

            {{Form::label('inputcity','City/Area',array('class'=>'col-sm-2 control-label'))}}
            <div class="col-sm-10">
                {{Form::text('city',null,array('class'=>'form-control','id'=>'inputcity','placeholder'=>'City'))}}
            </div>
        </div>

        <div class="form-group">

            {{Form::label('inputparishes','Parishes',array('class'=>'col-sm-2 control-label'))}}
            <div class="col-sm-10">
                {{Form::select('parishes',
                array(
                'Clarendon'=>'Clarendon',
                'Hanover'=>'Hanover',
                'Kingston'=>'Kingston',
                'Manchester'=>'Manchester',
                'Portland'=>'Portland',
                'St. Andrew'=>'St. Andrew',
                'St. Ann'=>'St. Ann',
                'St. Catherine'=>'St. Catherine',
                'St. Elizabeth'=>'St. Elizabeth',
                'St. James'=>'St. James',
                'St. Mary'=>'St. Mary',
                'St. Thomas'=>'St. Thomas',
                'Trelawny'=>'Trelawny',
                'Westmoreland'=>'Westmoreland')
                ,null,array(
                'class'=>'form-control',
                'id'=>'inputparishes',
                ))}}
            </div>
        </div>

        <div class="form-group">

            {{Form::label('inputcountry','Country',array('class'=>'col-sm-2 control-label'))}}
            <div class="col-sm-10">
                {{Form::text('country',null,array('class'=>'form-control','id'=>'inputcity','placeholder'=>'Country'))}}
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

            {{Form::label('user_type','Position Desired',array('class'=>'col-sm-2 control-label'))}}
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
                ))}}
            </div>
        </div>

        <div class="form-group">

            {{Form::label('inputoptionalposition','Optional Position',array('class'=>'col-sm-2 control-label'))}}
            <div class="col-sm-10">
                {{Form::text('optionalposition',null,array('class'=>'form-control','id'=>'inputoptionalposition','placeholder'=>'Optional Position'))}}
            </div>
        </div>

        <div class="form-group">

            {{Form::label('inputpassport','Passport Number',array('class'=>'col-sm-2 control-label'))}}
            <div class="col-sm-10">
                {{Form::text('passport',null,array('class'=>'form-control','id'=>'inputpassport','placeholder'=>'Enter Candidate\'s Passport Number'))}}
            </div>
        </div>

        <div class="form-group">

            {{Form::label('inputissuedate','Passport Issue Date',array('class'=>'col-sm-2 control-label'))}}
            <div class="col-sm-10">
                {{Form::text('passissuedate',null,array('class'=>'form-control','id'=>'inputissuedate','placeholder'=>'Enter Candidate\'s Passport Issue Date'))}}
            </div>
        </div>


        <div class="form-group">

            {{Form::label('inputpassportexpiry','Passport Expiry Date',array('class'=>'col-sm-2 control-label'))}}
            <div class="col-sm-10">
                {{Form::text('passportexpiry',null,array('class'=>'form-control','id'=>'datepicker','placeholder'=>'Enter Candidate\'s Passport Expiry Date'))}}
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
<hr>
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

        {{Form::label('inputposition2','Position Placed',array('class'=>'col-sm-2 control-label'))}}
        <div class="col-sm-10">
            {{Form::text('position2',null,array('class'=>'form-control','id'=>'inputposition2','placeholder'=>'Enter Candidate\'s Second Position'))}}
        </div>
    </div>



    <div class="form-group">

        {{Form::label('inputemergency','Emergency contact telephone number',array('class'=>'col-sm-2 control-label'))}}
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


    <div class="form-group">

        {{Form::label('inputcandidatestatus','Candidate Status',array('class'=>'col-sm-2 control-label'))}}
        <div class="col-sm-10">
            {{Form::select('candidatestatus',
            array(
            'pending interview'=>'pending interview',
            'passed interview'=>'passed interview',
            'failed interview'=>'failed interview',
            'preparing for offer'=>'preparing for offer',
            'out of status'=>'out of status',
            'offer declined'=>'offer declined')
            ,null,array(
            'class'=>'form-control',
            'id'=>'inputCandidateStatus',
            ))}}
        </div>
    </div>

<hr>
    <h3> Career History Information</h3>
   <b style="color:#204d74">Position 1</b>
    <div class="form-group">

        {{Form::label('inputcompany','Company Name',array('class'=>'col-sm-2 control-label'))}}
        <div class="col-sm-10">
            {{Form::text('company',null,array('class'=>'form-control','id'=>'inputcompany','placeholder'=>'Company Name'))}}
        </div>
    </div>

    <div class="form-group">

        {{Form::label('inputpositionworked','Position Worked',array('class'=>'col-sm-2 control-label'))}}
        <div class="col-sm-10">
            {{Form::text('positonworked',null,array('class'=>'form-control','id'=>'inputpositionworked','placeholder'=>'Position Worked'))}}
        </div>
    </div>

    <h4>Employment Dates</h4>
    <div class="form-group">

        {{Form::label('inputempdateFrom','From',array('class'=>'col-sm-2 control-label'))}}
        <div class="col-sm-10">
            {{Form::text('empdateFrom',null,array('class'=>'form-control','id'=>'inputempdateFrom','placeholder'=>'From'))}}
        </div>
    </div>
    <div class="form-group">

        {{Form::label('inputempdateTo','To',array('class'=>'col-sm-2 control-label'))}}
        <div class="col-sm-10">
            {{Form::text('empdateTo',null,array('class'=>'form-control','id'=>'inputempdateTo','placeholder'=>'To'))}}
        </div>
    </div>
    <hr>
    <b style="color:#204d74">Position 2</b>
    <div class="form-group">

        {{Form::label('inputcompany2','Company Name',array('class'=>'col-sm-2 control-label'))}}
        <div class="col-sm-10">
            {{Form::text('company2',null,array('class'=>'form-control','id'=>'inputcompany2','placeholder'=>'Company Name'))}}
        </div>
    </div>

    <div class="form-group">

        {{Form::label('inputpositionworked2','Position Worked',array('class'=>'col-sm-2 control-label'))}}
        <div class="col-sm-10">
            {{Form::text('positonworked2',null,array('class'=>'form-control','id'=>'inputpositionworked2','placeholder'=>'Position Worked'))}}
        </div>
    </div>

    <h4>Employment Dates</h4>
    <div class="form-group">

        {{Form::label('inputempdateFrom2','From',array('class'=>'col-sm-2 control-label'))}}
        <div class="col-sm-10">
            {{Form::text('empdateFrom2',null,array('class'=>'form-control','id'=>'inputempdateFrom2','placeholder'=>'From'))}}
        </div>
    </div>
    <div class="form-group">

        {{Form::label('inputempdateTo2','To',array('class'=>'col-sm-2 control-label'))}}
        <div class="col-sm-10">
            {{Form::text('empdateTo2',null,array('class'=>'form-control','id'=>'inputempdateTo2','placeholder'=>'To'))}}
        </div>
    </div>

<hr>


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