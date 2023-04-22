<!DOCTYPE html>

<?php 
    function customError($errno, $errstr) { echo "<b>Error:</b> [$errno] $errstr"; }
	set_error_handler("customError");
?>

<html lang="ua">
	<head>
		<title>Манга</title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../css/style.css">
		<link rel="icon" href="../img/book.png">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala" rel="st ylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Inter" rel="stylesheet">
		<meta name="description" content="Японська манга українською мовою.">
		<meta name="keywords" content="Книжний магазин, книги, манга, журнали, аксесуари до книг, Owl Books">
		<meta name="author" content="Захарченко Костянтин">
	</head>

	<body>
		<nav class="burger-menu_items">
			<div class="burger-menu-item-container">
				<a href="../index.php" class="burger-menu__content">Головна</a>
				<a href="../pages/books.php" class="burger-menu__content">Книги</a>
				<a href="../pages/magazines.php" class="burger-menu__content">Журнали</a>
				<a href="../pages/mangas.php" class="burger-menu__content">Манга</a>
				<a href="../pages/accessorys.php" class="burger-menu__content">Аксесуари</a>
			</div>
		</nav>

		<div class="cart-popup">
			<div class="background"></div>
			<div class="cart-popup-container">
				<div class="cart-popup-content">
					<div class="cart-header">
						<div class="cart-header-tittle"> Кошик </div>
						<div class="cart-header-cross">
							<img src="../img/cross.png" alt="close cart">
						</div>
					</div>
					<div class="cart-header">
						<div class="cart-popup-quantity"></div>
						<div class="cart-popup-clear"> Видалити все </div>
					</div>
					<div class="cart-summary">
						<div class="cart-summary-wrapper">
							<div class="cart-summary-group">
								<div class="cart-summary-title">
									Всього
								</div>
								<div class="cart-summary-price"></div>
							</div>
							<button type="button" onclick="window.location='../pages/make-order.php';" class="cart-summary-button">
								Перейти до оформлення замовлення
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="cart-notification">
			<div class="cart-notification-container">
				Товар успішно додано у корзину!
			</div>
		</div>

		<header class="header">
			<div class="burger-menu_button">
				<img src="../img/menu.png" alt="menu">
			</div>

			<a href="../pages/books.php" class="header__content">Книги</a>
			<a href="../pages/magazines.php" class="header__content">Журнали</a>

			<a href="../index.php" class="header__logo">
				<img src="../img/logo.png" alt="logo" height="80">
				<div>Owl Books</div>
			</a>

			<a href="../pages/mangas.php" class="header__content">Манга</a>
			<a href="../pages/accessorys.php" class="header__content">Аксесуари</a>
		</header>
		
		<div class="body">
			<div class="controls">
				<form class="search" action="../pages/search.php" method="get">
					<input class="search__input" type="search" name="search" placeholder="Пошук...">
					<img class="search__img" src="../img/search.png" alt="search">
					<img class="search__cross hidden" src="../img/cross.png" alt="close search">	
				</form>
				<div class="cart">
					<img class="cart__img" src="../img/cart.png" alt="cart">
					<div class="cart__text">Кошик</div>
				</div>
			</div>

			<div class="new">
				<h2 class="new__tittle">
					Манга
				</h2>
				<div class="new__row">
					<?php include($_SERVER["DOCUMENT_ROOT"]."/include/db/db-page.php");?>
				</div>
			</div>
		</div>

		<footer class="footer">
			<div class="footer__copyright">© 2023 “Owl Books”</div>
			<div class="footer__about">
				<a class="footer__about__social" href="https://telegram.org">
					<img class="footer__about__social_img" src="../img/teleg.png" alt="telegram">
				</a>
				<a class="footer__about__social" href="https://instagram.com">
					<img class="footer__about__social_img" src="../img/insta.png" alt="instagram">
				</a>
				<a class="footer__about__social" href="https://facebook.com">
					<img class="footer__about__social__img" src="../img/faceb.png" alt="facebook">
				</a>
			</div>
		</footer>
		
		<script type="module" src="../js/app.js"></script>
	</body>
</html>