





// $(document).ready(function() {
//   $(window).scroll(function() {
//     if($(this).scrollTop() > 500) {
//       $('logo-navigation').addClass('bg-logo');
//     } else {
//       $('logo-navigation').removeClass('bg-logo');
//     }
//   })

// });

/*-------------------------------
Iniciando wpsupport
-------------------------------*/
let btnActiveChatWasap = document.getElementById('btn-active-list-chat-wasap');
let btnCloseListWasap = document.getElementById('btn-close-wasap');
let boxListChatWasap = document.querySelector('.box-list-chat-wasap');

btnActiveChatWasap.addEventListener('click', function(){
  boxListChatWasap.classList.toggle("view-lis-chat");
  btnCloseListWasap.classList.toggle("view-btn-none");
});
btnCloseListWasap.addEventListener('click', function(){
  boxListChatWasap.classList.toggle("view-lis-chat");
  btnCloseListWasap.classList.toggle("view-btn-none");
});