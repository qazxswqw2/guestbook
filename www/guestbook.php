<?php

include('connect.php');

$sql = "SELECT * FROM msg ORDER BY id DESC";

if ($sql == false){
	echo"sql error";
	exit;
}

$res = $db->query($sql);


$rows = [];

while ($row = $res->fetch_array( MYSQLI_ASSOC))
{
	
	$rows[]=$row;
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Guestbook</title>
		<link rel="stylesheet" type="text/css" href="./css/style.css">
	</head>
	<body>
		<div class="wrap">

			<div class="add">
				<form action="save.php" method="post">
					<textarea name="content" cols="50" rows="5" class="content"></textarea>
					<input name="user" type="text" class="user" />
					<input type="submit" value="send message" class="btn" />
				</form>
			</div>

			<?php
			foreach($rows as $fres){
			?>
			<div class="msg">
				<div class="info">
					<span class="user2"><?php echo $fres['user']; ?></span>
					<span class="time"><?php echo date("Y-m-d H:i:s", $fres['intime']); ?></span>
				</div>	
				<div class="content2">
					<?php echo $fres['content']; ?>
				</div>
			</div>
			<?php
			}
			?>

		</div>
	</body>
</html>