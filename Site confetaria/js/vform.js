function validar(){
		
		var nome = document.formcad.nome.value;
		var email = document.getElementById('email');
		var sexo = document.getElementById('sexo');
		var senha = document.getElementById('senha');
		var senha2 = document.getElementById('senha2');
		var filtro = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
		
		var contErro = ;
		
		if(nome == ""){
		
		
			document.getElementById('alertanome').style.display = "block";
		
			document.getElementById('labnome').classList.add("text-danger");
		
			nome.classList.add("is-invalid");
		
		
			nome.focus();
			return false;
		
		}else{
			//tudo certo
			document.getElementById('alertanome').style.display = "none";
			nome.classList.remove("is-invalid");
			nome.classList.add("is-valid");
	
			document.getElementById('labnome').classList.remove("text-danger");
			document.getElementById('labnome').classList.add("text-success");
			return true;
		}
		
		
		
}