<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="style2.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css"/>
</head>

<body>
<p id="timeOfDay">Time of Day</p>
<div class="navbar">
  <a href="index.html"><i class="fa fa-home"></i> Home</a>
  <div class="subnav">
    <button class="subnavbtn"><i class="fa fa-barcode"></i> Products <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="currency.php">Currency Exchange</a>
      <a href="#Service2">Service 2</a>
    </div>
  </div>
  <div class="subnav">
    <button onclick="location.href='contact.html'" class="subnavbtn"><i class="fa fa-comments"></i> Contact Us <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#French"><i class="flag-icon flag-icon-fr"></i> Contactez-Nous</a>
      <a href="#Italian"><i class="flag-icon flag-icon-it"></i> Contattaci</a>
    </div>
  </div>
  <a href="aboutme.html"><i class="fa fa-map-marker"></i> About</a>
</div>

<h1>Home Page</h1><br>
<h3>Welcome to the website. Please search for an item.</h3><br>

<script src="js2.jsx"></script>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for an item..">

<table id="myTable">
  <tr class="header">   
    <th>Item No</th>
    <th>Name</th>
    <th>Type</th>
    <th>Make</th>
    <th>Model</th>
    <th>Brand</th>
    <th>Description</th>
  </tr>
  <tr>
    <?php
      class Item{
        public $itemNumber = 0;
        public $name = "";
        public $type = "";
        public $make = "";
        public $model = "";
        public $brand = "";
        public $desc = "";

        function input($string) {
          $this->itemNumber = $string[0];
          $this->name = $string[1];
          $this->type = $string[2];
          $this->make = $string[3];
          $this->model = $string[4];
          $this->brand = $string[5];
          $this->desc = $string[6];
        }

        function display() {
          echo "<tr>";
          echo "<td> $this->itemNumber </td>";
          echo "<td> $this->name </td>";
          echo "<td> $this->type </td>";
          echo "<td> $this->make </td>";
          echo "<td> $this->model </td>";
          echo "<td> $this->brand </td>";
          echo "<td> $this->desc </td>";
          echo "</tr>";
        }
      }

      $myfile = fopen("input.csv", "r");
      $counter = 0;
      $searchArray = array();

      while(!feof($myfile)) {
        $searchArray[$counter] = array();
        $searchArray[$counter][1] = new Item();
        $content = fgetcsv($myfile);
        $searchArray[$counter][1]->input($content);
        $counter++;
      }

      fclose($myfile);
      ?>
  </tr>
    <?php for ($y=1; $y<count($searchArray); $y++) {
        $searchArray[$y][1]->display();
    } ?>
</table>

</body>
</html>