var form = document.getElementById('addForm');
var dinheiro = document.getElementById("dinheiro");
var itemList = [...document.querySelectorAll('.itens')];

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
    itemList.forEach(btn=>{
        btn.addEventListener('click', e=>{
            removerItem(btn);
            //console.log(btn);
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
    var tr = e.parentElement;
    console.log(e);
    tr.removeChild(e);
    //console.log(tr.children);
    //itemList.removeChild();
};