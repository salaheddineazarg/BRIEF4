var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  console.log("in prevScrollpos",prevScrollpos);
  console.log("in currentScrollPos",currentScrollPos);

if (prevScrollpos < currentScrollPos) {
  document.getElementById("navbar").style.top = "-80px";
} else {
    document.getElementById("navbar").style.top = "0";
  }
  prevScrollpos = currentScrollPos;
}

var test= document.getElementById('video');
test.play();
