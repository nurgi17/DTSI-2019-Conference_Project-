<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
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
          <li class="navList"><a class="nav_font" href="index.php">DTSI-2019</a></li>
          <div class="nav_right">
            <li><a href="#Sections">Sections</a></li>
            <li><a href="#Rules">Rules</a></li>
            <li><a href="#Conacts">Contacts</a></li>
            <li><a href="idata.php">Rus</a></li>
            <li><a class="registration nav_font" href="../Registration1.php">Registration</a></li>
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
          <p>5th International Conference</p>
          <div class="h1_text">
            <h1>Digital technologies in science and industry - 2019</h1>
          </div>
          <div class="when2">
            <div>
              <p class="grey">где</p>
              <p>International Information Technology University</p>
            </div>

            <div>
              <p class="grey">details by phone</p>
              <p>+7 701 730 5195</p>
            </div>
          </div>
          <div class="when1">
            <div>
              <p class="grey">when</p>
              <p>May 30-31 2019</p>
            </div>

            <div>
              <p class="grey">registration fee</p>
              <p>7 000 tg</p>
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
          echo "<hr>Вы успешно зарегистрировались / You have successfully registered";

?>
          <label> Send papers according to the list to the appropriate mail of the section:</label><br><br>
          <table class="email_table" style="max-width: 10px;">
              <tr>
                <td>Smart systems</td> 
                <td>isystems@gmail.com</td> 
              </tr>
              <tr>
              <td>Infocommunication networks and cybersecurity</td>
              <td>netandcs@gmail.com</td> 
            </tr>
            <tr>
              <td>Digital technologies in economics and management </td>
              <td>dtem2019@gmail.com</td> 
            </tr>
            <tr>
              <td>Software engineering and knowledge engineering</td>
              <td>osdevelop2019@gmail.com</td> 
            </tr>
            <tr>
              <td>Language learning and teaching: theory, practice and innovations</td>
              <td>langworld2019@gmail.com</td> 
            </tr>
            <tr>
              <td>Digital Media Technologies</td>
              <td>digitalmm2019@gmail.com</td> 
            </tr>
            <tr>
              <td>Chemical technology and ecology. Oil and gas engineering</td>
              <td>gasiol2019@gmail.com</td> 
            </tr>
            <tr>
              <td>Data science and machine learning </td>
              <td> batyahan@gmail.com</td> 
            </tr>
          </table><br>
          <?php



         }
         else
         {
          echo "ERROR Registration failed ...";
         }
         $dbh = null;
     } catch (PDOException $e) 
     {
        print "Error!: " . $e->getMessage() . "<br/>";
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
  echo "Please send data...";
}


?>

    </div>
  </div>

  <footer data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="2000">
    <div class="container">
      <div class="contact" id="Conacts">
        <h4>Contacts</h4>
        <p>Yevgeniya Daineko
        yevgeniyadaineko@gmail.com
          +7 701 730 5195</p>
          <img src="../SVG/logo.svg" width="113px" height="39px">
      </div>
      <div class="attention">
        <h4>ATTENTION!</h4>
        <p>Articles are published in the editorial office of the author and must be prepared in compliance with the requirements of the attached template.</p>
        <p>The organizing committee reserves the right to reject articles not complying with the formatting requirements and/or containing well-known information.</p>
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