var form = document.getElementById('addForm');
var dinheiro = document.getElementById("dinheiro");
var buttons = [...document.querySelectorAll('.itens')];

addEventListenerInBtns();

form.addEventListener('submit', adicionarItem);

// adiciona o eventListenet para mudar mascara do campo valor do pedido ao digitar
this.dinheiro.addEventListener('keyup', applyMaskMoney);

//Aplica mascara do valor em "dinheiro", exibindo . e , nos devidos lugares.
function applyMaskMoney(e){
    $(document).ready(function(){
        $("#dinheiro").maskMoney({
            // define como deve ser "." para milhar e "," para decimal.
            showSymbol:true, symbol:"R$", decimal:",", thousands:"."
        });
    });
};

function addEventListenerInBtns(){
    buttons.forEach(btn=>{
        btn.addEventListener('click', e=>{
            console.log(e);
        });
    }); 
};

// Add item
function adicionarItem(e){

    e.preventDefault();

    console.log("adicionar");
};

// Remove item
function removerItem(e){
    console.log("deletar");
};