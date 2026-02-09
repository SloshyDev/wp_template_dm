var options = {
  series: [
    {
      data: [725, 455],
    },
  ],
  tooltip: {
    enabled: false,
  },
  colors: ["#1a7470"],
  chart: {
    type: "bar",
    height: "100%",
    toolbar: {
      show: false,
    },
    selection: {
      enabled: false,
    },
  },
  plotOptions: {
    bar: {
      borderRadius: 4,
      horizontal: true,
    },
  },
  dataLabels: {
    enabled: false,
  },
  yaxis: {
    show: false,
  },
  xaxis: {
    labels: {
      style: {
        colors: ["#6a9a4a"],
        fontSize: "2vw",
        fontFamily: "myriad-pro-condensed",
        fontWeight: 700,
        cssClass: "font-myriadCond font-bold",
      },
    },
  },
};

var chart = new ApexCharts(document.querySelector("#chart"), options);
chart.render();

var optionsCarrousel = {
  type: "loop",
  breakpoints: {
    1024: {
      perPage: 3,
    },
    767: {
      perPage: 1,
    },
  },
  perPage: 3,
  perMove: 1,
  rewind: true,
  pagination: false,
  autoplay: true,
  arrowPath: "M18.7778 4L36 20L18.7778 36M5 4L22.2222 20L5 36",
};

var videos = new Splide("#multimedia", optionsCarrousel);

var galeria = new Splide("#galeria", optionsCarrousel);

var datapub = new Splide("#datapub", optionsCarrousel);

var sponsors = new Splide("#sponsors", {
  type: "loop",
  breakpoints: {
    1024: {
      perPage: 6,
    },
    767: {
      perPage: 1,
    },
  },
  perPage: 6,
  perMove: 1,
  rewind: true,
  pagination: false,
  autoplay: true,
  arrowPath: "M18.7778 4L36 20L18.7778 36M5 4L22.2222 20L5 36",
});

videos.mount();
galeria.mount();
datapub.mount();
sponsors.mount();

let galeriaBox = document.getElementById("galeria");
let multimediaBox = document.getElementById("multimedia");

function changeCarrousel(id) {
  if (id == "galeria") {
    galeriaBox.classList.remove("hidden");
    multimediaBox.classList.add("hidden");
  } else {
    galeriaBox.classList.add("hidden");
    multimediaBox.classList.remove("hidden");
  }
}

let modal = document.getElementById("modal");
let video = document.getElementById("video");

window.addEventListener("keydown", function (event) {
  if (event.key === "Escape") {
    closeModal();
  }
});

function closeModal() {
  modal.classList.remove("flex");
  modal.classList.add("hidden");
  video.pause();
}

function showModal(url) {
  modal.classList.remove("hidden");
  modal.classList.add("flex");

  video.setAttribute("src", url);
  video.play();
}
