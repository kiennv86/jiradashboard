$(document).ready(function () {

    // Permission Edit form
    $('#add-permission').validate({
        rules: {
            perm_name: {
                required: true
            }
        }, // end rules
        messages: {
            perm_name: {
                required: "Trường bắt buộc."
            }
        },
        highlight: function (element) {
            $(element).closest('div').addClass("f_error");
        },
        unhighlight: function (element) {
            $(element).closest('div').removeClass("f_error");
        },
        errorPlacement: function (error, element) {
            $(element).closest('div').append(error);
        }
    }); // end validate 

    // Group Edit form
    $('#add-group').validate({
        rules: {
            group_name: {
                required: true
            }
        }, // end rules
        messages: {
            group_name: {
                required: "Trường bắt buộc."
            }
        },
        highlight: function (element) {
            $(element).closest('div').addClass("f_error");
        },
        unhighlight: function (element) {
            $(element).closest('div').removeClass("f_error");
        },
        errorPlacement: function (error, element) {
            $(element).closest('div').append(error);
        }
    }); // end validate 

    // User Add form
    $('#add-user').validate({
        rules: {
            username: {
                required: true
            },
            name: {
                required: true
            },
            user_email: {
                required: true,
                email: true
            },
            user_group: {
                required: true
            },
            password: {
                required: true,
                minlength: 5
            },
            password_confirm: {
                required: true,
                minlength: 5,
                equalTo: "#password"
            }
        }, // end rules
        messages: {
            username: {
                required: "Trường bắt buộc."
            },
            name: {
                required: "Trường bắt buộc."
            },
            email: {
                required: "Trường bắt buộc.",
            },
            user_group: {
                required: "Trường bắt buộc."
            },
            password: {
                required: "Trường bắt buộc",
                minlength: "Nhập ít nhất 6 ký tự"
            },
            password_confirm: {
                required: "Nhập lại mật khẩu",
                minlength: "Nhập ít nhất 6 ký tự",
                equalTo: "Mật khẩu không khớp"
            }

        },
        highlight: function (element) {
            $(element).closest('div').addClass("f_error");
        },
        unhighlight: function (element) {
            $(element).closest('div').removeClass("f_error");
        },
        errorPlacement: function (error, element) {
            $(element).closest('div').append(error);
        }
    }); // end validate 

    // User Edit form
    $('#edit-user').validate({
        rules: {
            username: {
                required: true
            },
            name: {
                required: true
            },
            user_email: {
                required: true,
                email: true
            },
            user_group: {
                required: true
            },
            password_confirm: {
                equalTo: "#password"
            }
        }, // end rules
        messages: {
            username: {
                required: "Trường bắt buộc."
            },
            name: {
                required: "Trường bắt buộc."
            },
            email: {
                required: "Trường bắt buộc.",
            },
            user_group: {
                required: "Trường bắt buộc."
            },
            password_confirm: {
                equalTo: "Mật khẩu không khớp"
            }

        },
        highlight: function (element) {
            $(element).closest('div').addClass("f_error");
        },
        unhighlight: function (element) {
            $(element).closest('div').removeClass("f_error");
        },
        errorPlacement: function (error, element) {
            $(element).closest('div').append(error);
        }
    }); // end validate 

}); //end ready