<script
    src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script
    type="text/javascript"
    src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"
></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).on('click', '.signup-btn', function (event) {
        event.preventDefault();
        $('.error-message').html('');
        let formData = new FormData(document.getElementById('addAccountForm'));
        $.ajax({
            type: 'POST',
            url: 'user.register',
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {

                if (response.status == 'success') {

                    $('#addAccountForm').trigger('reset');
                    $('#addAccount').modal('hide');

                    Swal.fire({
                        icon: 'success',
                        title: 'Qeydiyyat uğurla tamamlandı.',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            },
            error: function (error) {
                $('#nameError').html(error.responseJSON.errors.name);
                $('#surnameError').html(error.responseJSON.errors.surname);
                $('#emailError').html(error.responseJSON.errors.email);
                $('#passwordError').html(error.responseJSON.errors.password);
                $('#birthDateError').html(error.responseJSON.errors.birthdate);
            }
        })
    })
</script>
