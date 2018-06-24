<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="keywords" content=''>
	<meta name="description" content=''>

	<meta name="viewport" content="width=1024">
	<meta name="format-detection" content="telephone=no">

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="css/reset.css" type="text/css">
	<link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css" type="text/css">
	<link rel="stylesheet" href="css/select2.css" type="text/css">
	<link rel="stylesheet" href="css/jquery-ui.css" type="text/css">
	<link rel="stylesheet" href="css/KitAnimate.css" type="text/css">
	<link rel="stylesheet" href="css/layout.css" type="text/css">
	<link rel="stylesheet" href="css/map.css" type="text/css">

	<link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico">
</head>
<body>
	<div class="b-header clearfix">
		<div class="b-block">
			<a href="index.html" class="b-logo"></a>
			<div class="b-lk-top">
				<a href="#" class="b-lk-top__butt">
					<div class="b-avatar" style="background: #E94B35;">
						<img src="i/avatar-1.jpg" alt="">
					</div>
				</a>
				<div class="b-lk-top__bubble">
					<ul class="b-lk-top__menu b-link-list">
						<li><a href="lk.html">Личный кабинет</a></li>
						<li><a href="auth.html">Выход</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="b-content">
		<div class="b-block">
			<div class="b-left-col custom-scrollbar">
				<h2>Сотрудники</h2>
				<form action="#">
					<div class="b-input b-query-input">
						<input type="text" name="q" placeholder="Поиск">
					</div>
					<div class="b-checkbox grey">
						<input type="checkbox" id="online" name="online" value="Y" checked>
						<label for="online"><span></span>Показывать только тех, кто online</label>
					</div>
					<div id="accordion" class="b-accordion">
						<h3 class="b-accordion__title" data-id="1">Отделы</h3>
						<div class="b-accordion__block">
							<div class="b-checkbox">
								<input type="checkbox" id="department-1" name="department" value="1" checked>
								<label for="department-1"><span style="background-color: #1FCE6D;"></span>ГАП</label>
							</div>
							<div class="b-checkbox">
								<input type="checkbox" id="department-2" name="department" value="2" checked>
								<label for="department-2"><span style="background-color: #00BD9C;"></span>ГПП</label>
							</div>
							<div class="b-checkbox">
								<input type="checkbox" id="department-3" name="department" value="3" checked>
								<label for="department-3"><span style="background-color: #00A0DC;"></span>ЕКЦ</label>
							</div>
							<div class="b-checkbox">
								<input type="checkbox" id="department-4" name="department" value="4" checked>
								<label for="department-4"><span style="background-color: #9C56B8;"></span>Инстоляторы</label>
							</div>
							<div class="b-checkbox">
								<input type="checkbox" id="department-5" name="department" value="5" checked>
								<label for="department-5"><span style="background-color: #E94B35;"></span>Маркетинговый отдел</label>
							</div>
							<div class="b-checkbox">
								<input type="checkbox" id="department-6" name="department" value="6" checked>
								<label for="department-6"><span style="background-color: #E37828;"></span>Отдел работы с претензиями</label>
							</div>
							<div class="b-checkbox">
								<input type="checkbox" id="department-7" name="department" value="7" checked>
								<label for="department-7"><span style="background-color: #F2C500;"></span>Технический отдел</label>
							</div>
						</div>
						<h3 class="b-accordion__title" data-id="2">Уровень</h3>
						<div class="b-accordion__block">
							<div class="b-checkbox">
								<input type="checkbox" id="level-2" name="level" value="2" checked>
								<label for="level-2"><span style="background-color: #00BD9C;"></span>ГПП</label>
							</div>
							<div class="b-checkbox">
								<input type="checkbox" id="level-3" name="level" value="3" checked>
								<label for="level-3"><span style="background-color: #00A0DC;"></span>ЕКЦ</label>
							</div>
						</div>
						<h3 class="b-accordion__title" data-id="3">Филиалы</h3>
						<div class="b-accordion__block">
							<div class="b-checkbox">
								<input type="checkbox" id="branch-2" name="branch" value="2" checked>
								<label for="branch-2"><span style="background-color: #00BD9C;"></span>ГПП</label>
							</div>
							<div class="b-checkbox">
								<input type="checkbox" id="branch-3" name="branch" value="3" checked>
								<label for="branch-3"><span style="background-color: #00A0DC;"></span>ЕКЦ</label>
							</div>
							<div class="b-checkbox">
								<input type="checkbox" id="branch-4" name="branch" value="4" checked>
								<label for="branch-4"><span style="background-color: #9C56B8;"></span>Инстоляторы</label>
							</div>
						</div>
						<h3 class="b-accordion__title" data-id="4">Скилл группы</h3>
						<div class="b-accordion__block">
							<div class="b-checkbox">
								<input type="checkbox" id="group-2" name="group" value="2" checked>
								<label for="group-2"><span style="background-color: #00BD9C;"></span><div class="skill-group-1">n</div></label>
							</div>
							<div class="b-checkbox">
								<input type="checkbox" id="group-3" name="group" value="3" checked>
								<label for="group-3"><span style="background-color: #00A0DC;"></span><div class="skill-group-2">n2</div></label>
							</div>
						</div>
						<h3 class="b-accordion__title" data-id="5">Мои списки</h3>
						<div class="b-accordion__block">
							<div class="b-checkbox">
								<input type="checkbox" id="custom-2" name="custom" value="2" checked>
								<label for="custom-2"><span style="background-color: #00BD9C;"></span>ГПП</label>
							</div>
							<div class="b-checkbox">
								<input type="checkbox" id="custom-3" name="custom" value="3" checked>
								<label for="custom-3"><span style="background-color: #00A0DC;"></span>ЕКЦ</label>
							</div>
						</div>
						<h3 class="b-accordion__title" data-id="6">Отсортированные сотрудники <small>(4 234 человек)</small></h3>
						<div class="b-accordion__block">
							<div class="b-staff">
								<div class="b-staff-item clearfix">
									<div class="b-staff-item__image">
										<a href="ajax/view_man.php" class="b-avatar ajax-popup" style="background: #E94B35;">
											<img src="i/avatar-1.jpg" alt="">
										</a>
									</div>
									<div class="b-staff-item__online">Online</div>
									<div class="b-staff-item__text">
										<a href="ajax/view_man.php" class="b-staff-item__name ajax-popup">Константин Константинопальский</a>
										<div class="b-staff-item__post">Филиал 1, старший инженер</div>
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
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="b-right-tab b-right-map custom-scrollbar hide">
				<a href='#' class="b-round-btn b-top-right-btn b-round-orange-btn icon-list" data-block=".b-right-col">показать списком</a>
				<div class="b-cards">
					<a href="#" class="b-card">
						<img src="i/filials/filial-1.svg" alt="">
						<div class="b-card-text">
							<p>Филиал 1<br><b>г. Барнаул</b><br>(140 человек)</p>
						</div>
					</a>
					<a href="#" class="b-card">
						<img src="i/filials/filial-2.svg" alt="">
						<div class="b-card-text">
							<p>Филиал 2<br><b>г. Бийск</b><br>(140 человек)</p>
						</div>
					</a>
					<a href="#" class="b-card">
						<img src="i/filials/filial-3.svg" alt="">
						<div class="b-card-text">
							<p>Филиал 3<br><b>г. Кемерово</b><br>(140 человек)</p>
						</div>
					</a>
					<a href="#" class="b-card">
						<img src="i/filials/filial-4.svg" alt="">
						<div class="b-card-text">
							<p>Филиал 4<br><b>г. Красноярск</b><br>(140 человек)</p>
						</div>
					</a>
					<a href="#" class="b-card">
						<img src="i/filials/filial-5.svg" alt="">
						<div class="b-card-text">
							<p>Филиал 5<br><b>г. Новокузнецк</b><br>(140 человек)</p>
						</div>
					</a>
					<a href="#" class="b-card">
						<img src="i/filials/filial-6.svg" alt="">
						<div class="b-card-text">
							<p>Филиал 6<br><b>г. Новосибирск</b><br>(140 человек)</p>
						</div>
					</a>
					<a href="#" class="b-card">
						<img src="i/filials/filial-7.svg" alt="">
						<div class="b-card-text">
							<p>Филиал 7<br><b>г. Омск</b><br>(140 человек)</p>
						</div>
					</a>
					<a href="#" class="b-card">
						<img src="i/filials/filial-8.svg" alt="">
						<div class="b-card-text">
							<p>Филиал 8<br><b>г. Томск</b><br>(140 человек)</p>
						</div>
					</a>
					<a href="#" class="b-card">
						<img src="i/filials/filial-9.svg" alt="">
						<div class="b-card-text">
							<p>Филиал 9<br><b>г. Чита</b><br>(140 человек)</p>
						</div>
					</a>
				</div>
			</div>
			<div class="b-right-tab b-right-col custom-scrollbar tcenter hide">
				<a href='#' class="b-round-btn b-top-right-btn b-round-orange-btn icon-map" data-block=".b-right-map">показать на карте</a>
				<div class="b-staff-list">
					<div class="b-staff-count">Найдено 4 234 сотрудника</div>
					<div class="b-input b-order-input line">
						<label for="order">Сортировать по:</label>
						<select name="order" id="order" class="custom-select">
							<option value="group">По скилл-группе</option>
							<option value="name">По алфавиту</option>
							<option value="group">По скилл-группе</option>
							<option value="name">По алфавиту</option>
							<option value="group">По скилл-группе</option>
							<option value="name">По алфавиту</option>
							<option value="group">По скилл-группе</option>
							<option value="name">По алфавиту</option>
							<option value="group">По скилл-группе</option>
							<option value="name">По алфавиту</option>
							<option value="group">По скилл-группе</option>
							<option value="name">По алфавиту</option>
							<option value="group">По скилл-группе</option>
							<option value="name">По алфавиту</option>
							<option value="group">По скилл-группе</option>
							<option value="name">По алфавиту</option>
							<option value="group">По скилл-группе</option>
							<option value="name">По алфавиту</option>
							<option value="group">По скилл-группе</option>
							<option value="name">По алфавиту</option>
						</select>
					</div>
					<div class="b-staff big">
						<div class="b-staff-item clearfix">
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
						</div>
						<div class="b-staff-item clearfix">
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
						</div>
					</div>
				</div>
			</div>
			<div class="b-right-tab b-right-map b-fixed-map">
				<div class="b-map-canvas">
					<div class="b-map b-map-4">
						<img src="i/maps/back-4.svg" class="b-back" alt="">
						<div class="b-map-decor">
							<img src="i/maps/blue-flower.svg" class="b-flower b-flower-1">
							<img src="i/maps/blue-flower.svg" class="b-flower b-flower-2">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.mCustomScrollbar.js"></script>
	<script type="text/javascript" src="js/select2.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.min.js"></script>
	<script type="text/javascript" src="js/jquery.touch.min.js"></script>
	<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/KitAnimate.js"></script>
	<script type="text/javascript" src="js/KitMap.js"></script>
	<script type="text/javascript" src="js/KitSend.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>