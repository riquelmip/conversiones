var div_cargando = document.querySelector("#divLoading");
document.addEventListener("DOMContentLoaded", function () {
  llenarselects("Longitud");
  $("#tipo").change(function () {
    let tipo = $("#tipo").val();
    llenarselects(tipo);
  });

  $("#formConversion").submit(function (event) {
    event.preventDefault();
    var formData = $(this).serialize();
    $.ajax({
      type: "POST",
      url: base_url + "/calculadora/convertir",
      data: formData,
      headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
      },
      beforeSend: function () {
        div_cargando.style.display = "flex";
      },
      success: function (json) {
        var jsonData = JSON.parse(json);
        if (jsonData.estado) {
          $("#resultado").val(jsonData.resultado);
          $("#ud_final").val(String(jsonData.ud_final));
          toastr.success("Exito", "Conversión realizada");
        } else {
          toastr.error("Ocurrió un error", "Error");
        }
      },
      error: function (json) {
        toastr.error("Ocurrió un error", "Error");
      },
      complete: function () {
        div_cargando.style.display = "none";
      },
    });
  });
});

function llenarselects(tipo) {
  $.ajax({
    type: "POST",
    url: base_url + "/calculadora/getSelects",
    data: { tipo: tipo },
    beforeSend: function () {
      div_cargando.style.display = "flex";
    },
    success: function (json) {
      var jsonData = JSON.parse(json);
      if (jsonData.estado) {
        $("#unidad1").empty().html(jsonData.unidades);
        $("#unidad2").empty().html(jsonData.unidades);
        toastr.success("Exito", "Datos cargados");
      } else {
        toastr.error("Ocurrió un error", "Error");
      }
    },
    error: function (json) {
      toastr.error("Ocurrió un error", "Error");
    },
    complete: function () {
      div_cargando.style.display = "none";
    },
  });
}
