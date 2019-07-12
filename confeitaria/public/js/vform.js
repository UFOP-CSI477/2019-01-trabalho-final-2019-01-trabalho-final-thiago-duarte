function validar(){
		
		var nome = document.formcad.nome;
		var email = document.formcad.email;
		var senha = document.formcad.senha;
		var confirma = document.formcad.confirma;
		var cidade = document.formcad.cidade;
		var rua = document.formcad.rua;
		var bairro = document.formcad.bairro;
		var numero = document.formcad.numero;

		
		
		
		if(nome.value == ""){
			
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
			
		}
		if(email.value == "" ){
			document.getElementById('alertaemail').style.display = "block";
			document.getElementById('labemail').classList.add("text-danger");
		
			email.classList.add("is-invalid");
			email.focus();
			return false;
		}else{
			document.getElementById('alertaemail').style.display = "none";
			email.classList.remove("is-invalid");
			email.classList.add("is-valid");
	
			document.getElementById('labemail').classList.remove("text-danger");
			document.getElementById('labemail').classList.add("text-success");
			
		}
		if(senha.value.length < 6){
			
			document.getElementById('alertasenha').style.display = "block";
			document.getElementById('labsenha').classList.add("text-danger");
		
			senha.classList.add("is-invalid");
			senha.focus();

			return false;
		
		}else{
			//tudo certo
			document.getElementById('alertasenha').style.display = "none";
			senha.classList.remove("is-invalid");
			senha.classList.add("is-valid");
	
			document.getElementById('labsenha').classList.remove("text-danger");
			document.getElementById('labsenha').classList.add("text-success");
			
		}
		if(senha.value != confirma.value){
			
			document.getElementById('alertaconfirma').style.display = "block";
			document.getElementById('labconfirma').classList.add("text-danger");
		
			confirma.classList.add("is-invalid");
			confirma.focus();

			return false;
		
		}else{
			//tudo certo
			document.getElementById('alertaconfirma').style.display = "none";
			confirma.classList.remove("is-invalid");
			confirma.classList.add("is-valid");
	
			document.getElementById('labconfirma').classList.remove("text-danger");
			document.getElementById('labconfirma').classList.add("text-success");
			
		}
		if(cidade.options[cidade.selectedIndex].value=="0" || cidade.options[cidade.selectedIndex].value==""){
			
			document.getElementById('alertacidade').style.display = "block";
			document.getElementById('labcidade').classList.add("text-danger");
		
			cidade.classList.add("is-invalid");
			cidade.focus();

			return false;
		
		}else{
			//tudo certo
			document.getElementById('alertacidade').style.display = "none";
			cidade.classList.remove("is-invalid");
			cidade.classList.add("is-valid");
	
			document.getElementById('labcidade').classList.remove("text-danger");
			document.getElementById('labcidade').classList.add("text-success");
		
		}
		if(rua.value == ""){
			
			document.getElementById('alertarua').style.display = "block";
			document.getElementById('labrua').classList.add("text-danger");
		
			rua.classList.add("is-invalid");
			rua.focus();

			return false;
		
		}else{
			//tudo certo
			document.getElementById('alertarua').style.display = "none";
			rua.classList.remove("is-invalid");
			rua.classList.add("is-valid");
	
			document.getElementById('labrua').classList.remove("text-danger");
			document.getElementById('labrua').classList.add("text-success");
			
		}
		if(bairro.value == ""){
			
			document.getElementById('alertabairro').style.display = "block";
			document.getElementById('labbairro').classList.add("text-danger");
		
			bairro.classList.add("is-invalid");
			bairro.focus();

			return false;
		
		}else{
			//tudo certo
			document.getElementById('alertabairro').style.display = "none";
			bairro.classList.remove("is-invalid");
			bairro.classList.add("is-valid");
	
			document.getElementById('labbairro').classList.remove("text-danger");
			document.getElementById('labbairro').classList.add("text-success");
			
		}
		if(numero.value.length == "0" || isNaN(parseInt(numero.value))){
			
			document.getElementById('alertanumero').style.display = "block";
			document.getElementById('labnumero').classList.add("text-danger");
		
			numero.classList.add("is-invalid");
			numero.focus();

			return false;
		
		}else{
			//tudo certo
			document.getElementById('alertanumero').style.display = "none";
			numero.classList.remove("is-invalid");
			numero.classList.add("is-valid");
	
			document.getElementById('labnumero').classList.remove("text-danger");
			document.getElementById('labnumero').classList.add("text-success");
			return true;
		}

}