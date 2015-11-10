var alertControllers = (function ($) {

	var pedirDatosUsuario = function () {
//
		swal({
			title: "An input!",
			text: "Write something interesting:",
			type: "input",
			showCancelButton: true,
			closeOnConfirm: false,
			animation: "slide-from-top",
			inputPlaceholder: "Write something"
		}, function (inputValue) {
			if (inputValue === false) {
				return false;
			}
			if (inputValue === "") {
				swal.showInputError("You need to write something!");
				return false
			}
			swal("Nice!", "You wrote: " + inputValue, "success");
		});

	};

	return {
		pedirDatosUsuario: pedirDatosUsuario
	};

})(jQuery);