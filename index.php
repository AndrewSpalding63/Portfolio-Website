<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet" />
  <link rel="stylesheet" href="css/main.css" />
 
     
  <title>Andrew Spalding | JR Developer</title>
</head>

<body>
  <!-- Header -->
  <header id="header-home">
    <div class="container">
      <nav id="main-nav">
        <a href="index.php"> <img src="img/logo-02.png" alt="My Portfolio" id="logo" /></a>
        <ul>
          <li><a href="index.php" class="current">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="work.php">Work</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>
      <div class="header-content">
        <!-- <img src="img/logo.png" id="logo"> -->
        <h1>
          I Am Andrew A
          <span class="txt-type" data-wait="3000" data-words='["Junior Developer", "PHP/Lareval"]'></span>
        </h1>
        <p class="lead">
          I specialize in Front-end Development, JavaScript and React.
        </p>
        <a href="work.php" class="btn-light">View My Work</a>
      </div>
    </div>
  </header>

  <!-- Section A: Specialize -->
  <section id="home-a" class="text-center py-2">
    <div class="container">
      <h2 class="section-title">Recent Projects</h2>
      <div class="bottom-line"></div>
      <p class="lead">
        Web Development: &nbsp; As a junior programmer, I use continuous iteration to
        produce results.

      </p>
      <div class="specials">
        <div>
          <i class="fab fa-react fa-4x" style="color:#ffbc00"></i>
          <h3>React</h3>
          <p>
            <center>React SPA</center>
            Built a SPA that interacts with the Covid-19 API.
          </p>
        </div>
        <div>
          <i class="fab fa-laravel fa-4x" style="color:#ffbc00"></i>
          <h3>Laravel</h3>
          <p>
            Restaurant booking app data pulled from booking form and populated in MySql
            database.
          </p>
        </div>
        <div>
          <i class="fab fa-js fa-4x" style="color: #ffbc00;"></i>
          <h3>JavaScript</h3>
          <p>
            <center>Music Player</center>
            Animation,&nbsp; Audio/API
          </p>
        </div>
        <div>
          <i class="fab fa-php fa-4x" style="color: #ffbc00; "></i>
          <h3>PHP</h3>
          <p>
            Vanilla PHP to Create
            a Content Management System(CMS).
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section B: Stats -->
  <section id="home-b" class="text-center py-2">
    <div class="stats">
      <div>
        <ul>
          <li><i class="fas fa-users fa-3x"></i></li>
          <li class="stats-title">Latest Project</li>
          <li class="stats-number">Music App</li>
        </ul>
      </div>
      <div>
        <ul>
          <li><i class="fas fa-award fa-3x"></i></li>
          <li class="stats-title">Qualifications</li>
          <li class="stats-number">Computer Science</li>
        </ul>
      </div>
      <div>
        <ul>
          <li><i class="fas fa-hourglass-start fa-3x"></i></li>
          <li class="stats-title">Hours Worked</li>
          <li class="stats-number">1145</li>
        </ul>
      </div>
      <div>
        <ul>
          <li><i class="fas fa-code-branch fa-3x"></i></li>
          <li class="stats-title">Projects Completed</li>
          <li class="stats-number">19</li>
        </ul>
      </div>
    </div>
  </section>

  

  <!-- Section C: Process -->
  <section id="home-c" class="text-center py-2">
    <div class="container">
      <h2 class="section-title">
        Technology
      </h2>
      <div class="bottom-line"></div>
      <p class="lead">
        All of my web development projects are based on the following
        programming languages and frameworks.
      </p>
      <div class="process">
        <div>
          <i class="fab fa-php fa-4x process-icon my-2">
            <div class="process-step">1</div>
          </i>
          
          <h3>PHP</h3>
          <p>
            PHP is a server side scripting language. 
            that is used to develop Static websites or Dynamic websites
            or Web applications. 
          </p>
        </div>
        <div>
            <i class="fab fa-js-square fa-4x process-icon my-2">
            <div class="process-step">2</div>
          </i>
          <h3>JavaScript</h3>
          <p>
            JavaScript is a client-side programming language which 
            helps web developer to do Web Application Development 
            and make dynamic web pages.
          </p>
        </div>
        <div>                        
          <i class="fab fa-react fa-4x process-icon my-2">
            <div class="process-step">3</div>
          </i>
          <h3>React</h3>
          <p>
            React is a JavaScript library that specializes in helping
            developers build user interfaces
          </p>
        </div>
        <div>
          
          <i class="fab fa-laravel fa-4x process-icon my-2">
            <div class="process-step">4</div>
          </i>
          <h3>Laravel</h3>
          <p>
            Laravel is a web framework of PHP that is a server-side
            programming language. This means that the Laravel 
            framework is used for the backend side of web development. 
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer id="main-footer">
    <div class="footer-content container">
      <p>Copyright &copy; 2020. All Rights Reserved</p>
      <div class="social">
          
       <!--<i class="fab fa-github"></i>-->
       <a href="https://github.com/AndrewSpalding63" class="text-white" target="_blank"><i class="fab fa-github"></i></a>
        <a href="https://www.linkedin.com/in/andrew-spalding-53518137/" class="text-white" target="_blank"><i class="fab fa-linkedin"></i>
      </div>
    </div>
  </footer>

  <script src="js/typewriter.js"></script>
</body>

</html>