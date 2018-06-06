<div class="b-popup">
	<h2>Удаление участника из скилл-группы</h2>
	<form action="ajax/remove_man_save.php" method="POST">
		<div class="b-popup-margin-content">
			<p>Вы действительно хотите удалить Константина Константинопальского из скилл-группы «Скилл-группа n»?</p>
			<div class="b-input">
				<input type="hidden" name="id" value="<?=$_GET["id"]?>">
			</div>
		</div>
		<div class="b-bottom-buttons">
			<a href="#" class="b-btn b-blue-btn" onclick="$.fancybox.close(); return false;"><span>Отмена</span></a>
			<a href="#" class="b-btn b-orange-btn ajax"><span>Удалить</span></a>
			<input type="submit" style="display: none;">
		</div>
	</form>
</div>