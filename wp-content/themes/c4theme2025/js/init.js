// Navbar mobile
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.sidenav');
  var instances = M.Sidenav.init(elems, {
    // specify options here
  });
  // Função para fechar o sidenav
      var elem = document.querySelector(".sidenav");
      var instance = M.Sidenav.getInstance(elem);
      const fechar = document.getElementById("fechar");
      if(fechar){
      fechar.addEventListener('click', function(){
        instance.close();
      })
    }
}); 

// Material boxed(ZOOM) com função de tirar o navbar fixo
document.addEventListener('DOMContentLoaded', function() {
var elems = document.querySelectorAll('.materialboxed');
var instances = M.Materialbox.init(elems, {
inDuration: 400,
onOpenStart: function(){
  let fixedNav = document.getElementById('fixed-nav');
  let botoes = document.getElementById('botoes');
  fixedNav.classList.remove('fixed');
  botoes.classList.add('hide');
},
onCloseEnd: function (){
  let fixedNav = document.getElementById('fixed-nav');
  let botoes = document.getElementById('botoes');
  fixedNav.classList.add('fixed');
  botoes.classList.remove('hide');
}
});
});

// Máscara para telefone
function aplicarMascara(input, quantidadeNumeros) {
input.addEventListener('input', function(event) {
// Remove caracteres não numéricos do valor do input
let valorAtual = input.value.replace(/\D/g, '');
// Limita o valor aos primeiros "quantidadeNumeros" caracteres
valorAtual = valorAtual.slice(0, quantidadeNumeros);
// Atualiza o valor do input
input.value = valorAtual;
});
input.addEventListener('keypress', function(event) {
// Impede a digitação de letras
if (isNaN(event.key)) {
  event.preventDefault();
}
});
}
const meuInput = document.getElementById('telefone');
if(meuInput){
aplicarMascara(meuInput, 11);
}

// Scrollspy
document.addEventListener('DOMContentLoaded', function() {
var elems = document.querySelectorAll('.scrollspy');
var instances = M.ScrollSpy.init(elems, {
// specify options here
});
});


/*inicialize o leaflet*/
