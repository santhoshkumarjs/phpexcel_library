<?php
$message = $_POST["message"];
$user_id = $_POST["user_id"];
$content = array(
	"en" => "$message"
);

$fields = array(
	'app_id' => "25641b18-d28e-4ea5-aebb-a3c3efc2ab0d",
	'filters' => array(array("field" => "tag", "key" => "user_id", "relation" => "=", "value" => "$user_id")),
	'contents' => $content
);

$fields = json_encode($fields);
print("\nJSON sent:\n");
print($fields);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
	'Authorization: Basic NGM0Mzk5YjMtNTQzMi00OTkwLTkyY2EtMTI1MzNhODBmZjgz'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

$response = curl_exec($ch);
curl_close($ch);
if($response){
	header('location:index.html');
}
?>