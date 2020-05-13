<!DOCTYPE html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Shipping Confirmation</title>
  </head>
  <body>
 <div style="background-image: url('../../images/camp8.jpg');height: 1000px;">
    <div class='container' style="height: 1000px; background-color: white; ">
    <h1>Shipping Confirmation</h1>

      <table class="table table-striped">
        <tr><td>Item Name</td><td>Quantity</td><td>Price</td><td>Status</td><td>Date</td><td>Actions</td></tr>
         <?php

          foreach($data['orders'] as $item){
            $order_id = $item->order_id;
            echo "<tr><td>$item->name</td><td>$item->qty</td><td>$item->price</td><td>$item->order_status</td><td>$item->date</td><td>
            </td></tr>";
          }
        ?>
      </table>

    <a href="/Camping/orders/index" class="btn btn-danger" style="float: right; margin: 5px;">Cancel</a>

    <a href="/Camping/orders/setAsShipped/<?=$order_id ?>" class="btn btn-success" style="float: right; margin: 5px;">Confirm</a>

    </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>