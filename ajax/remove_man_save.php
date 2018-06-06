<?

$out = array(
	"result" => "success",
	"actions" => array(
		array(
			"action" => "delete",
			"selector" => "#staff-".$_POST["id"]
		),
		array(
			"action" => "change",
			"items" => array(
				"#skill-group-members" => "26 человек"
			),
		)
	)
);

echo json_encode($out);

?>