<!DOCTYPE html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Edit a Product</title>
  </head>
  <body>
  	<div class='container'>
    <h1> Edit a Product</h1>

    	<form action='' method="post">

      <div class = 'form-group'>
          <label>Inventory Id: <input type="text" value="<?=$data->inventory_id ?>" name="inventory_id"
            class = 'form-control'>
          </label>
        </div>

        <div class = 'form-group'>
          <label>Name: <input type="text" value="<?=$data->name ?>" name="name"
            class = 'form-control'>
          </label>
        </div>

        <div class = 'form-group'>
          <label>Price: <input type="text" value="<?=$data->price ?>" name="price"
            class = 'form-control'>
          </label>
        </div>

        <div class = 'form-group'>
          <label>Description: <textarea name="description" class = 'form-control'><?=$data->description ?></textarea>
          </label>
        </div>

        <div class = 'form-group'>
          <label>Availability: 
            <select name="availability">
              <?php
                var_dump($data->availability);
                if($data->availability == 'not available'){
                  echo "<option selected='selected' value='not available'>Not Available</option>
                        <option value='available'>Available</option>";
                }
                else{
                  echo "<option selected='selected' value='available'>Available</option>
                        <option value='not available'>Not Available</option>";
                }
              ?>
            </select>
          </label>
        </div>

    <input type="submit" name="action" value="Save Changes" class="btn btn-success" />
    
    <a href="/Camping/product/index" class="btn btn-secondary">Cancel</a>
	</form>
	
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>