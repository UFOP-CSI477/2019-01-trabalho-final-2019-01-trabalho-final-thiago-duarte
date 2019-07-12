<!doctype html>
<html lang="pt-br" dir="ltr">
 <head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Bolo castanha</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="css/cadastro.css" >
	<link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<script  src="js/vbolo.js"></script>	

 </head>
	
 <body>
		
	<div class="cadastro">
	  <div class="container">
		<h1 class="amarelo castel">Monte seu bolo</h1>
		<h3 class="amarelo center">Uma deliciosa massa de castanha e você escolhe o restante!</h3>
		<form action="#" method="post" name="formbolo" id="formbolo" onsubmit="return vbolo()">
			<h5>Selecione o tamanho e recheio</h5>
		 <div class="form-group">
		    <div>
			 <label id="labtamanho" for="tamanho">Tamanho</label>
			 <select name="tamanho" id="tamanho" class="custom-select">
			   <option value="0">Selecione</option>
			   <option value="Pequeno">Pequeno</option>
			   <option value="Médio">Médio</option>
			   <option value="Grande">Grande</option>
			 </select>
			 <div id="alertatamanho" style="display: none" class="alert alert-danger">
					<span>Selecione um tamanho</span>
		     </div>
			 
			 <div>
			 <label id="labrecheio" for="recheio">Recheio</label>
			 <select name="recheio" id="recheio" class="custom-select">
			   <option value="0">Selecione</option>
			   <option value="Castanha">Castanha</option>
			   <option value="Leite Ninho">Leite Ninho</option>
			   <option value="Chocolate">Chocolate</option>
			   <option value="Morango">Morango</option>
			 </select>
			 <div id="alertarecheio" style="display: none" class="alert alert-danger">
					<span>Selecione um Recheio</span>
		     </div>
			</div>
			<h5>Selecione a cobertura</h5>
			<div>
			 <label id="labcobertura" for="cobertura">Cobertura</label>
			 <select name="cobertura" id="cobertura" class="custom-select">
			   <option value="0">Selecione</option>
			   <option value="Castanha">Castanha</option>
			   <option value="Leite Ninho">Leite Ninho</option>
			   <option value="Chocolate">Chocolate</option>
			   <option value="Morango">Morango</option>
			 </select>
			 <div id="alertacobertura" style="display: none" class="alert alert-danger">
					<span>Selecione uma Cobetura</span>
		     </div>
		 
		 	<div>
		 		<label for="preco">Preço</label>
				<input type="text" id="preco" name="preco" value="" readonly>
		 	</div>
		 	

		 <button type="button" id="submit" class="btn btn-success btn-md" id="botao">Concluir</button>

	    </form>
		<br>
	
	  </div>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/cadbolo.js"></script>
 </body>
</html>