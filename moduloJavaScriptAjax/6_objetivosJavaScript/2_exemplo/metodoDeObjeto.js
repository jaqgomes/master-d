function saldoMensal() {
    document.write("Saldo mensal : " + this.precoHora * this.horas * 30);
  }

  function funcionario(antiguidade, precoHora, horas){
    this.antiguidade = antiguidade;
    this.precoHora = precoHora;
    this.horas = horas;
    this.saldoMensal = saldoMensal;
  }