document.addEventListener("click", function(e) {
    if(e.target && e.target.classList.contains("zero-pos-more")) {
        e.target.classList.toggle("active");
        var panel = e.target.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
            e.target.innerHTML = 'Подробнее <svg xmlns="http://www.w3.org/2000/svg" width="11" height="6" viewBox="0 0 11 6" fill="none">\n' +
                '<path d="M10 1L5.5 5L1 1" stroke="#017AD3"/>\n' +
                '</svg>\n' +
                '<span uk-icon="icon: chevron-down"></span> ';
        } else {
            panel.style.maxHeight = panel.scrollHeight + 0+ "px";
            e.target.innerHTML = 'Подробнее <svg xmlns="http://www.w3.org/2000/svg" width="11" height="6" viewBox="0 0 11 6" fill="none">\n' +
                '<path d="M1 5L5.5 1L10 5" stroke="#017AD3"/>\n' +
                '</svg> '+'<span uk-icon="icon: chevron-up"></span>';
        }
    }
});