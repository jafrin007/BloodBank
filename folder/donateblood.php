<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Registration Form </title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
     @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.container{
  max-width: 700px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}
 form .blood-details .blood-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three,
 #dot-4:checked ~ .category label .four,
 #dot-5:checked ~ .category label .five,
 #dot-6:checked ~ .category label .six,
 #dot-7:checked ~ .category label .seven,
 #dot-8:checked ~ .category label .eight{
   background: #9b59b6;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #71b7e6, #9b59b6);
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}
     </style>
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form class="sign-in-htm" action="donateblood1.php" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="username" placeholder="Enter your fullname" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="phone" placeholder="Enter your phone number" required>
          </div>
          <div class="input-box">
            <span class="details">ID</span>
            <input type="text" name="id" placeholder="Enter your id" required>
          </div>
          <div class="input-box">
            <span class="details">District</span>
            <input type="text" name="district" placeholder="Enter your district" required>
          </div>
          <div class="input-box">
            <span class="details">Locality</span>
            <input type="text" name="locality" placeholder="Enter your locality" required>
          </div>
        </div>
        <div class="blood-details">
          <input type="radio" name="blood" value="A+" id="dot-1">
          <input type="radio" name="blood" value="B+" id="dot-2">
          <input type="radio" name="blood" value="AB+" id="dot-3">
          <input type="radio" name="blood" value="O+" id="dot-4">
          <input type="radio" name="blood" value="A-" id="dot-5">
          <input type="radio" name="blood" value="B-" id="dot-6">
          <input type="radio" name="blood" value="AB-" id="dot-7">
          <input type="radio" name="blood" value="O-" id="dot-8">
          <span class="blood-title">Blood Details</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="blood">A+</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="blood">B+</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="blood">AB+</span>
            </label>
            <label for="dot-4">
            <span class="dot four"></span>
            <span class="blood">O+</span>
            </label>
            <label for="dot-5">
            <span class="dot five"></span>
            <span class="blood">A-</span>
            </label>
            <label for="dot-6">
            <span class="dot six"></span>
            <span class="blood">B-</span>
            </label>
            <label for="dot-7">
            <span class="dot seven"></span>
            <span class="blood">AB-</span>
            </label>
            <label for="dot-8">
            <span class="dot eight"></span>
            <span class="blood">O-</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="send" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>

