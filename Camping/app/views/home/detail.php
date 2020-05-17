<!DOCTYPE html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Camping Spot Details</title>
  </head>
  <body>
   <div style="background-image: url('../../images/camp4.jpg');height: 1000px;">
    <div class='container' style="height: 1000px; background-color: white;">

    <h1>Camping Spot Details</h1>
    	<dl>

		    <dt>Campground:</dt>
		    <dd><?=$data->name ?></dd>

        <dt>Description:</dt>
        <dd><?=$data->description ?></dd>

        <dt>Availability:</dt>
        <dd><?=$data->availability ?></dd>
		
        <dt>Price:</dt>
        <dd><?=$data->price ?></dd>

        <dt>Spot Number:</dt>
        <dd><?=$data->spot_number ?></dd>

        <dt>Image:</dt>
        <dd><img src="/Camping/images/<?=$data->image ?>"></dd>
    </dl>
		<a href="/Camping/home/index" class="btn btn-secondary">Back to list</a>
    </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>