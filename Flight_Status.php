<?php
include('connect.php');

$sql = "SELECT * FROM Flights";
      if($exeResult = $conn->query($sql)) {
         while($row = mysqli_fetch_assoc($exeResult)){
              $departure[] = $row['departure'];
              $arrival[] =  $row['arrival'];
       }
   }





?>



<html>
<head>
  <link rel="stylesheet" href="styles.css">
<title>Flight Status </title>
</head>
<body>
<br>
<br>
<br>
<h1>Flight Status </h1>
<br><br>
<form name="form1" id="form1" action="/action_page.php">
    <select name="departure" id="departure">
    <option value="" selected="selected">From</option>
    <?php 
     $options = '';
     foreach ($departure as $value) {
     $options .= "<option value='$value'>$value</option>";
     }
     echo $options
    ?>
    
  </select>
    <select name="destination" id="destination">
    <option value="" selected="selected">To</option>
    <?php 
     $options = '';
     foreach ($arrival as $value) {
     $options .= "<option value='$value'>$value</option>";
     }
     echo $options
    ?>
    </select>
    <label for="date">Departure&nbsp;Date</label>
    <input type="date" id="date">
    <input type="text" placeholder="Flight number" id="fl_number"/>
</form>

<button id="button1">Search Flight</button>
<a href="index.html">
<button id="back">&nbsp;Back</button>
</a>
</body>
</html>
