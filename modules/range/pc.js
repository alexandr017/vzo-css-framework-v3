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

function getListContent() {
    let result = [];

    for(let i = 0; i<=100; i+=5) {
        let li = document.createElement('li');
        li.append(i);
        result.push(li);
    }

    return result;
}

ul.append(...getListContent());

function imposeMinMax(el) {
    if (el.value != "") {
        if (parseInt(el.value) < parseInt(el.min)) {
            el.value = el.min;
        } else if (parseInt(el.value) > parseInt(el.max)) {
            el.value = el.max;
        }
    }
}

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
range = $('.range-slider > .input-range');
value = $('.range-slider > .range-value');
value.val(range.attr('value'));
range.on('input', function(){
    monparent=this.parentNode;
    value=$(monparent).find('.range-value');
    $(value).val(this.value);
});
value.on('input', function(){
    monparent=this.parentNode;
    range=$(monparent).find('.input-range');
    $(range).val(this.value);
});
function calc() {
    var summa = document.getElementById('sum').value;
}