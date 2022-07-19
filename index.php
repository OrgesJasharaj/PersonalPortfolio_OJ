<?php 
include_once 'connection.php';
$query = "SELECT name, surname, email, address, phone FROM `admin` WHERE 1;";
$result = mysqli_query($conn, $query);
$resultCheck = mysqli_num_rows($result);

$query1 = "SELECT pname, pdescription, pdescription1, pimage FROM `projects` WHERE pid = 1;";
$result1 = mysqli_query($conn, $query1);
$resultCheck1 = mysqli_num_rows($result1);

$query2 = "SELECT pname, pdescription, pdescription1, pimage FROM `projects` WHERE pid = 2;";
$result2 = mysqli_query($conn, $query2);
$resultCheck2 = mysqli_num_rows($result2);

$query3 = "SELECT pname, pdescription, pdescription1, pimage FROM `projects` WHERE pid = 3;";
$result3 = mysqli_query($conn, $query3);
$resultCheck3 = mysqli_num_rows($result3);

$query4 = "SELECT pname, pdescription, pdescription1, pimage FROM `projects` WHERE pid = 4;";
$result4 = mysqli_query($conn, $query4);
$resultCheck4 = mysqli_num_rows($result4);

$query5 = "SELECT pname, pdescription, pdescription1, pimage FROM `projects` WHERE pid = 5;";
$result5 = mysqli_query($conn, $query5);
$resultCheck5 = mysqli_num_rows($result5);

$query6 = "SELECT pname, pdescription, pdescription1, pimage FROM `projects` WHERE pid = 6;";
$result6 = mysqli_query($conn, $query6);
$resultCheck6 = mysqli_num_rows($result6);
?>
 
<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
  </head>
  <body>

      <div class="scrollToTop-btn flex-center">
          <i class="fas fa-arrow-up"></i>
      </div> 


      <div class="theme-btn flex-center">
        <i class="fas fa-moon"></i>
        <i class="fas fa-sun"></i>
      </div>





      <header>
        <div class="nav-bar">
          <a href="#" class="logo">Orges</a>
          <div class="navigation">
            <div class="nav-items">
              <div class="nav-close-btn"></div>
              <a class="active" href="#home">Home</a>
              <a href="#about">About</a>
              <a href="#skills">Skills</a>
              <a href="#projects">Projects</a>
              <a href="#contact">Contact</a>
            </div>
          </div>
          <div class="nav-menu-btn"></div>
        </div>
      </header>

      <section class="home flex-center" id="home">
        <div class="home-container">
          <div class="media-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
          </div>
          <div class="info">
            <h2>Hi, I am Orges Jasharaj</h2>
            <h3>Full Stack Developer</h3>
            <p>I can work as front-end developer and back-end developer</p>
          <a href="" class="btn">Contact Me <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        <div class="home-img">
          <img src="images/home.jpg" alt="">
        </div>
      </div>
      <a href="#about" class="scroll-down">Scroll Down <i class="fas fa-arrow-down"></i></a>
      </section>



      <section class="about section" id="about">
        <div class="container flex-center">
          <h1 class="section-title-01">About Me</h1>
          <h2 class="section-title-02">About Me</h2>
          <div class="content flex-center">
            <div class="about-img">
              <img src="images/home.jpg" alt="">
            </div>
            <div class="about-info">
              <div class="description">
                <h3>I'm Orges</h3>
                <h4>A <span>full stack developer</span> from <span>Kosova<span></h4>
                <p>I design website and i make the backend of web.Check my skills to see with what i work!</p>
              </div>
              <ul class="professional-list">
                <li class="list-item">
                  <h3>+2</h3>
                  <span>Years of<br>Experience</span>
                </li>
                <li class="list-item">
                  <h3>14</h3>
                  <span>Happy<br>Customers</span>
                </li>
                <li class="list-item">
                  <h3>18</h3>
                  <span>Success<br>Projects</span>
                </li>
              </ul>
              
              
              <a href="index.php?file=cv.pdf" class="btn">Download CV <i class="fas fa-download"></i></a>
              <?php 
              if(!empty($_GET['file'])){
                $filename = basename($_GET['file']);
                  $filepath = 'destination/'.$filename;
                  if(!empty($filename) && file_exists($filepath)){
                    //Defining headers
                    header("Cache-Control: public");
                    header("Content-Description: File Transfer");
                    header("Content-Disposition: attachment; filename=$filename");
                    header("Content-Type: application/octet-stream");
                    header("Content-Transfer-Encoding: binary");

                    readfile($filepath);
                    exit;
                  } else {
                    echo "String";
                  }

             }
              ?>
            </div>
          </div>
        </div>
      </section>

      <section class="skills section" id="skills">
        <div class="container flex-center">
          <h1 class="section-title-01">Skills</h1>
          <h1 class="section-title-02">Skills</h1>
          <div class="content">
            <div class="skills-description">
              <h3>Education & Skills</h3>
              <p>I am actually in high school now but i am going in the digital school in Prizren too.I spent my time and in look toturial for programming</p>
            </div>
            <div class="skills-info education-all">
              <div class="education">
                <h4><label>Education</label></h4>
                <ul class="edu-list">
                  <li class="item">
                    <span class="year">2010-2019</span>
                    <p><span>Elementary School</span>- Shaban Mazreku</p>
                  </li>
                  <li class="item">
                    <span class="year">2020-2022...</span>
                    <p><span>High School</span>- Jeta e Re</p>
                  </li>
                  <li class="item">
                    <span class="year">2020-2022</span>
                    <p><span>Programming School</span>- Shkolla Digjitale</p>
                  </li>
                </ul>
              </div>
              <div class="education">
                <h4><label>Skills</label></h4>
                <ul class="bars">
                  <li class="bar">
                    <div class="info">
                      <span>HTML</span>
                      <span>95%</span>
                    </div>
                    <div class="line html"></div>
                  </li>
                  <li class="bar">
                    <div class="info">
                      <span>CSS</span>
                      <span>90%</span>
                    </div>
                    <div class="line css"></div>
                  </li><li class="bar">
                    <div class="info">
                      <span>Javascript</span>
                      <span>80%</span>
                    </div>
                    <div class="line javascript"></div>
                  </li><li class="bar">
                    <div class="info">
                      <span>Jquery</span>
                      <span>85%</span>
                    </div>
                    <div class="line jquery"></div>
                  </li>
                  <li class="bar">
                    <div class="info">
                      <span>Bootstrap</span>
                      <span>90%</span>
                    </div>
                    <div class="line bootstrap"></div>
                  </li>
                  <li class="bar">
                    <div class="info">
                      <span>Php & Mysql</span>
                      <span>80%</span>
                    </div>
                    <div class="line php"></div>
                  </li>
                </ul>
              </div>
              <div class="education">
                <h4><label>Awards</label></h4>
                <ul class="edu-list">
                  <li class="item">
                    <span class="year">2020</span>
                    <p><span>The best IT student in the school</span> - High school "Jeta e Re"</p>
                  </li>
                  <li class="item">
                    <span class="year">2021</span>
                    <p><span>Frontend Developer</span> - Shkolla Digjitale Prizren</p>
                  </li>
                  <li class="item">
                    <span class="year">2022</span>
                    <p><span>Backend Developer</span> - Shkolla Digjitale Prizren...</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

    
     
      <section class="projects section" id="projects">
        <div class="container flex-center">
          <h1 class="section-title-01">Projects</h1>
          <h2 class="section-title-02">Projects</h2>
          <div class="content">
            <div class="projects-list">
              <div class="img-card-container">
              <?php
                  if($resultCheck1 > 0){
                  while($rows1=mysqli_fetch_assoc($result1))
                  {
                  ?>
                <div class="img-card">
                  <div class="overlay"></div>
                  <div class="info">
                    <h3><?php echo $rows1['pname'];?></h3>
                    <span><?php echo $rows1['pdescription'];?></span>
                  </div>
                  <img src="<?php echo $rows1['pimage'];?>" alt="">
                </div>
                <div class="project-model flex-center">
                  <div class="projects-model-body">
                    <i class="fas fa-times projects-close-btn"></i>
                    <h3><?php echo $rows1['pname'];?></h3>
                    <img src="<?php echo $rows1['pimage'];?>" alt="">
                    <p><?php echo $rows1['pdescription1']; ?></p>
                  </div>
                </div>
                <?php
                  }}
                  ?>
              </div>
                      
              <div class="img-card-container">
              <?php
                  if($resultCheck2 > 0){
                  while($rows2=mysqli_fetch_assoc($result2))
                  {
                  ?>
                <div class="img-card">
                  <div class="overlay"></div>
                  <div class="info">
                    <h3><?php echo $rows2['pname'];?></h3>
                    <span><?php echo $rows2['pdescription'];?></span>
                  </div>
                  <img src="<?php echo $rows2['pimage'];?>" alt="">
                </div>
                <div class="project-model flex-center">
                  <div class="projects-model-body">
                    <i class="fas fa-times projects-close-btn"></i>
                    <h3><?php echo $rows2['pname'];?></h3>
                    <img src="<?php echo $rows2['pimage'];?>" alt="">
                    <p><?php echo $rows2['pdescription1']; ?></p>
                  </div>
                </div>
                <?php
                  }}
                  ?>
              </div>

              <div class="img-card-container">
              <?php
                  if($resultCheck3 > 0){
                  while($rows3=mysqli_fetch_assoc($result3))
                  {
                  ?>
                <div class="img-card">
                  <div class="overlay"></div>
                  <div class="info">
                    <h3><?php echo $rows3['pname'];?></h3>
                    <span><?php echo $rows3['pdescription'];?></span>
                  </div>
                  <img src="<?php echo $rows3['pimage'];?>" alt="">
                </div>
                <div class="project-model flex-center">
                  <div class="projects-model-body">
                    <i class="fas fa-times projects-close-btn"></i>
                    <h3><?php echo $rows3['pname'];?></h3>
                    <img src="<?php echo $rows3['pimage'];?>" alt="">
                    <p><?php echo $rows3['pdescription1']; ?></p>
                  </div>
                </div>
                <?php
                  }}
                  ?>
              </div>
              
              <div class="img-card-container">
              <?php
                  if($resultCheck4 > 0){
                  while($rows4=mysqli_fetch_assoc($result4))
                  {
                  ?>
                <div class="img-card">
                  <div class="overlay"></div>
                  <div class="info">
                    <h3><?php echo $rows4['pname'];?></h3>
                    <span><?php echo $rows4['pdescription'];?></span>
                  </div>
                  <img src="<?php echo $rows4['pimage'];?>" alt="">
                </div>
                <div class="project-model flex-center">
                  <div class="projects-model-body">
                    <i class="fas fa-times projects-close-btn"></i>
                    <h3><?php echo $rows4['pname'];?></h3>
                    <img src="<?php echo $rows4['pimage'];?>" alt="">
                    <p><?php echo $rows4['pdescription1']; ?></p>
                  </div>
                </div>
                <?php
                  }}
                  ?>
              </div>

              <div class="img-card-container">
              <?php
                  if($resultCheck5 > 0){
                  while($rows5=mysqli_fetch_assoc($result5))
                  {
                  ?>
                <div class="img-card">
                  <div class="overlay"></div>
                  <div class="info">
                    <h3><?php echo $rows5['pname'];?></h3>
                    <span><?php echo $rows5['pdescription'];?></span>
                  </div>
                  <img src="<?php echo $rows5['pimage'];?>" alt="">
                </div>
                <div class="project-model flex-center">
                  <div class="projects-model-body">
                    <i class="fas fa-times projects-close-btn"></i>
                    <h3><?php echo $rows5['pname'];?></h3>
                    <img src="<?php echo $rows5['pimage'];?>" alt="">
                    <p><?php echo $rows5['pdescription1']; ?></p>
                  </div>
                </div>
                <?php
                  }}
                  ?>
              </div>

              <div class="img-card-container">
              <?php
                  if($resultCheck6 > 0){
                  while($rows6=mysqli_fetch_assoc($result6))
                  {
                  ?>
                <div class="img-card">
                  <div class="overlay"></div>
                  <div class="info">
                    <h3><?php echo $rows6['pname'];?></h3>
                    <span><?php echo $rows6['pdescription'];?></span>
                  </div>
                  <img src="<?php echo $rows6['pimage'];?>" alt="">
                </div>
                <div class="project-model flex-center">
                  <div class="projects-model-body">
                    <i class="fas fa-times projects-close-btn"></i>
                    <h3><?php echo $rows6['pname'];?></h3>
                    <img src="<?php echo $rows6['pimage'];?>" alt="">
                    <p><?php echo $rows6['pdescription1']; ?></p>
                  </div>
                </div>
                <?php
                  }}
                  ?>
              </div>
            </div>
          </div>
        </div>

        <div class="get-in-touch sub-section">
          <div class="container">
            <div class="content flex-center">
              <div class="contact-card flex-center">
              <div class="title">
                  <h4>Let's Talk</h4>
                  <h3>About Your</h3>
                  <h2>Next Project</h2>
                </div>
                <div class="contact-btn">
                  <a href="" class="btn">Get In Touch <i class="fas fa-paper-plane"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      

      <seciton class="contact section" id="contact">
        <div class="container flex-center">
          <h1 class="section-title-01">Contact Me</h1>
          <h2 class="section-title-02">Contact Me</h2>
          <div class="content">
            <div class="contact-left">
              <h2>Let's discuss your project</h2>
              <ul class="contact-list">
              <?php
                  if($resultCheck > 0){
                  while($rows=mysqli_fetch_assoc($result))
                  {
                  ?>
                <li>
                  <h3 class="item-title"><i class="fas fa-phone"> Phone</i></h3>
                  <span>
                    <?php
                      echo $rows['phone'];
                    ?>
                  </span>
                </li>
                <li>
                  <h3 class="item-title"><i class="fas fa-envelope"> Email </i></h3>
                    <span><a href="mailto:jasharajorges@gmail.com">
                    <?php
                     echo $rows['email'];
                    ?>
                    </a></span>
                </li>
                <li>
                  <h3 class="item-title"><i class="fas fa-map-marker-alt"> Address</i></h3>
                  <span>
                    <?php
                     echo $rows['address'];
                    ?>
                  </span>
                </li>
                <?php
                  }}
                  ?>
              </ul>
            </div>
            <div class="contact-right">
              <p>I'm always open to discussing for <br><span>any website or work.</span></p>
              <?php include 'sendEmail.php'; ?>
              <form class="contact-form" id="myForm" method="post">
                <h4 class="sent-notification"></h4>
                <div class="first-row">
                  <input name="name" id="name" type="text" placeholder="Name">
                </div>
                <div class="second-row">
                  <input name="email" id="email" type="email" placeholder="Email">
                  <input name="subject"  id="subject" type="text" placeholder="Subject">
                </div>
                <div class="third-row">
                  <textarea name="message" id="body" rows="7" placeholder="Message"></textarea>
                </div>
                <button class="btn" type="submit" value="Send an Email" name="submit">Send Message <i class="fas fa-paper-plane"></i></button>
              </form>
            </div>

          </div>
        </div>
      </section>

      <footer>
        <div class="footer-container">
          <div class="about group">
            <h2>Orges</h2>
            <p>Full Stack Developer</p>
            <a href="#about">About Me</a>
          </div>
          <div class="hr"></div>
            <div class="info group">
              <h3>More</h3>
              <ul>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
            </div>
            <div class="hr"></div>
            <div class="follow group">
            <h3>Follow</h3>
            <ul>
              <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
              <li><a href=""><i class="fab fa-instagram"></i></a></li>
              <li><a href=""><i class="fab fa-twitter"></i></a></li>
            </ul>
            </div>
          </div>
          <div class="footer-copyright group">
            <p>2022 by Orges Jasharaj.</p>
          </div>
        
      </footer>








    <script src="js/main.js"></script>
    </body>
  </html>
  

