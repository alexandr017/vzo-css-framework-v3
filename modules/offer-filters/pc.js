var more = document.getElementsByClassName("more-btn");
var i;
for (i = 0; i < more.length; i++) {
    more[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.previousElementSibling;
        if (panel.style.maxHeight){
            panel.style.maxHeight = null;
            panel.style.borderBottom = null;
        } else {
            panel.style.maxHeight = "100" + "%";
            this.style.borderBottom = "0";
        }
    });
}