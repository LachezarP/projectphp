<!DOCTYPE html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>List of Camping Spots</title>
  </head>
  <body>
  	<div class='container'>
    <h1>List of Camping Spots</h1>
      <a href="/Camping/login/logout">Log out</a>
      
      <a href="/Camping/product/index" class="btn btn-info" style="float: right; margin: 5px;">Products</a>
      
      <a href="/Camping/orders/index" class="btn btn-info" style="float: right; margin: 5px;">Orders</a>

      <a href="/Camping/contact/index" class="btn btn-info" style="float: right; margin: 5px;">Contacts</a>

      </br>
      </br>

    	<a href="/Camping/home/create" class="btn btn-success">Add an item</a>

      <a href="/Camping/home/index" class="btn btn-success">All spots</a>
      <a href="/Camping/home/freeSpot" class="btn btn-success">Unoccupied spots</a>
      <a href="/Camping/home/occupiedSpot" class="btn btn-success">Occupied spots</a>
      </br>
      </br>

			<table class="table table-striped">
				<tr><td>Campground</td><td>Spot Number</td><td>Availability</td><td>Price</td><td>Actions</td></tr>
			   <?php

					foreach($data['items'] as $item){
						echo "<tr><td>$item->name</td><td>$item->spot_number</td><td>$item->availability</td><td>$item->price</td><td>
						<a href = '/Camping/home/detail/$item->camping_spot_id' class='btn btn-primary'>Details</a>
						<a href = '/Camping/home/edit/$item->camping_spot_id' class='btn btn-success'>Edit</a>
						<a href = '/Camping/home/delete/$item->camping_spot_id' class='btn btn-danger'>Delete</a>
						</td></tr>";
					}
				?>
	</table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>