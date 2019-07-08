function vbolo(){
		
		var tamanho = document.formbolo.tamanho;
		var recheio = document.formbolo.recheio;
		var cobertura = document.formbolo.cobertura;
		
		
		if(tamanho.options[tamanho.selectedIndex].value=="0" || tamanho.options[tamanho.selectedIndex].value==""){
			
			document.getElementById('alertatamanho').style.display = "block";
			document.getElementById('labtamanho').classList.add("text-danger");
		
			tamanho.classList.add("is-invalid");
			tamanho.focus();

			return false;
		
		}else{
			//tudo certo
			document.getElementById('alertatamanho').style.display = "none";
			tamanho.classList.remove("is-invalid");
			tamanho.classList.add("is-valid");
	
			document.getElementById('labtamanho').classList.remove("text-danger");
			document.getElementById('labtamanho').classList.add("text-success");

		}
		if(recheio.options[recheio.selectedIndex].value=="0" || recheio.options[recheio.selectedIndex].value==""){
			
			document.getElementById('alertarecheio').style.display = "block";
			document.getElementById('labrecheio').classList.add("text-danger");
		
			recheio.classList.add("is-invalid");
			recheio.focus();

			return false;
		
		}else{
			//tudo certo
			document.getElementById('alertarecheio').style.display = "none";
			recheio.classList.remove("is-invalid");
			recheio.classList.add("is-valid");
	
			document.getElementById('labrecheio').classList.remove("text-danger");
			document.getElementById('labrecheio').classList.add("text-success");
			
		}
		if(cobertura.options[cobertura.selectedIndex].value=="0" || cobertura.options[cobertura.selectedIndex].value==""){
			
			document.getElementById('alertacobertura').style.display = "block";
			document.getElementById('labcobertura').classList.add("text-danger");
		
			cobertura.classList.add("is-invalid");
			cobertura.focus();

			return false;
		
		}else{
			//tudo certo
			document.getElementById('alertacobertura').style.display = "none";
			cobertura.classList.remove("is-invalid");
			cobertura.classList.add("is-valid");
	
			document.getElementById('labcobertura').classList.remove("text-danger");
			document.getElementById('labcobertura').classList.add("text-success");
			return true;
		}
		

}