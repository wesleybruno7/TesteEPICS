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

    newItens = [];
    
    //obtem os valores preenchidos nos inputs
    var inputValues = [...document.getElementsByClassName('entrada')];
    inputValues.forEach(vlr=>{
        newItens.push(vlr.value);
        
    });
    console.log(newItens);
    
    //cria uma nova tr na tabela
    var tr = document.createElement('tr');

    //adiciona classe
    tr.className = 'itens';
    
    //adiciona o texto de entrada
    
    
};

// Remove item
function removerItem(e){
    var tr = e.parentElement;
    //console.log(e);
    if(confirm("Deseja excluir o pedido?")){
       tr.removeChild(e); 
    };
};
