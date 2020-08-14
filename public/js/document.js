$(document).ready(function () {
    $('#document_type').parent().show()

    if ($('#document_type').val() !== '') {
        $('#document_type').prop( "disabled", true )
        handleFields($('#document_type').val())
    }
});

$('#document_type').change(function () {

    handleFields($('#document_type').val())
})

$('.confirm-delete-item').on('click', function (e) {
    e.preventDefault()
    Swal.fire({
        title: 'Törölni szeretnéd a kiválasztott dokumentumot?',
        text: "A művelet nem visszavonható.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Igen',
        cancelButtonText: 'Nem',
    }).then((result) => {
        if (result.value) {
            window.location.href = $(this).attr('href')
        }
    })
})

function handleFields(type) {
    if (type === '0') {
        //Invoice

        $('#name').parent().show()
        $('#addressee').parent().show()
        $('#date').parent().show()
        $('#user_name').parent().show()
        $('#description').parent().show()
        $('#organization_id').parent().show()

        $('#company_name').parent().show()
        $('#amount').parent().show()

        $('#reminder_type').parent().hide()

        $('#contract_order_type').parent().hide()
        $('#contract_order_number').parent().hide()

        $('#completed_date').parent().show()

        $('#document').parent().show()

        $('#save_button').show()
    } else if (type === '1') {
        //Reminder

        $('#name').parent().show()
        $('#addressee').parent().show()
        $('#date').parent().show()
        $('#user_name').parent().show()
        $('#description').parent().show()
        $('#organization_id').parent().show()

        $('#company_name').parent().hide()
        $('#amount').parent().hide()

        $('#reminder_type').parent().show()

        $('#contract_order_type').parent().hide()
        $('#contract_order_number').parent().hide()

        $('#completed_date').parent().show()

        $('#document').parent().show()

        $('#save_button').show()
    } else if (type === '2') {
        //Contract/Invoice

        $('#name').parent().show()
        $('#addressee').parent().show()
        $('#date').parent().show()
        $('#user_name').parent().show()
        $('#description').parent().show()
        $('#organization_id').parent().show()

        $('#company_name').parent().show()
        $('#amount').parent().show()

        $('#reminder_type').parent().hide()

        $('#contract_order_type').parent().show()
        $('#contract_order_number').parent().show()

        $('#completed_date').parent().show()

        $('#document').parent().show()

        $('#save_button').show()
    } else if (type === '3') {
        //Other

        $('#name').parent().show()
        $('#addressee').parent().show()
        $('#date').parent().show()
        $('#user_name').parent().show()
        $('#description').parent().show()
        $('#organization_id').parent().show()

        $('#company_name').parent().hide()
        $('#amount').parent().hide()

        $('#reminder_type').parent().hide()

        $('#contract_order_type').parent().hide()
        $('#contract_order_number').parent().hide()

        $('#completed_date').parent().hide()

        $('#document').parent().show()

        $('#save_button').show()
    } else {
        $('#name').parent().hide()
        $('#addressee').parent().hide()
        $('#date').parent().hide()
        $('#user_name').parent().hide()
        $('#description').parent().hide()
        $('#organization_id').parent().hide()
        $('#company_name').parent().hide()
        $('#amount').parent().hide()
        $('#reminder_type').parent().hide()
        $('#contract_order_type').parent().hide()
        $('#contract_order_number').parent().hide()
        $('#document').parent().hide()

        $('#save_button').hide()
    }
}
