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
          <section class="signup-container">
            <div class="signup__header">
              <h1>Регистрация</h1>
            </div>
            
            <form class="signup__form" action="" method="POST">
              <input type="text" placeholder="Ваше имя">
              <input type="email" placeholder="Электронная почта">
              <input type="text" placeholder="Введите город">
              <select>
                <option>Тип пользователя</option>
                <option value="1">Первый</option>
                <option value="2">Второй</option>
              </select>
              <input type="password" placeholder="Введите пароль">
              <input type="password" placeholder="Повторите пароль">
              <button class="btn" type="button" onclick="nextForm()">Зарегистрироваться</button>
            </form>

            <form class="sms__form disabled" action="" method="POST">
              <input type="text" placeholder="СМС код">
              <button class="btn" type="submit">Подтвердить код</button>
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
    <script>
      function nextForm() {
        const signupForm = document.querySelector('.signup__form');
        const smsForm = document.querySelector('.sms__form');

        signupForm.classList.toggle('disabled');
        smsForm.classList.toggle('disabled');
      }
    </script>
  </body>
</html>