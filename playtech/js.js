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


// ==========================================================================

function filter(ID){
  document.getElementById('hidden1').value=ID;
  document.getElementById('myForm1').submit();
  }
