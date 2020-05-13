<!DOCTYPE html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Login</title>
  </head>
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* Full height */
  height: 170%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.container {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  font-size: 20px;
  border: 10px solid #f1f1f1;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 300px;
  padding: 20px;
  text-align: center;
}
</style>

  <body>
    <div class='container'>
    	<h1>Login</h1>
      <?php
        if(!is_array($data)){
          echo "<div class = 'alert alert-danger' role='alert'>
            $data
          </div>";
        }
      ?>
      
	    <form action='' method="post">
	    	<div class = 'form-group'>
				<label>Username: <input type="text" name="username"
					class = 'form-control'>
				</label>
      </div>
        <div class = 'form-group'>
        <label>Password: <input type="password" name="password"
          class = 'form-control'>
        </label>
			</div>
			<input type="submit" name="action" value="Login" class='btn btn-primary' />

			
		</form>
		
  No account?<a href="/Camping/login/register"> Register</a>

	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Slideshow container -->

<!-- .img2 { background-image: url("../images/camp2.jpg"); }
.img3 { background-image: url("../images/camp3.jpg"); }
.img4 { background-image: url("../images/camp4.jpg"); }
.img5 { background-image: url("img_forest.jpg"); }
.img6 { background-image: url("img_woods.jpg"); } -->

<div class="bg-image">
  <img src="../images/camp2.jpg">
</div>
<div class="bg-image">
  <img src="../images/camp3.jpg">
</div>
<div class="bg-image">
  <img src="../images/camp4.jpg">
</div>
<div class="bg-image">
  <img src="../images/camp5.jpg">
</div>
  
  
  </body>
</html>