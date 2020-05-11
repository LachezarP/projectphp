<!DOCTYPE html>
<html>
<head>
	<title>Delete an item</title>
</head>
<body>
	<h1> Delete an Item</h1>
	<form action='' method='post'>
		<label>Name: <input type='text' name='name' value='<?=$data->name?>' disabled/></label>
		<input type="submit" name="action" value='Save Changes'>
	</form>
	<a href='/home/index'>Cancel</a>
</body>
</html>