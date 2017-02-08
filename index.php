<?php
	include "Store/library/autoloader.php";

	/**
	 * Created by PhpStorm.
	 * User: bodak
	 * Date: 2017.02.08.
	 * Time: 12:30
	 */
?>
<html>
<head>
    <meta charset="UTF-8">
	<title>Raktárkezelő</title>
</head>
<body>
<pre>
	<?php Store\ApiCall::simulateFirst(); ?>
	<?php Store\ApiCall::simulateSec(); ?>
	<?php Store\ApiCall::simulateThird(); ?>
</pre>
</body>
</html>