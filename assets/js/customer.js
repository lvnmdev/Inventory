$('#regbtn').click(function () {
    var formData = $('#regform').serialize();

    $.ajax({
        type: 'ajax',
        method: 'post',
        url: 'registerCustomer',
        data: formData,
        async: false,
        dataType: 'json',
        success: function (response) {
            console.log(response);
            window.location.href = "index";
        }

    });
});

$('#loginbtn').click(function () {
    var formData = $('#loginform').serialize();

    $.ajax({
        type: 'ajax',
        method: 'get',
        url: 'loginCustomer',
        data: formData,
        async: false,
        dataType: 'json',
        success: function (response) {
            console.log(response);
            if (response.success) {
                console.log(response.data);
                alert("Logged In");
                window.location.href = "index";
            } else {
                alert("You dont fucking exist");
                location.reload();
            }

            //window.location.href = "index";
        },
        error: function () {
            location.reload();
            //window.location.href = "index";
        }

    });
});


