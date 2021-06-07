var acc = document.getElementsByClassName("accordion");
var i;
for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight){
            panel.style.maxHeight = null;
            panel.style.borderBottom = null;
            this.style.borderBottom = "1px solid #ebebeb";

        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
            panel.style.borderBottom = "1px solid #ebebeb";
            this.style.borderBottom = "0";
        }
    });
}
