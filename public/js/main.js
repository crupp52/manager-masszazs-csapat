$(document).ready(function () {
    $('.js-example-basic-multiple').val(selected_organizations)

    $('.js-example-basic-multiple').select2({
        placeholder: "Szervezeti egységek",
    });
});

$('#filename-clear-button').on('click', function () {
    $('#filename').val('');
    $('#filename-clear-button').hide()
})

$('#start-date-clear-button').on('click', function () {
    $('#start-date').val('');
    $('#start-date-clear-button').hide()
})

$('#end-date-clear-button').on('click', function () {
    $('#end-date').val('');
    $('#end-date-clear-button').hide()
})

$('#filename').on('keyup', function () {
    if ($(this).val() !== '') {
        $('#filename-clear-button').fadeIn(200)
    } else {
        $('#filename-clear-button').fadeOut(200)
    }
})

$('#start-date').on('change', function () {
    if ($(this).val() !== '') {
        $('#start-date-clear-button').fadeIn(200)
    } else {
        $('#start-date-clear-button').fadeOut(200)
    }
})

$('#end-date').on('change', function () {
    if ($(this).val() !== '') {
        $('#end-date-clear-button').fadeIn(200)
    } else {
        $('#end-date-clear-button').fadeOut(200)
    }
})
