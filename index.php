<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		Calculadora IMC
	</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="jumbotron text-center">

		<h1 class="h1">Calculadora de IMC</h1>

		<!-- imc = peso / altura * altura -->
		<label for="altura">Altura</label>
		<input type="text" name="altura" id="altura" placeholder="Altura em metros" class="form-control col-md-6 offset-md-3 mb-4">	

		<label for="peso">Peso</label>
		<input type="text" name="peso" id="peso" placeholder="Peso em Kg" class="form-control col-md-6 offset-md-3">	

		<button class="btn btn-success mt-3">Calcular</button>			

		<h2 id="resultado" class="mt-3 col-md-6 offset-md-3"></h2>
		<h2 id="categoria" class="mt-3 col-md-6 offset-md-3"></h2>

	</div>

	<script>
		$(function(){

			$('button').bind('click', function(){	

				var altura = $('#altura').val();
				altura = altura.replace(',', '.');

				var peso = $('#peso').val();
				peso = peso.replace(',', '.');
				
				var imc = peso / (altura * altura);
				imc = imc.toFixed(2);

				$('#resultado').html("IMC: " + imc);

				if (imc < 16) {
					$('#categoria').html('Baixo peso, muito grave');
					$('#resultado').addClass('text-danger');
					$('#categoria').addClass('bg-danger');
				}
				else if(imc < 17){
					$('#categoria').html('Baixo peso, grave');
					$('#resultado').addClass('text-danger');
					$('#categoria').addClass('bg-danger');
				}
				else if(imc < 18.5){
					$('#categoria').html('Baixo peso');
					$('#resultado').addClass('text-warning');
					$('#categoria').addClass('bg-warning');
				}
				else if(imc < 25){
					$('#categoria').html('Peso normal');
					$('#resultado').addClass('text-success');
					$('#categoria').addClass('bg-success');
				}
				else if(imc < 30){
					$('#categoria').html('Sobrepeso');
					$('#resultado').addClass('text-warning');
					$('#categoria').addClass('bg-warning');
				}
				else if(imc < 35){
					$('#categoria').html('Obesidade grau I');
					$('#resultado').addClass('text-warning');
					$('#categoria').addClass('bg-warning');
				}
				else if(imc < 40){
					$('#categoria').html('Obesidade grau II');
					$('#resultado').addClass('text-danger');
					$('#categoria').addClass('bg-danger');
				}
				else {
					$('#categoria').html('Obesidade grau III - Obesidade Mórbida');
					$('#resultado').addClass('text-danger');
					$('#categoria').addClass('bg-danger');
				}

			});

		});
	</script>
</body>
</html>