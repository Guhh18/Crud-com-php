let formContainer = document.querySelector(".forms");
let BtnCadastroLink = document.querySelectorAll(".cadastro-link");

BtnCadastroLink.addEventListener('click', () => {
    formContainer.classList.toggle(cadastroAtivo);
});