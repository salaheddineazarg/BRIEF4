var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
 


if (prevScrollpos < currentScrollPos) {
  document.getElementById("navbar").style.top = "-80px";
} else {
    document.getElementById("navbar").style.top = "0";
  }
  prevScrollpos = currentScrollPos;
}
// ====================================================================

var test= document.getElementById('video');
test.play();

var test1=document.getElementById('videocover');
test1.play();

function login() {
  var login = document.querySelector('.form');
  var sign = document.querySelector('.formsign');
  var nav = document.querySelector('.nav2');
  var nav2 = document.querySelector('.nav');

  login.style.display="flex";
  sign.style.display="none";
  nav.style.display="none";
  nav2.style.display="block";

}
function sign () {
  var login = document.querySelector('.form');
  var sign = document.querySelector('.formsign');
  var nav = document.querySelector('.nav')
  var nav2 = document.querySelector('.nav2');
  login.style.display="none";
  sign.style.display="flex";
  nav.style.display="none";
  nav2.style.display="block";

}

// function filter(){
//   const c = getElementById('tt');
//   console.log(typeof ,c);
//   alert (c);
// }
function filter(ID){
  document.getElementById('hidden1').value=ID;
  document.getElementById('myForm1').submit();

  }
