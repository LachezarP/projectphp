<!DOCTYPE html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Edit an Item</title>
  </head>
  <body>
  	<div class='container'>
    <h1> Edit an item</h1>

      <?php
      if(!isset($data))
        if(isset($data['error'])){
        ?>
        <div class="alert alert-danger" role="alert">
          <?= $data['error'] ?>
        </div>
        <?php
      }
      ?>

    	<form action='' method="post" enctype='multipart/form-data'>

      <div class = 'form-group'>
          <label>Campground Id: <input type="text" value="<?=$data->campground_id ?>" name="campground_id"
            class = 'form-control'>
          </label>
        </div>

        <div class = 'form-group'>
          <label>Description: <textarea name="description" class = 'form-control'><?=$data->description ?></textarea>
          </label>
        </div>

        <div class = 'form-group'>
          <label>Image: <input type="file" value="<?=$data->image ?>" name="newPicture"
            class = 'form-control'>
          </label>
        </div>

        <div class = 'form-group'>
          <label>Availability: 
            <select name="availability">
              <?php
                var_dump($data->availability);
                if($data->availability == 'not occupied'){
                  echo "<option selected='selected' value='not occupied'>Not Occupied</option>
                        <option value='occupied'>Occupied</option>";
                }
                else{
                  echo "<option selected='selected' value='occupied'>Occupied</option>
                        <option value='not occupied'>Not Occupied</option>";
                }
              ?>
            </select>
          </label>
        </div>

        <div class = 'form-group'>
          <label>Price: <input type="text" value="<?=$data->price ?>" name="price"
            class = 'form-control'>
          </label>
        </div>

        <div class = 'form-group'>
          <label>Spot Number: <input type="text" value="<?=$data->spot_number ?>" name="spot_number"
            class = 'form-control'>
          </label>
        </div>

    <input type="submit" name="action" value="Save Changes" class="btn btn-success" />
    
    <a href="/Camping/home/index" class="btn btn-secondary">Cancel</a>
	</form>
	
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>