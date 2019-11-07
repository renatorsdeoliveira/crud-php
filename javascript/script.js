const btnSubmit = document.querySelector('.btn-submit');
const form = document.querySelector('.formulario');;

btnSubmit.addEventListener('click', event => {
    event.preventDefault();
    form.classList.add('form-hide');
});