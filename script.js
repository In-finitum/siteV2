var showForm = document.querySelectorAll('.show_popup');

for(var i = 0; i < showForm.length; i++) {
    showForm[i].addEventListener('click', function (event) {
        fill_form.style.display = "block";
        document.body.style.overflow = 'hidden';

        var form = document.getElementById('popup1');
        var div = document.createElement('div');

        div.id = 'goodInfo';
        div.name = 'goodInfo';
        div.innerHTML = event.currentTarget.dataset.type;
        // div.style.display = 'none';
        form.appendChild(div);
    });
}

close_form.addEventListener('click', function () {
    fill_form.style.display = "none";
    document.body.style.overflow = 'auto';

    // inf
    var div = document.getElementById('goodInfo');
    div.parentNode.removeChild(div);
    // inf
});
