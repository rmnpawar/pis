<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/css/bootstrap-select.min.css">
</head>

<body>

    <p class="lead mx-2 my-3">Enter employee Details</p>

  <div class="container card mx-3 my-1 col-sm-12 col-md-10 col-lg-8">
      <p class="lead">Personal Details</p>
  <div class="row">
  <div class="container col-md-6 col-sm-6">
    <div class='form-group'>
      <label for="fname">Name</label>
      <input type="text" class="form-control" name="fname" placeholder="Enter first name">
    </div>  
    <div class='form-group'>
      <label for="fathername">Father's Name</label>
      <input type="text" class="form-control" name="fathername" placeholder="Enter father's name">
    </div>  
    <div class='form-group'>
      <label for="aadhar">Aadhar Card no.</label>
      <input type="number" class="form-control" name="aadhar" placeholder="Enter aadhar number">
    </div>  
    <div class='form-group'>
      <label for="isMarried">Marital Status</label>
      <select name="isMarried" class="form-control">
        <option disable>Select</option>
        <option value="1">Married</option>
        <option >Unmarried</option>
      </select>
    </div>  
    <div class='form-group'>
      <label for="bg">Blood Group</label>
      <select name="bg" class="form-control">
        <option disable>Select</option>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
      </select>
    </div>  
    

  </div>
  <div class="container col-md-6 col-sm-6">
    <div class="form-group">
      <label for="lname">Last Name</label>
      <input type="text" name="lname" class="form-control" placeholder="Enter last name">
    </div>
    <div class="form-group">
      <label for="dob">Date of Birth</label>
      <input type="date" name="dob" class="form-control" placeholder="Enter last name">
    </div>
    
    <div class="form-group">
      <label for="sex">Choose Sex</label>
      <select name="sex" class="form-control">
        <option disable>Select</option>
        <option value="M">Male</option>
        <option value="F">Female</option>
        <option value="T">Transgender</option>
      </select>
    </div>
    <div class="form-group">
      <label for="nationality">Nationality</label>
      <select name="nationality" class="form-control">
        <option disable>Select</option>
        <option value="M">Indian</option>
        <option >Foreigner</option>
      </select>
    </div>
    <div class="form-group checkbox">
      <label for="religion">Religion</label>
      <select name="religion" class="form-control">
        <option disable>Select</option>
        <option value="Hindu">Hindu</option>
        <option value="Muslim">Muslim</option>
        <option value="Sikh">Sikh</option>
        <option value="Budh">Budh</option>
        <option value="Jain">Jain</option>
        <option value="Christian">Christian</option>
      </select>
    </div>
   



  </div>
</div>
</div>

<div class="container card mx-3 mt-5 col-sm-12 col-md-10 col-lg-8">
  <p class="lead">Address</p>
  <div class="form-group">
    <label for="address">Address</label>
    <textarea name="address" class="form-control"></textarea>
  </div>
  <div class="row">
  <div class="form-group col-md-6 col-sm-6 col-lg-6">
    <label for="state">Select state</label>
    <select name="state" class="form-control">
      <option disable>Select</option>
      @if(count($states) > 0)
        @foreach($states as $state)
        <option value="{{$state->state_name}}">{{$state->state_name}}</option>
        @endforeach
      @endif
    </select>
  </div>
  <div class="form-group col-md-6 col-sm-6 col-lg-6">
    <label for="district">Select district</label>
    <select name="district" class="form-control">
      <option disable>Select</option>
    </select>
  </div>
  </div>
  <div class="row">
  <div class="form-group col-md-6 col-sm-6 col-lg-6">
    <label for="mobile">Mobile No</label>
    <input type="number" name="mobile" class="form-control" placeholder="Enter mobile number">
  </div>
  <div class="form-group col-md-6 col-sm-6 col-lg-6">
    <label for="email">Enter Email</label>
    <input type="email" class="form-control" name="email" placeholder="Enter Email address">
  </div>
  </div>
</div>


<div class="container card mx-3 mt-5 col-sm-12 col-md-10 col-lg-8">
<p class="lead">Professional/Educational</p>
<div class="row">
    <div class="form-group col-md-6 col-sm-6 col-lg-6">
    <label for="eduqual">Educational Qualification</label>
    <select name="eduqual" class="form-control" placeholder="Educational Qualification">
        <option disabled selected>Select</option>
    </select>
    </div>
    <div class="form-group col-md-6 col-sm-6 col-lg-6">
        <label for="institute">Institution</label>
        <input type="text" name="institute" placeholder="Enter institute name" class="form-control">

    </div>
</div>

<div class="row">
    <div class="form-group col-md-6 col-sm-6 col-lg-6">
        <label for="pyear">Passing Year</label>
        <input type="number" name="pyear" placeholder="Passing Year" class="form-control">
    </div>

    <div class="form-group col-md-6 col-sm-6 col-lg-6">
        <label for="experience">Experience</label>
        <input type="number" name="experience" placeholder="Experience in years" class="form-control">
    </div>
</div>
</div>
<div class="container card mx-3 mt-5 col-sm-12 col-md-10 col-lg-8">
    <p class="lead">Office only</p>
    <div class="row">
        <div class="form-group col-sm-6 col-md-6 col-lg-6">
            <label for="designation">Designation</label>
            <select name="designation" class="form-control">
            <option disabled selected>Select</option>
            </select>
        </div>
        <div class="form-group col-sm-6 col-md-6 col-lg-6">
            <label for="office">Office</label>
            <select name="office" class="form-control">
            <option disabled selected>Select</option>
            </select>
        
        </div>

    </div>

    <div class="row">
        <div class="form-group col-sm-6 col-md-6 col-lg-6">
            <label for="DOJ">Date of Joining</label>
            <input name="DOJ" class="form-control" type="date" placeholder="Date of Joining">
        </div>

        <div class="form-group col-sm-6 col-md-6 col-lg-6">
            <label for="section">Section</label>
            <input type="text" name="section" class="form-control" placeholder="Enter Section"
        </div>

    </div>

</div>
</div>

<div class="col-md-2 offset-3 my-5">
<input class="form-control" type="submit" value="Submit">
</div>











 

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>
</body>

</html>
