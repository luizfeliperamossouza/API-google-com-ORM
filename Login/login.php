<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
		<script src="https://apis.google.com/js/platform.js" async defer></script>
		<meta name="google-signin-client_id" content="799771785807-rqc4c6qtvf3o52e6ej97q3i7n87cmcv5.apps.googleusercontent.com">
    </head>
    <body>
		<div class="g-signin2" data-onsuccess="onSignIn"></div>
	
		<p id = 'msg'> </p>
		<script>
		//Pega as informação do usuário via login.
		function onSignIn(googleUser) {
			var profile = googleUser.getBasicProfile();
			var id =  profile.getId(); 
			var nome = profile.getName(); 
			var imagem = profile.getImageUrl(); 
			var email = profile.getEmail(); 
			var token = googleUser.getAuthResponse().id_token;
			
		
			if(email !== ''){
				var dados = {
					userName:nome,
					userEmail:email
				};
				$.post('ORM.php', dados, function(retorna){
				document.getElementById('msg').innerHTML = retorna;	
				});
			}else{
				var msg = "Usuário não encontrado!";
				document.getElementById('msg').innerHTML = msg;
			}
		}
		</script>		
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		
    </body>
</html>