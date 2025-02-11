

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

//MENU RESPONSIVO
const btnMenu = document.getElementById('btn-menu');
// MENU MOBILE
const menu = document.getElementById('menu-mobile');
const overlay = document.getElementById('overlay-menu');

btnMenu.addEventListener('click', () => menu.classList.add('abrir-menu'));
menu.addEventListener('click', () => menu.classList.remove('abrir-menu'));
overlay.addEventListener('click', () => menu.classList.remove('abrir-menu'));

// LGPD
// Função para verificar se o usuário já aceitou ou recusou a política de privacidade
document.addEventListener('DOMContentLoaded', function () {
  const popup = document.getElementById('lgpd-popup');
  const acceptBtn = document.getElementById('accept-btn');
  const declineBtn = document.getElementById('decline-btn');

  // Verifica se o usuário já aceitou ou recusou cookies
  if (!localStorage.getItem('lgpdAccepted')) {
      popup.style.display = 'block';
  }

  // Quando o usuário clica em "Aceitar"
  acceptBtn.addEventListener('click', function () {
      localStorage.setItem('lgpdAccepted', 'true');
      popup.style.display = 'none';
  });

  // Quando o usuário clica em "Recusar"
  declineBtn.addEventListener('click', function () {
      localStorage.setItem('lgpdAccepted', 'false');
      popup.style.display = 'none';
  });
});


// Mantem as mensagens de Sucesso ou Erro na mesma página do formulário
document.getElementById("contactForm").addEventListener("submit", async function (event) {
    event.preventDefault(); // Impede o redirecionamento padrão da página

    const form = event.target;
    const formData = new FormData(form);

    try {
        const response = await fetch(form.action, {
            method: "POST",
            body: formData,
        });

        const result = await response.json();

        if (result.status === "success") {
            alert("Sucesso: " + result.message);
            form.reset();
        } else {
            alert("Erro: " + result.message);
        }
    } catch (error) {
        alert("Erro ao enviar a mensagem. Por favor, tente novamente.");
    }
});






