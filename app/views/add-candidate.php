<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>NAES Candidates Database - Login</title>
<link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css" >
<link rel="stylesheet" href="assets/css/style.css" type="text/css" >
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

</head>
<body>
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
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="row">
<div class="col-lg-8">
<h1>Add A New Candidate</h1>
</div>

<form action="#" method="post">
<div class="col-lg-6">

<div class="form-group">
    <label for="inputname">Name</label>
    <input type="text" class="form-control" id="inputname" name="name" placeholder="Enter Canadidate's Name" required>
  </div>
<div class="form-group">
    <label for="inputaddress">Address</label>
    <input type="text" class="form-control" id="inputaddress" name="address" placeholder="Enter Canadidate's Address">
  </div>
  
 <div class="form-group">
    <label for="inputnumber">Contact Number</label>
    <input type="tel" class="form-control" id="inputnumber" name="number" placeholder="Enter Canadidate's Number">
  </div>
 <div class="form-group">
    <label for="inputemail">Email address</label>
    <input type="email" class="form-control" id="inputemail" name="email" placeholder="Enter Canadidate's Email">
  </div>
  
 <div class="form-group">
    <label for="inputposition">Position</label>
    <select class="form-control" name="position">
      <option>Bartender</option>
      <option>Beverage Server</option>
      <option>Beverage Steward</option>
      <option>Chef de Cuisine</option>
      <option>Chef de Partie</option>
       <option>Commis Chef</option>
      <option>Cruise Staff/DJ</option>
      <option>Custodial Host/ess</option>
      <option>Custodial Floor Care</option>
      <option>Demi Chef de Partie</option>
       <option>Dining Room Server</option>
      <option>Entertainment Host/ess</option>
      <option>Entertainment Technician</option>
      <option>First Housekeeper</option>
      <option>First Steward</option>
       <option>Galley Steward</option>
      <option>Guest Services Agents</option>
      <option>Housekeeper</option>
      <option>Houseman</option>
      <option>Junior Sous Chef</option>
       <option>Lifeguard</option>
      <option>Merchandise Host/ess</option>
      <option>Other</option>
      <option>Pool Attendant</option>
      <option>Quick Service Host/ess</option>
       <option>Quick Service Assistant Manager</option>
      <option>Restaurant Manager</option>
      <option>Second Housekeeper</option>
      <option>Second Steward</option>
  </select>
 </div>
  <div class="form-group">
    <label for="inputpassport">Passport</label>
    <input type="text" class="form-control" id="inputpassport" name="passport" placeholder="Enter Canadidate's Passport Number">
  </div>
  
   <div class="form-group">
    <label for="inputpassportexpiry">Passport Expiry Date</label>
    <input type="date" class="form-control" id="inputpassportexpiry" name="passportexpiry" placeholder="Enter Canadidate's Passport Expiry Date">
  </div>
  
    <div class="form-group">
    <label for="inputtelephone">Telephone</label>
    <input type="tel" class="form-control" id="inputtelephone" name="telephone" placeholder="Enter Canadidate's Telephone">
  </div>
  
     <div class="form-group">
    <label for="inputorientation">Orientation Date</label>
    <input type="date" class="form-control" id="inputorientation" name="orientationdate" placeholder="Enter Canadidate's Orientation Date">
  </div>
  
      <div class="form-group">
    <label for="inputinterview">Job interview Date</label>
    <input type="date" class="form-control" id="inputinterview" name="interviewdate" placeholder="Enter Canadidate's Interview Date">
  </div>
  
    <div class="form-group">
    <label for="inputmedical">Medical Date</label>
    <input type="date" class="form-control" id="inputmedical" name="medicaldate" placeholder="Enter Canadidate's Medical Date">
  </div>
  
   <div class="form-group">
    <label for="inputposition">CBC</label>
    <select class="form-control" name="cbc">
      <option>Pass</option>
      <option>Fail</option>
      </select>
      </div>
      
     <div class="form-group">
    <label for="inputembassy">Embassy Date</label>
    <input type="date" class="form-control" id="inputembassy" name="embassydate" placeholder="Enter Canadidate's Embassy Date">
  </div>
  
    <div class="form-group">
    <label for="inputtravel">Travel Date</label>
    <input type="date" class="form-control" id="inputtravel" name="traveldate" placeholder="Enter Canadidate's Travel Date">
  </div>
  
</div>
<div class="col-lg-6">

<div class="form-group">
    <label for="candidatephoto">Candidate Photo</label>
    <input type="file" id="candidatephoto" name="filename">
    <p class="help-block">Please upload candidate's picture file here...</p>
  </div>

 <div class="form-group">
    <label for="inputemployer">Employer</label>
    <input type="text" class="form-control" id="inputemployer" name="employer" placeholder="Enter Canadidate's Employer">
  </div>
 
  <div class="form-group">
    <label for="inputposition2">Position 2</label>
    <input type="text" class="form-control" id="inputposition2" name="position2" placeholder="Enter Canadidate's Second Position">
  </div>
  
    <div class="form-group">
    <label for="inputissuedate">Passport Issue Date</label>
    <input type="date" class="form-control" id="inputissuedate" name="passissuedate" placeholder="Enter Canadidate's Passport Issue Date">
  </div>
  
   <div class="form-group">
    <label for="inputemergency">Emergency Contact</label>
    <input type="text" class="form-control" id="inputemergency" name="emergency" placeholder="Enter Canadidate's Emergency Contact">
  </div>
  
  <div class="form-group">
    <label for="inputemergencyaddress">Emergency Contact Address</label>
    <input type="text" class="form-control" id="inputemergencyaddress" name="emergencyaddress" placeholder="Enter Emergency Contact Address">
  </div>
  
<div class="jumbotron">
<h3>Please check where applicable</h3>
  <div class="checkbox">
  <label>
    <input type="checkbox" value="Yes - Applicant Contract">
    Applicant Contract 
  </label>
  </div>
  <div class="checkbox">
   <label>
    <input type="checkbox" value="Yes - Passport Pictures">
    Passport Pictures 
  </label>
  </div>
  <div class="checkbox">
   <label>
    <input type="checkbox" value="Yes - Passport">
    Passport
  </label>
  </div>
  <div class="checkbox">
  <label>
    <input type="checkbox" value="Yes - Recommendations/Reference Letters">
    Recommendations/Reference Letters
  </label>
  </div>
  <div class="checkbox">
  <label>
    <input type="checkbox" value="Yes - Registration Fee">
    Registration Fee
  </label>
  </div>
  <div class="checkbox">
  <label>
    <input type="checkbox" value="Yes - Visa">
    Visa
  </label>
  </div>
</div><!-- End of jumbotron -->
<h3>Payment Information</h3>
 <div class="form-group">
    <label for="inputpaymenttype">Payment Type Options</label>
    <select class="form-control" name="paymenttype">
      <option>Registration Fee</option>
      <option>Program Fee</option>
      <option>Miscellaneous Sales</option>
      </select>
      </div>
</div>  
</div>
</form>
</div><!-- End of row -->
</div> <!-- End of container -->

</body>
</html>