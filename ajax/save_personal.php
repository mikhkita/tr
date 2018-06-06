<form action="ajax/save_personal.php?id=1" method="POST" data-block=".b-one-col">
	<h2>Редактирование профиля</h2>
	<div class="b-detail b-big-detail b-man-detail clearfix">
		<div class="b-detail-left">
			<img src="i/avatar-2.jpg" alt="">
			<ul class="b-link-list">
				<li><a href="#">Изменить фотографию</a></li>
			</ul>
		</div>
		<div class="b-detail-right">
			<div class="clearfix">
				<div class="b-man-left b-personal-left">
					<div class="b-input-group">
						<h3 class="with-margin">Личные данные</h3>
						<div class="b-input">
							<label for="name">Фамилия:</label>
							<input type="text" id="name" name="name" placeholder="Введите фамилию" value="Константинопальский" required>
						</div>
						<div class="b-input">
							<label for="surname">Имя:</label>
							<input type="text" id="surname" name="surname" placeholder="Введите имя" value="Константин" required>
						</div>
						<div class="b-input">
							<label for="patronymic">Отчество:</label>
							<input type="text" id="patronymic" name="patronymic" placeholder="Введите отчество" value="Константинович" required>
						</div>
					</div>
					<div class="b-input-group">
						<h3 class="with-margin">Контакты</h3>
						<div class="b-input">
							<label for="email">E-mail:</label>
							<input type="text" id="email" name="email" placeholder="Введите e-mail" value="kkk@mail.ru" required>
						</div>
						<div class="b-input">
							<label for="phone">Рабочий телефон:</label>
							<input type="text" id="phone" name="phone" placeholder="Введите телефон" value="+7 (000) 000-00-00" required>
						</div>
						<div class="b-input">
							<label for="phone-2">Личный телефон:</label>
							<input type="text" id="phone-2" name="phone-2" placeholder="Введите телефон" value="+7 (000) 000-00-00" required>
						</div>
					</div>
					<div class="b-input-group">
						<div class="b-input">
							<label for="page">Начальная страница:</label>
							<select name="page" id="page" class="custom-select">
								<option value="1">Страница со списком сотрудников</option>
								<option value="2">Личная страница</option>
								<option value="3">Страница авторизации</option>
							</select>
						</div>
					</div>
					<div class="b-input-group b-change-password-input-group">
						<h3 class="with-margin">Сменить пароль</h3>
						<div class="b-input">
							<label for="old_password">Старый пароль:</label>
							<input type="password" id="old_password" name="old_password" required>
						</div>
						<div class="b-input">
							<label for="new_password">Новый пароль:</label>
							<input type="password" id="new_password" name="new_password" required>
						</div>
						<div class="b-input">
							<label for="new_password_1">Повторите пароль:</label>
							<input type="password" id="new_password_1" name="new_password_1" required>
						</div>
					</div>
					<div class="b-bottom-buttons b-vertical-buttons">
						<a href="#" class="b-btn b-blue-btn" id="b-change-password"><span>Сменить пароль</span></a>
						<a href="#" class="b-btn b-blue-btn ajax"><span>Сохранить изменения</span></a>
						<input type="submit" style="display: none;">
					</div>
				</div>
				<div class="b-man-right b-personal-right">
					<h3 class="with-margin">Сотрудники, доступные для редактирования</h3>
					<div class="b-input">
						<input type="text" id="b-staff-query" name="q" class="b-query-input" autocomplete="none" placeholder="Поиск" data-block="#b-personal-staff" data-href="ajax/search_staff_small.php" data-params="id=1">
					</div>
					<a href="ajax/update_man_form.php?new=1" class="ajax-popup">+ добавить нового сотрудника</a>
					<div class="b-staff" id="b-personal-staff">
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
		</div>
	</div>
</form>