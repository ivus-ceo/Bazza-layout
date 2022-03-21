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
                <li><a href="#"><img src="icons/user.svg">Настройка профиля</a></li>
                <li><a class="active" href="#"><img src="icons/cart.svg">Список заказов</a></li>
                <li><a href="#"><img src="icons/arrow.svg">Диалог с экспертом</a></li>
                <li><a href="#"><img src="icons/thumb-up.svg">Рекомендовать</a></li>
              </ul>
            </menu>

            <div class="profile__orders">
              <div class="profile__header">
                <h1>Список ваших заказов</h1>
              </div>

              <details open class="profile__order-container">
                <summary class="profile__order-title">Номер: 2315151</summary>

                <div class="order__content">
                  <div class="order__list-item">
                    <span class="order__list-title">Статус зазаза:</span>
                    <span class="badge green-badge">Отправлено</span>
                  </div>

                  <div class="order__list-item">
                    <span class="order__list-title">Дата зазаза:</span>
                    <span class="order__list-value">25.12.2021</span>
                  </div>

                  <div class="order__list-item">
                    <span class="order__list-title">Количество:</span>
                    <span class="order__list-value">124000 шт</span>
                  </div>

                  <div class="order__list-item">
                    <span class="order__list-title">Нужна предоплата:</span>
                    <span class="order__list-value">Да</span>
                  </div>

                  <div class="order__list-item">
                    <span class="order__list-title">Полностью оплачено:</span>
                    <span class="order__list-value">Нет</span>
                  </div>

                  <div class="order__list-item">
                    <span class="order__list-title">Склад:</span>
                    <span class="order__list-value">Астана - Центральный склад</span>
                  </div>

                  <div class="order__list-item">
                    <span class="order__list-title">Выдача:</span>
                    <span class="order__list-value">Самовывоз со склада</span>
                  </div>

                  <div class="order__list-item">
                    <span class="order__list-title">Адрес доставки:</span>
                    <span class="order__list-value">-</span>
                  </div>

                  <div class="order__list-item order__comment">
                    <p><span class="order__list-title">Комментарий к заказу:</span> Epcot is a theme park at Walt Disney World Resort featuring exciting attractions, international pavilions, award-winning fireworks and seasonal special events.</p>
                  </div>

                  <details class="order__products-container">
                    <summary class="order__products-title">Список товаров</summary>

                    <div class="products__content">
                      <div class="order__product-container">
                        <div class="order__product-title">Lorem ipsum</div>

                        <div class="order__product-row">
                          <div class="order__product-article">Артикул: Ф-ОПГ24156</div>
                          <div class="order__product-amount">Количество: 16545 шт</div>
                        </div>
                        
                        <div class="order__product-description">Описание: Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo error quidem veritatis delectus dolore, atque in quae, labore beatae dignissimos ex earum numquam at nam adipisci. Sunt quasi laboriosam dignissimos.</div>
                      </div>

                      <div class="order__product-container">
                        <div class="order__product-title">Lorem ipsum</div>

                        <div class="order__product-row">
                          <div class="order__product-article">Артикул: Ф-ОПГ24156</div>
                          <div class="order__product-amount">Количество: 16545 шт</div>
                        </div>
                        
                        <div class="order__product-description">Описание: Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo error quidem veritatis delectus dolore, atque in quae, labore beatae dignissimos ex earum numquam at nam adipisci. Sunt quasi laboriosam dignissimos.</div>
                      </div>
                    </div>
                  </details> 
                </div>
              </details>
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