function scroll(element){
  $('html, body').animate({
 scrollTop: ($(element).offset().top)}, 800); }

function scrollToElem(id){
  var element = document.getElementById(id);
  scroll(element);
}
function scrollToTop(){
  var element = document.body;
  scroll(element);
}