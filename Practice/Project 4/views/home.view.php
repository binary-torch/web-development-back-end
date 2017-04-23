<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Project 5</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.6/semantic.min.css">
		<style>
		li{
				background-color: #3498db;
				padding: 20px;
				border: 1px #000 solid;
				color: #fff;
				cursor: pointer;
				width: 150px;
				text-align: center;
				display: inline-block;
			}

			li:hover {
				background-color: #2c3e50;
			}
			button{
				padding: 20px;
				text-decoration: none;
				margin: 10px;
				background-color: #27ae60;
				color: #fff;
				border-radius: 5px;
			}
			ul{
				margin-bottom: 30px;
			}
			
		</style>
	</head>

	<body>
		<h1>Linkedin Profile</h1>
		<h2>My skills:</h2>
		<ul>
			<?php foreach($skills as $skill): ?>
				<li><?= $skill->name; ?></li>
			<?php endforeach; ?>
		</ul>

		<div class="ui container">
			<form class="ui form" method="post">
			  <div class="field">
			    <label>Skill's Name</label>
			    <input type="text" name="skill" placeholder="Please Type..">
			  </div>
			  <button class="ui button green" name="submit" type="submit">Add new skill</button>
			</form>
		</div>
	</body>
</html>