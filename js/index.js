var dinheiro = document.getElementById("dinheiro");

// adiciona o eventListenet para mudar mascara do campo valor do pedido ao digitar
dinheiro.addEventListener('keyup', applyMaskMoney);

//Aplica mascara do valor em "dinheiro", exibindo . e , nos devidos lugares.
function applyMaskMoney(e){
    $(document).ready(function(){
        $("#dinheiro").maskMoney({
            // define como deve ser "." para milhar e "," para decimal.
            showSymbol:true, symbol:"R$", decimal:",", thousands:"."
        });
    });
};



var form = document.getElementById('addForm');

// Form submit event
form.addEventListener('submit', adicionarItem);

// Add item
function adicionarItem(e){
    e.preventDefault();
    console.log("adicionar")
};



//var itemList = document.getElementById('items');
// Delete event
//itemList.addEventListener('click', removerItem);
// Remove item
function removerItem(e){
    console.log("deletar")
};