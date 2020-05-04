$(document).ready(function () {
    // $.validator.setDefaults({
    //     submitHandler: function () {
    //         alert( "Form successful submitted!" );
    //     }
    // });
    $('#quickForm').validate({
        rules: {
            tendanhmuc: {
                required: true,
                minlength: 5
            },
            mota: {
                required: true,
            },
        },
        messages: {
            tendanhmuc: {
                required: "Vui lòng nhập tên danh mục",
                minlength: "Tên danh mục phải lớn hơn 5 ký tự",
            },
            mota: {
                required: "Vui lòng nhập mô tả danh mục",
            },
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
});
