document.addEventListener('input', event => {
    const {value, min, max, parentNode} = event.srcElement;
    parentNode
        .querySelector('.l-slider-track > div')
        .style
        .width = 100 * (value - min) / (max - min) + '%';
});
$('input[type=range]').on('input', function(e){
    var min = e.target.min,
        max = e.target.max,
        val = e.target.value;
    $(e.target).css({
        'backgroundSize': (val - min) * 100 / (max - min) + '% 100%'
    });
}).trigger('input');