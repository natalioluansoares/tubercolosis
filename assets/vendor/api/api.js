$(document).ready(function () {
	var basePath = $("#base_path").val();
	$("#employee_id").autocomplete({
		source: function (request, cb) {
			console.log(request);

			$.ajax({
				url: basePath + "carifile/" + request.term,
				method: "GET",
				dataType: "json",
				success: function (res) {
					var result;
					result = [
						{
							label: "There is no matching record found for " + request.term,
							value: "",
						},
					];

					console.log("Before format", res);

					if (res.length) {
						result = $.map(res, function (obj) {
							return {
								label: obj.id,
								value: obj.id,
								data: obj,
							};
						});
					}

					console.log("formatted response", result);
					cb(result);
				},
			});
		},
		select: function (event, selectedData) {
			console.log(selectedData);

			if (selectedData && selectedData.item && selectedData.item.data) {
				var data = selectedData.item.data;

				$("#soares").val(data.kecamatan);
				$("#judulwebsite").val(data.judul);
				
			}
		},
	});
});
