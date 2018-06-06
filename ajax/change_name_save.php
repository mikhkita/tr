<?

$out = array(
	"result" => "success",
	"actions" => array(
		array(
			"action" => "change",
			"items" => array(
				".skill-group-".$_POST["id"] => $_POST["name"]
			),
		)
	)
);

echo json_encode($out);

?>