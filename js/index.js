var dinheiro = document.getElementById("dinheiro");

// adiciona o eventListenet para mudar mascara do campo valor do pedido ao digitar
this.dinheiro.addEventListener('keyup', applyMaskMoney);

//Aplica mascara do valor em "dinheiro", exibindo . e , nos devidos lugares.
function applyMaskMoney(e){
    if(e != NaN){
        $(document).ready(function(){
            $("#dinheiro").maskMoney({
                // define como deve ser "." para milhar e "," para decimal.
                showSymbol:true, symbol:"R$", decimal:",", thousands:"."
            });
        });
    };
};
