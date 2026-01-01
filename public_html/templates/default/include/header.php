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
			<div class="header__container">
				<div class="header__left">
					<a href="<?= $this->alias() ?>" class="header__logo"><img src="<?= $this->img($this->set['img']) ?>" alt="<?= $this->set['sub_title'] ?>"></a>
					<div class="header__text">
						<?= $this->set['sub_title'] ?>
					</div>
				</div>
				<div class="header__right">
					<div class="header__menu menu">
						<button type="button" class="menu__icon icon-menu"><span></span></button>
						<nav class="menu__body">
							<div class="menu__logo"><img src="<?= $this->img($this->set['img']) ?>" alt="<?= $this->set['short_content'] ?>"></div>
							<ul class="menu__list">
								<li class="menu__item"><a href="<?= $this->alias() ?>" class="menu__link">Ремонт ГБЦ</a></li>
								<li class="menu__item"><a href="<?= $this->alias('remontgruzauto') ?>" class="menu__link">Ремонт грузовых авто, прицепов, полуприцепов</a></li>
								<li class="menu__item"><a href="<?= $this->alias('contacts') ?>" class="menu__link">Контакты</a></li>
							</ul>
							<div class="menu__actions menu-actions">
								<a href="tel:88007777550" class="menu-actions__item menu-actions__phone">
									<div class="menu-actions__icon"><img src="<?= PATH . TEMPLATE ?>assets/img/icons/phone.svg" alt="Phone"></div>
									<div class="menu-actions__text">+7(949)327-32-02 - Автосервис</div>
								</a>
								<a href="tel:88007777550" class="menu-actions__item menu-actions__phone">
									<div class="menu-actions__icon"><img src="<?= PATH . TEMPLATE ?>assets/img/icons/phone.svg" alt="Phone"></div>
									<div class="menu-actions__text">+7(949)334-91-01 - ГБЦ</div>
								</a>
								<!-- <a href="mailto:mail@agifta.ru" class="meu-actions__item menu-actions__email">
									<div class="menu-actions__icon"><img src="<?= PATH . TEMPLATE ?>assets/img/icons/mail.svg" alt="Email"></div>
									<div class="menu-actions__text">Ignatenko_k_a@mail.ru</div>
								</a> -->
								<?php if (!empty($this->socials)) : ?>
									<?php foreach ($this->socials as $item) : ?>
										<a href="<?= $this->alias($item['external_alias']) ?>" class="menu-actions__item menu-actions__telegram">
											<div class="menu-actions__icon"><img src="<?= $this->img($item['img']) ?>" alt="<?= $item['name'] ?>"></div>
										</a>
									<?php endforeach; ?>
								<?php endif; ?>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>

		<main class="page">