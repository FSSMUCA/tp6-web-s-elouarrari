// Tab pour stocker l'historique
let history = [];

const form = document.getElementById("calcForm");
const errorMsg = document.getElementById("errorMsg");
const historyList = document.getElementById("historyList");

// Fonction de calcul
function calculate(a, b, op) {
    switch(op) {
        case '+': return a + b;
        case '-': return a - b;
        case '*': return a * b;
        case '/': return a / b;
        default: return null;
    }
}


form.addEventListener("submit", function(e){
    e.preventDefault();

    // Récupération des valeurs
    const numA = parseFloat(document.getElementById("numA").value);
    const numB = parseFloat(document.getElementById("numB").value);
    const operation = document.getElementById("operation").value;

    // Validation
    if(isNaN(numA) || isNaN(numB)) {
        errorMsg.textContent = "Veuillez saisir les deux nombres.";
        return;
    }

    if(operation === '/' && numB === 0) {
        errorMsg.textContent = "Division par zéro interdite !";
        return;
    }

    errorMsg.textContent = "";

    // Calcul
    const result = calculate(numA, numB, operation);

    // Ajout à l'historique
    const record = `${numA} ${operation} ${numB} = ${result}`;
    history.push(record);


    renderHistory();
});

// Fonction d'affichage de l'historique
function renderHistory() {
    historyList.innerHTML = "";
    history.forEach(item => {
        const div = document.createElement("div");
        div.classList.add("history-card");
        div.textContent = item;
        historyList.appendChild(div);
    });
}
