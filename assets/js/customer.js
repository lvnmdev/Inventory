$('#regbtn').click(function () {
	var formData = $('#regform').serialize();
	$.ajax({
		type: 'ajax',
		method: 'post',
		url: 'registerCustomer',
		data: formData,
		async: true,
		dataType: 'json',
		success: function (response) {}
	});
});

$('#loginbtn').click(function () {
	var formData = $('#loginform').serialize();
	$.ajax({
		type: 'ajax',
		method: 'post',
		url: 'loginUser',
		data: formData,
		async: true,
		dataType: 'json',
		success: function (response) {
			console.log(response);
			if (response.success) {
				if (response.data === "Customer") {
					window.location.href = "profile";
				} else if (response.data === "Employee") {	
					if (response.position === "Admin") {
						window.location.href = "../Admin/index";
					} else if (response.position === "Inventory") {
						window.location.href = "../Products/index";
					} else if (response.position === "Purchase") {
						window.location.href = "../Purchase/index";
					} else if (response.position === "Sales") {
						window.location.href = "../Sales/index";
					}
				}
			} else {
				alert("Wrong username/password");
				location.reload();
			}
		},
		error: function () {
			alert("Error");
		}
	});
});
