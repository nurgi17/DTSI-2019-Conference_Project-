<!DOCTYPE html>
<html>
<head>
  <title>Регистрация</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/main1.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto|Roboto Condensed:700|Roboto:700' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    <link rel="stylesheet" type="text/css" href="../js/material-scrolltop.css">
</head>
<body>
  <header>
    <div class="container">
      <nav id="UP" data-aos="fade-down" data-aos-duration="2000">
        <ul class="nav">
          <li class="navList"><a class="nav_font" href="../index.php">DTSI-2019</a></li>
          <div class="nav_right">
            <li><a href="#Sections">Секции</a></li>
            <li><a href="#Rules">Правила</a></li>
            <li><a href="#Conacts">Контакты</a></li>
            <li><a href="idata1.php">Анг</a></li>
            <li><a class="registration nav_font" href="../Registration.php">Регистрация</a></li>
          <div>
        </ul>
      </nav>
    </div>
  </header>
  <button class="material-scrolltop" type="button"></button>
  <div class="main">
    <div class="container">
      <div class="short_info" data-aos="fade-left" data-aos-duration="2000">
        <div class="short">
          <p>5-ая Международная конференция</p>
          <div class="h1_text">
            <h1>Цифровые технологии в науке и индустрии – 2019</h1>
          </div>
          <div class="when2">
            <div>
              <p class="grey">где</p>
              <p>Международный университет информационных технологий</p>
            </div>

            <div>
              <p class="grey">подробности по телефону</p>
              <p>+7 701 730 5195</p>
            </div>
          </div>
          <div class="when1">
            <div>
              <p class="grey">когда</p>
              <p>30 - 31 мая 2019 года </p>
            </div>

            <div>
              <p class="grey">взнос</p>
              <p>7 000 тг</p>
            </div>
          </div>
        </div>
      </div>
<?php
include "login.php";
if (isset($_POST['send'])){
  if (isset($_POST['last_name']) && isset($_POST['first_name']) && isset($_POST['e_mail']) && isset($_POST['section']))
    {
    $last_name = $_POST['last_name'];
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['second_name'];
    $e_mail = $_POST['e_mail'];
    $phone_number = $_POST['phone_number'];
    $job_place = $_POST['work'];
    $job_position = $_POST['position'];
    $country = $_POST['country'];
    $id_section = $_POST['section'];
  
    try 
    {
        $dbh = new PDO("mysql:host=$hn;dbname=$db", $un, $pw);
        $dbh->exec("set names utf8");
        $query = "INSERT INTO participants (last_name, first_name, middle_name, e_mail, phone_number, job_place, job_position, country, id_section) VALUES  (:last_name,:first_name,:middle_name,:e_mail, :phone_number,:job_place,:job_position,:country,:id_section)";
        $stmn = $dbh->prepare($query);
        $stmn->bindParam(':last_name',$last_name,PDO::PARAM_STR);
        $stmn->bindParam(':first_name',$first_name,PDO::PARAM_STR);
        $stmn->bindParam(':middle_name',$middle_name,PDO::PARAM_STR);
        $stmn->bindParam(':e_mail',$e_mail,PDO::PARAM_STR);
        $stmn->bindParam(':phone_number',$phone_number,PDO::PARAM_STR);
        $stmn->bindParam(':job_place',$job_place,PDO::PARAM_STR);
        $stmn->bindParam(':job_position',$job_position,PDO::PARAM_STR);
        $stmn->bindParam(':country',$country,PDO::PARAM_STR);
        $stmn->bindParam(':id_section',$id_section,PDO::PARAM_INT);
        if ($stmn->execute()==true)
         {
          echo "Вы успешно зарегистрировались";

?>
<br>
          <label>Отправляйте статьи на почту соответствующей секции:</label><br><br>
          <table class="email_table" style="max-width: 10px;">
              <tr>
                <td>Интеллектуальные системы  </td> 
                <td>isystems@gmail.com</td> 
              </tr>
              <tr>
              <td>Инфокоммуникационные сети и кибербезопасность</td>
              <td>netandcs@gmail.com</td> 
            </tr>
            <tr>
              <td>Цифровыее технологии в экономике и менеджменте</td>
              <td>dtem2019@gmail.com</td> 
            </tr>
            <tr>
              <td>Разработка программного обеспечения и инженерия знаний</td>
              <td>osdevelop2019@gmail.com</td> 
            </tr>
            <tr>
              <td>Мир языка: теория, практика, инновации</td>
              <td>langworld2019@gmail.com</td> 
            </tr>
            <tr>
              <td>Цифровые технологии в масс-медиа  </td>
              <td>digitalmm2019@gmail.com</td> 
            </tr>
            <tr>
              <td>Химико-технологические науки и экология. Нефтегазовая инженерия</td>
              <td>gasiol2019@gmail.com</td> 
            </tr>
            <tr>
              <td>Наука о данных и машинное обучение </td>
              <td> batyahan@gmail.com</td> 
            </tr>
          </table><br>
          <?php
         }
         else
         {
          echo "ОШИБКА Регистрация не успешно...";
         }
         $dbh = null;
     } catch (PDOException $e) 
     {
        print "Ошибка!: " . $e->getMessage() . "<br/>";
        die();
     }
  }
  else 
  {
    echo "Пожалуйста заполните все поля...";
  }
}
else 
{
  echo "Пожалуйста отправьте данные...";
}


?>

    </div>
  </div>

  <footer data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="2000">
    <div class="container">
      <div class="foo_border">
        <div class="contact" id="Conacts">
          <h4>Контакты</h4>
          <p>Евгения Дайнеко
          yevgeniyadaineko@gmail.com
            +7 701 730 5195</p>
            <img src="../SVG/logo.svg" width="113px" height="39px">
        </div>
        <div class="attention">
          <h4>ВНИМАНИЕ!</h4>
          <p>Статьи публикуются в редакции автора и должны быть оформлены с соблюдением требований прилагаемого шаблона. </p>
          <p>Оргкомитет оставляет за собой право отклонить материалы, оформленные не по шаблону и\или содержащие общеизвестную информацию.</p>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="../js/smooth_scroll.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script src="../js/material-scrolltop.js"></script>
    <script>
        $(document).ready(function() {
            $('body').materialScrollTop({
                revealElement: 'header',
                revealPosition: 'bottom',
                onScrollEnd: function() {
                    console.log('Scrolling End');
                }
            });
        });
    </script>
  <script>
    AOS.init();
  </script>
</body>
</html>