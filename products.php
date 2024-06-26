<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Men's Wear</title>
<style>
body {
font-family: Arial, sans-serif; 
margin-top: 300px;
padding: 0;
background-color: #f4f4f4;
background-image: url('img/faso.jpg'); 
min-height: 100%;
background-position: center; 
background-size: cover;
background: linear-gradient(65deg,rgb(240, 255, 164),rgb(186, 255, 186));
}
.container { 
display: flex; 
flex-wrap: wrap;
justify-content: space-around; 
padding: 20px;
}
.column {
width: 30%;
background-color: #fff;
box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
margin-bottom: 20px;
padding: 15px;
box-sizing: border-box; 
border-radius: 30px
img {
max-width: 100%; 
height: auto;
}
h3 {
margin-top: 10px; 
margin-bottom: 5px;
}
p {
margin: 0;
color: #333;
}
body { 
margin: 0;
font-family: Arial, Helvetica, sans-serif;
}
.topnav {
overflow: hidden;
background: linear-gradient(65deg,rgb(143, 244, 255),white,rgb(151, 234, 255));
}
.topnav a { 
float: left; 
display: block;
color: #020230; 
text-align: center; 
padding: 14px 16px;
text-decoration: none; 
font-size: 17px;
}
.topnav a:hover {
background-color: #ddd; 
color: black;
}
.topnav a.active {
background-color: #04AA6D; 
color: white;
}
.topnav .icon { 
display: none;
}
@media screen and (max-width: 600px){
.topnav a:not(:first-child) {display: none;}
.topnav a.icon { 
float: right; 
display: block;
}
}
@media screen and (max-width: 600px){
.topnav.responsive {position: relative;}
.topnav.responsive .icon { 
position: absolute;
right: 0;
top: 0;
}
.topnav.responsive a { 
float: none;
display: block; 
text-align: left;
}
}
#nam{
font-size: 50px; 
color: #ff24a7;
text-shadow: #ddd; 
margin: 5% 40% auto; 
width: 500px;
text-shadow: 4px 10px 5px#333; 
font-weight: 600;
}
.buy{
margin:5% 50% auto; 
width: 100px;
color: rgb(0, 0, 0); 
font-size: 20px;
background:linear-gradient(65deg,rgb(144, 200, 255),rgb(253, 150, 255)); 
border-radius: 5px;
height: 40px;
}
</style>
</head>
<body>
<div class="topnav" id="myTopnav">
<a href="index.php" class="active">Home</a>
<a href="mens.html">Kids</a>
<a href="womens.html">Adults</a>
<a href="javascript:void(0);" class="icon" onclick="myFunction()">
<i class="fa fa-bars"></i>
</a>
</div>
<p id="nam">Kids collections</p>
<div class="container">
<div class="column">
<img src="img/babytoy.jpg" alt="Item 1">
<h3>Baby makeup set</h3>
<p>Price: $9</p>
<p>Discount: 10%</p>
<Button class="buy">Buy now</Button>
</div>
<div class="column">
<img src="img/doll.jpg" alt="Item 1">
<h3>Baby doll</h3>
<p>Price: $10</p>
<p>Discount: 11%</p>
<Button class="buy">Buy now</Button>
</div>
<div class="column">
<img src="img/dinosers.jpg" alt="Item 1">
<h3>Dino</h3>
<p>Price: $13</p>
<p>Discount: 10%</p>
<Button class="buy">Buy now</Button>
</div>
<div class="column">
<img src="img/cycyle.jpg" alt="Item 1">
<h3>Toy Cycle</h3>
<p>Price: $10</p>
<p>Discount: 9%</p>
<Button class="buy">Buy now</Button>
</div>
<div class="column">
<img src="img/elephant.jpg" alt="Item 1">
<h3>Elephant</h3>
<p>Price: $13</p>
<p>Discount: 13%</p>
<Button class="buy">Buy now</Button>
</div>
<div class="column">
<img src="img/phone.jpg" alt="Item 1">
<h3>Toy phone</h3>
<p>Price: $16</p>
<p>Discount: 40%</p>
<Button class="buy">Buy now</Button>
</div>
<div class="column">
<img src="img/teddy.jpg" alt="Item 1">
<h3>Teddy bear</h3>
<p>Price: $17</p>
<p>Discount: 30%</p>
<Button class="buy">Buy now</Button>
</div>
<div class="column">
<img src="img/cycyle.jpg" alt="Item 2">
<h3>Toy cycle</h3>
<p>Price: $14</p>
<p>Discount: 20%</p>
<Button class="buy">Buy now</Button>
</div>
<div class="column">
<img src="img/bike.jpg" alt="Item 3">
<h3>Bike toy</h3>
<p>Price: $8</p>
<p>Discount: 15%</p>
<Button class="buy">Buy now</Button>
</div>
</div>
</body>
</html> <div class="topnav"id="myTopnav">
<a href="index.php" class="active">Home</a>
<a href="mens.html">Kids</a>
<a href="womens.html">Adults</a>
<a href="javascript:void(0);" class="icon" onclick="myFunction()">
<i class="fa fa-bars"></i>
</a>
</div>
<p id="nam">Adults collections</p>
<div class="container">
<div class="column">
<img src="img/buggy.jpg" alt="Item 1">
<h3>Buggy</h3>
<p>Price: $9</p>
<p>Discount: 10%</p>
<Button class="buy">Buy now</Button>
</div>
<div class="column">
<img src="img/car.jpg" alt="Item 1">
<h3>Car</h3>
<p>Price: $10</p>
<p>Discount: 11%</p>
<Button class="buy">Buy now</Button>
</div>
<div class="column">
<img src="img/drone.jpg" alt="Item 1">
<h3>Drone</h3>
<p>Price: $13</p>
<p>Discount: 10%</p>
<Button class="buy">Buy now</Button>
</div>
<div class="column">
<img src="img/jcb.jpg" alt="Item 1">
<h3>JCB</h3>
<p>Price: $10</p>
<p>Discount: 9%</p>
<Button class="buy">Buy now</Button>
</div>
<div class="column">
<img src="img/tractor.jpg" alt="Item 1">
<h3>Tractor</h3>
<p>Price: $13</p>
<p>Discount: 13%</p>
<Button class="buy">Buy now</Button>
</div>
<div class="column">
<img src="img/bike.jpg" alt="Item 1">
<h3>Bike</h3>
<p>Price: $16</p>
<p>Discount: 40%</p>
<Button class="buy">Buy now</Button>
</div>
<div class="column">
<img src="img/teddy.jpg" alt="Item 1">
<h3>Teddy bear</h3>
<p>Price: $17</p>
<p>Discount: 30%</p>
<Button class="buy">Buy now</Button>
</div>
<div class="column">
<img src="img/cycyle.jpg" alt="Item 2">
<h3>Toy cycle</h3>
<p>Price: $14</p>
<p>Discount: 20%</p>
<Button class="buy">Buy now</Button>
</div>
<div class="column">
<img src="img/truck.jpg" alt="Item 3">
<h3>Truck</h3>
<p>Price: $8</p>
<p>Discount: 15%</p>
<Button class="buy">Buy now</Button>
</div>
</div>
</body>
</html>