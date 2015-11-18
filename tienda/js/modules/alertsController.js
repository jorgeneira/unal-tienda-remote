var alertControllers = (function ($) {

	var pedirDatosUsuario = function () {

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

	var alertError = function(text){

		swal("Oops...", text, "error");

	};

	var requestSuccessAlert = function(){

		swal("Muchas Gracias!", "Su solicitud ha sido recibida y será procesada en breve!", "success")

	};

	return {
		pedirDatosUsuario: pedirDatosUsuario,
		alertError:alertError,
		requestSuccessAlert:requestSuccessAlert
	};

})(jQuery);