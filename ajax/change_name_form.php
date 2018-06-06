<div class="b-popup">
	<h2>Изменение названия скилл-группы</h2>
	<form action="ajax/change_name_save.php" method="POST" data-block=".skill-group-1">
		<div class="b-popup-margin-content">
			<div class="b-input">
				<label for="name">Новое название группы:</label>
				<input type="text" id="name" name="name" placeholder="Введите название" value="n" required>
			</div>
			<input type="hidden" name="id" value="<?=$_GET["id"]?>">
		</div>
		<div class="b-bottom-buttons">
			<a href="#" class="b-btn b-blue-btn ajax"><span>Сохранить</span></a>
			<input type="submit" style="display: none;">
		</div>
	</form>
</div>