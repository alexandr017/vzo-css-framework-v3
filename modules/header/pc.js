function searchToggle(){
    let searchBlock = document.getElementsByClassName('search-block')[0]
    if(searchBlock.style.display != 'none') {
        searchBlock.style.display = 'none'
    } else {
        searchBlock.style.display = 'block'
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