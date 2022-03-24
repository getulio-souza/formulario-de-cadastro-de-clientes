//Mascara para telefone e CPF

function mascaraTel (tel){
    const numAtual = tel.value;
    const cel = numAtual.length ===9;

    let numcelCerto;
    if(cel){
     return "você digitou o número certo"
    }
    else{
      return "você digitou o número errado"
    }
    tel.value = numcelCerto;
}

//removendo o hifen
function removerHifen (tel){
    const numAtual = tel.value;
    const numcelCerto = numAtual.replace(/\-/g, '');

    tel.value = numcelCerto;
}

//fazendo a divisão do número

let numcelCerto;
if(cel){
    const inicioDoNum = numAtual.slice(0,5);
    const fimDoNum = numAtual.slice(5,9);
    numcelCerto = `${inicioDoNum}-${fimDoNum}`
}
else{
    const inicioDoNum = numAtual.slice(0,4);
    const fimDoNum = numAtual.slice(4,8);
    numcelCerto = `${inicioDoNum}-${fimDoNum}`
}
numcelCerto();



// function criarMascara(mascaraInput){
//     const sizeInput = document.getElementById(`${mascaraInput}Input`).maxLength;
//     let valorInput = document.getElementById(`${mascaraInput}Input`).value;
//     let valorSemPonto = document.getElementById(`${mascaraInput}Input`).value.replace(/([^0-9])+/g, "")
//     const mascaras = {
//         CPF: valorInput.replace(/[^\d]/g,"").replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4")};
        
//         if(valorInput.length === sizeInput){
//             document.getElementById(`${mascaraInput}Input`).value = mascaras[mascaraInput];
//             document.getElementById(`${mascaraInput}Input`).value = valorSemPonto;
//         };
// }


//bloquando caracteres especiais e números no nome 
const blockCharFirstName = document.getElementById("firstName");
const blockCharLastName = document.getElementById("LastName")

//Nome
blockCharFirstName.addEventListener("keypress", (e)=>{
    if(!checkCharFirstName(e)){
        e.preventDefault();
    }
});
//Sobrenome
blockCharLastName.addEventListener("keypress", (e)=>{
 if(!checkChar(e)){
   e.preventDefault();
 }
});

function checkCharFirstName(e){
    const char = String.fromCharCode(e.keyCode);
    const padraoDeCaracteres = '[a-zA-z]';

    if(char.match(padraoDeCaracteres)){
        console.log(char);
        return true;
    }
}
function checkCharLastName(e){
    const char = String.fromCharCode(e.keyCode);
    
    const padraoDeCaracteres = '[a-zA-z]';

    if(char.match(padraoDeCaracteres)){
        console.log(char);
        return true;
    }
}