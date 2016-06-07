<?php 
include 'bd.php';

$getData = "Select * from users";
$req = $connection->query($getData);

while ($r = mysqli_fetch_assoc($req))
{
	$msg[] = array("id" => $r['id'], "name" => $r['name'], 
	"email" => $r['email'], "status" => $r['status']);	
}

$json = $msg;
header('content-type: application/json');
echo json_encode($json);

@mysqli_close($connection);

?>