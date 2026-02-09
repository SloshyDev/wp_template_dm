//Setting up the logics of submenus

let hasChildren = document.getElementsByClassName('menu-item-has-children')

  for (let i = 0; i < hasChildren.length; i++) {
    const children = hasChildren[i];
    const dropItem = children.getElementsByClassName('dropd')[0].innerHTML
    const dropDown = document.createElement('div')
    const ul = document.createElement('ul')
    let nested = children.classList.contains('nested')

    if (children.classList) {
        children.classList.add(nested ? 'group/Nested' : 'group/Main', 'flex-col', 'md:flex-row', 'flex', 'z-10')
    }

    if (ul.classList) {
        ul.classList.add('navbar-dropdown', 'dropd')
    }

    if (dropDown.classList) {
        dropDown.setAttribute('class', nested ? 'md:p-0 md:pl-2 -mt-1 group-hover/Nested:block left-[100%] hidden md:absolute' : 'pt-2 md:pt-10 group-hover/Main:block hidden md:absolute')
    }

    var elem = document.querySelector('#dropDownArrow');
    var clone = elem.cloneNode(true);

    ul.innerHTML = dropItem
    dropDown.appendChild(ul)
    children.appendChild(dropDown)

    children.getElementsByClassName('dropd')[0].remove()

    clone.setAttribute('class', nested ? 'group-hover/Nested:rotate-180 group-hover/Nested:transition-transform' : 'group-hover/Main:rotate-180' + ' hidden transition-transform')
    children.appendChild(clone)



    if (clone.classList) {
        clone.classList.remove('hidden')
    }

}


//Carrousel home
bulmaCarousel.attach("#carousel-home", {
    loop: true,
    autoplay: true,
    pauseOnHover: true,
    pagination:false,
    slidesToScroll: 1,
    slidesToShow: 1,
});
//Carrousel diveAtlas
bulmaCarousel.attach(".carousel-diveAtlas", {
    loop: true,
    infinite:true,
    autoplay: true,
    pauseOnHover: true,
    navigationSwipe:true,
    pagination:false,
    slidesToShow: 5,
    slidesToScroll: 1,
    breakpoints: [{ changePoint: 1300, slidesToShow: 1, slidesToScroll: 1 }]
});

bulmaCarousel.attach(".carousel-dataPub", {
    loop: true,
    infinite:true,
    autoplay: true,
    pauseOnHover: true,
    navigationSwipe:true,
    pagination:false,
    slidesToShow: 3,
    slidesToScroll: 1,
    breakpoints: [{ changePoint: 1300, slidesToShow: 1, slidesToScroll: 1 }]
});

//Carrousel dataKids
bulmaCarousel.attach("#carousel-datakids", {
    loop: true,
    pauseOnHover: true,
    slidesToScroll: 1,
    slidesToShow: 1,
    pagination: false
});
//Carrousel Multimedia diveAtlas
bulmaCarousel.attach(".carousel-diveAtlas1", {
    loop: true,
    infinite:true,
    autoplay: true,
    pauseOnHover: true,
    pagination:false,
    autoplaySpeed: 4500,
    slidesToShow: 3,
    slidesToScroll: 1,
    breakpoints: [{ changePoint: 1200, slidesToShow: 1, slidesToScroll: 1 }, { changePoint: 1400, slidesToShow: 2, slidesToScroll: 1 }]
});
//Scroll to top
var btn = $('#button');
$(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
        btn.addClass('show');
    } else {
        btn.removeClass('show');
    }
});
btn.on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, '800');
});
// Aimation show stories
AOS.init({
    easing: 'ease-out-back',
});
//Share button Facebook
(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
// Bulma Collapsible
$(function () {
    $("#accordion").accordion({
        collapsible: true,
        heightStyle: "content"
    });
});
//Intros 
$( ".dmLogo" ).height( "100%" );





