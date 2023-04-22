<!DOCTYPE html>

<?php 
    function customError($errno, $errstr) { echo "<b>Error:</b> [$errno] $errstr"; }
	set_error_handler("customError");
?>

<html lang="ua">
	<head>
		<title>Оформлення замовлення</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="icon" href="../img/book.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala" rel="st ylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter" rel="stylesheet">
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
		
        <div class="popup-order-succeed">
            <div class="popup-order-succeed__body">
                <div class="popup-order-succeed__text">
                    Замовлення успішне!<p>Деталі доставки будуть надіслані вам на пошту та у телеграм
                </div>
                <button class="order-summary-button">Закрити діалогове вікно</button>
            </div>
        </div>

        <div class="popup-order-error">
            <div class="popup-order-error__body">
                <div class="popup-order-error__text">
                    Сталася помилка!<p>Перевірте уведенні вами данні та спробуйте знову!
                </div>
                <button class="order-summary-button red">Закрити діалогове вікно</button>
            </div>
        </div>

		<div class="make-order-body">
            <div class="order-container">
                <div class="make-order-cart">
                    <div class="cart-popup-content">
                        <div class="cart-header">
                            <div class="cart-header-tittle"> Кошик </div>
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="make-order-delivery">
                    <div class="contacts-text">
                        <div class="contacts-text-content">Ім'я *</div>
                        <div class="contacts-text-content">Прізвище *</div>
                        <div class="contacts-text-content">Телефон *</div>
                        <div class="contacts-text-content">Електронна пошта *</div>
                        <div class="contacts-text-content">Область *</div>
                        <div class="contacts-text-content">Місто *</div>
                        <div class="contacts-text-content np-margin">Відділення Нової Пошти *</div>
                        <div class="contacts-text-content">Коментар</div>
                    </div>
                    <div class="contacts-input">
                        <input type="text" class="order-input name" placeholder="Ім'я" required>
                        <input type="text" class="order-input surname" placeholder="Прізвище" required>
                        <input type="tel" class="order-input phone" placeholder="Телефон" required>
                        <input type="email" class="order-input email" placeholder="Електронна пошта" required>
                        <select class="order-input oblast" required>
                            <option value="" disabled selected> --- Виберіть область --- </option>
                            <option value="1">Івано-Франківська область</option>
                            <option value="2">Вінницька область</option>
                            <option value="3">Волинська область</option>
                            <option value="4">Дніпропетровська область</option>
                            <option value="5">Донецька область</option>
                            <option value="6">Житомирська область</option>
                            <option value="7">Закарпатська область</option>
                            <option value="8">Запорізька область</option>
                            <option value="9">Кіровоградська область</option>
                            <option value="10">Київська область</option>
                            <option value="11">Луганська область</option>
                            <option value="12">Львівська область</option>
                            <option value="13">Миколаївська область</option>
                            <option value="14">Одеська область</option>
                            <option value="15">Полтавська область</option>
                            <option value="16">Рівненська область</option>
                            <option value="17">Сумська область</option>
                            <option value="18">Тернопільська область</option>
                            <option value="19">Харківська область</option>
                            <option value="20">Херсонська область</option>
                            <option value="21">Хмельницька область</option>
                            <option value="22">Черкаська область</option>
                            <option value="23">Чернівецька область</option>
                            <option value="24">Чернігівська область</option>
                        </select>
                        <input type="text" class="order-input city" placeholder="Місто" required>
                        <input type="text" class="order-input np-margin nova-post" id="nova-post" placeholder="Відділення Нової Пошти" required>
                        <textarea class="order-input description not_req" placeholder="Коментар"></textarea>
                    </div>
                </div>
            </div>
            <button type="submit" id="make-order" class="order-summary-button">Оформити замовлення</button>
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