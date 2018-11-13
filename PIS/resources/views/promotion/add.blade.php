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
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="{{asset('css/mdb.min.css')}}" rel="stylesheet">
        <!-- Your custom styles (optional) -->
</head>
<body>
   <div class="container">
       <p class="lead">Promotion entry</p>
       <div class="card container col-md-8 ml-0">
           <form action="">
               <div class="row">
                   <div class="form-group col-md-6">
                       <label for="hos">Enter HOS No</label>
                       <input type="number" class="form-control" placeholder="Enter HOS No" name="HOS">
                   </div>
                   <div class="form-group col-md-6">
                       <label for="designation">Designation</label>
                       <input type="text" name="designation" class="form-control" placeholder="Promoted Designation">
                   </div>
               </div>
               <div class="row">
                   <div class="form-group col-md-6">
                       <label for="passingyear">Enter passing year</label>
                       <input type="number" class="form-control" placeholder="Enter passing year" name="passingyear">
                   </div>
                   <div class="form-group col-md-6">
                       <label for="exam">Exam name</label>
                       <input type="text" name="exam" class="form-control" placeholder="Exam name">
                   </div>
               </div>
               <input class="form-control btn btn-primary col-md-2" type="submit" value="Save">
           </form>
       </div>
   </div>
</body>
</html>