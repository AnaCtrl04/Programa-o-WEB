function calcular() {
    const num1 = parseFloat(document.getElementById('num1').value);
    const num2 = parseFloat(document.getElementById('num2').value);
    const operacao = document.getElementById('operacao').value;
    let resultado;

    switch (operacao) {
        case 'soma':
            resultado = num1 + num2;
            break;
        case 'subtracao':
            resultado = num1 - num2;
            break;
        case 'multiplicacao':
            resultado = num1 * num2;
            break;
        case 'divisao':
            resultado = num1 / num2;
            break;
        default:
            resultado = 0;
    }

    const campoResultado = document.getElementById('resultado');
    campoResultado.value = resultado;

    if (resultado > 0) {
        campoResultado.style.backgroundColor = 'red';
    } else if (resultado < 0) {
        campoResultado.style.backgroundColor = 'green';
    } else {
        campoResultado.style.backgroundColor = 'gray';
    }
}