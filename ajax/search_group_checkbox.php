<? if( $_GET["q"] == "" ): ?>
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
<? elseif(mb_strlen($_GET["q"], "UTF-8") < 6): ?>
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
<? else: ?>
	<h3>По вашему запросу ничего не найдено</h3>
<? endif; ?>