
document.addEventListener("DOMContentLoaded"), function () {
  // Recupera todos os botões "Next" e adiciona manipuladores de evento a eles
  const nextButtons = document.querySelectorAll(".btn-primary");
  for (const button of nextButtons) {
    button.addEventListener("click", handleNextButtonClick);
  }

  // Recupera o botão "Previous" e adiciona um manipulador de evento a ele
  const previousButton = document.querySelector(".btn-secondary");
  if (previousButton) {
    previousButton.addEventListener("click", handlePreviousButtonClick);
  }

  // Manipulador de evento para o botão "Next"
  function handleNextButtonClick(event) {
    event.preventDefault();

    const currentModal = event.target.closest(".modal");
    const nextModalId = event.target.getAttribute("data-bs-target");
    const nextModal = document.querySelector(nextModalId);

    if (validateCurrentModal(currentModal)) {
      currentModal.classList.remove("show");
      nextModal.classList.add("show");
    }
  }

  // Manipulador de evento para o botão "Previous"
  function handlePreviousButtonClick(event) {
    event.preventDefault();

    const currentModal = event.target.closest(".modal");
    const previousModalId = event.target.getAttribute("data-bs-target");
    const previousModal = document.querySelector(previousModalId);

    currentModal.classList.remove("show");
    previousModal.classList.add("show");
  }

  // Função de validação para cada modal
  function validateCurrentModal(modal) {
    const modalId = modal.getAttribute("id");

    if (modalId === "exampleModalToggle1") {
      // Validação do primeiro modal (se necessário)
      const input = modal.querySelector(".form-control");
      if (input.value.trim() === "") {
        // Exibir mensagem de erro
        alert("Por favor, preencha o campo de tipo de trabalho.");
        return false;
      }
    } else if (modalId === "exampleModalToggle2") {
      // Validação do segundo modal
      const cepInput = modal.querySelector("#cepInput");
      if (!validateCep(cepInput.value)) {
        return false;
      }
    } else if (modalId === "exampleModalToggle7") {
      // Validação do sétimo modal
      const nameInput = modal.querySelector("#name");
      const emailInput = modal.querySelector("#email");
      const phoneInput = modal.querySelector("#phone");
      const privacyPolicyInput = modal.querySelector("#privacyPolicy");

      if (nameInput.value.trim() === "") {
        alert("Por favor, preencha o campo de nome.");
        return false;
      }

      if (!validateEmail(emailInput.value)) {
        return false;
      }

      if (!validatePhone(phoneInput.value)) {
        return false;
      }

      if (!privacyPolicyInput.checked) {
        alert("Você deve aceitar a Política de Privacidade e os Termos de uso.");
        return false;
      }
    }

    return true;
  }
// Seleciona o campo de CEP
const cepInput = document.getElementById("cepInput");

// Adiciona um listener para o evento de input no campo de CEP
cepInput.addEventListener("input", function (e) {
  // Remove todos os caracteres não numéricos
  const numbersOnly = e.target.value.replace(/\D/g, '');

  // Aplica a máscara no CEP (formato: 12345-678)
  if (numbersOnly.length > 5) {
    e.target.value = numbersOnly.slice(0, 5) + '-' + numbersOnly.slice(5, 8);
  } else {
    e.target.value = numbersOnly;
  }
});
  // Função de validação do e-mail
  function validateEmail(email) {
    const emailPattern = /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/;
    if (!emailPattern.test(email)) {
      alert("Por favor, forneça um endereço de e-mail válido.");
      return false;
    }
    return true;
  }
}