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
                <li><a href="#"><img src="icons/cart.svg">Список заказов</a></li>
                <li><a class="active" href="#"><img src="icons/arrow.svg">Диалог с экспертом</a></li>
                <li><a href="#"><img src="icons/thumb-up.svg">Рекомендовать</a></li>
              </ul>
            </menu>

            <div class="profile__chat">
              <div class="profile__header">
                <h1>Чат с экспертом</h1>
              </div>

              <div class="profile__messaging">
                <div class="profile__chat-date">22 Марта</div>

                <div class="profile__chat-admin">
                  <div class="chat__header">
                    <p class="chat__name">Администратор<img src="icons/circle-ok.svg"></p>
                    <small class="chat__date">12:41:23</small>
                  </div>
                  
                  <div class="chat__message">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad non provident corporis ea hic deserunt eaque totam fugiat dicta placeat doloremque, nobis similique unde, itaque dolorem reiciendis id, nisi eius.</p>
                  </div>
                </div>

                <div class="profile__chat-admin">
                  <div class="chat__header">
                    <p class="chat__name">Администратор<img src="icons/circle-ok.svg"></p>
                    <small class="chat__date">12:45:43</small>
                  </div>
                  
                  <div class="chat__message">
                    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi.ytimg.com%2Fvi%2FwtXFWU4r9FQ%2Fmaxresdefault.jpg&f=1&nofb=1">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad non provident corporis ea hic deserunt eaque totam fugiat dicta placeat doloremque, nobis similique unde, itaque dolorem reiciendis id, nisi eius.</p>
                  </div>
                </div>

                <div class="profile__chat-date">23 Марта</div>

                <div class="profile__chat-user">
                  <div class="chat__header">
                    <p class="chat__name">Джон Доу</p>
                    <small class="chat__date">12:45:43</small>
                  </div>
                  
                  <div class="chat__message">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad non provident corporis ea hic deserunt eaque.</p>
                  </div>
                </div>

                <div class="profile__chat-user">
                  <div class="chat__header">
                    <p class="chat__name">Джон Доу</p>
                    <small class="chat__date">12:45:43</small>
                  </div>
                  
                  <div class="chat__message">
                    <p>Lorem ipsum dolor</p>
                  </div>
                </div>
              </div>

              <form class="profile__form" action="" method="POST">
                <textarea class="profile__form-message" placeholder="Сообщение"></textarea>

                <div class="profile__form-row">
                  <div class="form__file">
                    <p><img src="icons/pin.svg">Прикрепить файл</p>
                    <input type="file" value="123">
                  </div>
                  <button class="btn" type="submit">Отправить</button>
                </div>
              </form>
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