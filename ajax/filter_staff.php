<?

if( isset($_GET["map"]) && $_GET["map"] == "1" ){
	$out = array(
		"result" => "success",
		"actions" => array(
			array(
				"action" => "setMap",
				"data" => array(
					1 => array(
						1 => array(
							"n" => "Константин Константинопальский", // Имя
							"p" => "Филиал 1, старший секретарь", // Филиал и должность
							"o" => 1, // Online
							"r" => 100, // Заявок обработано
							"c" => 30, // Звонков совершено
							"b" => "#E94B35", // Цвет рамки
							"i" => "i/avatar-3.jpg", // Фотография
							"rs" => 0, // Статус заявок
							"cs" => 1, // Статус звонков
							"s" => array(
								array("Система с очень длинным названием", 1), // если 1, то стоит галочка
								array("Система для счастливых сотрудников"), // если 1, то стоит галочка
								array("Система X"), // если 1, то стоит галочка
							)
						),
						5 => array(
							"n" => "Ирина Петровна", // Имя
							"p" => "Филиал 1, старший секретарь", // Филиал и должность
							"o" => 1, // Online
							"r" => 75, // Заявок обработано
							"c" => 50, // Звонков совершено
							"b" => "#E94B35", // Цвет рамки
							"i" => "i/avatar-2.jpg", // Фотография
							"rs" => 0, // Статус заявок
							"cs" => 0, // Статус звонков
							"s" => array(
								array("Система с очень длинным названием", 1), // если 1, то стоит галочка
								array("Система X"), // если 1, то стоит галочка
							)
						),
						10 => array(
							"n" => "Филимон Купринов", // Имя
							"p" => "Филиал 1, старший секретарь", // Филиал и должность
							"r" => 20, // Заявок обработано
							"c" => 0, // Звонков совершено
							"b" => "#E94B35", // Цвет рамки
							"i" => "i/avatar-2.jpg", // Фотография
							"rs" => 1, // Статус заявок
							"cs" => 1, // Статус звонков
							"s" => array(
								array("Система с очень длинным названием", 1), // если 1, то стоит галочка
								array("Система для счастливых сотрудников"), // если 1, то стоит галочка
								array("Система X", 1), // если 1, то стоит галочка
							)
						),
					)
				)
			)
		)
	);
}else{
	$out = array(
		"result" => "success",
		"actions" => array(
			array(
				"action" => "setFilials",
				"data" => array(
					1 => "15 человек",
					2 => "25 человек",
					3 => "34 человека",
					4 => "15 человек",
					5 => "11 человек",
					6 => "121 человек",
					7 => "0 человек",
					8 => "10 человек",
					9 => "54 человека",
				),
			),
			array(
				"action" => "change",
				"items" => array(
					"#b-main-staff" => '<div class="b-staff-item clearfix">
								<div class="b-staff-item__image">
									<a href="ajax/view_man.php" class="b-avatar ajax-popup" style="background: #E94B35;">
										<img src="i/avatar-1.jpg" alt="">
									</a>
								</div>
								<div class="b-staff-item__online">Online</div>
								<div class="b-staff-item__text">
									<a href="ajax/view_man.php" class="b-staff-item__name ajax-popup">Константин Константинопальский</a>
									<div class="b-staff-item__post">Филиал 1, старший инженер</div>
									<div class="b-progressbar-cont">
										<span class="b-icon icon-file"></span>
										<div class="b-line-progressbar orange" data-percent="75"></div>
									</div>
									<div class="b-progressbar-cont">
										<span class="b-icon icon-call"></span>
										<div class="b-line-progressbar blue" data-percent="90"></div>
									</div>
									<div class="b-systems">
										<div class="b-system">
											<span class="icon-cross"></span>Система с очень длинным названием
										</div>
										<div class="b-system">
											<span class="icon-check"></span>Система x
										</div>
										<div class="b-system">
											<span class="icon-cross"></span>Система для счастливых сотрудников
										</div>
									</div>
								</div>
							</div>
							<div class="b-staff-item clearfix">
								<div class="b-staff-item__image">
									<a href="ajax/view_man.php" class="b-avatar ajax-popup" style="background: #E37828;">
										<img src="i/avatar-2.jpg" alt="">
									</a>
								</div>
								<div class="b-staff-item__text">
									<a href="ajax/view_man.php" class="b-staff-item__name ajax-popup">Василий Кошкин</a>
									<div class="b-staff-item__post">Филиал 5, бухгалтер</div>
									<div class="b-progressbar-cont">
										<span class="b-icon icon-file active"></span>
										<div class="b-line-progressbar orange" data-percent="35"></div>
									</div>
									<div class="b-progressbar-cont">
										<span class="b-icon icon-call active"></span>
										<div class="b-line-progressbar blue" data-percent="14"></div>
									</div>
									<div class="b-systems">
										<div class="b-system">
											<span class="icon-cross"></span>Система с очень длинным названием
										</div>
										<div class="b-system">
											<span class="icon-check"></span>Система x
										</div>
										<div class="b-system">
											<span class="icon-cross"></span>Система для счастливых сотрудников
										</div>
									</div>
								</div>
							</div>
							<div class="b-staff-item clearfix">
								<div class="b-staff-item__image">
									<a href="ajax/view_man.php" class="b-avatar ajax-popup" style="background: #00BD9C;">
										<img src="i/avatar-3.jpg" alt="">
									</a>
								</div>
								<div class="b-staff-item__online">Online</div>
								<div class="b-staff-item__text">
									<a href="ajax/view_man.php" class="b-staff-item__name ajax-popup">Наталья Смирнова</a>
									<div class="b-staff-item__post">Филиал 3, секретарь</div>
									<div class="b-progressbar-cont">
										<span class="b-icon icon-file"></span>
										<div class="b-line-progressbar orange" data-percent="75"></div>
									</div>
									<div class="b-progressbar-cont">
										<span class="b-icon icon-call active"></span>
										<div class="b-line-progressbar blue" data-percent="90"></div>
									</div>
									<div class="b-systems">
										<div class="b-system">
											<span class="icon-cross"></span>Система с очень длинным названием
										</div>
										<div class="b-system">
											<span class="icon-check"></span>Система x
										</div>
										<div class="b-system">
											<span class="icon-cross"></span>Система для счастливых сотрудников
										</div>
									</div>
								</div>
							</div>'
				),
			)
		)
	);
}

echo json_encode($out);

?>