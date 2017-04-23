<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Project 2</title>
	</head>
	<body>
		<img src="https://www.wikipedia.org/portal/wikipedia.org/assets/img/Wikipedia-logo-v2.png" width="100px">
		<h1>
			WikipediA
		</h1>
		<p>The Free Encyclopedia</p>
		<p>Please choose your language</p>
		<hr>
		<ul>
			<?php
				foreach (array_keys($languages) as $language) {
					echo "<li><a href='/?lang=$language'>$language</a></li>";
				}
			?>
		</ul>
		<hr>
		<h2>Article of the day</h2>
		<p>
			<?=  $languages[$currentLanguage]; ?>
		</p>
	</body>
</html>