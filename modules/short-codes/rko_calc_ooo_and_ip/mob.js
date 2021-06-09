var rkoPayCount = document.getElementsByClassName('rko-pay-count')[0];
rkoPayCount.onchange = rkoPayCount.oninput = rkoPayCount.onpaste = function(event) {
    let elem = event.target;
    elem.value = elem.value.replace(/[^0-9]/g, '');
}
document.getElementsByClassName('prev-pay-count')[0].addEventListener('click',function (event) {
    let elem = event.target;
    rkoPayCount.value = rkoPayCount.value-1;
})
document.getElementsByClassName('next-pay-count')[0].addEventListener('click',function (event) {
    let elem = event.target;
    rkoPayCount.value = Number(rkoPayCount.value)+1;
})