<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
  body{
    background-color: rgba(0,0,0,.1);
    font-size: 12px;
  }
  *{
    padding: 0;
  }
  #menu {
    width: 125px;
    list-style-type: none;

    
  }
  ul#menu ul#category a{
    
    margin-top: 12px;
  }
  ul#menu li{
    line-height: 24px;
  }

  ul#menu ul#category li{
      width: 125px;
      text-align: center;
      position: relative;
      float: left;
      margin-right: 3px;
      list-style-type: none;

  }
  ul#menu ul#category{
    position: absolute;
    top:201px;
    left: 8px; 
  }
  ul#menu .rest1{
    float: left;
    position: relative;
    top: -27px;
    left: 130px;


  }
  ul#menu .rest2{
    float: left;
    position: relative;
    top: -50px;
    left: 260px;}

  ul#menu a{
          text-decoration: none;
          background-color: #fff;
          text-align: center;
          border-radius: 2px;
          display: block;
          width: 125px;
          margin-top: 3px;
                 }
  ul#menu ul#category ul.sub1 a{
     margin-top: 3px;
       }
  ul#menu ul#category{ 
    display: none;
  }
  ul#menu ul#category ul.sub1{
    display: none;
  }
  ul#menu li:hover > a{
    background-color: #CFC;
  }
  ul#menu li:hover a:hover {
    background-color: yellow;
  }
  ul#menu li:hover #category{
    display: block;
   }
  ul#menu #category li:hover .sub1{
    display: block;
   }


  
	</style>
  
</head>
<body>
	<ul id="menu">
   <li><a href="">products</a>
          <ul id="category">
            <li><a href="">crop farming</a>
                 <ul class="sub1">
               <li><a href="products.php?it=tractors">Tractor</a></li>
               <li><a href="products.php?it=cultivators">Cultivator</a></li>
               <li><a href="products.php?it=cultipackers">Cultipacker</a></li>
               <li><a href="products.php?it=plows">Plows</a></li>
               <li><a href="products.php?it=harrows">Harrows</a></li>
               <li><a href="products.php?it=sprayers">Sprayers</a></li>
               <li><a href="products.php?it=seed_drills">Seed drills</a></li>
               <li><a href="products.php?it=transplanters">Transplanter</a></li>
               <li><a href="products.php?it=mowers">Mower</a></li>
               <li><a href="products.php?it=sickles">Sickle</a></li>
               <li><a href="products.php?it=rakes">Rakes</a></li>
               <li><a href="products.php?it=balers">Balers</a></li>
               <li><a href="products.php?it=hervesters">Hervesters</a></li>
               <li><a href="products.php?it=manure_spreaders">Manure Spreader</a></li>
               <li><a href="products.php?it=hydroponics">Hydroponics</a></li>
               
                 </ul>
            </li>
            <li><a href="">Poultry</a>
                   <ul class="sub1">
                   <li><a href="products.php?it=egg_handling">egg_handling</a></li>
                   <li><a href="products.php?it=poultry_brooders">poultry_brooders</a></li>
                   <li><a href="products.php?it=poultry_feeders">poultry_feeders</a></li>
                   <li><a href="products.php?it=poultry_waterers">poultry_waterers</a></li>
                   <li><a href="products.php?it=poultry_netting">poultry_netting</a></li>
                 </ul>
            </li>
            <li><a href="">Animal care</a>
                  <ul class="sub1">
                   <li><a href="products.php?it=fencing_wire">Fencing wire</a></li>
                   <li><a href="products.php?it=ear_notcher">Ear notcher</a></li>
                   <li><a href="products.php?it=strip_cup">Strip cup</a></li>
                   <li><a href="products.php?it=dehorner">Dehorner</a></li>
                   <li><a href="products.php?it=wool_sheer">Wool sheer</a></li>
                   <li><a href="products.php?it=drenching_gun">Drenching gun</a></li>
                 </ul>
            </li>
            <li><a href="">Fishery</a>
                  <ul class="sub1">
                   <li><a href="products.php?it=aerator">Aerator</a></li>
                   <li><a href="products.php?it=fish_grader">Fish grader</a></li>
                   <li><a href="products.php?it=auto_fish_feeder">Auto fish feeder</a></li>
                   <li><a href="products.php?it=fish_pond">Fish pond</a></li>
                 </ul>
            </li>
            <li><a href="">Diary</a>
                  <ul class="sub1">
                   <li><a href="products.php?it=boiler">Boiler</a></li>
                   <li><a href="products.php?it=diary_tank">Diary tank</a></li>
                   <li><a href="products.php?it=cream_seperator">Cream seperator</a></li>
                   <li><a href="products.php?it=milk_cooler">Milk cooler</a></li>
                   <li><a href="products.php?it=milking_claw">Milking claw</a></li>
                   <li><a href="products.php?it=curd_percolator">Curd percolator </a></li> 
                 </ul>
                 <li><a href="">BeeKeeping</a>
                  <ul class="sub1">
                   <li><a href="products.php?it=bee_hive">Bee hive</a></li>
                   <li><a href="products.php?it=bee_feeder">Bee feeder</a></li>
                   <li><a href="products.php?it=bee_smoker">Bee smoker</a></li>
                   <li><a href="products.php?it=frame">Frame</a></li>
                   <li><a href="products.php?it=bee_catcher">Bee catcher</a></li>
                   <li><a href="products.php?it=bee_suit">Bee suit </a></li> 
                 </ul>
            </li>
            </li>
          </ul>
   </li>
   
  </ul>

 
</body>
</html>