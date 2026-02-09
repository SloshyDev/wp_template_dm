function showModal(tarjet) {
  let modal = document.getElementById(tarjet);
  modal.classList.remove("hidden");
  modal.classList.add("flex");
  scrollTop = document.documentElement.scrollTop;
  (scrollLeft = document.documentElement.scrollLeft),
    (window.onscroll = function () {
      window.scrollTo(scrollLeft, scrollTop);
    });
}

function closeModal(tarjet) {
  let modals = document.getElementsByClassName("modal");

  for (let i = 0; i < modals.length; i++) {
    console.log(modals[i]);
    modals[i].classList.add("hidden");
    modals[i].classList.remove("flex");
  }

  window.onscroll = function () {};
}
let imgDown = document.getElementById("imgDown")
function mediaSource(tarjet, source) {
  tarjet = document.getElementById(tarjet);
	console.log(imgDown)
	imgDown.setAttribute("href", source);
	imgDown.setAttribute("download", source);
  tarjet.setAttribute("src", source);
 
}
