// Declarar variable global de la lista de categorias
var arrCategories = []

//funcion de agregar elemento
$("#addElement").click(function (e) {
	//deshabilitar el envio por http
	e.preventDefault()

	let idCategories = $("#categories").val()
	let nameCategories = $("#categories option:selected").text()

	if(idCategories != '') {
		if(typeof existCategory(idCategories) === 'undefined') {
			arrCategories.push({
				'idCategories': idCategories,
				'name': nameCategories,
			})
		} else {
			alert("La categoría ya se enceuntra en la lista")
		}

		//Mostrar en HTML la lista de categorias
		showCategories()
	} else {
		alert("Debe seleccionar una Categoría")
	}
});

function existCategory(idCategories) {
	return arrCategories.find(function (categories) {
		return categories.idCategories == idCategories
	})
}

function showCategories() {
	$("#categories-list").empty()

	arrCategories.forEach(function(categories) {
		$("#categories-list").append('<div class="form-group"><button onclick="removeElement('+categories.idCategories+')" class="btn btn-danger">-</button><span>'+categories.name+'</span></div>')
	})
}

function removeElement(idCategories) {
	let index = arrCategories.indexOf(existCategory(idCategories))
	arrCategories.splice(index, 1)
	showCategories()
}

//Metodo para hacer el envio del formulario
$("#submit").click(function (e) {
	e.preventDefault()
	console.log("Entro")

	let url = "?controller=movies&method=save"
	// objeto de parametros a enviar al controlador(Backend)
	let params = {
		nameMovie: $('#nameMovie').val(),
		description: $('#description').val(),
		user_id: $('#user_id').val(),
		categories: arrCategories,
	}

	//metodo ajax para ennviar el formulario
	$.post(url, params, function (response) {
		//Respuest correcta del request
		if(typeof response.error !== 'undefined'){
			alert(response.message)
		} else {
			alert('Inserción Correcta')
			//Redireccionar a la lista Movies
			location.href = "?controller=movies"
		}
	}, 'json').fail(function (err) {
		alert("Inserción Fallida ("+err.responseText+")")
	})
});
