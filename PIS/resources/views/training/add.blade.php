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
        <p class="lead">Add trainings</p>
        
    <form action="{{action('TrainingController@store')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="card container col-md-8 ml-0">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="hos">HOS No</label>
                    <input type="number" class="form-control" placeholder="Enter HOS No" name="hos">
                </div>
                <div class="form-group col-md-6">
                    <label for="cat" class="cat">Category</label>
                    <input type="number" class="form-control" placeholder="Category of training" name="cat">
                </div>
            </div>
            <div class="row">
                <div class="container col-md-6">    
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input class="form-control" name="subject" placeholder="Subject of training">
                    </div>
                    <div class="form-group">
                        <label for="from">From date</label>
                        <input type="date" name="from" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="to">To date</label>
                        <input type="date" name="to" class="form-control">
                    </div>
                </div>
                <div class="container col-md-6">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" placeholder="Description of Training" style="height:125px"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="place">Place of training</label>
                        <input type="text" class="form-control" name="place" placeholder="Place of training">
                    </div>
                </div>
            </div>
            <input type="submit" value="Save" class="form-control btn btn-primary col-md-2 mb-2">
        </div>
        
        </form>
    </div>
</body>
</html>