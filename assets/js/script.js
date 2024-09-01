// document.getElementById('contactForm').addEventListener('submit', function(event) {
//     event.preventDefault(); // Impede o envio padrão do formulário
    
//     // Limpar mensagens de erro
//     document.getElementById('nameError').style.display = 'none';
//     document.getElementById('emailError').style.display = 'none';
//     document.getElementById('messageError').style.display = 'none';

//     // Obter valores dos campos
//     var name = document.getElementById('name').value.trim();
//     var email = document.getElementById('email').value.trim();
//     var message = document.getElementById('message').value.trim();

//     var isValid = true;

//     // Validar nome
//     if (name === '') {
//         document.getElementById('nameError').innerText = 'Por favor, preencha seu nome.';
//         document.getElementById('nameError').style.display = 'block';
//         isValid = false;
//     }

//     // Validar e-mail
//     if (email === '') {
//         document.getElementById('emailError').innerText = 'Por favor, preencha seu e-mail.';
//         document.getElementById('emailError').style.display = 'block';
//         isValid = false;
//     } else if (!validateEmail(email)) {
//         document.getElementById('emailError').innerText = 'Por favor, insira um e-mail válido.';
//         document.getElementById('emailError').style.display = 'block';
//         isValid = false;
//     }

//     // Validar mensagem
//     if (message === '') {
//         document.getElementById('messageError').innerText = 'Por favor, escreva sua mensagem.';
//         document.getElementById('messageError').style.display = 'block';
//         isValid = false;
//     }

//     // Se todos os campos forem válidos
//     if (isValid) {
//         alert('Formulário enviado com sucesso!');
//         // Aqui você pode adicionar o código para enviar o formulário, se necessário.
//     }
// });

// function validateEmail(email) {
//     var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
//     return re.test(email);
// }


// SCROLL MENU

window.addEventListener('scroll', function(){
    let header = document.querySelector('header')
    header.classList.toggle('rolagem', window.scrollY > 0)
})

// BOTAO RETORNO AO TOPO
const goTopBtn = document.querySelector("[data-go-top]");

window.addEventListener("scroll", function(){
    if(window.scrollY >= 400){
        goTopBtn.classList.add("active");
    }else{
        goTopBtn.classList.remove("active");
    }
});


// Politica de privacidade 

let msgCookies = document.getElementById('cookies_msg');

function aceito() {
    localStorage.lgpd = "sin";
    msgCookies.classList.remove('mostrar');
}

if(localStorage.lgpd == 'sim') {
    msgCookies.classList.remove('mostrar');
}else{
    msgCookies.classList.add('mostrar');

}
