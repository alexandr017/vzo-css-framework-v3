function openNav(){
    let block = document.getElementsByClassName('header-block')[0]
    let header = document.getElementsByClassName('header')[0]
    let menuBtn = document.getElementsByClassName('close')[0]
    let burgerBtn = document.getElementsByClassName('burger-menu')[0]
    let searchMob = document.getElementsByClassName('search-block')[0]
    let searchButton = document.getElementsByClassName('search-close-btn')[0]
    let headerMenu = document.getElementsByClassName('links')[0]
    if(block.style.display != 'none') {
        block.style.display = 'none'
        header.style.position = ''
        burgerBtn.style.display = 'block'
        menuBtn.style.display = 'none'

    } else {
        block.style.display = 'block'
        burgerBtn.style.display = 'none'
        menuBtn.style.display = 'block'
        searchMob.style.display = 'block'
        searchButton.style.display= 'block'
        headerMenu.style.marginTop = '200px'
    }
}

function searchClose(){
    let searchBlock = document.getElementsByClassName('search-block')[0]
    let closeBtn = document.getElementsByClassName('search-close-btn')[0]
    let headerMenu = document.getElementsByClassName('links')[0]
    if(searchBlock.style.display != 'none') {
        searchBlock.style.display = 'none'
        closeBtn.style.display = 'none'
        headerMenu.style.marginTop = '0'


    } else {
        searchBlock.style.display = 'block'
        closeBtn.style.display = 'block'

    }
}

var modals = document.querySelectorAll("[data-modal]");

modals.forEach(function (trigger) {
    trigger.addEventListener("click", function (event) {
        event.preventDefault();
        var modal = document.getElementById(trigger.dataset.modal);
        modal.classList.add("open");
        var exits = modal.querySelectorAll(".modal-exit");
        exits.forEach(function (exit) {
            exit.addEventListener("click", function (event) {
                event.preventDefault();
                modal.classList.remove("open");
            });
        });
    });
});