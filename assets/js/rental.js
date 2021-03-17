// Declarar variable global de la lista de Peliculas
var arrMovies = []

//funcion de agregar elemento
$("#addElement").click(function (e) {
	//deshabilitar el envio por http
	e.preventDefault()

	let idMovies= $("#movies").val()
	let nameMovies = $("#movies option:selected").text()

	if(idMovies != '') {
		if(typeof existMovie(idMovies) === 'undefined') {
			arrMovies.push({
				'idMovies': idMovies,
				'nameMovie':nameMovies,
			})
		} else {
			alert("La película  ya se enceuntra en la lista")
		}

		//Mostrar en HTML la lista de Peliculas
		showMovies()
	} else {
		alert("Debe seleccionar una Pelicula")
	}
});

function existMovie(idMovies) {
	return arrMovies.find(function (movies) {
		return movies.idMovies == idMovies
	})
}

function showMovies() {
	$("#movies-list").empty()

	arrMovies.forEach(function(movies) {
		$("#movies-list").append('<div class="form-group"><button onclick="removeElement('+movies.idMovies+')" class="btn btn-danger">-</button><span>'+movies.nameMovie+'</span></div>')
	})
}

function removeElement(idMovies) {
	let index = arrMovies.indexOf(existMovie(idMovies))
	arrMovies.splice(index, 1)
	showMovies()
}

//Metodo para hacer el envio del formulario
$("#submit").click(function (e) {
	e.preventDefault()
	console.log("Entro")

	let url = "?controller=rental&method=save"
	// objeto de parametros a enviar al controlador(Backend)
	let params = {
		startDate: $('#startDate').val(),
		endDate: $('#endDate').val(),
    total: $('#total').val(),
		user_id: $('#user_id').val(),
		movies: arrMovies,
	}

	//metodo ajax para ennviar el formulario
	$.post(url, params, function (response) {
		//Respuest correcta del request
		if(typeof response.error !== 'undefined'){
			alert(response.message)
		} else {
			alert('Inserción Correcta')
			//Redireccionar a la lista Movies
			location.href = "?controller=rental"
		}
	}, 'json').fail(function (err) {
		alert("Inserción Fallida ("+err.responseText+")")
	})
});
