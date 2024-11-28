const mostraResultado = document.getElementById('result');

function somar(){
    const num1 = parseInt(document.getElementById('num1').value);//converte texto em número
    const num2 = parseInt(document.getElementById('num2').value);
    const resultado = num1 + num2;
    mostraResultado.innerHTML = `Resultado: ${resultado}`; 
}