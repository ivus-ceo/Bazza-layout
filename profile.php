<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="app.min.css">
  </head>
  <body>
    <!-- Main container -->
    <main class="main-container">
      <div class="main__left-column">
        <!-- Navbar -->
        <?php include 'navbar.php' ?>

        <!-- Main content -->
        <div class="wrapper">
          <section class="profile-container">
            <menu class="profile__menu">
              <ul>
                <li><a class="active" href="#"><img src="icons/user.svg">Настройка профиля</a></li>
                <li><a href="#"><img src="icons/cart.svg">Список заказов</a></li>
                <li><a href="#"><img src="icons/arrow.svg">Диалог с экспертом</a></li>
                <li><a href="#"><img src="icons/thumb-up.svg">Рекомендовать</a></li>
              </ul>
            </menu>

            <div class="profile__settings">
              <div class="left-column">
                <div class="profile__header">
                  <h1>Личные данные</h1>
                </div>

                <div class="profile__form">
                  <form action="" method="POST">
                    <div class="profile__form-row">
                      <input type="text" placeholder="Ваше имя">
                      <input type="text" placeholder="Ваша фамилия">
                      <input type="tel" placeholder="Номер телефона">
                      <input type="mail" placeholder="Электронная почта">
                    </div>

                    <div class="profile__form-row">
                      <input type="text" placeholder="Адрес доставки">
                      <input type="text" placeholder="VIN код кузова">
                    </div>

                    <button class="btn" type="submit">Применить все изменения</button>
                  </form>
                </div>
              </div>

              <div class="right-column">
                <div class="profile__header">
                  <h1>Изменить пароля</h1>
                </div>

                <div class="profile__form">
                  <form action="" method="POST">
                    <div class="profile__form-row">
                      <input type="password" placeholder="Старый пароль">
                      <input type="password" placeholder="Новый пароль">
                      <input type="password" placeholder="Подтвердите новый пароль">
                    </div>

                    <button class="btn" type="submit">Изменить пароль</button>
                  </form>
                </div>
              </div>
            </div>
          </section>
        </div>

        <!-- Navbar -->
        <?php include 'footer.php' ?>
      </div>

      <div class="main__right-column">
        <aside class="sidebar-container">
          <div class="sidebar__logo">
            <a href="./">BAZZA.KZ</a>
          </div>

          <div class="sidebar__links">
            <ul>
              <li><a href="#"><img src="icons/book-opened.svg">Каталог</a></li>
              <li><a href="#"><img src="icons/cart-add.svg">Как заказать</a></li>
              <li><a href="#"><img src="icons/message-warning.svg">Информация</a></li>
              <li><a href="#"><img src="icons/box.svg">Склады и магазины</a></li>
              <li><a href="#" class="btn"><img src="icons/user-white.svg">Войти</a></li>
            </ul>
          </div>

          <div class="sidebar__phone">
            <a href="tel:+77773342200">
              <div class="sidebar__phone-icon">
                <img src="icons/phone.svg">
              </div>

              +7 (777) 334-22-00
            </a>
          </div>
        </aside>
      </div>
    </main>

    <script src="app.js"></script>
  </body>
</html>