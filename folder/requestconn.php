<html>
<head>
<title>Donor InfoDetails</title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
 <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@700&display=swap" rel="stylesheet"> 
<style>
body {
	height: 100%;
}

body {
	width:100%;
height:100%;
background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url('background1.jpg');
background-size:cover;
	font-family: 'Work Sans', sans-serif;
	font-weight: 100;
}
h1 { color: white;
font-family: 'Alfa Slab One', cursive;
 font-size: 75px; 
 font-weight: normal;
  line-height: 48px;
   margin: 25px 0 50px; 
   text-align: center; 
   text-shadow: 1px 1px 2px #082b34; }
   .btn {
  background: #fb3640;
  
  background-image: linear-gradient(to bottom, #fb3640, #cf0000);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  font-family: Courier New;
  color: black;
  font-size: 13px;
  padding: 11px 20px 10px 20px;
  text-decoration: none;
}

.btn:hover {
  background: #ce1212;
  text-decoration: none;
}
.container {
        padding-top:0%;
	position:absolute;
	top:37%;
	left: 50%;
	transform: translate(-50%, -50%);
}

table {
	width: 1250px;
	border-collapse: collapse;
	overflow: hidden;
	box-shadow: 0 0 20px rgba(0,0,0,0.1);
}

th,
td {
	padding: 15px;
	background-color: rgba(255,255,255,0.2);
	color: #fff;
}

th {
	text-align: left;
}

thead {
	font-size:20px;
}

tbody {
	tr {
		&:hover {
			background-color: rgba(255,255,255,0.3);
		}
	}
	td {
		position: relative;
		&:hover {
			&:before {
				content:"";
				position: absolute;
				left: 0;
				right: 0;
				top: -9999px;
				bottom: -9999px;
				background-color: rgba(255,255,255,0.2);
				z-index: -1;
			}
		}
	}
}
</style>
</head>
<body>
<?php include "navbar1.php";?>
<center><h1>DONOR INFO</h1></center>
<div class="container">
<?php
require_once"config.php";
 $district=$_POST['district'];
 $bloodgp=$_POST['blood'];
 $query="select id,name,bloodgp,district,locality,phoneno from donor where bloodgp='$bloodgp' and district='$district';";
 $users= mysqli_query($connection,$query);
 $rows=mysqli_num_rows($users);?>
	<table>
		<thead>
			<tr>
				<th>#ID</th>
				<th>NAME</th>
				<th>BLOOD GROUP</th>
				<th>DISTRICT</th>
				<th>LOCALITY</th>
				<th>CONTACT</th>
				
			</tr>
		</thead>
		<tbody>
		<?php if ($rows!= 0) {
        while ($user = mysqli_fetch_array($users)) {
            echo "<tr>";
                echo "<td>".$user['id']."</td>";
                echo "<td>".$user['name']."</td>";
                echo "<td>".$user['bloodgp']."</td>";
                echo "<td>".$user['district']."</td>";
                echo "<td>".$user['locality']."</td>";
                echo "<td>".$user['phoneno']."</td>";
                ?>
                <?php
            echo "</tr>";
        }
    }?>
		</tbody>
	</table>
</div>
</body>
</html>
