let dPs = document.getElementsByClassName('dP')
let titles = document.getElementsByClassName('title')
let downloadLinks = document.getElementsByClassName('downloadlink')




for (let i = 0; i < dPs.length; i++) {
    let dP = dPs[i];
    let downloadLink = downloadLinks[i]
    let imageTitle = dP.getAttribute('alt')
    let url = dP.getAttribute('shareLink')
    dP.setAttribute('alt', imageTitle)

    url = url.replace('preview', 'dwd')
    downloadLink.setAttribute('href', url)



}


function shareF(url) {
    window.open('https://www.facebook.com/sharer/sharer.php?u=' + url,
        'facebook-share-dialog',
        'width=800,height=600'
    );
}

function shareT(url) {
    window.open('https://twitter.com/intent/tweet?url=' + encodeURIComponent(url) + '&text=dataPoster');
}


function searchdP() {
    const input = document.getElementById("searchBar");
    const filter = input.value.toUpperCase();

    for (let i = 0; i < dPs.length; i++) {
        let dP = dPs[i];
        box = document.getElementById('box' + i)
        txtValue = dP.getAttribute('alt').normalize("NFD").replace(/[\u0300-\u036f]/g, "");
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            showdP(true, box)
        } else {
            if (box.classList) {
                box.classList.remove('opacity-100')
                box.classList.add('opacity-0')
            }
            showdP(false, box)
        }
    }

}

function showdP(state, box) {
    setTimeout(function () {
        if (state == true) {
            box.classList.remove('hidden')
			box.classList.add('flex')
            setTimeout(function () {
                box.classList.remove('opacity-0')
                box.classList.add('opacity-100')
            }, 400)
        } else {
            box.classList.add('hidden')
			box.classList.remove('flex')
        }
    }, 300);
}

