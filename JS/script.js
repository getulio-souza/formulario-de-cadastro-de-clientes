//Mascara para telefone e CPF
function criarMascara(mascaraInput){
    const sizeInput = document.getElementById(`${mascaraInput}Input`).maxLength;
    let valorInput = document.getElementById(`${mascaraInput}Input`).value;
    let valorSemPonto = document.getElementById(`${mascaraInput}Input`).value.replace(/([^0-9])+/g, "")
    const mascaras = {
        CPF: valorInput.replace(/[^\d]/g,"").replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4")};
        
        if(valorInput.length === sizeInput){
            document.getElementById(`${mascaraInput}Input`).value = mascaras[mascaraInput];
            document.getElementById(`${mascaraInput}Input`).value = valorSemPonto;
        };
}


//bloquando caracteres especiais no nome 
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

// validar CPF

