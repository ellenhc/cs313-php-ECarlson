<?php?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CSE 341 | Ellen Carlson</title>
  <link rel="stylesheet" href="sass/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>

<nav>
  <?php require $_SERVER['DOCUMENT_ROOT'] . '/php/navigation.php'; ?>
</nav>

<body>
  <div class="solid-background"></div>
  <main>
    <h1>Ellen Carlson's CSE 341 Assignments</h1>
    <div class="assignment-container main-card">
      <div class="assignment-card">
        <h5>Week 01</h5>
        <p>Your first assignment will be to create an HTML file and deploy it to an application in the cloud. First, we need to create cloud platform accounts and set up our development environments.</p>
        <a href="week01/hello.html">Prove Assignment</a>
      </div>
      <div class="assignment-card">
        <h5>Week 02</h5>
        <p>The purpose of this assignment is to review a minimal level of client-side programming and provide a homepage from which you can link to future assignments.</p>
        <a href="week02/teamactivity.html">Team Activity</a>
        <a href="index.php">Prove Assignment</a>
      </div>
      <div class="assignment-card">
        <h5>Week 03</h5>
        <p>Create a simple PHP application to simulate a shopping cart.</p>
        <a href="week03/teamactivity.php">Team Activity</a>
        <a href="week03/view/browse.php">Prove Assignment</a>
      </div>
      <div class="assignment-card">
        <h5>Week 04</h5>
        <p>Created a SQL file for all the steps necessary to create the tables needed for my project.</p>
        <a href="#">Team Activity</a>
        <a href="#">Prove Assignment</a>
      </div>
      <div class="assignment-card">
        <h5>Week 05</h5>
        <p>Complete read-only access to your database from your web application. There should be some test data in the database, and PHP pages in place to query for that data and render it to the user.</p>
        <a href="#">Team Activity</a>
        <a href="https://cryptic-woodland-83416.herokuapp.com/">Prove Assignment</a>
      </div>
      <div class="assignment-card">
        <h5>Week 06</h5>
        <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#">Team Activity</a>
        <a href="#">Prove Assignment</a>
      </div>
    </div>
  </main>
  <footer>
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/php/footer.php'; ?>
  </footer>
</body>

</html>