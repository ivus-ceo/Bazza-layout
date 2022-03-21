<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="app.min.css">
    <style>
      .wrapper {
        display: flex;
        justify-content: center; 
      }
    </style>
  </head>
  <body>
    <!-- Main container -->
    <main class="main-container">
      <div class="main__left-column">
        <!-- Navbar -->
        <?php include 'navbar.php' ?>

        <!-- Main content -->
        <div class="wrapper">
          <section class="reset-container">
            <div class="reset__header">
              <h1>Сброс пароля</h1>
            </div>
            
            <form class="reset__form" action="" method="POST">
              <input type="tel" placeholder="Введите номер телефона">
              <button class="btn" type="submit">Сбросить пароль</button>
            </form>
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