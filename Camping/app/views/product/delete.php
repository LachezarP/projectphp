<!DOCTYPE html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Delete product</title>
  </head>
  <body>
  <div style="background-image: url('../../images/camp6.jpg');height: 100%;width: 100%;">
    <div class='container' style="height: 1000px; background-color: white;">
    	<h1>Delete product</h1>
    	<form action='' method="post">

        <dl>
      		<dt>Shelf Location:</dt>
          <dd><?=$data->shelf_location ?></dd>

          <dt>Name:</dt>
          <dd><?=$data->name ?></dd>

          <dt>price:</dt>
          <dd><?=$data->price ?></dd>
      
          <dt>Availability:</dt>
          <dd><?=$data->availability ?></dd>

          <dt>Description:</dt>
          <dd><?=$data->description ?></dd>

        </dl>
        
				<input type="submit" name="action" value="Delete" class='btn btn-danger' />
				<a href="/Camping/product/index" class="btn btn-secondary">Cancel</a>
		</form>
    </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>