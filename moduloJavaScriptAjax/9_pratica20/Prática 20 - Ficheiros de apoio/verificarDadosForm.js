function validar() {
    var telemovel = document.formulario.telemovel.value;
    var idade = document.formulario.idade.value;
    var email = document.formulario.email.value;
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (isNaN(telemovel)) {
        alert("O número inserido não está correto.");
        return false;
    }

    if (telemovel.length != 9) {
        alert("O número de telemóvel deverá conter 9 dígitos.");
        return false;
    }

    if (!telemovel.startsWith(9)) {
        alert("Telemóvel não começa com 9.");
        return false;
    }

    if (isNaN(idade)) {
        alert("O preenchimento deste formulário requer que se tenha 18 anos ou mais.");
        return false;
    }

    if (!re.test(String(email).toLowerCase())) {
        alert("Email inválido");
        return false;
    }

    alert("Obrigado pelo preenchimento do fomrulário. Todos os campos foram preenchidos corretamente.");

}