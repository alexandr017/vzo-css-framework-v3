var termTitles = document.getElementsByClassName('termTitle');
for(let i=0; i<termTitles.length;i++) {
    termTitles[i].addEventListener('mouseenter', function (e) {
        document.getElementsByClassName('activeTerm')[0].classList.remove('activeTerm');
        e.target.classList.add("activeTerm");
        var activeTermDescription = e.target.dataset['content'];
        document.getElementsByClassName('termDescription')[0].innerHTML = activeTermDescription;
    })
}
var hiddenTermTitles = document.getElementsByClassName('displayNone');
if(hiddenTermTitles.length == 0) {
    document.getElementsByClassName('termShowMoreBtn')[0].style.display = 'none';
}
document.getElementsByClassName('termShowMoreBtn')[0].addEventListener('click', function (e) {
    if(hiddenTermTitles.length > 0) {
        for(let i=0; i<12;i++) {
            hiddenTermTitles[0].classList.remove('displayNone');
            if(hiddenTermTitles.length == 0) {
                e.target.style.display = 'none';
                return;
            }
        }
    } else {
        e.target.style.display = 'none';
    }
})
