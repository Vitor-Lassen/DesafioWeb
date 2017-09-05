

function validacao(){
	if((document.form.tipo.value == "")||(document.form.nome.value == "")||(document.form.quantidade.value == "")||(document.form.preco.value == "")){
		alert("prencha todos os campos ");
		return false;
	}	
	else {
		return true;
	}
}

function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>47 && tecla<58)) return true;
    else{
    	if (tecla==8 || tecla==0) return true;
	else  return false;
    }
}

function Nova()
{
	location.href="operacoes.php"
}


