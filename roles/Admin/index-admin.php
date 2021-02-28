<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<link rel="icon" href="../../img/logo1.png">
	<meta charset="utf-8">
</head>
<body>

	<nav class="navbar navbar-expand-sm navbar-dark fixed-top barra">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
    <img src="../../img/logo2.png" alt="logo" style="width:60px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Link 1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 2</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 3</a>
    </li>
  </ul>

  <div class="container_busqueda">
  	<input type="text" name="" value="" placeholder="Buscar..." id="busqueda" class="barra_busqueda">
  	<button class="icon"><img src="../../img/buscar.png" alt="" style="width: 20px;"></button>
  </div>

  	<div class="menuToggle" onclick="ToggleMenu();"></div>
	<div class="navigation">
		<div class="navArea">
			<ul>
				<li>
					<a href="#" onmouseenter="changeImage('../../img/img1.jpg')">Home</a>
				</li>
				<li>
					<a href="#" onmouseenter="changeImage('../../img/img2.jpg')">About</a>
				</li>
				<li>
					<a href="#" onmouseenter="changeImage('../../img/img3.jpg')">Services</a>
				</li>
				<li>
					<a href="#" onmouseenter="changeImage('../../img/img4.jpg')">Portfolio</a>
				</li>
				<li>
					<a href="#" onmouseenter="changeImage('../../img/img5.jpg')">Team</a>
				</li>
				<li>
					<a href="#" onmouseenter="changeImage('../../img/img6.jpg')">Contact</a>
				</li>
			</ul>
		</div>
		<div class="imgArea">
			<img src="../../img/img1.jpg" alt="" id="slider">
		</div>
	</div>

</nav>



<script src="../../js/bootstrap.js"></script>
<script src="../../js/jquery.min.js"></script>
<script src="../../js/popper.min.js"></script>
<script>
	function changeImage(anything){
		document.getElementById('slider').src = anything;
	}

	function ToggleMenu(){
		const menuToggle = document.querySelector('.menuToggle')
		const navigation = document.querySelector('.navigation')
		menuToggle.classList.toggle('active')
		navigation.classList.toggle('active')
	}
</script>
</body>
</html>