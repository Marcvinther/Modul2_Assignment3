<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Project List</title>
</head>

<body>
<h1>Projects</h1>
<ul>
<?php
require_once 'db_connect.php';

$sql = 'SELECT p.project_id, p.project_name FROM project p';
$stmt = $link->prepare($sql);
$stmt->execute();
$stmt->bind_result($pid, $pnam);

while($stmt->fetch()) {

	echo '<li><a href="project_details.php?pid='.$pid.'">'.$pnam.'</a></li>'.PHP_EOL;
}
?>
</ul>

</body>
</html>
