<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CSE 341 | Ellen Carlson</title>
  <link rel="stylesheet" href="sass/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&family=Merriweather&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/0a5e9baade.js" crossorigin="anonymous"></script>
</head>

<body>
  <nav>
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/php/navigation.php'; ?>
  </nav>

  <div class="solid-background"></div>

  <main>
    <div class="about-container main-card">
      <img src="images/Howarth6BSmall.jpg" alt="Portrait of Ellen">
      <div class="text-holder">
        <p>Hello, I'm</p>
        <h1 id="demo">Ellen Carlson</h1>
        <h3>Applied Technology Student</h3>
        <p>I'm a Seattle-based Applied Technology student studying online at BYU-Idaho. I'm focusing my studies on web development and have earned a certificate in web frontend development. I am currently finishing up certificates for web backend and graphic design.</p>
        <p>I have experience using</p>
        <div class="code-icons">
          <p><i class="fab fa-html5"></i>HTML5</p>
          <p><i class="fab fa-css3-alt"></i>CSS</p>
          <p><i class="fab fa-php"></i>PHP</p>
          <p><i class="fab fa-js-square"></i>JavaScript</p>
          <p><i class="fab fa-java"></i>Java</p>
          <p><i class="fas fa-code"></i>C++ C#</p>
        </div>
        <div class="social">
          <p>Let's connect:</p>
          <a href="https://www.linkedin.com/in/ellenhowarth/" target="_blank"><i class="fab fa-linkedin"></i></a>
          <a href="https://byui-cse341-21w-02.slack.com" target="_blank"><i class="fab fa-slack"></i></a>
          <a href="https://github.com/ellenhc/cs313-php-ECarlson" target="_blank"><i class="fab fa-github-square"></i></a>
        </div>
      </div>
</div>
  </main>
  <footer>
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/php/footer.php'; ?>
  </footer>
  <script src="js/dynamic.js"></script>
</body>

</html>