<!DOCTYPE html>
<html>
<head>
<title>home</title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet"> 
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nosifer&display=swap" rel="stylesheet"> 
<style>
body{
width:100%;
height:100%;
background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url('background.jpg');
background-size:cover;
}
.row{
display:flex;
height:88%;
align-items:center;
}
.col{
padding:100px;
}
h1{
font-family: 'Nosifer', cursive;
color:#fff;
font-size:80px;
}
p{
font-family: 'Pattaya', sans-serif;
color:#fff;
font-size:20px;
line-height:25px;
}
.card{
width:200px;
height:230px;
display:inline-block;
border-radius:10px;
padding:15px 25px;
box-sizing:border-box;
cursor:pointer;
margin:10px 15px;
background-position:center;
background-size:cover;
}
.card1
{
background-image:url(pic1.jpg);
}
.card2
{
background-image:url(pic2.jpg);
}
.card3
{
background-image:url(pic3.jpg);
}
.card4
{
background-image:url(pic4.jpg);
}
h5
{
color:#1b1a17;
}
</style>
</head>
    <body>
    <?php include "navbar.php";?>
    <div class="row">
      <div class="col">
        <h1>BLOODBANK</h1>
        <p>You don’t have to be a doctor to save a life: Just donate blood</p>
        <p>A drop for you, an ocean for someone else</p> 
        <p>Join hands with us,lets change the world</p>
       </div>
          <div class="col">
            <div class="card card1">
            </div>
            <div class="card card2">
            </div>
            <div class="card card3">
            </div>
            <div class="card card4">
            </div>
          </div>
       </div>
    </body>
</html>
