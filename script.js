var showForm = document.activeElement.querySelector('.show_popup');

showForm.addEventListener('click', function () {
    fill_form.style.display = "block";
    document.body.style.overflow = 'hidden';

    // inf
    var form = document.getElementById('popup1');
    var div = document.createElement('div');
    div.id = 'goodInfo';
    div.innerHTML = showForm.dataset.type;
    div.style.display = 'none';
    form.appendChild(div);
    // inf
});

close_form.addEventListener('click', function () {
    fill_form.style.display = "none";
    document.body.style.overflow = 'auto';

    // inf
    div.
    // inf
});
