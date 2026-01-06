<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">
	<!-- <link rel="stylesheet" href="css/style.min.css"> -->

	<!-- <meta name="robots" content="noindex, nofollow"> -->
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description" content="<?= $data['name'] ? $data['name'] : $this->set['title'] ?><?= ', ' . $this->set['phone'] . ' ГБЦ, ' . $this->set['phone_aser'] . ' Автосервис, ' . $this->set['phone_azap'] . ' Запчасти' ?>">

	<meta name="keywords" content="<?= $this->set['meta_keywords'] ?>">

	<meta property="og:title" content="<?= $this->set['c_name'] ?>">
	<meta property="og:description" content="<?= $data['name'] ? $data['name'] : $this->set['sub_title'] ?><?= ', ' . $this->set['phone'] . ' ГБЦ, ' . $this->set['phone_aser'] . ' Автосервис, ' . $this->set['phone_azap'] . ' Запчасти' ?>">
	<meta property="og:image" content="/userfiles/default_images/default.png">

	<link rel="icon" href="<?= SITE_URL ?>/favicon.ico" type="image/x-icon">

	<title><?= $this->set['c_name'] ?><?= $data['title'] ? ' | ' . $data['title'] : ' | ' . $this->set['sub_title'] ?></title>

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
								<a href="tel:<?= preg_replace('/[^+\d]/', '', $this->set['phone_aser']) ?>" class="menu-actions__item menu-actions__phone">
									<div class="menu-actions__icon"><img src="<?= PATH . TEMPLATE ?>assets/img/icons/phone.svg" alt="Phone"></div>
									<div class="menu-actions__text"><?= $this->set['phone_aser'] ?> - Автосервис</div>
								</a>
								<a href="tel:<?= preg_replace('/[^+\d]/', '', $this->set['phone']) ?>" class="menu-actions__item menu-actions__phone">
									<div class="menu-actions__icon"><img src="<?= PATH . TEMPLATE ?>assets/img/icons/phone.svg" alt="Phone"></div>
									<div class="menu-actions__text"><?= $this->set['phone'] ?> - ГБЦ</div>
								</a>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>

		<main class="page">