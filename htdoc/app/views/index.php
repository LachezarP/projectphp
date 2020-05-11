<html>
	<head>
		<title>List of items</title>
	</head>
	<body>
		<h1>
			Item List
		</h1>
		<a href='/home/create'>Add an item </a>
		<table>
			<tr><td>Name</td><td>Actions</td></tr>
			<?php
				foreach($data['items'] as $item){
					echo "<tr><td> $item->name </td><td>
					<a href='/home/detail/$item->item_id'>Details</a>
					<a href='/home/edit/$item->item_id'>Edit</a>
					<a href='/home/delete/$item->item_id'>Delete</a>

					</td></tr>";
				}
			?>

		</table>
	</body>
</html>