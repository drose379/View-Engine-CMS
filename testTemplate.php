<html>
<head>

</head>
<body>

<h1><?= $header ?></h1>
<li>
<?php
	foreach( $items as $item ) {
		echo "<li>" .$item. "</li>"
	}
?>
</li>

</body>
</html>