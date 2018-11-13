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
    
  </head>
</head>
<body>
    <div class="container">
        <p class="lead">Add a transfer entry</p>
        <div class="card col-sm-8 col-md-8 col-lg-8">
            <form>
                <div class="row">
                    <div class="form-group col-sm-5 col-md-5 col-lg-5">
                        <label for="hos_no">Employee id(HOS NO)</label>
                        <input type="text" name="hos_no" class="form-control" placeholder="Enter Hos NO">
                    </div>
                    <div class="form-group col-sm-5 col-md-4 col-lg-5 offset-1">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" name="date">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-5 col-md-5 col-lg-5">
                        <label for="to_station">To Station</label>
                        <input type="text" name="to_station" class="form-control" placeholder="To where employee is transferred">
                    </div>
                    <div class="form-group col-sm-5 col-md-4 col-lg-5 offset-1">
                        <label for="on_promotion">Promotion</label>
                        <input type="text" class="form-control" name="on_promotion" placeholder="Promoted to post">
                    </div>
                </div>
                <input type="submit" value="Save" class="btn btn-primary">
            </form>
        </div>

    </div>
</body>
</html>