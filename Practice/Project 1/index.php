<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Project 1</title>
	</head>
	<body>
		<h1>Welcome to My Website</h1>
		<h2>Have fun!</h2>
		<p>My name is <mark><?= $_GET['name'] ?? ''; ?></mark>, <b><?= $_GET['age'] ?? '0'; ?></b> years old</p>
		<p>What i love:</p>
		<ul>
			<li>My Mother</li>
			<li>
				Others:
				<ol>
					<li>Programming</li>
					<li>Coffee</li>
					<li>Sleeping</li>
				</ol>
			</li>
		</ul>
	</body>
</html>