





<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

.navbar {
  overflow: hidden;
  background-color: rgba(0,0,0,.6);
  font-family: monospace;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  width: 100%;
  left: 0;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content .header {
  background:   #ff751a;
  padding: 16px;
  color: white;
  height: 80px;
}

.dropdown:hover .dropdown-content {
  display: block;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 16.66%;
  padding: 10px;
  background-color: #ccc;
  height: 460px;
}

.column a {
  float: none;
  color: black;
  padding: 4px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.column a:hover {
  background-color: #ddd;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>

<div class="navbar">
  <a href="index.php">Home</a>
  <a href="consultancies.php">Consultancy</a>
  <a href="consults_requested.php">Consult Requested</a>
  <div class="dropdown">
    <button class="dropbtn">Products 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <div class="header">
        <h2>Select From the Below Items!</h2>
      </div>   
      <div class="row">
        <div class="column">
          <h3>Crop Farming </h3>
          
                <a href="products.php?it=tractors">Tractor</a> 
                <a href="products.php?it=cultivators">Cultivator</a> 
                <a href="products.php?it=cultipackers">Cultipacker</a> 
                <a href="products.php?it=plows">Plows</a> 
                <a href="products.php?it=harrows">Harrows</a> 
                <a href="products.php?it=sprayers">Sprayers</a> 
                <a href="products.php?it=seed_drills">Seed drills</a> 
                <a href="products.php?it=transplanters">Transplanter</a> 
                <a href="products.php?it=mowers">Mower</a> 
                <a href="products.php?it=sickles">Sickle</a> 
                <a href="products.php?it=rakes">Rakes</a> 
                <a href="products.php?it=balers">Balers</a> 
                <a href="products.php?it=hervesters">Hervesters</a> 
                <a href="products.php?it=manure_spreaders">Manure Spreader</a> 
                <a href="products.php?it=hydroponics">Hydroponics</a> 
               
        </div>
        <div class="column">
          <h3>Poultry </h3>
                  <a href="products.php?it=egg_handling">egg handling</a>
                  <a href="products.php?it=poultry_brooders">poultry brooders</a>
                  <a href="products.php?it=poultry_feeders">poultry feeders</a>
                  <a href="products.php?it=poultry_waterers">poultry waterers</a>
                  <a href="products.php?it=poultry_netting">poultry netting</a>
                 
        </div>
        <div class="column">
          <h3>Livestock care</h3>
                   <a href="products.php?it=fencing_wire">Fencing wire</a>
                   <a href="products.php?it=ear_notcher">Ear notcher</a>
                   <a href="products.php?it=strip_cup">Strip cup</a>
                   <a href="products.php?it=dehorner">Dehorner</a>
                   <a href="products.php?it=wool_sheer">Wool sheer</a>
                   <a href="products.php?it=drenching_gun">Drenching gun</a>
        </div>
        <div class="column">
          <h3>Fishery</h3>
                   <a href="products.php?it=aerator">Aerator</a>
                   <a href="products.php?it=fish_grader">Fish grader</a>
                   <a href="products.php?it=auto_fish_feeder">Auto fish feeder</a>
                   <a href="products.php?it=fish_pond">Fish pond</a>
        </div>
        <div class="column">
          <h3>Diary</h3>
                   <a href="products.php?it=boiler">Boiler</a>
                   <a href="products.php?it=diary_tank">Diary tank</a>
                   <a href="products.php?it=cream_seperator">Cream seperator</a>
                   <a href="products.php?it=milk_cooler">Milk cooler</a>
                   <a href="products.php?it=milking_claw">Milking claw</a>
                   <a href="products.php?it=curd_percolator">Curd percolator </a> 
        </div>
        <div class="column">
          <h3>Bee keeping</h3>
                   <a href="products.php?it=bee_hive">Bee hive</a>
                   <a href="products.php?it=bee_feeder">Bee feeder</a>
                   <a href="products.php?it=bee_smoker">Bee smoker</a>
                   <a href="products.php?it=frame">Frame</a>
                   <a href="products.php?it=bee_catcher">Bee catcher</a>
                   <a href="products.php?it=bee_suit">Bee suit </a> 
        </div>
      </div>
    </div>
  </div>

 
  <a href="showcart.php">Show-Cart</a>
  <?php 
  if (isset($_SESSION['user'])) {
  
  echo '<a id="logout" href="logout.php">Logout</a>';
}else{
  echo '<a id="logout" href="login.php">Login</a>';
}
  ?>

</div>

</body>
</html>
