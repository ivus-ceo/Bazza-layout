<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Custom Styles -->
    <link rel="stylesheet" type="text/css" href="datatable/datatables.css">
    <link rel="stylesheet" href="app.min.css">
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  </head>
  <body>
    <!-- Main container -->
    <main class="main-container">
      <div class="main__left-column">
        <!-- Navbar -->
        <?php include 'navbar.php' ?>

        <!-- Main content -->
        <div class="wrapper">
          <section class="cart-container">
            <div class="cart__table">
              <table id="datatable" class="datatable-custom datatable-custom-cart">
                <thead>
                    <tr>
                        <th>Артикул</th>
                        <th>Наименование</th>
                        <th>Количество</th>
                        <th>Цена</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>4251511</td>
                        <td>Zenaida Frank</td>
                        <td>
                          <div class="cart__product-amount-container">
                            <div class="product-amount-minus">
                              <img src="icons/minus.svg">
                            </div>

                            <div class="product-amount">124</div>

                            <div class="product-amount-plus">
                              <img src="icons/plus.svg">
                            </div>
                          </div>
                        </td>
                        <td>$125,250</td>
                    </tr>
                    <tr>
                        <td>279012893</td>
                        <td>Zorita Serrano</td>
                        <td>
                          <div class="cart__product-amount-container">
                            <div class="product-amount-minus">
                              <img src="icons/minus.svg">
                            </div>

                            <div class="product-amount">124</div>

                            <div class="product-amount-plus">
                              <img src="icons/plus.svg">
                            </div>
                          </div>
                        </td>
                        <td>$115,000</td>
                    </tr>
                    <tr>
                        <td>498965278</td>
                        <td>Jennifer Acosta</td>
                        <td>
                          <div class="cart__product-amount-container">
                            <div class="product-amount-minus">
                              <img src="icons/minus.svg">
                            </div>

                            <div class="product-amount">124</div>

                            <div class="product-amount-plus">
                              <img src="icons/plus.svg">
                            </div>
                          </div>
                        </td>
                        <td>$75,650</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                    <th>Артикул</th>
                        <th>Наименование</th>
                        <th>Количество</th>
                        <th>Цена</th>
                    </tr>
                </tfoot>
              </table>
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
    <script type="text/javascript" src="datatable/datatables.min.js"></script>
    <script>
      $(document).ready(function() {
        $('#datatable').DataTable({
          searching: false,
          lengthChange: false
        });
      });
    </script>
  </body>
</html>