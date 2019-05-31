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

    var infoToAdd = [];
    //obtem os valores preenchidos nos inputs
    var newItem = [...document.getElementsByClassName('entrada')];
    newItem.forEach(vlr=>{
        console.log(vlr.value);
        infoToAdd.push(vlr.value);
    });
    
    //cria uma nova tr na tabela
    var tr = document.createElement('tr');
    //adiciona classe
    tr.className = 'itens';
    //adiciona o texto com o valor digitado no campo

};

// Remove item
function removerItem(e){
    var tr = e.parentElement;
    //console.log(e);
    if(confirm("Deseja excluir o pedido?")){
       tr.removeChild(e); 
    };
};