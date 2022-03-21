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
          <section class="modal-product-container">
            <div class="modal-product__header">
              <h1>Накладка тормозная сверленная</h1>
            </div>

            <div class="modal-product__article">
              <p>Артикул: УД99911117072 51-3502105-03</p>
            </div>

            <div class="modal-product__row">
              <div class="left-column">
                <img src="test.png">
              </div>

              <div class="right-column">
                <h1>Описание</h1>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id fames consectetur ultrices elementum non euismod. Adipiscing lectus consectetur non lacus. Felis phasellus fringilla libero mattis adipiscing nibh. Aliquam leo senectus pretium, ut eget neque, vel interdum. Vestibulum tellus egestas id feugiat. Semper praesent nulla amet aliquam iaculis dignissim etiam maecenas. Fermentum neque, at fermentum morbi lorem enim. Varius fermentum sit quis diam commodo ullamcorper dignissim tincidunt. Posuere ultrices magnis massa mattis. Vulputate aliquet nec sit in eget venenatis pellentesque nunc nec. Venenatis porta eget mattis quam vulputate fermentum. Ullamcorper dui eleifend mattis sit senectus. Commodo tempor varius risus ac.</p>

                <p>Nisl risus eu, aliquet nulla. Viverra nulla egestas egestas mattis adipiscing varius varius. Posuere et duis in enim mollis sit tempus. Vulputate fermentum sit adipiscing amet in sapien massa, in at. Egestas lobortis in mauris vitae pellentesque pellentesque.</p>
              
                <p>Blandit lectus pellentesque ultrices amet amet sed. Enim nec sem fermentum, ligula. Cursus massa vestibulum lectus dolor. Sit suspendisse donec nibh orci, elementum. Risus nunc sem semper cursus. Urna auctor at et tincidunt ac sociis. Cursus commodo nec amet rhoncus, venenatis. Dui orci consectetur.</p>
              </div>
            </div>
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