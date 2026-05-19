// JS for partial: join-our-team
$(document).ready(function () {
    const $fileInput = $('.file-cv');
    const $btn = $('.btn-add-cv');
    const $fileName = $('.file-cv-name');

    $fileInput.hide();

    $btn.on('click', function (e) {
        e.preventDefault();
        $fileInput.click();
    });

    $fileInput.on('change', function () {
        const name = this.files.length > 0 ? this.files[0].name : 'Ningún archivo seleccionado';
        $fileName.text(name);
    });
});
