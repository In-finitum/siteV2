var showForm = document.querySelectorAll('.show_popup');

for(var i = 0; i < showForm.length; i++) {
    showForm[i].addEventListener('click', function (event) {
        fill_form.style.display = "block";
        document.body.style.overflow = 'hidden';

        var form = document.getElementById('popup1');
        var div = document.createElement('div');
        var divPrice = document.createElement('div');

        div.id = 'goodInfo';
        divPrice.id = 'goodPrice';
        div.name = 'goodInfo';
        divPrice.id = 'goodPrice';
        div.innerHTML = event.currentTarget.dataset.type;
        divPrice.innerHTML = event.currentTarget.dataset.effect;
        div.style.backgroundColor = '#5EC55C';
        divPrice.style.backgroundColor = '#5EC55C';
        div.style.textAlign = 'center';
        div.style.padding = '5 px';
        div.style.borderRadius = '20px';
        div.style.marginTop = "15px";
        divPrice.style.textAlign = 'center';
        divPrice.style.padding = '5 px';
        divPrice.style.borderRadius = '20px';
        divPrice.style.marginTop = "5px";
        // div.style.display = 'none';
        // divPrice.style.display = 'none';
        form.appendChild(div);
        form.appendChild(divPrice);
    });
}

close_form.addEventListener('click', function () {
    fill_form.style.display = "none";
    document.body.style.overflow = 'auto';

    // inf
    var div = document.getElementById('goodInfo');
    var divPrice = document.getElementById('goodPrice');
    div.parentNode.removeChild(div);
    divPrice.parentNode.removeChild(divPrice);
    // inf
});
