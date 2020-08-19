(function() {
  const cpf =window.document.querySelector('#cpf');

  function mascaraCPF(evento) {
    /**
    * Função que serve como máscara do cpf
    * @param {Node} evento
    */
    const cpf = evento.target;

    if (isNaN(parseFloat(evento.key))) evento.preventDefault();
    if (cpf.value.length === 3) return cpf.value += '.';
    if (cpf.value.length === 7) return cpf.value += '.';
    if (cpf.value.length === 11) return cpf.value += '-';
    if (cpf.value.length >= 14) evento.preventDefault();
  }


  cpf.addEventListener('keypress', (e) => {
    mascaraCPF(e);
  })

})();



