/*mascara para telefone*/

  document.addEventListener('DOMContentLoaded', function() {
      const telefoneInput = document.querySelector("input.wpcf7-tel"); // Seleciona o input com a classe wpcf7-tel
      telefoneInput.addEventListener('input', handlePhone); // Adiciona o listener de input para chamar a função handlePhone
  });

  const handlePhone = (event) => {
      let input = event.target;
      input.value = phoneMask(input.value);
  }

  const phoneMask = (value) => {
      if (!value) return "";
      value = value.replace(/\D/g, '');
      value = value.replace(/(\d{2})(\d)/, "($1) $2");
      value = value.replace(/(\d)(\d{4})$/, "$1-$2");
      return value;
  }