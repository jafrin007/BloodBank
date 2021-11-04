<!DOCTYPE html>
<html>
<head>
<title>contact</title>
<style>
 body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 5px;
  width:50%;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #393e46;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
    <body>
    <?php include "navbar.php";?>
     <div class="about-section">
  <h1>About Us</h1>
  <p>Why wait to save a life?</p>
</div>

<h1 style="text-align:center"><br><br>Our Team<br><br></h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="jafrin.jpg" alt="Jafrin" style="width:100%">
      <div class="container">
        <h2>Mohammed Jafrin</h2>
        <p class="title">CEO & Founder</p>
        <p>8592919887</p>
        <p>jafrinappu@example.com</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="shrenu.jpg" alt="Shrenu" style="width:100%">
      <div class="container">
        <h2>Shrenu Pariekh</h2>
        <p class="title">Director</p>
        <p>7854695921</p>
        <p>shrenu123@gmail.com</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="tony.jpg" alt="tony" style="width:100%">
      <div class="container">
        <h2>Tony</h2>
        <p class="title">Designer</p>
        <p>4569871256</p>
        <p>tonyjohn@example.com</p>
      </div>
    </div>
  </div>
</div>
    </body>
</html>
