// navbar scroll function
window.addEventListener("scroll", Scrollfn);

function Scrollfn() {
  // console.log(window.scrollY);
  var nav = document.getElementById("nav");
  if (window.scrollY > 25) {
    nav.classList.add("active_nav");
  } else {
    nav.classList.remove("active_nav");
  }
}