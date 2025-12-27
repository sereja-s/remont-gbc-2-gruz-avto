<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">
	<!-- <link rel="stylesheet" href="css/style.min.css"> -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- <meta name="robots" content="noindex, nofollow"> -->
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description" content="<?= $this->set['description'] ?> <?= $this->set['phone'] ?> <?= $this->set['address'] ?>">
	<meta name="keywords" content="<?= $this->set['keywords'] ?>">

	<meta property="og:title" content="<?= $this->set['title'] ?>" />
	<meta property="og:description" content="<?= $this->set['description'] ?> <?= $this->set['phone'] ?> <?= $this->set['address'] ?>" />
	<meta property="og:image" content="<?= $this->img($this->set['main_img']) ?>" />



	<link rel="icon" href="<?= SITE_URL ?>/favicon.ico" type="image/x-icon">

	<link rel="icon" type="image/png" href="/favicon/favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/svg+xml" href="/favicon/favicon.svg" />
	<link rel="shortcut icon" href="/favicon/favicon.ico" />
	<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png" />
	<link rel="manifest" href="/favicon/site.webmanifest" />

	<title><?= $this->set['title'] ?></title>

	<?php $this->getStyles() ?>
</head>

<body>
	<div class="wrapper">
		<header class="header">
			<div class="header__wrapper">
				<div class="header__container _container">
					<div class="header__body">
						<div class="header__main">
							<a href="<?= $this->alias() ?>" class="header__logo">VSmotor</a>

							<div class="header__menu menu">
								<nav class="menu__body">
									<ul data-spollers="768,max" class="menu__list">

										<?php if (!empty($this->menu['information'])) : ?>

											<?php foreach ($this->menu['information'] as $item) : ?>

												<li class="menu__item">

													<a href="<?= $this->alias(['information' => $item['alias']]) ?>" class="menu__link"><?= $item['name'] ?></a>

												</li>

											<?php endforeach; ?>

										<?php endif; ?>

										<?php if (!empty($this->phones)) : ?>

											<li class="menu__item">

												<button data-spoller type="button" class="menu__link-cat">Позвонить</button>

												<ul class="menu__sub-list">

													<?php foreach ($this->phones as $phone) : ?>

														<li class="menu__sub-item">

															<a href="tel:<?= preg_replace('/[^+\d]/', '', $phone['name']) ?>" class="menu__sub-link"><?= $phone['name'] ?></a>

														</li>

													<?php endforeach; ?>

												</ul>

											</li>

										<?php endif; ?>

										<?php if (!empty($this->emails)) : ?>

											<li class="menu__item">

												<button data-spoller type="button" class="menu__link-cat">Написать</button>

												<ul class="menu__sub-list">

													<?php foreach ($this->emails as $email) : ?>

														<li class="menu__sub-item">

															<a href="mailto:<?= $email['name'] ?>" target="_blank" class="menu__sub-link"><?= $email['name'] ?></a>

														</li>

													<?php endforeach; ?>

												</ul>

											</li>

										<?php endif; ?>

										<li class="menu__item">
											<a href="<?= $this->alias('contacts') ?>" class="menu__link">Контакты</a>
										</li>

									</ul>
								</nav>
							</div>
						</div>

						<div class="header__search">
							<div class="search-form" id="searchButton">
								<button type="button" class="search-form__icon _icon-search"></button>
								<form action="#" class="search-form__item">
									<button class="search-form__btn _icon-search"></button>
									<input autocomplete="off" type="text" name="search" placeholder="найти..." class="search-form__input">
									<input type="hidden" name="search_table" value="goods">
									<div class="dropdown-content search_res">
										<a href="#">Ссылка 1</a>
										<a href="#">Ссылка 2</a>
										<a href="#">Ссылка 3</a>
									</div>
								</form>
							</div>
						</div>

						<button type="button" class="icon-menu">
							<span></span>
							<span></span>
							<span></span>
						</button>
					</div>
				</div>
			</div>
		</header>

		<main class="page">