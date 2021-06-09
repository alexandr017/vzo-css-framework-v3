document.getElementById('count_range_input').addEventListener('change', function (event) {
    let elem = event.target;
    document.getElementById('count_range_input_color').style.width = elem.value+'%';
    document.getElementById('count_range_input_value').innerHTML = elem.value;
})