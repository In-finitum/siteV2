show_popup.addEventListener('click', function () {
    fill_form.style.display = "block";
    document.body.style.overflow = 'hidden';
});
close_form.addEventListener('click', function () {
    fill_form.style.display = "none";
    document.body.style.overflow = 'auto';
});
