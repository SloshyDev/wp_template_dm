let numbers



document.addEventListener("aos:in:number1", ({ detail }) => {
    numbers = document.getElementsByClassName('number1')
    for (let index = 0; index < numbers.length; index++) {
        const element = numbers[index];
        anime({
            targets: element,
            duration: 6000,
            easing: "easeOutQuart",
            round: 100,
            update: function (anim) {
                numberWithCommas(element, remocecoma(element.innerHTML));
            },
            end: function (anim) {
                numberWithCommas(element, remocecoma(element.innerHTML));
            },
            innerHTML: [0, remocecoma(element.innerHTML)]
        });
    }
});

document.addEventListener("aos:in:number3", ({ detail }) => {
    numbers = document.getElementsByClassName('number3')
    for (let index = 0; index < numbers.length; index++) {
        const element = numbers[index];
        anime({
            targets: element,
            duration: 3000,
            easing: "easeInOutCubic",
            round: 1,
            update: function (anim) {
                numberWithCommas(element, remocecoma(element.innerHTML));
            },
            end: function (anim) {
                numberWithCommas(element, remocecoma(element.innerHTML));
            },
            innerHTML: [0, remocecoma(element.getAttribute('ini'))]
        });
    }
});



document.addEventListener("aos:in:number2", ({ detail }) => {
    numbers = document.getElementsByClassName('number2')
    let por = document.getElementsByClassName('transition-opacity')
    for (let index = 0; index < por.length; index++) {
        const element = por[index];

        if (element.classList) {
            element.classList.remove('opacity-100')
            element.classList.add('opacity-0')
        }

    }
    for (let index = 0; index < numbers.length; index++) {
        const element = numbers[index];
        anime({
            targets: element,
            duration: 4000,
            easing: "easeOutExpo",
            round: 10,
            update: function (anim) {
                numberWithCommas(element, remocecoma(element.innerHTML));
            },
            complete: function (anim) {
                for (let index = 0; index < por.length; index++) {
                    const element = por[index];

                    if (element.classList) {
                        element.classList.remove('opacity-0')
                        element.classList.add('opacity-100')
                    }

                }
            },
            innerHTML: [0, remocecoma(element.getAttribute('ini'))]
        });
    }

});


document.addEventListener("aos:in:bar", ({ detail }) => {
    let bar = document.getElementById('bar')
    bar.setAttribute('style', 'width:1vw')
    anime({
        targets: '#bar',
        width: '2vw',
        duration: 10000,
        easing: "easeInOutSine",
    });
});



function remocecoma(val) {
    var val = val.replace(/,/g, '')
    return parseFloat(val)
}
function numberWithCommas(tarjet, x) {
    x = x.toString();
    var pattern = /(-?\d+)(\d{3})/;
    while (pattern.test(x))
        x = x.replace(pattern, "$1,$2");
    tarjet.innerHTML = x

}

var atractivos = new Splide('#atractivos', {
    type: 'loop',
    breakpoints: {
        1024: {
            perPage: 4,
        },
        767: {
            perPage: 1,
        },
    },
    perPage: 4,
    perMove: 1,
    rewind: true,
    pagination: false,
    autoplay: true,
    arrowPath: 'M18.7778 4L36 20L18.7778 36M5 4L22.2222 20L5 36'
});

atractivos.mount();

var amenazas = new Splide('#amenazas', {
    type: 'loop',
    breakpoints: {
        1024: {
            perPage: 4,
        },
        767: {
            perPage: 1,
        },
    },
    perPage: 4,
    perMove: 1,
    rewind: true,
    pagination: false,
    autoplay: true,
    arrowPath: 'M18.7778 4L36 20L18.7778 36M5 4L22.2222 20L5 36'
});

amenazas.mount();


var carrousel = new Splide('#carrousel', {
    type: 'loop',
    breakpoints: {
        1024: {
            perPage: 4,
        },
        767: {
            perPage: 1,
        },
    },
    perPage: 4,
    perMove: 1,
    rewind: true,
    pagination: false,
    autoplay: true,
    arrowPath: 'M18.7778 4L36 20L18.7778 36M5 4L22.2222 20L5 36'
});

carrousel.mount();

function changeCarrousel(target) {

    target = document.getElementById(target)
    vSplide = document.getElementsByClassName('splide')

    for (let index = 0; index < vSplide.length; index++) {
        const element = vSplide[index];

        element.classList.add('hidden')

    }

    if (target.classList) {
        target.classList.remove('hidden')


    }

}

var options = {
    series: [12.5, 30.4, 35.7, 21.5],
    chart: {
        type: 'pie',
    },
    plotOptions: {
        pie: {
            customScale: 1
        }
    },
    fill: {
        colors: ['#5ac1dc', '#aeb521', '#003c3a', '#f18e1d']
    },
    legend: {
        show: false,
    },
    stroke: {
        show: true,
        colors: '#f9fafb',
        width: 8,
        dashArray: 0,
    },
    dataLabels: {
        enabled: false,
    }
};

var chart = new ApexCharts(document.querySelector("#arrecifes"), options);

chart.render();








onDOMContentLoaded = (event) => {
	
	
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

	
	
	
};


