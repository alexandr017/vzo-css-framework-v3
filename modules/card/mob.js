document.addEventListener("click", function(e) {
    if(e.target && e.target.classList.contains("card-more")) {
        e.target.classList.toggle("active");
        var panel = e.target.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
            e.target.innerHTML = 'Подробнее <img src="/v3/images/arrow-down.svg">' +
                '<span uk-icon="icon: chevron-down"></span> ';
        } else {
            panel.style.maxHeight = panel.scrollHeight + 0+ "px";
            e.target.innerHTML = 'Подробнее <img style="transform: rotate(180deg)" src="/v3/images/arrow-down.svg">'+
                '<span uk-icon="icon: chevron-up"></span>';
        }
    }
});

document.querySelectorAll('.tab-wrap').forEach((e) => {
    let tabTabs = e.querySelectorAll('.tab .tablinks');
    let tabItems = e.querySelectorAll('.tabs-items .tabcontent');
    for(let i =0;i<tabTabs.length;i++) {
        tabTabs[0].click();
        tabTabs[i].onclick = () => {
            tabTabs.forEach((e)  => { e.classList.remove('on') });
            tabItems.forEach((e)  => { e.classList.remove('on') });
            tabTabs[i].classList.add('on');
            tabItems[i].classList.add('on');
        }
    }
});