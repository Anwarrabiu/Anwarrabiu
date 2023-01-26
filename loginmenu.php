 
 <style type="text/css">
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

.dropdown-content .sel {
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
  <a href="register.php">Register </a>
  

   
  
</div>

 