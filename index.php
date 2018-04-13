<!DOCTYPE html>
<html lang="en">
<hmtl>

<head>
	<title></title>
	<meta charset="utf-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<style>     
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>

</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
      <button  type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bar1" ></button>
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar" id="bar-i"></span>
      <span class="icon-bar" id="bar-i"></span>
      <span class="icon-bar" id="bar-i"></span>

			<a class="navbar-brand" href="#">Membros da Guerra</a>
		</div>

    <div class="collapse navbar-collapse" id="bar1">
		<ul class="nav navbar-nav">
			<li><a href="#">Home</a></li>

			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Guerras
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="#">WW I</a></li>
					<li><a href="#">WW II</a></li>
					<li><a href="#">Operações</a></li>

				</ul>
			</li>

			<li><a href="#">Sobre</a></li>
			<li><a href="#">Contato</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="#"><span class="glyphicon glyphicon-user"></span>Cadastro</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-log-in"></span>Login</a></a></li>
		</ul>
  </div>
	</div>

</nav>

<div class="container">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">

	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	
	</ol>	

	<div class="carousel-inner">
		<div class="item active">
			<img src="guerra1.jpg" alt="Guerra 1" style="width:100%;height:350px;">
		</div>
		<div class="item">	
			<img src="guerra2.png" alt="Guerra 2" style="width:100%;height:350px;">
		</div>
		<div class="item">
			<img src="guerra5.jpg" alt="Guerra 3" style="width:100%;height:350px;">
		</div>
	</div>

	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
		<span class="sr-only">Previous</span>
	</a>

	<a class="right carousel-control" href="#myCarousel" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>		
		<span class="sr-only">Next</span>
	</a>


	</div>
</div>

<div class="container text-center" id="fatos">    
  <h3>Historias das Grandes Guerras</h3><br>
  <div class="row">
    <div class="col-sm-4">
    	<p><strong>Marcha para o Fronte</strong></p>
      <img src="guerra4.jpg" class="img-responsive" style="width:100%;height:215px;" alt="Image">
      <p></p>
    </div>
    <div class="col-sm-4">
    	<p><strong>Contando os Mortos</strong></p> 
      <img src="guerra6.jpg" class="img-responsive" style="width:100%;height:215px;" alt="Image">
      <p></p>    
    </div>
    <div class="col-sm-4">
      <div class="diad1">
       <p><strong>Tudo sobre o dia D<strong/></p>
     <pre class="diad">
Os desembarques da Normandia foram
operações durante a invasão da 
Normandia pelos aliados, também 
conhecida como Operação Overlord
e Operação Netuno, durante a 
Segunda Guerra Mundial. 
       
       </pre>

      </div>
     
    </div>
  </div>
</div>
<div class="container text-center" id="fatos2">    
   <div class="row">
    <div class="col-sm-4">
    	<p><strong>Assassinato de Francisco Fernando</strong></p>
      <img src="fernando.jpg" class="img-responsive" style="width:100%;height:215px;" alt="Image">
      
    </div>
    <div class="col-sm-4"> 
    	<p><strong>Armas químicas na Primeira Guerra Mundial</strong></p>
      <img src="armaquimica1.jpg" class="img-responsive" style="width:100%;height:215px;" alt="Image">
       
    </div>  
     <div class="col-sm-4"> 
    	<p><strong>Genocídios e limpeza étnica</strong></p>
      <img src="limpeza.jpg" class="img-responsive" style="width:100%;height:215px;" alt="Image">
       
    </div>  
    </div>
  </div>
</div></br></br></br></br>



<footer class="rodape container-fluid text-center">
  <p>Footer Text</p>
</footer>




</body>

</html>