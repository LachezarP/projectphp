<!DOCTYPE html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style type="text/css">
      .card {
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0,2);
        transition: 0.3px;
        width: 20%;
        border-radius: 5px;
        display: inline-block;
      }

      .card:hover{
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0,2);
      }

      img {
        border-radius: 5px 5px 0 0;
      }

      .text-container{
        padding: 2px 16px;
      }
    </style>

    <title>Product User Catalog</title>
  </head>
  <body>
  <div style="background-image: url('../images/camp2.jpg');height: 1000px;">
    <div class='container' style="height: 1000px; background-color: white;">
    <h1>Product User Catalog</h1>

      <?php
      if($_SESSION['user_id'] != null){
        echo "<a href='/Camping/login/logout' class= 'btn btn-info' >Log out</a>
              <a href='/Camping/product/viewCart/' class= 'btn btn-info'> My Cart</a>";
      }
      ?>

      <a href="/Camping/profile/index" class="btn btn-info" style="float: right; margin: 5px;">Profile</a>
      <a href="/Camping/camping_spot/index" class="btn btn-info" style="float: right; margin: 5px;">Camping Spots</a>

      </br>
      </br>
      </br>

      <?php
          foreach($data['products'] as $item){
            echo "
            <div class='card'>
              <a href = '/Camping/product/productdetail/$item->product_id'>
                $item->name
              </a>
              <div>
                <h4>$item->price</h4>
                <p>$item->qty</p>
                <a href='/Camping/product/addToCart/$item->product_id' class='btn btn-primary'>Add to cart</a>
              </div>
            </div>";
          }
        ?>
    </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>