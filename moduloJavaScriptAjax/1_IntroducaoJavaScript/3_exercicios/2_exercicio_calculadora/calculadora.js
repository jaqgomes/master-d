function soma() {
    var valor1 = parseFloat(document.getElementById('valor1').value);
    var valor2 = parseFloat(document.getElementById('valor2').value);

    console.log(valor1);
    console.log(valor2);

    var resultado = valor1 + valor2;

    document.getElementById('somaResult').value = resultado;

    alert(`O resultado da soma de ${valor1} + ${valor2} é : ${resultado}`);
}