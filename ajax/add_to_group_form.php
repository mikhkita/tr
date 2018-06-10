<div class="b-popup">
	<h2>Добавить сотрудника в список</h2>
	<div class="b-input b-add-staff-input">
		<input type="text" id="b-staff-query" name="q" class="b-query-input" autocomplete="none" placeholder="Поиск" data-block="#b-add-to-group" data-href="ajax/search_group_checkbox.php" data-params="id=1">
	</div>
	<form action="ajax/add_to_group_save.php" method="POST" data-block="#b-group-list">
		<input type="hidden" name="add_group" class="b-select-with-search" id="add-staff-input" value="1,3" data-pattern="gp-">
		<a href="ajax/add_group_form.php?id=1" class="ajax-popup b-add-to-group">Создать новый список</a>
		<div class="b-group custom-scrollbar" id="b-add-to-group">
			<div class="b-checkbox b-big-checkbox grey">
				<input type="checkbox" id="gp-1" name="gp" value="1">
				<label for="gp-1"><span></span>
					<div class="b-group-item clearfix">
						<div class="b-group-item__image">
							<img src="i/no-photo.svg" alt="">
						</div>
						<div class="b-group-item__text">Группа 1</div>
					</div>
				</label>
			</div>
			<div class="b-checkbox b-big-checkbox grey">
				<input type="checkbox" id="gp-2" name="gp" value="2">
				<label for="gp-2"><span></span>
					<div class="b-group-item clearfix">
						<div class="b-group-item__image">
							<img src="i/no-photo.svg" alt="">
						</div>
						<div class="b-group-item__text">Бухгалтерский отдел</div>
					</div>
				</label>
			</div>
			<div class="b-checkbox b-big-checkbox grey">
				<input type="checkbox" id="gp-3" name="gp" value="3">
				<label for="gp-3"><span></span>
					<div class="b-group-item clearfix">
						<div class="b-group-item__image">
							<img src="i/no-photo.svg" alt="">
						</div>
						<div class="b-group-item__text">Филиал 6</div>
					</div>
				</label>
			</div>
			<div class="b-checkbox b-big-checkbox grey">
				<input type="checkbox" id="gp-4" name="gp" value="4">
				<label for="gp-4"><span></span>
					<div class="b-group-item clearfix">
						<div class="b-group-item__image">
							<img src="i/no-photo.svg" alt="">
						</div>
						<div class="b-group-item__text">Cупервайзеры</div>
					</div>
				</label>
			</div>
		</div>
		<div class="b-bottom-buttons">
			<a href="#" class="b-btn b-blue-btn ajax"><span>Сохранить</span></a>
			<input type="submit" style="display: none;">
		</div>
	</form>
</div>