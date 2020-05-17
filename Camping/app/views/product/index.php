<!DOCTYPE html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>List of Products</title>
  </head>
  <body>
    <div style="background-image: url('../images/camp6.jpg');height: 1000px;">
  	<div class='container' style="height: 1000px; background-color: white;">
    <h1>List of Products</h1>
      <a href="/Camping/login/logout" class="btn btn-info">Log out</a>
      
      <a href="/Camping/profile/index" class="btn btn-info" style="float: right; margin: 5px;">Profile</a>
      <a href="/Camping/camping_spot/index" class="btn btn-info" style="float: right; margin: 5px;">Camping Spots</a>


      </br>
      </br>

    	<a href="/Camping/product/create" class="btn btn-success">Add a Product</a>

      </br>
      </br>
			<table class="table table-striped">
				<tr><td>Name</td><td>qty</td><td>Price</td><td>Actions</td></tr>
        <?php
          
          foreach($data['products'] as $item){
            echo "<tr><td>$item->name</td><td>$item->qty</td><td>$item->price</td><td>
            <a href = '/Camping/product/detail/$item->product_id' class='btn btn-primary'>Details</a>
            <a href = '/Camping/product/edit/$item->product_id' class='btn btn-success'>Edit</a>
            <a href = '/Camping/product/delete/$item->product_id' class='btn btn-danger'>Delete</a>
            </td></tr>";
          }
        ?>
	</table>
    <a href="/Camping/profile/index" class="btn btn-secondary">Back</a>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>