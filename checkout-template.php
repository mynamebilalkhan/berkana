<?php
/**
 * Template Name: Checkout Template
 */
get_header(); ?>
<section class="checkout-section">
	<div class="container">
		<div class="row">
			<div class="col-7">
				<div class="heading">
					<h2>Оформление заказа</h3>
				</div>
				<div class="guest-user-cta mt-4">
					<a href="#" class="active">Я попробовать</a>
					<a href="#">Я постоянный клиент</a>
				</div>

				<div class="tabs mt-5">
					<!-- Tab Navigation -->
					<ul class="tab-nav">
						<li><a href="#tab1" class="tab-link active"><span>1</span> Контакты</a></li>
						<li><a href="#tab2" class="tab-link"><span>2</span> Доставка</a></li>
					</ul>

					<!-- Tab Content -->
					<div id="tab1" class="tab-content active">
						<div class="contact-form">
							<div class="row">
								<div class="col-6">
									<div class="material-input">
										<input type="text"  id="username"  class="input-field"  placeholder=""  required  />
										<label for="username" class="input-label">Имя <span>*</span></label>
									</div>
								</div>
								<div class="col-6">
									<div class="material-input">
										<input type="text"  id="phone"  class="input-field"  placeholder=""  required  />
										<label for="phone" class="input-label">Номер телефона <span>*</span></label>
									</div>
								</div>
								<div class="col-12 mb-5">
									<div class="material-input">
										<input type="text"  id="about-us"  class="input-field"  placeholder=""  />
										<label for="about-us" class="input-label">От кого узнал(а) о Berkana?</label>
									</div>
								</div>
							</div>
							<div class="row align-items-center">
								<div class="col-6"><button class="cancel-order">Отменить заказ <img src="http://localhost/berkana/wp-content/uploads/2024/12/icon.png" /></button></div>
								<div class="col-6 d-flex justify-content-end"><button class="submit-button">Перейти к доставке</button></div>
							</div>
						</div>
					</div>
					<div id="tab2" class="tab-content">
						<div class="billing-container">
							<div class="billing-heading mb-4">
								<p class="heading">Предполагаемая дата доставки:</p>
								<p class="subheading">04 августа 2024</p>
							</div>
							<div class="address-container mb-4">
								<div class="address-card active">
									<div class="d-flex justify-content-between w-100">
										<h3 class="address-header">Адрес №1</h3>
										<button class="edit-button"><img src="http://localhost/berkana/wp-content/uploads/2024/12/edit.png"></button>
									</div>
									<p class="address-label">Текущий адрес</p>
									<div class="address-input">
										<div class="row align-items-center justify-content-center">
											<div class="col-2">
												<input type="radio" name="address" id="address1" checked>
											</div>
											<div class="col-10">
												<label for="address1">Адрес</label>
												<input type="text" value="ул. Макатаева, дом 15, кв 4">
											</div>
										</div>
									</div>
								</div>
								
								<div class="address-card">
									<div class="d-flex justify-content-between w-100">
										<h3 class="address-header">Адрес №2</h3>
										<button class="edit-button"><img src="http://localhost/berkana/wp-content/uploads/2024/12/edit.png"></button>
									</div>
									<div class="address-input">
										<div class="row align-items-center justify-content-center">
											<div class="col-2">
												<input type="radio" name="address" id="address2">
											</div>
											<div class="col-10">
												<label for="address2">Адрес</label>
												<input type="text" value="ул. Макатаева, дом 15, кв 4">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="billing-heading mb-3">
								<p class="heading">Доставка  осуществляется в черте квадрата улиц:</p>
								<p class="subheading">Достык - Саина; Аль-Фараби - Рыскулова</p>
							</div>
							<div class="billing-heading mb-5">
								<p class="heading">Доставка за пределами квадрата осуществляется</p>
								<p class="subheading">через и по тарифам Яндекс Доставка</p>
							</div>
							<div class="row align-items-center">
								<div class="col-6"><button class="cancel-order">Отменить заказ <img src="http://localhost/berkana/wp-content/uploads/2024/12/icon.png" /></button></div>
								<div class="col-6 d-flex justify-content-end"><button class="submit-button">Оформить заказ</button></div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="col-1"></div>
			<div class="col-4">
				<div class="heading">
					<h2>Ваш заказ</h2>
				</div>
				<div class="order-list">
					<div class="order-box">
						<div class="row">
							<div class="col-4">
								<img src="http://localhost/berkana/wp-content/uploads/2024/10/product.jpg" class="img-fluid">
							</div>
							<div class="col-8">
								<div class="row align-items-center mb-3">
									<div class="col-6">
										<h4 class="label">Label</h4>
									</div>
									<div class="col-6 text-right">
										<span class="label-text">75 мл</span>
									</div>
								</div>
								<div class="row align-items-center mb-3">
									<div class="col-6">
										<p class="price">4 350 ₸</p>
									</div>
									<div class="col-6 text-right">
										<p class="discount"><del>000 ₸</del></p>
									</div>
								</div>
								<div class="row align-items-center">
									<div class="col-6">
										<div class="quantity-input">
											<button type="button" class="btn-quantity btn-minus">-</button>
											<input type="number" class="input-quantity" value="1" min="1" />
											<button type="button" class="btn-quantity btn-plus">+</button>
										</div>
									</div>
									<div class="col-6 text-right">
										<button class="delete">Удалить</button>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="order-box">
						<div class="row">
							<div class="col-4">
								<img src="http://localhost/berkana/wp-content/uploads/2024/10/product.jpg" class="img-fluid">
							</div>
							<div class="col-8">
								<div class="row align-items-center mb-3">
									<div class="col-6">
										<h4 class="label">Label</h4>
									</div>
									<div class="col-6 text-right">
										<span class="label-text">75 мл</span>
									</div>
								</div>
								<div class="row align-items-center mb-3">
									<div class="col-6">
										<p class="price">4 350 ₸</p>
									</div>
									<div class="col-6 text-right">
										<p class="discount"><del>000 ₸</del></p>
									</div>
								</div>
								<div class="row align-items-center">
									<div class="col-6">
										<div class="quantity-input">
											<button type="button" class="btn-quantity btn-minus">-</button>
											<input type="number" class="input-quantity" value="1" min="1" />
											<button type="button" class="btn-quantity btn-plus">+</button>
										</div>
									</div>
									<div class="col-6 text-right">
										<button class="delete">Удалить</button>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="order-box">
						<div class="row">
							<div class="col-4">
								<img src="http://localhost/berkana/wp-content/uploads/2024/10/product.jpg" class="img-fluid">
							</div>
							<div class="col-8">
								<div class="row align-items-center mb-3">
									<div class="col-6">
										<h4 class="label">Label</h4>
									</div>
									<div class="col-6 text-right">
										<span class="label-text">75 мл</span>
									</div>
								</div>
								<div class="row align-items-center mb-3">
									<div class="col-6">
										<p class="price">4 350 ₸</p>
									</div>
									<div class="col-6 text-right">
										<p class="discount"><del>000 ₸</del></p>
									</div>
								</div>
								<div class="row align-items-center">
									<div class="col-6">
										<div class="quantity-input">
											<button type="button" class="btn-quantity btn-minus">-</button>
											<input type="number" class="input-quantity" value="1" min="1" />
											<button type="button" class="btn-quantity btn-plus">+</button>
										</div>
									</div>
									<div class="col-6 text-right">
										<button class="delete">Удалить</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="order-meta mt-3">
					<div class="row align-items-center mb-3">
						<div class="col-6">
							<p class="spend">Потратить Berkanы</p>
							<span>Накоплено 2 300 Berkan</span>
						</div>
						<div class="col-6 text-right">
							<div class="switch-container">
								<input type="checkbox" id="switch1" class="switch-input">
								<label for="switch1" class="switch-label"></label>
							</div>
						</div>
					</div>
					<div class="row align-items-center mb-3">
						<div class="col-6">
							<p class="discount">Скидка</p>
						</div>
						<div class="col-6 text-right">
							<p class="discount-label">000 ₸</p>
						</div>
					</div>
					<div class="row align-items-center mb-3">
						<div class="col-6">
							<p class="delivery">Доставка</p>
						</div>
						<div class="col-6 text-right">
							<p class="delivery-label">000 ₸</p>
						</div>
					</div>
					<div class="row align-items-center">
						<div class="col-6">
							<p class="sum">Сумма</p>
						</div>
						<div class="col-6 text-right">
							<p class="sum-label">000 ₸</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
<script>
	document.addEventListener('DOMContentLoaded', function () {
		const minusButtons = document.querySelectorAll('.btn-minus');
		const plusButtons = document.querySelectorAll('.btn-plus');

		minusButtons.forEach(button => {
			button.addEventListener('click', function () {
				const input = button.nextElementSibling;
				const value = parseInt(input.value, 10) || 1;
				if (value > 1) input.value = value - 1;
			});
		});

		plusButtons.forEach(button => {
			button.addEventListener('click', function () {
				const input = button.previousElementSibling;
				const value = parseInt(input.value, 10) || 1;
				input.value = value + 1;
			});
		});
		
	});

	/**
	 * Tabs Script
	 */
	document.addEventListener('DOMContentLoaded', function () {
		const tabLinks = document.querySelectorAll('.tab-link');
		const tabContents = document.querySelectorAll('.tab-content');

		tabLinks.forEach(link => {
			link.addEventListener('click', function (e) {
			e.preventDefault();
			
			// Remove active class from all tabs and content
			tabLinks.forEach(link => link.classList.remove('active'));
			tabContents.forEach(content => content.classList.remove('active'));

			// Add active class to clicked tab and corresponding content
			this.classList.add('active');
			const activeTab = document.querySelector(this.getAttribute('href'));
				activeTab.classList.add('active');
			});
		});
	});
</script>
