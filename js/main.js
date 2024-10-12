(function ($) {
  "use strict";

  // Spinner
  var spinner = function () {
    setTimeout(function () {
      if ($("#spinner").length > 0) {
        $("#spinner").removeClass("show");
      }
    }, 1);
  };
  spinner();

  // Initiate the wowjs
  new WOW().init();

  // Sticky Navbar
  $(window).scroll(function () {
    if ($(this).scrollTop() > 45) {
      $(".navbar").addClass("sticky-top shadow-sm");
    } else {
      $(".navbar").removeClass("sticky-top shadow-sm");
    }
  });

  // Dropdown on mouse hover
  const $dropdown = $(".dropdown");
  const $dropdownToggle = $(".dropdown-toggle");
  const $dropdownMenu = $(".dropdown-menu");
  const showClass = "show";

  $(window).on("load resize", function () {
    if (this.matchMedia("(min-width: 992px)").matches) {
      $dropdown.hover(
        function () {
          const $this = $(this);
          $this.addClass(showClass);
          $this.find($dropdownToggle).attr("aria-expanded", "true");
          $this.find($dropdownMenu).addClass(showClass);
        },
        function () {
          const $this = $(this);
          $this.removeClass(showClass);
          $this.find($dropdownToggle).attr("aria-expanded", "false");
          $this.find($dropdownMenu).removeClass(showClass);
        }
      );
    } else {
      $dropdown.off("mouseenter mouseleave");
    }
  });

  // Back to top button
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $(".back-to-top").fadeIn("slow");
    } else {
      $(".back-to-top").fadeOut("slow");
    }
  });
  $(".back-to-top").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 1500, "easeInOutExpo");
    return false;
  });

  // Facts counter
  $('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 2000,
  });

  // Modal Video
  $(document).ready(function () {
    var $videoSrc;
    $(".btn-play").click(function () {
      $videoSrc = $(this).data("src");
    });
    console.log($videoSrc);

    $("#videoModal").on("shown.bs.modal", function (e) {
      $("#video").attr(
        "src",
        $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0"
      );
    });

    $("#videoModal").on("hide.bs.modal", function (e) {
      $("#video").attr("src", $videoSrc);
    });
  });

  // Testimonials carousel
  $(".testimonial-carousel").owlCarousel({
    autoplay: true,
    smartSpeed: 1000,
    center: true,
    margin: 24,
    dots: true,
    loop: true,
    nav: false,
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2,
      },
      992: {
        items: 3,
      },
    },
  });
})(jQuery);

// Ajax editar
$(document).ready(function () {
  // Manejar clic en el botón de editar
  $(document).on("click", ".btn-editar", function () {
    var id = $(this).data("id");
    var nombre = $(this).data("nombre");

    // Cargar datos en el modal
    $("#tipoNormaId").val(id);
    $("#nombre").val(nombre);

    // Abrir el modal
    var modal = new bootstrap.Modal(document.getElementById("editarModal"));
    modal.show();
  });

  // Enviar el formulario de edición vía AJAX
  $("#form-editar").on("submit", function (e) {
    e.preventDefault(); // Evitar el comportamiento normal del formulario

    $.ajax({
      type: "POST",
      url: "Conexiones/editar_tipo_norma.php",
      data: $(this).serialize(),
      success: function (response) {
        // Mostrar mensaje de éxito o error
        alert(response);

        // Cerrar el modal después de la actualización
        var modal = bootstrap.Modal.getInstance(
          document.getElementById("editarModal")
        );
        modal.hide();

        // Recargar la tabla sin recargar la página
        $.ajax({
          type: "GET",
          url: "Conexiones/obtener_tipo_norma.php",
          success: function (data) {
            $("tbody").html(data); // Actualizar la tabla
          },
        });
      },
      error: function () {
        alert("Error al actualizar el tipo de norma.");
      },
    });
  });
});

// Ajax guardar

$(document).ready(function () {
  // Escuchar el evento de submit del formulario
  $("#form-tipo-norma").submit(function (event) {
    event.preventDefault(); // Prevenir la recarga de la página

    // Recoger los datos del formulario
    var formData = $(this).serialize();

    // Hacer la petición AJAX
    $.ajax({
      url: "Conexiones/guardar_tipo_norma.php", // Ruta del archivo PHP
      type: "POST",
      data: formData,
      dataType: "json", // Esperamos una respuesta en JSON
      success: function (response) {
        if (response.status === "success") {
          // Mostrar mensaje emergente de éxito
          alert(response.message);

          // Recargar la tabla con los nuevos datos sin recargar la página
          $("#tabla-tipos-norma").load(
            window.location.href + " #tabla-tipos-norma tbody"
          );

          // Limpiar el formulario
          $("#form-tipo-norma")[0].reset();
        } else {
          // Mostrar mensaje de error
          alert(response.message);
        }
      },
      error: function (xhr, status, error) {
        // Manejo de errores en la petición AJAX
        console.error("Error en la petición AJAX:", error);
        alert("Ocurrió un error. Inténtalo de nuevo.");
      },
    });
  });
});

//Ajax eliminar

$(document).ready(function () {
  // Manejar el evento de click en el botón "Eliminar"
  $(".btn-eliminar").on("click", function (event) {
    event.preventDefault(); // Prevenir el comportamiento por defecto

    // Obtener el ID del registro a eliminar
    var id = $(this).data("id");

    // Confirmar antes de eliminar
    if (!confirm("¿Estás seguro de que deseas eliminar este registro?")) {
      return; // Si el usuario cancela, no hacer nada
    }

    // Hacer la petición AJAX para eliminar el registro
    $.ajax({
      url: "Cunamb/Conexiones/eliminar_tipo_norma.php", // Asegúrate de que la ruta sea correcta
      type: "POST",
      data: { id: id },
      dataType: "json", // Esperamos una respuesta en formato JSON
      success: function (response) {
        if (response.status === "success") {
          // Mostrar un mensaje de éxito
          alert(response.message);
          // Eliminar la fila de la tabla directamente
          $('button[data-id="' + id + '"]')
            .closest("tr")
            .remove();
        } else {
          // Mostrar un mensaje de error si falla
          alert(response.message);
        }
      },
      error: function (xhr, status, error) {
        // Manejo de errores en la petición AJAX
        console.error("Error en la petición AJAX:", error);
        alert("Ocurrió un error. Inténtalo de nuevo.");
      },
    });
  });
});

//Ajax general

function cargarTiposNorma() {
  $.ajax({
    url: "Conexiones/obtener_tipo_norma.php",
    success: function (response) {
      $("tbody").html(response); // Actualizar la tabla con los nuevos datos
    },
    error: function () {
      alert("Error al cargar los tipos de norma");
    },
  });
}

// Llamar a la función al cargar la página para mostrar los datos inicialmente
$(document).ready(function () {
  cargarTiposNorma();
});
