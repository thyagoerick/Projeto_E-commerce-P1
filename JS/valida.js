//Para o Login------------------------------------------------------------
function validar(){
    //Valida Senha (Forte)- de 8 a 20 caracteres
    /*Quando o valor é testado ele já é admitido com true então para deixá-lo como false usamos: ! (negação)
    //logo se o regSenha for falso vai entrar no if.
    */

     //Valida E-mail
     if(!regEmail.test(inputEmailLog.value)){
        alert("Informe o email cadastrado!");
		inputEmailLog.focus();
		inputEmailLog.value="";
		return false;
     }
    //Valida a Senha
    if(!regSenha.test(inputSenhaLog.value)){
        alert("Informe a senha cadastrada!");
        inputSenhaLog.focus();
		inputSenhaLog.value="";
        return false;
    }
     if(regEmail.test(inputEmailLog.value) && regSenha.test(inputSenhaLog.value)){
        alert("Você logou!");
     }
}

//Para o Cadastro---------------------------------------------------------
function testar(){
    //Valida Nome:
    if(!regNome.test(inputNomeCad.value)){
        alert("Informe seu nome corretamente!");
        inputNomeCad.focus();
        inputNomeCad.value="";
        return false;
    }

     //Valida E-mail
     if(!regEmail.test(inputEmailCad.value)){
        alert("Informe seu email corretamente!");
		inputEmailCad.focus();
		inputEmailCad.value="";
		return false;
     }

    //Valida Telefone:
    if(!regTelefone.test(inputTellCad.value)){
        alert("Informe um telefone válido!");
		inputTellCad.focus();
		inputTellCad.value="";
		return false;  
    }

    //Validar o tamanho e a escrita do CPF
    if(!regCPF.test(inputCPFCad.value)){
        alert("CPF inválido!");
        inputCPFCad.focus();
        inputCPFCad.value="";
        return false;
    } 

    //Valida a Senha-----------------------------------------
    if(!regSenha.test(inputSenhaCad.value)){
        alert("Crie uma senha forte!");
        inputSenhaCad.focus();
		inputSenhaCad.value="";
        return false;
    }

    //Confirma a senha
    if(inputConfSenCad.value == ""){
        alert("Confirme a sua senha!");
        inputConfSenCad.focus();
		inputConfSenCad.value="";
        return false;
    } else if(inputConfSenCad.value != inputSenhaCad.value){
        alert("As senhas são incorrespondentes!");
        inputConfSenCad.focus();
		inputConfSenCad.value="";
        return false;
    }
/* 
Testes: 
Nome Nome Nome
nome@gmail.com
98756-2777
400.882.456-28
NyEre34#567
03171472
*/
//-------------------------------------------------------

    //Validar o tamanho e a escrita do CEP
    if(!regCEP.test(inputCEPCad.value)){
        alert("CEP inválido");
        inputCEPCad.focus();
        inputCEPCad.value="";
        return false;
    }

    if(inputNomeCad.value && inputEmailCad.value && inputTellCad.value && inputCPFCad.value && inputSenhaCad.value &&inputConfSenCad.value && inputEndCad.value && inputCompleCad.value &&inputCidadeCad.value && inputEstadoCad.value && inputCEPCad.value){
        alert("Cadastro realizado com Sucesso!!!!");

        //Faz o redirecionamento:
        window.location.href="../HTML/loginEcadastro.html";
    }
}

function buscar(){
    if(Buscar.value=="Roupas Brancas" || Buscar.value=="roupas brancas" || Buscar.value=="Roupas brancas" || Buscar.value=="roupas Brancas"){
        window.location.href="../HTML/busca.html";
    }else if (Buscar.value==""){
        alert("Digite um texto para efetuar a busca!");
    }
}
