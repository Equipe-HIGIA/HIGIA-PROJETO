var modalBtn = document.querySelector('.modal-btn');
var modalBg = document.querySelector('.modal-bgd');
var modalClose = document.querySelector('.modals-closer');

modalBtn.addEventListener('click',function(){
modalBg.classList.add('bgs-active');
});
modalClose.addEventListener('click', function(){
    modalBg.classList.remove('bgs-active');
});