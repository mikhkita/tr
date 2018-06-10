<div class="b-popup">
	<h2>Новый список</h2>
	<form action="ajax/add_group_save.php" method="POST" data-block="#b-add-to-group">
		<input type="hidden" name="add_staff" class="b-select-with-search" id="add-staff-input" value="" data-pattern="st-">
		<div class="b-input b-with-margin">
			<label for="name">Название списка:</label>
			<input type="text" id="name" name="name" placeholder="Введите название" value="" required>
		</div>
		<h3>Список сотрудников</h3>
		<div class="b-input b-add-staff-input">
			<input type="text" id="b-staff-query" name="q" class="b-query-input" autocomplete="none" placeholder="Поиск" data-block="#b-add-staff" data-href="ajax/search_staff_checkbox.php" data-params="id=1">
		</div>
		<div class="b-staff-cont b-staff-cont-small custom-scrollbar">
			<div class="b-staff b-add-staff" id="b-add-staff">
				<div class="b-checkbox b-big-checkbox grey">
					<input type="checkbox" id="st-1" name="st" value="1">
					<label for="st-1"><span></span>
						<div class="b-staff-item clearfix">
							<div class="b-staff-item__image">
								<div class="b-avatar" style="background: #E94B35;">
									<img src="i/avatar-1.jpg" alt="">
								</div>
							</div>
							<div class="b-staff-item__online">Online</div>
							<div class="b-staff-item__text">
								<didiv class="b-staff-item__name">Константин Константинопальский</didiv>
								<div class="b-staff-item__post">Филиал 1, старший инженер</div>
							</div>
						</div>
					</label>
				</div>
				<div class="b-checkbox b-big-checkbox grey">
					<input type="checkbox" id="st-2" name="st" value="2">
					<label for="st-2"><span></span>
						<div class="b-staff-item clearfix">
							<div class="b-staff-item__image">
								<div class="b-avatar" style="background: #E37828;">
									<img src="i/avatar-2.jpg" alt="">
								</div>
							</div>
							<div class="b-staff-item__text">
								<div class="b-staff-item__name">Василий Кошкин</div>
								<div class="b-staff-item__post">Филиал 5, бухгалтер</div>
							</div>
						</div>
					</label>
				</div>
				<div class="b-checkbox b-big-checkbox grey">
					<input type="checkbox" id="st-3" name="st" value="3">
					<label for="st-3"><span></span>
						<div class="b-staff-item clearfix">
							<div class="b-staff-item__image">
								<div class="b-avatar" style="background: #00BD9C;">
									<img src="i/avatar-3.jpg" alt="">
								</div>
							</div>
							<div class="b-staff-item__online">Online</div>
							<div class="b-staff-item__text">
								<div class="b-staff-item__name">Наталья Смирнова</div>
								<div class="b-staff-item__post">Филиал 3, секретарь</div>
							</div>
						</div>
					</label>
				</div>
				<div class="b-checkbox b-big-checkbox grey">
					<input type="checkbox" id="st-4" name="st" value="4">
					<label for="st-4"><span></span>
						<div class="b-staff-item clearfix">
							<div class="b-staff-item__image">
								<div class="b-avatar" style="background: #E94B35;">
									<img src="i/avatar-1.jpg" alt="">
								</div>
							</div>
							<div class="b-staff-item__online">Online</div>
							<div class="b-staff-item__text">
								<didiv class="b-staff-item__name">Константин Константинопальский</didiv>
								<div class="b-staff-item__post">Филиал 1, старший инженер</div>
							</div>
						</div>
					</label>
				</div>
				<div class="b-checkbox b-big-checkbox grey">
					<input type="checkbox" id="st-5" name="st" value="5">
					<label for="st-5"><span></span>
						<div class="b-staff-item clearfix">
							<div class="b-staff-item__image">
								<div class="b-avatar" style="background: #E37828;">
									<img src="i/avatar-2.jpg" alt="">
								</div>
							</div>
							<div class="b-staff-item__text">
								<div class="b-staff-item__name">Василий Кошкин</div>
								<div class="b-staff-item__post">Филиал 5, бухгалтер</div>
							</div>
						</div>
					</label>
				</div>
				<div class="b-checkbox b-big-checkbox grey">
					<input type="checkbox" id="st-6" name="st" value="6">
					<label for="st-6"><span></span>
						<div class="b-staff-item clearfix">
							<div class="b-staff-item__image">
								<div class="b-avatar" style="background: #00BD9C;">
									<img src="i/avatar-3.jpg" alt="">
								</div>
							</div>
							<div class="b-staff-item__online">Online</div>
							<div class="b-staff-item__text">
								<div class="b-staff-item__name">Наталья Смирнова</div>
								<div class="b-staff-item__post">Филиал 3, секретарь</div>
							</div>
						</div>
					</label>
				</div>
				<div class="b-checkbox b-big-checkbox grey">
					<input type="checkbox" id="st-7" name="st" value="7">
					<label for="st-7"><span></span>
						<div class="b-staff-item clearfix">
							<div class="b-staff-item__image">
								<div class="b-avatar" style="background: #E94B35;">
									<img src="i/avatar-1.jpg" alt="">
								</div>
							</div>
							<div class="b-staff-item__online">Online</div>
							<div class="b-staff-item__text">
								<didiv class="b-staff-item__name">Константин Константинопальский</didiv>
								<div class="b-staff-item__post">Филиал 1, старший инженер</div>
							</div>
						</div>
					</label>
				</div>
				<div class="b-checkbox b-big-checkbox grey">
					<input type="checkbox" id="st-8" name="st" value="8">
					<label for="st-8"><span></span>
						<div class="b-staff-item clearfix">
							<div class="b-staff-item__image">
								<div class="b-avatar" style="background: #E37828;">
									<img src="i/avatar-2.jpg" alt="">
								</div>
							</div>
							<div class="b-staff-item__text">
								<div class="b-staff-item__name">Василий Кошкин</div>
								<div class="b-staff-item__post">Филиал 5, бухгалтер</div>
							</div>
						</div>
					</label>
				</div>
				<div class="b-checkbox b-big-checkbox grey">
					<input type="checkbox" id="st-9" name="st" value="9">
					<label for="st-9"><span></span>
						<div class="b-staff-item clearfix">
							<div class="b-staff-item__image">
								<div class="b-avatar" style="background: #00BD9C;">
									<img src="i/avatar-3.jpg" alt="">
								</div>
							</div>
							<div class="b-staff-item__online">Online</div>
							<div class="b-staff-item__text">
								<div class="b-staff-item__name">Наталья Смирнова</div>
								<div class="b-staff-item__post">Филиал 3, секретарь</div>
							</div>
						</div>
					</label>
				</div>
				<div class="b-checkbox b-big-checkbox grey">
					<input type="checkbox" id="st-10" name="st" value="10">
					<label for="st-10"><span></span>
						<div class="b-staff-item clearfix">
							<div class="b-staff-item__image">
								<div class="b-avatar" style="background: #E94B35;">
									<img src="i/avatar-1.jpg" alt="">
								</div>
							</div>
							<div class="b-staff-item__online">Online</div>
							<div class="b-staff-item__text">
								<didiv class="b-staff-item__name">Константин Константинопальский</didiv>
								<div class="b-staff-item__post">Филиал 1, старший инженер</div>
							</div>
						</div>
					</label>
				</div>
				<div class="b-checkbox b-big-checkbox grey">
					<input type="checkbox" id="st-11" name="st" value="11">
					<label for="st-11"><span></span>
						<div class="b-staff-item clearfix">
							<div class="b-staff-item__image">
								<div class="b-avatar" style="background: #E37828;">
									<img src="i/avatar-2.jpg" alt="">
								</div>
							</div>
							<div class="b-staff-item__text">
								<div class="b-staff-item__name">Василий Кошкин</div>
								<div class="b-staff-item__post">Филиал 5, бухгалтер</div>
							</div>
						</div>
					</label>
				</div>
				<div class="b-checkbox b-big-checkbox grey">
					<input type="checkbox" id="st-12" name="st" value="12">
					<label for="st-12"><span></span>
						<div class="b-staff-item clearfix">
							<div class="b-staff-item__image">
								<div class="b-avatar" style="background: #00BD9C;">
									<img src="i/avatar-3.jpg" alt="">
								</div>
							</div>
							<div class="b-staff-item__online">Online</div>
							<div class="b-staff-item__text">
								<div class="b-staff-item__name">Наталья Смирнова</div>
								<div class="b-staff-item__post">Филиал 3, секретарь</div>
							</div>
						</div>
					</label>
				</div>
			</div>
		</div>
		<div class="b-bottom-buttons">
			<a href="#" class="b-btn b-blue-btn ajax"><span>Сохранить</span></a>
			<input type="submit" style="display: none;">
		</div>
	</form>
</div>