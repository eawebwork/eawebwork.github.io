<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300&subset=cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
    <title>Мультипресса</title>
     <!--[if IE 8]>
      <link rel="stylesheet" href="css/ie.css">
    <![endif]-->
    <!--[if IE 7]>
      <link rel="stylesheet" href="css/ie-s.css">
    <![endif]-->
<?php include __DIR__ . '/inc/google.analytics.php';?>
</head>
  <body>
<?php include __DIR__ . '/inc/yandex.metrika.php';?>
    <!-- begin header-->
    <div class="header">
      <div class="header__inner">
        <div class="header__logo"><img src="img/logo.png" alt="logo"></div>
        <h1 class="header__title">Реклама в прессе<br>  от 290 <span class="rouble">Р</span>!</h1>
        <div class="header__text">
          <p>Позвоните нам по телефону <span>+7 (495) 374-79-12 <br></span>или оставьте заявку и мы подберем для Вас <br>
            самые эффективные издания.
          </p>
        </div>
        <div class="header__contact">
          <button type="button" class="header__button">Оставить заявку</button><span class="header__under-button">Мы свяжемся с Вами в течение 10 минут</span>
        </div>
      </div>
    </div>
    <!-- end header-->
    <!-- begin feedback-->
    <div class="feedback">
      <div class="feedback__inner">
        <div class="feedback__wrapper">
          <form id="leaveApp" class="feedback__form">
            <h2 class="feedback__title">Оставить заявку</h2>
            <div class="form__field">
              <label for="name1">Ваше имя</label>
              <input id="name1" name="name1"/>
            </div>
            <div class="form__field">
              <label for="tel1">Ваш номер телефона</label>
              <input type="tel" id="tel1" name="tel1"/>
            </div>
            <button type="submit" class="button feedback__button">Отправить</button><span class="form__text">Мы свяжемся с Вами в течение 10 минут</span>
          </form>
          <div class="form__success">
            <h2 class="form__title--success">Спасибо! Ваша заявка принята.</h2><span class="form__text--success">Мы свяжемся с Вами в течение 10 минут.</span>
          </div>
        </div>
      </div>
    </div>
    <!-- end feedback-->
    <!-- begin press-->
    <div class="press">
      <div class="press__inner">
        <h2 class="press__title">Доступ к широкой аудитории</h2><span class="press__text">Более 100 печатных изданий по всей России.</span><span class="press__text">Суммарный еженедельный тираж — более 10 млн экземпляров.</span>
        <div class="press__products__wrapper">
          <div class="press__products">
          <img src="img/prod1.png" alt="kommersant"/>
          <img src="img/prod2.png" alt="irvr"/>
          <img src="img/prod3.png" alt="rabota_dliya"/>
          <img src="img/prod4.png" alt="auto-price"/>
          <img src="img/prod5.png" alt="nedvizhimost"/>
          <img src="img/prod6.png" alt="moy-raon"/>
          <img src="img/prod7.png" alt="metro"/>
          <img src="img/prod8.png" alt="moscow"/>
          </div>
        </div>
        <div class="press__under-product">
          Точный список изданий, сроки и стоимость размещения Вы можете узнать позвонив нам
          по телефону   <b> +7 (495) 374-79-12 </b>или <a href="" class="press__link">оставив заявку.</a>
        </div>
      </div>
    </div>
    <!-- end press-->
    <!-- begin benefits-->
    <div class="benefits">
      <div class="benefits__inner">
        <div class="benefits__how-it-works benefits__block benefits__animate ">
          <h2 class="benefits__title">Как это работает</h2>
          <ul class="benefits__how-it-works__list">
            <li class="sprite__benefits">
              <div class="icon sprite__benefits__chat"></div>
              <div class="text">Заполняете заявку online или связываетесь с нами по телефону</div>
            </li>
            <li class="sprite__benefits">
              <div class="icon sprite__benefits__newspaper"></div>
              <div class="text">Мы подберем подходящие издания и формат размещения</div>
            </li>
            <li class="sprite__benefits">
              <div class="icon sprite__benefits__edit"></div>
              <div class="text">Составим объявление или подготовим модуль</div>
            </li>
            <li class="sprite__benefits">
              <div class="icon sprite__benefits__calendar"></div>
              <div class="text">Согласуем даты выхода публикаций</div>
            </li>
            <li class="sprite__benefits">
              <div class="icon sprite__benefits__card"></div>
              <div class="text">Оплатите заказ удобным Вам способом</div>
            </li>
            <li class="sprite__benefits">
              <div class="icon sprite__benefits__tel"></div>
              <div class="text">Публикация объявления в изданиях – звонки клиентов</div>
            </li>
          </ul>
          <div class="benefits__button-set">
            <button class="button benefits__button-how-it-works">Наши преимущества</button>
          </div>
        </div>
        <div class="benefits__features benefits__block benefits__animate-in">
          <h2 class="benefits__title">Наши преимущества</h2>
          <ul class="benefits__how-it-works__list">
            <li class="sprite__benefits">
              <div class="icon sprite__benefits__calendar"></div>
              <div class="text">От заказа до выхода в печать – всего несколько дней!</div>
            </li>
            <li class="sprite__benefits">
              <div class="icon sprite__benefits__target"></div>
              <div class="text">Точный подбор изданий для охвата нужной аудитории</div>
            </li>
            <li class="sprite__benefits">
              <div class="icon sprite__benefits__edit"></div>
              <div class="text">Бесплатная подготовка текста объявления и рекламного макета</div>
            </li>
            <li class="sprite__benefits">
              <div class="icon sprite__benefits__report"></div>
              <div class="text">Подробный отчет после выхода издания</div>
            </li>
            <li class="sprite__benefits">
              <div class="icon sprite__benefits__card"></div>
              <div class="text">Простые и удобные способы оплаты</div>
            </li>
          </ul>
          <div class="benefits__button-set">
            <button class="button benefits__button-feature">узнать как это работает</button>
          </div>
        </div>
      </div>
    </div>
    <!-- end benefits-->
    <!-- begin adds-->
    <div class="adds">
      <div class="adds__inner">
        <h2 class="adds__title">Специальные форматы объявлений </h2><span class="adds__title-text">Для наибольшего внимания.</span>
        <ul class="adds__content">
          <li class="adds__item">
            <div class="adds__image"> <img src="img/add-photo1.png" alt="add-photo1"></div>
            <div class="adds__capture">Фотообъявления</div>
          </li>
          <li class="adds__item adds__image-big">
            <div class="adds__image"> <img src="img/add-photo2.png" alt="add-photo1"></div>
            <div class="adds__capture">Крупные планы</div>
          </li>
          <li class="adds__item">
            <div class="adds__image"> <img src="img/add-photo3.png" alt="add-photo1"></div>
            <div class="adds__capture">Выделенные цветом объявления</div>
          </li>
          <li class="adds__item">
            <div class="adds__image"> <img src="img/add-photo4.png" alt="add-photo1"></div>
            <div class="adds__capture">Модульные объявления</div>
          </li>
        </ul>
      </div>
    </div>
    <!-- end adds-->
    <!-- begin footer-->
    <div class="footer">
      <div class="footer__inner">
        <ul class="footer__partners">
          <li><img src="img/part1.png" alt="part2"/></li>
          <li><img src="img/part2.png" alt="part3"/></li>
          <li><img src="img/part3.png" alt="part4"/></li>
          <li><img src="img/part4.png" alt="part5"/></li>
          <li><img src="img/part5.png" alt="part6"/></li>
          <li><img src="img/part6.png" alt="part7"/></li>
          <li><img src="img/part7.png" alt="part8"/></li>
          <li><img src="img/part8.png" alt="part9"/></li>
        </ul>
        <div class="feedback__wrapper">
          <form id="leaveApp1" class="feedback__form">
            <h2 class="feedback__title">От заказа до выхода в печать – всего несколько дней!</h2>
            <div class="form__field">
              <label for="name2">Ваше имя</label>
              <input id="name2" name="name2"/>
            </div>
            <div class="form__field">
              <label for="tel2">Ваш номер телефона</label>
              <input type="tel" id="tel2" name="tel2"/>
            </div>
            <button type="submit" class="button feedback__button">Отправить</button><span class="form__text">Мы свяжемся с Вами в течение 10 минут</span>
          </form>
          <div class="form__success">
            <h2 class="form__title--success">Спасибо! Ваша заявка принята.</h2><span class="form__text--success">Мы свяжемся с Вами в течение 10 минут.</span>
          </div>
        </div><span class="footer__tel">+7 (495) 374-79-12</span><span class="footer__copy">Copyright © 2015</span>
      </div>
    </div>
    <!-- end footer-->
    <!-- begin script-->
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/flowtype.js"></script>
    <script src="js/validate.js"></script>
    <!--[if IE 7]>
      <script src="js/ie.js"></script>
    <![endif]-->
      <script src="js/all.js"></script>


    <!-- end script-->
  </body>
</html>