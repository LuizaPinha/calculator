function insert(numeros){
    document.tela.tela2.value= document.tela.tela2.value + numeros;
}

function resposta(){
    exibir = document.tela.tela2.value;
    if(exibir){
        document.tela.tela2.value = eval(exibir);
    }
}

function limpar(){
    document.tela.tela2.value = "";
}