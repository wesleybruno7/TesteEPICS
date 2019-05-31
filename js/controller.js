class BaseController{

    constructor(){
    var form = document.getElementById('addForm');
    var dinheiro = document.getElementById("dinheiro");

    initBtnEvents();

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


};

initBtnEvents(){
let buttons = [...document.querySelectorAll('.itens')];

buttons.forEach(btn=>{
    btn.addEventListener('click', e=>{
        console.log(e);
    });
});    

// Add item
adicionarItem(e){

    e.preventDefault();

    console.log("adicionar");
};

// Remove item
removerItem(e){
    console.log("deletar");
};
};