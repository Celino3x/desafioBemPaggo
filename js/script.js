let quantidade = document.getElementById('quantidade');
let adicionar = document.getElementById('add');
let remover = document.getElementById('remover');


adicionar.onclick = function() {
   if(quantidade.value >= 0) {
     quantidade.value++;
   } else if(quantidade.value <= 0) {
     quantidade.value = 1;
   }
 };

remover.onclick = function() {
  if(quantidade.value > 0) {
    quantidade.value--;
  }
};