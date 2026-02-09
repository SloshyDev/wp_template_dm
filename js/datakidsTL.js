// Initialize Splide for editions
var dk_editions = new Splide("#datakids_editions", {
    type: "loop",
    start: 4,
    perPage: 1,
    perMove: 1,
    rewind: true,
    gap: ".5vw",
    pagination: false,
    autoplay: false,
    lazyLoad: "nearby",
    arrowPath: "M18.7778 4L36 20L18.7778 36M5 4L22.2222 20L5 36",
    role: "banner",
});
dk_editions.mount();

let edition = document.getElementById("edition");

dk_editions.on("moved", function () {
    changeEditions(dk_editions.index);
});


let editions = document.getElementsByClassName("editions");

function changeEditions(index) {
    let target = document.getElementById("dk" + (index + 1));
    for (let i = 0; i < editions.length; i++) {
        editions[i].classList.add("hidden");
        editions[i].classList.remove("first:block", "flex");
    }
    target.classList.remove("hidden");
    target.classList.add("flex");
}

changeEditions(4);

function showModal(modalId, slideIndex) {
    let modal = document.getElementById("galleryModal" + modalId);
    modal.classList.remove("hidden");
    modal.classList.add("flex");

    let scrollTop = document.documentElement.scrollTop;
    let scrollLeft = document.documentElement.scrollLeft;

    window.onscroll = function () {
        window.scrollTo(scrollLeft, scrollTop);
    };

    if (modalId === 1) {
        g1.go(slideIndex === 0 ? slideIndex + 1 : slideIndex);
    } else if (modalId === 2) {
        g2.go(slideIndex === 0 ? slideIndex + 1 : slideIndex);
    } else if (modalId === 3) {
        g3.go(slideIndex === 0 ? slideIndex + 1 : slideIndex);
    } else if (modalId === 4) {
        g4.go(slideIndex === 0 ? slideIndex + 1 : slideIndex);
    } else if (modalId === 5) {
        g5.go(slideIndex === 0 ? slideIndex + 1 : slideIndex);
    }
}

function closeModal() {
    let modals = document.getElementsByClassName("modal");
    for (let i = 0; i < modals.length; i++) {
        modals[i].classList.add("hidden");
        modals[i].classList.remove("flex");
    }
    window.onscroll = function () { };
}

function goto(modalId, slideIndex) {
    if (modalId === 1) g1.go(slideIndex);
    if (modalId === 2) g2.go(slideIndex);
    if (modalId === 3) g3.go(slideIndex);
    if (modalId === 4) g4.go(slideIndex);
	if (modalId === 5) g5.go(slideIndex);
}

// Splide options
let options = {
    type: "fade",
    perPage: 1,
    perMove: 1,
    rewind: true,
    gap: ".5vw",
    pagination: false,
    autoplay: false,
    arrows: false,
    role: "banner",
};

let optionsSync = {
    type: "loop",
    perPage: 5,
    perMove: 1,
    rewind: true,
    gap: ".5vw",
    pagination: false,
    autoplay: false,
    arrows: true,
    arrowPath: "M18.7778 4L36 20L18.7778 36M5 4L22.2222 20L5 36",
    role: "banner",
};

// Initialize Splide galleries
var g1 = new Splide("#g1", options),
    gs1 = new Splide("#gsync1", optionsSync);
g1.sync(gs1);
g1.mount();
gs1.mount();

var g2 = new Splide("#g2", options),
    gs2 = new Splide("#gsync2", optionsSync);
g2.sync(gs2);
g2.mount();
gs2.mount();

var g3 = new Splide("#g3", options),
    gs3 = new Splide("#gsync3", optionsSync);
g3.sync(gs3);
g3.mount();
gs3.mount();

var g4 = new Splide("#g4", options),
    gs4 = new Splide("#gsync4", optionsSync);
g4.sync(gs4);
g4.mount();
gs4.mount();

var g5 = new Splide("#g5", options),
    gs5 = new Splide("#gsync5", optionsSync);
g5.sync(gs5);
g5.mount();
gs5.mount();

// Magnifier functionality
let myRange = document.getElementById("myRange"),
    numberwheels = 2;
var img, glass, w, h, bw;

function magnify(imgId, zoomLevel, imgSrc) {
    img = document.getElementById(imgId);
    glass = document.createElement("DIV");
    glass.setAttribute("id", "magnifier");
    glass.setAttribute("class", "img-magnifier-glass transition-transform scale-0 cursor-none");
    img.parentElement.insertBefore(glass, img);

    glass.style.backgroundImage = "url('" + imgSrc + "')";
    glass.style.backgroundRepeat = "no-repeat";
    glass.style.backgroundSize = img.width * zoomLevel + "px " + img.height * zoomLevel + "px";

    bw = 1;
    w = glass.offsetWidth / 2;
    h = glass.offsetHeight / 2;
}

function zoom(imgId, zoomLevel) {
    function moveMagnifier(e) {
        e.preventDefault();
        let pos = getCursorPos(e);
        let x = pos.x;
        let y = pos.y;

        if (x > img.width - w / zoomLevel) x = img.width - w / zoomLevel;
        if (x < w / zoomLevel) x = w / zoomLevel;
        if (y > img.height - h / zoomLevel) y = img.height - h / zoomLevel;
        if (y < h / zoomLevel) y = h / zoomLevel;

        glass.style.left = x - w + "px";
        glass.style.top = y - h + "px";
        glass.style.backgroundPosition = "-" + (x * zoomLevel - w + bw) + "px -" + (y * zoomLevel - h + bw) + "px";
    }

    function getCursorPos(e) {
        let rect = img.getBoundingClientRect();
        let x = e.pageX - rect.left - window.pageXOffset;
        let y = e.pageY - rect.top - window.pageYOffset;
        return { x: x, y: y };
    }

    glass.onwheel = moveMagnifier;
    img.onwheel = moveMagnifier;
    glass.addEventListener("mousemove", moveMagnifier);
    img.addEventListener("mousemove", moveMagnifier);
    glass.addEventListener("touchmove", moveMagnifier);
    img.addEventListener("touchmove", moveMagnifier);
}

let magnifierContainer = document.getElementById("magnifierContainer");

function removeLen() {
    let magnifier = document.getElementById("magnifier");
    if (magnifier.classList) {
        magnifier.classList.add("scale-0");
        magnifier.classList.remove("scale-100");
    }
}

function showLen() {
    let magnifier = document.getElementById("magnifier");
    if (magnifier.classList) {
        magnifier.classList.remove("scale-0");
        magnifier.classList.add("scale-100");
    }
    magnifierContainer.addEventListener("wheel", wheelZoom());
}

function wheelZoom() {
    return (e) => {
        const delta = Math.sign(e.deltaY);
        if (delta === 1 && numberwheels < 11) {
            numberwheels += 0.1;
            zoom("zoomImage", numberwheels);
            myRange.value = numberwheels;
        } else if (delta === -1 && numberwheels > 1.5) {
            numberwheels -= 0.1;
            zoom("zoomImage", numberwheels);
            myRange.value = numberwheels;
        }
    };
}

magnifierContainer.addEventListener("mouseenter", showLen);
magnifierContainer.addEventListener("mouseleave", removeLen);
magnify("zoomImage", 2, "https://datamares.org/wp-content/uploads/2024/09/dataPoster-MEGALODON-1.webp");
zoom("zoomImage", 2);

// DataPoster functionality
let dPLowRes = [],
    dPHighRes = [],
    dPLink = [],
    dPSummary = [],
    dPtitle = [],
    dPshare = [],
    slide = 0;

let dPLinkT = document.getElementById("dPLink"),
    dPLowResT = document.getElementById("zoomImage"),
    dPSummaryT = document.getElementById("dPsummary"),
    dPTitleT = document.getElementById("dPtitle"),
    dPHighResT = document.getElementById("magnifier"),
    dPxLink = document.getElementById("xLink"),
    dPfLink = document.getElementById("fLink");

function nextSlide() {
    slide = slide === dPLowRes.length - 1 ? 0 : slide + 1;
    updateSlide();
}

function prevSlide() {
    slide = slide === 0 ? dPLowRes.length - 1 : slide - 1;
    updateSlide();
}

function updateSlide() {
    dPLowResT.classList.remove("opacity-100");
    dPLowResT.classList.add("opacity-0");

    setTimeout(() => {
        dPLowResT.setAttribute("src", dPLowRes[slide]);
        dPLinkT.setAttribute("href", dPLink[slide]);
        dPHighResT.style.backgroundImage = "url('" + dPHighRes[slide] + "')";
        dPTitleT.innerHTML = dPtitle[slide];
        dPSummaryT.innerHTML = dPSummary[slide];

        let tweetText = encodeURIComponent("Mira este nuevo #dataPoster echo por @dataMares");
        dPxLink.setAttribute(
            "href",
            `https://twitter.com/intent/tweet?text=${tweetText}&url=${encodeURIComponent(dPshare[slide])}`
        );
        dPfLink.setAttribute(
            "href",
            `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(dPshare[slide])}`
        );

        dPLowResT.classList.add("opacity-100");
        dPLowResT.classList.remove("opacity-0");
    }, 300);
}

function shareF(url) {
    window.open(`https://www.facebook.com/sharer/sharer.php?u=${url}`, "facebook-share-dialog", "width=800,height=600");
}

function shareT(url) {
    window.open(`https://twitter.com/intent/tweet?url=${encodeURIComponent(url)}&text=dataPoster`);
}