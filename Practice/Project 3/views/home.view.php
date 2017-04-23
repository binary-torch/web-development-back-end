<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Project 3</title>
	</head>

	<body>
		<h1 style="
			font-family: sans-serif;
			background-color: #bdc3c7; 
			color: #2c3e50;
			padding: 30px;
			text-align: center;">
			<img src="https://facebookbrand.com/wp-content/themes/fb-branding/prj-fb-branding/assets/images/fb-art.png" width="75px">
			<br>
			FaceBook
			<br>
		</h1>
		<h2>My posts</h2>
		<ul>
			<li>
				My first post
			</li>
			<li>
				My Second post
			</li>
			<li>
				I'm learning <br>
				<img src="https://dhirajkumarsingh.files.wordpress.com/2012/05/css3-html5-logo.png" width="100px">
			</li>
		</ul>

		<table border="1px">
			<tr>
				<th colspan="2">My friends</th>
			</tr>
			<?php foreach($users as $user): ?>
				<tr>
					<td><?= $user->email; ?></td>
					<td><?= $user->username; ?></td>
				</tr>
			<?php endforeach; ?>
		</table>
	</body>
</html>





