<!DOCTYPE html>
<html>
<head>
	<title> Formulário </title>

	<script>
		function myFunction(){
			var button = alert("Usuário cadastrado com sucesso!");
		}

	</script>

</head>
<body style="background-color: #669900">
	<div style = "background-color: white; padding: 1% 1%">
		<form action = "{{route('home')}}">
			<h2> Formulário </h2>
			Nome: <input type = "text" name  = "nome"> <br/>
			Idade: <input type = "number" name  = "idade"> <br/>
			Email: <input type = "email" name  = "email"><br/>
			Senha: <input type = "password" name  = "senha"> <br/>
			<br>
			<input type = "submit" onclick = "myFunction()"/>
			
		</form>
	</div>
</body>
</html>