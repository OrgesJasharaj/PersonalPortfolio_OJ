<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="script.js"></script>
  
</head>

<body>

    <header>
        <div class="nav-bar">
            <a href="" class="logo">Orges Jasharaj</a>
            <div class="navigation">
                <div class="nav-items">
                    <i class="uil uil-times nav-close-btn"></i>
                    <a href="#"><i class="uil uil-home"></i> Home</a>
                    <a href="#"><i class="uil uil-user-circle"></i>About</a>
                    <a href="#"><i class="uil uil-brackets-curly"></i>Skills</a>
                    <a href="#"><i class="uil uil-database"></i>Services</a>
                    <a href="#"><i class="uil uil-envelope"></i>Contact</a>
                </div>
            </div>
            
            <i class="uil uil-apps nav-menu-btn"></i>
        </div>
        <div class="scroll-indicator-container">
            <div class="scroll-indicator-bar"></div>
        </div>
    </header>

 


    <script>
    //Javacript for the scroll indicator bar
    window.addEventListener("scroll", () => {
      const indicatorBar = document.querySelector(".scroll-indicator-bar");

      const pageScroll = document.body.scrollTop || document.documentElement.scrollTop;
      const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
      const scrollValue = (pageScroll / height) * 100;

      indicatorBar.style.width = scrollValue + "%";
    });

    //Responsive navigation menu toggle
    const menuBtn = document.querySelector(".nav-menu-btn");
    const closeBtn = document.querySelector(".nav-close-btn");
    const navigation = document.querySelector(".navigation");

    menuBtn.addEventListener("click", () => {
      navigation.classList.add("active");
    });

    closeBtn.addEventListener("click", () => {
      navigation.classList.remove("active");
    });
  </script>
 
  




</body>

</html>