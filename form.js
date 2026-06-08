const radioSim = document.getElementById("sim");
const radioNao = document.getElementById("nao");
const botaoSalvar = document.getElementById("salvar");



radioSim.addEventListener("change", () => {
    botaoSalvar.disabled = false;
});

radioNao.addEventListener("change", () => {
    botaoSalvar.disabled = true;
});


