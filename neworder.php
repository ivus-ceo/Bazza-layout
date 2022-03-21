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
          <section class="neworder-container">
            <div class="neworder__header">
              <h1>Ваши данные</h1>
              <small>
                <p>Для заказа товаров требуется регистрация.</p>
                <p>Если вы уже зарегистрированы, войдите в свою учетную запись</p>
              </small>
            </div>

            <form class="neworder__form" action="" method="POST">
              <div class="left-column">
                <div class="neworder__form-header">
                  <h1>Адрес доставки</h1>
                </div>

                <div class="neworder__form-row">
                  <input type="text" placeholder="Страна">
                  <input type="text" placeholder="Город">
                  <input type="text" placeholder="Район">
                  <input type="text" placeholder="Улица">
                  <input type="text" placeholder="Дом / БЦ">
                  <input type="text" placeholder="Квартира / Офис">
                </div>
              </div>

              <div class="right-column">
                <div class="top-row">
                  <div class="neworder__form-header">
                    <h1>Контактные данные</h1>
                  </div>

                  <div class="neworder__form-row">
                    <input type="tel" placeholder="Номер телефона">
                    <input type="email" placeholder="Электронная почта">
                  </div>
                </div>

                <div class="bottom-row">
                  <button class="btn" type="submit">Заказать запчасти</button>

                  <label class="neworder__checkbox" for="checkbox">
                    <input type="checkbox" id="checkbox"> Согласен с условиями, правилами пользования торговой площадкой и правилами возврата
                    <span class="checkmark"></span>
                  </label>
                </div>
              </div>
            </form>
          </section>
        </div>

        <!-- Footer -->
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