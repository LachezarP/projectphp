<!DOCTYPE html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>My cart</title>
  </head>
  <body>
  <div style="background-image: url('../../images/camp2.jpg');height: 1000px;">
    <div class='container' style="height: 1000px; background-color: white;">
    <h1>My cart</h1>
      
      <a href="/Camping/product/catalog" class="btn btn-info">Back to the catalog</a>

			<table class="table table-striped">
				<tr><th>Name</th><th>Quantity</th><th>Unit Price</th><th>Total Price</th><th>Actions</th></tr>
			   <?php
         $sum = 0;
					foreach($data as $item){
						echo "<tr><td>$item->name</td><td>$item->qty</td><td>$item->price</td><td>". $item->qty*$item->price ,"</td><td>
						<a href = '/Camping/product/productdetail/$item->product_id' class='btn btn-primary'>Details</a>
            <a href = '/Camping/product/removeFromCart/$item->order_items_id' class='btn btn-danger'>x</a>
						</td></tr>";

            $sum += $item->qty*$item->price;
					}
				?>
        <tr><th colspan="3">Subtotal</th><th><?= $sum ?></th><th><a href = '/Camping/product/checkout/' class='btn btn-success'>Checkout my cart</a></th></tr>
	</table>
    </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>