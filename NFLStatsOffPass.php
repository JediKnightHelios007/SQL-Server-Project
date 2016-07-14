<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
     border: 1px solid black;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<body style="background-color:powderblue;">

<div id="header">
<h1>NFL 2016 Playoff Team Regular Season Team Stats</h1>
</div>

<div id="nav">
<ul>
  <li><a href="http://jediknight008.net23.net/NFLStats2.php#home">Home</a></li>
  <li><a href="http://jediknight008.net23.net/NFLStatsTotOff.php">NFL TotOff</a></li>
  <li><a href="http://jediknight008.net23.net/NFLStatsTotDef.php">NFL TotDef</a></li>
  <li><a href="http://jediknight008.net23.net/NFLStatsOffRush.php">NFL OffRush</a></li>
  <li><a href="http://jediknight008.net23.net/NFLStatsDefRush.php">NFL DefRush</a></li>
  <li><a href="http://jediknight008.net23.net/NFLStatsOffPass.php">NFL OffPass</a></li>
  <li><a href="http://jediknight008.net23.net/NFLStatsDefPass.php">NFL DefPass</a></li>
</ul>
</div>

<p>A good passing offensive does not gurantee a superbowl.</p>

<?php
$servername = "mysql4.000webhost.com";
$username = "??????";
$password = "??????";
$dbname = "??????";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT Team, OffPassing FROM NFLTeamStats Order By `NFLTeamStats`.`OffPassing` DESC ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table><tr><th>Team</th><th>OffensivePassing(YPG)</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["Team"]. "</td><td>" . $row["OffPassing"]. "</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

$conn->close();
?>  

<div id="footer">
Copyright © Isaac Manayath
</div>

</body>

<style>
#header {
    background-color:black;
    color:white;
    text-align:center;
    padding:5px;
}
#nav {
  //  line-height:30px;
    background-color:gray;
    color:white;
    height:400px;
    width:125px;
    float:left;
    padding:5px; 
}
#section {
    width:450px;
    float:left;
    padding:10px; 
}
#footer {
    background-color:black;
    color:white;
    clear:both;
    text-align:center;
    padding:5px; 
}
</style>

</html>	
