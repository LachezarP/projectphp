<!DOCTYPE html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Contact Details</title>
  </head>
  <body>
  	<div class='container'>
    <h1>Contact Details</h1>
    	<dl>

		<dt>Username:</dt>
	    <dd><?=$data->username ?></dd>

        <dt>First Name:</dt>
        <dd><?=$data->first_name ?></dd>

        <dt>Last Name:</dt>
        <dd><?=$data->last_name ?></dd>
		
        <dt>Phone Number:</dt>
        <dd><?=$data->phone_number ?></dd>

        <dt>Email:</dt>
        <dd><?=$data->email ?></dd>

        <dt>Country:</dt>
        <dd><?=$data->country ?></dd>

        <dt>City:</dt>
        <dd><?=$data->city ?></dd>

        <dt>Street:</dt>
        <dd><?=$data->street ?></dd>

        <dt>Postal Code:</dt>
        <dd><?=$data->postal_code ?></dd>

        <dt>province:</dt>
        <dd><?=$data->province ?></dd>
    </dl>
		<a href="/Camping/contact/index" class="btn btn-secondary">Back to list</a>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>