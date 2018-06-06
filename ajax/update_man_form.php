<div class="b-popup b-big-popup">
	<form action="<? if(isset($_GET["new"])): ?>ajax/create_man_save.php<? else: ?>ajax/view_man.php?id=1<? endif; ?>" method="POST" data-block=".b-view-man">
		<h2><? if(isset($_GET["new"])): ?>Новый сотрудник<? else: ?>Редактирование профиля<? endif; ?></h2>
		<div class="b-detail b-big-detail b-man-detail clearfix">
			<div class="b-detail-left">
				<img src="<? if(isset($_GET["new"])): ?>i/no-photo.svg<? else: ?>i/avatar-2.jpg<? endif; ?>" alt="">
				<ul class="b-link-list">
					<li><a href="#">Добавить фотографию</a></li>
				</ul>
			</div>
			<div class="b-detail-right">
				<div class="clearfix">
					<div class="b-man-left">
						<h3 class="with-margin">Личные данные</h3>
						<div class="b-input">
							<label for="name">Фамилия:</label>
							<input type="text" id="name" name="name" placeholder="Введите фамилию" value="<? if(isset($_GET["new"])): ?><? else: ?>Константинопальский<? endif; ?>" required>
						</div>
						<div class="b-input">
							<label for="surname">Имя:</label>
							<input type="text" id="surname" name="surname" placeholder="Введите имя" value="<? if(isset($_GET["new"])): ?><? else: ?>Константин<? endif; ?>" required>
						</div>
						<div class="b-input">
							<label for="patronymic">Отчество:</label>
							<input type="text" id="patronymic" name="patronymic" placeholder="Введите отчество" value="<? if(isset($_GET["new"])): ?><? else: ?>Константинович<? endif; ?>" required>
						</div>
						<div class="b-input">
							<label for="filial">Филиал:</label>
							<select name="filial" id="filial" class="custom-select">
								<option value="1">Филиал 1</option>
								<option value="2">Филиал 2</option>
								<option value="3">Филиал 3</option>
								<option value="4">Филиал 4</option>
								<option value="5" selected>Филиал 5</option>
							</select>
						</div>
						<div class="b-input">
							<label for="department">Отдел:</label>
							<select name="department" id="department" class="custom-select">
								<option value="1" selected>Маркетинговый отдел</option>
								<option value="2">Отдел разработки</option>
								<option value="3">Бухгалтерский отдел</option>
								<option value="4">Отдел техподдержки</option>
								<option value="5">Отдел ничегонеделанья</option>
							</select>
						</div>
						<div class="b-input">
							<label for="post">Должность:</label>
							<select name="post" id="post" class="custom-select">
								<option value="1">Первый маркетолог</option>
								<option value="2">Маркетолог помладше</option>
								<option value="3">Лучший маркетолог</option>
								<option value="4">Ленивый маркетолог</option>
								<option value="5" selected>Главный маркетолог</option>
							</select>
						</div>
					</div>
					<div class="b-man-right">
						<h3 class="with-margin">Скилл-группы:</h3>
						<ul class="b-link-list">
							<li>Скилл-группа 1</li>
							<li>Скилл-группа 5</li>
							<li>Скилл-группа 6</li>
						</ul>
					</div>
				</div>
				<input type="hidden" name="id" value="<?=$_GET["id"]?>">
				<div class="b-bottom-buttons">
					<a href="#" class="b-btn b-blue-btn ajax"><span><? if(isset($_GET["new"])): ?>Добавить сотрудника<? else: ?>Сохранить изменения<? endif; ?></span></a>
					<input type="submit" style="display: none;">
				</div>
			</div>
		</div>
	</form>
</div>