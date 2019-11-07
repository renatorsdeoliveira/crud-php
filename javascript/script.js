const btnSubmit = document.querySelector('.btn-submit');
const form = document.querySelector('.formulario');;

btnSubmit.addEventListener('click', event => {
    event.preventDefault();
    form.classList.add('form-hide');
});

//função que coloca o overflow hidden no body quando inicia 
form.addEventListener('animationstart', event => {
    if(event.animationName == 'down'){
        document.querySelector("body").style.overflow = 'hidden';
    }
})
//Função que faz o formulário sumir quando ele desce 
form.addEventListener('animationend', event =>{
    if(event.animationName == 'down'){
        form.style.display = 'none';
        document.querySelector("body").style.overflow = 'none'; // tira o overflow hidden 
    }
});