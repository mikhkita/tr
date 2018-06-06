<?

$out = array(
	"result" => "success",
	"actions" => array(
		array(
			"action" => "ajaxSearch",
			"selector" => "#b-staff-query"
		),
	)
);

echo json_encode($out);

?>