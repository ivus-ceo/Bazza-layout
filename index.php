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
          <section class="search-container">
            <div class="search__header">
              <img src="icons/search.svg">
              <h1>Поиск автозапчастей</h1>
            </div>

            <div class="search__form">
              <form action="" method="POST">
                <div class="search__form-row">
                  <input type="text" placeholder="Название автозапчасти">
                  <input type="text" placeholder="Поиск по артиклю">
                  <select>
                    <option>Выберите модель авто</option>
                    <option value="1">Первый</option>
                    <option value="2">Второй</option>
                  </select>
                </div>
                <button class="btn" type="submit">Найти запчасть</button>
              </form>

              <div class="search__text-helper">
                <a href="#">Не можете найти запчасть?</a>
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