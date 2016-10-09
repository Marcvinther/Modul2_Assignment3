<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Resource List</title>
</head>

<body>

<h1>Change resource by clicking</h1>

<ul>

<?php
require_once 'db_connect.php';
$sql = 'SELECT r.resources_id, r.resources_name, rt.resource_type_name
FROM resources r, resource_type rt
where r.resource_type_resource_type_id=rt.resource_type_id';
$stmt = $link->prepare($sql);
$stmt->execute();
$stmt->bind_result($rid, $rnam, $rtnam);

while($stmt->fetch()) {
	echo '<li><a href="edit_resourceform.php?rid='.$rid.'">'.$rnam.' ('.$rtnam.')</a></li>'.PHP_EOL;
}


?>
</ul>
<br><br><br>
<a href="project_list.php">Back to Projectlist</a><br>
</body>
</html>
