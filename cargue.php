<!DOCTYPE html>
<html lang="es">
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>Cunamb - Documentación</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/tierra.png" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- jQuery (necesario para Bootstrap JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />

    <style>
        .dropdown-toggle::after {
            margin-left: 0.5rem;
        }
    </style>
</head>

  <body>
    <div class="container-xxl bg-white p-0">
      <!-- Spinner Start -->
      <div
        id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
      >
        <div
          class="spinner-border text-primary"
          style="width: 3rem; height: 3rem"
          role="status"
        >
          <span class="sr-only">Loading...</span>
        </div>
      </div>
      <!-- Spinner End -->

      <!-- Navbar & Hero Start -->
      <div class="container-xxl position-relative p-0">
        <nav
          class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0"
        >
          <a href="" class="navbar-brand p-0">
            <h1 class="text-primary m-0"></h1>
            <img src="img/logo-cun.png" alt="Logo" />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
          >
            <span class="fa fa-bars"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
              <a href="index.html" class="nav-item nav-link active">Inicio</a>
              <a href="about.html" class="nav-item nav-link">Acerca</a>
              <a href="#" class="nav-item nav-link">Servicios</a>
              <!--<a href="#" class="nav-item nav-link">Menu</a> -->
              <a href="contact.html" class="nav-item nav-link">Contacto</a>
            </div>
            <a href="doc.html" class="btn btn-primary py-2 px-4"
              >Documentacion</a
            >
          </div>
        </nav>

        <div class="container-xxl py-5 bg-dark hero-header mb-5">
          <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">
              Documentación
            </h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center text-uppercase"></ol>
            </nav>
          </div>
        </div>
      </div>
      <!-- Navbar & Hero End -->
      <div class="container mt-5">
        <h1 class="text-center">Gestión de Datos - Normativa Ambiental</h1>

        <!-- Tabs de navegación -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button
              class="nav-link active"
              id="tipo-norma-tab"
              data-bs-toggle="tab"
              data-bs-target="#tipo-norma"
              type="button"
              role="tab"
              aria-controls="tipo-norma"
              aria-selected="true"
            >
              Tipo de Norma
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="tipo-elemento-tab"
              data-bs-toggle="tab"
              data-bs-target="#tipo-elemento"
              type="button"
              role="tab"
              aria-controls="tipo-elemento"
              aria-selected="false"
            >
              Tipo de Elemento
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="categoria-tab"
              data-bs-toggle="tab"
              data-bs-target="#categoria"
              type="button"
              role="tab"
              aria-controls="categoria"
              aria-selected="false"
            >
              Categoría
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="entidad-tab"
              data-bs-toggle="tab"
              data-bs-target="#entidad"
              type="button"
              role="tab"
              aria-controls="entidad"
              aria-selected="false"
            >
              Entidad
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="ubicacion-tab"
              data-bs-toggle="tab"
              data-bs-target="#ubicacion"
              type="button"
              role="tab"
              aria-controls="ubicacion"
              aria-selected="false"
            >
              Ubicación
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="documento-tab"
              data-bs-toggle="tab"
              data-bs-target="#documento"
              type="button"
              role="tab"
              aria-controls="documento"
              aria-selected="false"
            >
              Documento
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="enlace-adjunto-tab"
              data-bs-toggle="tab"
              data-bs-target="#enlace-adjunto"
              type="button"
              role="tab"
              aria-controls="enlace-adjunto"
              aria-selected="false"
            >
              Enlace Adjunto
            </button>
          </li>
        </ul>

        <!-- Contenido de las pestañas -->
        <div class="tab-content" id="myTabContent">
          
        
        <!-- Pestaña de Tipo de Norma -->

    <div class="tab-pane fade show active" id="tipo-norma" role="tabpanel" aria-labelledby="tipo-norma-tab">
            <h2 class="mt-4">Agregar Tipo de Norma</h2>

<form id="form-tipo-norma">
    <div class="form-group mb-3">
        <label for="nombre_tipo_norma">Nombre del Tipo de Norma:</label>
        <input type="text" class="form-control" id="nombre_tipo_norma" name="nombre_tipo_norma" required>
    </div>
    <button type="submit" class="btn btn-primary">Guardar norma</button> <!-- Cambia "btn-primary" por otro estilo si es necesario -->
</form>
    <h2 class="mt-4">Tipos de Norma Registrados</h2>
<table class="table table-striped" id="tabla-tipos-norma">
        <thead>
            <tr>
                <th class="table-header">ID</th>
                <th class="table-header">Nombre</th>
                <th class="table-header">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php include '../Cunamb/Conexiones/obtener_tipo_norma.php'; ?>
        </tbody>
    </table>
          </div>

          <!-- Pestaña de Tipo de Elemento -->
          <div
            class="tab-pane fade"
            id="tipo-elemento"
            role="tabpanel"
            aria-labelledby="tipo-elemento-tab"
          >
            <h2 class="mt-4">Agregar Tipo de Elemento</h2>
            <form>
              <div class="mb-3">
                <label for="nombreTipoElemento" class="form-label"
                  >Nombre del Tipo de Elemento</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="nombreTipoElemento"
                  placeholder="Ej: Material, Proceso"
                />
              </div>
              <button type="submit" class="btn btn-primary">
                Agregar Tipo de Elemento
              </button>
            </form>
            <h2 class="mt-4">Tipos de Elemento Registrados</h2>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                </tr>
              </thead>
              <tbody>
                <!-- Aquí se agregarían los tipos de elemento dinámicamente -->
              </tbody>
            </table>
          </div>

          <!-- Pestaña de Categoría -->
          <div
            class="tab-pane fade"
            id="categoria"
            role="tabpanel"
            aria-labelledby="categoria-tab"
          >
            <h2 class="mt-4">Agregar Categoría</h2>
            <form>
              <div class="mb-3">
                <label for="nombreCategoria" class="form-label"
                  >Nombre de la Categoría</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="nombreCategoria"
                  placeholder="Ej: Conservación"
                />
              </div>
              <div class="mb-3">
                <label for="tipoElementoCategoria" class="form-label"
                  >Tipo de Elemento</label
                >
                <select class="form-select" id="tipoElementoCategoria">
                  <option selected>Selecciona el tipo de elemento</option>
                  <!-- Aquí se agregarían los tipos de elementos dinámicamente -->
                </select>
              </div>
              <button type="submit" class="btn btn-primary">
                Agregar Categoría
              </button>
            </form>
            <h2 class="mt-4">Categorías Registradas</h2>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Tipo de Elemento</th>
                </tr>
              </thead>
              <tbody>
                <!-- Aquí se agregarían las categorías dinámicamente -->
              </tbody>
            </table>
          </div>

          <!-- Pestaña de Entidad -->
          <div
            class="tab-pane fade"
            id="entidad"
            role="tabpanel"
            aria-labelledby="entidad-tab"
          >
            <h2 class="mt-4">Agregar Entidad</h2>
            <form>
              <div class="mb-3">
                <label for="nombreEntidad" class="form-label"
                  >Nombre de la Entidad</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="nombreEntidad"
                  placeholder="Ej: Ministerio de Ambiente"
                />
              </div>
              <button type="submit" class="btn btn-primary">
                Agregar Entidad
              </button>
            </form>
            <h2 class="mt-4">Entidades Registradas</h2>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                </tr>
              </thead>
              <tbody>
                <!-- Aquí se agregarían las entidades dinámicamente -->
              </tbody>
            </table>
          </div>

          <!-- Pestaña de Ubicación -->
          <div
            class="tab-pane fade"
            id="ubicacion"
            role="tabpanel"
            aria-labelledby="ubicacion-tab"
          >
            <h2 class="mt-4">Agregar Ubicación</h2>
            <form>
              <div class="mb-3">
                <label for="nombreUbicacion" class="form-label"
                  >Nombre de la Ubicación</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="nombreUbicacion"
                  placeholder="Ej: Parque Nacional Amacayacu"
                />
              </div>
              <div class="mb-3">
                <label for="entidadUbicacion" class="form-label"
                  >Entidad Asociada</label
                >
                <select class="form-select" id="entidadUbicacion">
                  <option selected>Selecciona la entidad</option>
                  <!-- Aquí se agregarían las entidades dinámicamente -->
                </select>
              </div>
              <button type="submit" class="btn btn-primary">
                Agregar Ubicación
              </button>
            </form>
            <h2 class="mt-4">Ubicaciones Registradas</h2>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Entidad Asociada</th>
                </tr>
              </thead>
              <tbody>
                <!-- Aquí se agregarían las ubicaciones dinámicamente -->
              </tbody>
            </table>
          </div>

          <!-- Pestaña de Documento -->
          <div
            class="tab-pane fade"
            id="documento"
            role="tabpanel"
            aria-labelledby="documento-tab"
          >
            <h2 class="mt-4">Agregar Documento</h2>
            <form>
              <div class="mb-3">
                <label for="tituloDocumento" class="form-label"
                  >Título del Documento</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="tituloDocumento"
                  placeholder="Ej: Ley de Protección de Parques"
                />
              </div>
              <div class="mb-3">
                <label for="tipoNormaDocumento" class="form-label"
                  >Tipo de Norma</label
                >
                <select class="form-select" id="tipoNormaDocumento">
                  <option selected>Selecciona el tipo de norma</option>
                  <!-- Aquí se agregarían los tipos de norma dinámicamente -->
                </select>
              </div>
              <div class="mb-3">
                <label for="categoriaDocumento" class="form-label"
                  >Categoría</label
                >
                <select class="form-select" id="categoriaDocumento">
                  <option selected>Selecciona la categoría</option>
                  <!-- Aquí se agregarían las categorías dinámicamente -->
                </select>
              </div>
              <div class="mb-3">
                <label for="ubicacionDocumento" class="form-label"
                  >Ubicación</label
                >
                <select class="form-select" id="ubicacionDocumento">
                  <option selected>Selecciona la ubicación</option>
                  <!-- Aquí se agregarían las ubicaciones dinámicamente -->
                </select>
              </div>
              <div class="mb-3">
                <label for="versionDocumento" class="form-label">Versión</label>
                <input
                  type="text"
                  class="form-control"
                  id="versionDocumento"
                  placeholder="Ej: 1.0"
                />
              </div>
              <div class="mb-3">
                <label for="resumenDocumento" class="form-label">Resumen</label>
                <textarea
                  class="form-control"
                  id="resumenDocumento"
                  rows="3"
                  placeholder="Resumen del documento"
                ></textarea>
              </div>
              <div class="mb-3">
                <label for="aplicacionDocumento" class="form-label"
                  >Aplicación</label
                >
                <textarea
                  class="form-control"
                  id="aplicacionDocumento"
                  rows="3"
                  placeholder="Aplicación del documento"
                ></textarea>
              </div>
              <div class="mb-3">
                <label for="estadoDocumento" class="form-label">Estado</label>
                <input
                  type="text"
                  class="form-control"
                  id="estadoDocumento"
                  placeholder="Ej: Vigente"
                />
              </div>
              <div class="mb-3">
                <label for="fechaPublicacionDocumento" class="form-label"
                  >Fecha de Publicación</label
                >
                <input
                  type="date"
                  class="form-control"
                  id="fechaPublicacionDocumento"
                />
              </div>
              <button type="submit" class="btn btn-primary">
                Agregar Documento
              </button>
            </form>
            <h2 class="mt-4">Documentos Registrados</h2>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Título</th>
                  <th>Tipo de Norma</th>
                  <th>Categoría</th>
                  <th>Ubicación</th>
                  <th>Versión</th>
                  <th>Estado</th>
                  <th>Fecha de Publicación</th>
                </tr>
              </thead>
              <tbody>
                <!-- Aquí se agregarían los documentos dinámicamente -->
              </tbody>
            </table>
          </div>

          <!-- Pestaña de Enlace Adjunto -->
          <div
            class="tab-pane fade"
            id="enlace-adjunto"
            role="tabpanel"
            aria-labelledby="enlace-adjunto-tab"
          >
            <h2 class="mt-4">Agregar Enlace Adjunto</h2>
            <form>
              <div class="mb-3">
                <label for="documentoEnlaceAdjunto" class="form-label"
                  >Documento Asociado</label
                >
                <select class="form-select" id="documentoEnlaceAdjunto">
                  <option selected>Selecciona el documento</option>
                  <!-- Aquí se agregarían los documentos dinámicamente -->
                </select>
              </div>
              <div class="mb-3">
                <label for="urlEnlaceAdjunto" class="form-label">URL</label>
                <input
                  type="url"
                  class="form-control"
                  id="urlEnlaceAdjunto"
                  placeholder="Ej: http://ejemplo.com/documento.pdf"
                />
              </div>
              <div class="mb-3">
                <label for="descripcionEnlaceAdjunto" class="form-label"
                  >Descripción</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="descripcionEnlaceAdjunto"
                  placeholder="Descripción del enlace"
                />
              </div>
              <button type="submit" class="btn btn-primary">
                Agregar Enlace Adjunto
              </button>
            </form>
            <h2 class="mt-4">Enlaces Adjuntos Registrados</h2>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Documento Asociado</th>
                  <th>URL</th>
                  <th>Descripción</th>
                </tr>
              </thead>
              <tbody>
                <!-- Aquí se agregarían los enlaces adjuntos dinámicamente -->
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <!-- Footer Start -->
      <div
        class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn"
        data-wow-delay="0.1s"
      >
        <div class="container py-5">
          <div class="row g-5">
            <div class="col-lg-3 col-md-6">
              <h4
                class="section-title ff-secondary text-start text-primary fw-normal mb-4"
              >
                Nosotros
              </h4>
              <a class="btn btn-link" href="about.html">Acerca de</a>
              <a class="btn btn-link" href="contact.html">Contactanos</a>
              <a class="btn btn-link" href="">Servicios</a>
              <a class="btn btn-link" href="">Politica de privacidad</a>
              <a class="btn btn-link" href="">Terminos y condiciones</a>
            </div>
            <div class="col-lg-3 col-md-6">
              <h4
                class="section-title ff-secondary text-start text-primary fw-normal mb-4"
              >
                Contacto
              </h4>
              <p class="mb-2">
                <i class="fa fa-map-marker-alt me-3"></i>Sede principal Bogotá:
                <br />
                Calle 12b #04-79
              </p>
              <p class="mb-2">
                <i class="fa fa-phone-alt me-3"></i>+57 318 4313047
              </p>
              <p class="mb-2">
                <i class="fa fa-envelope me-3"></i>info@cunamb.com
              </p>
              <div class="d-flex pt-2">
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-twitter"></i
                ></a>
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-youtube"></i
                ></a>
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-linkedin-in"></i
                ></a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <h4
                class="section-title ff-secondary text-start text-primary fw-normal mb-4"
              >
                Horario atencion
              </h4>
              <h5 class="text-light fw-normal">Lunes - Sabado</h5>
              <p>07AM - 05PM</p>
              <h5 class="text-light fw-normal">Sabado</h5>
              <p>10AM - 12AM</p>
            </div>
            <div class="col-lg-3 col-md-6">
              <h4
                class="section-title ff-secondary text-start text-primary fw-normal mb-4"
              >
                Noticias
              </h4>
              <p>
                Suscríbete y recibe las últimas novedades ambientales en tu
                correo.
              </p>
              <div class="position-relative mx-auto" style="max-width: 400px">
                <input
                  class="form-control border-primary w-100 py-3 ps-4 pe-5"
                  type="text"
                  placeholder="Tu correo"
                />
                <button
                  type="button"
                  class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2"
                >
                  Unete
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="copyright">
            <div class="row">
              <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                &copy; <a class="border-bottom" href="#">Cunamb</a>, Todos los
                derechos reservados.

                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                Diseñado por
                <a class="border-bottom" href="https://cun.edu.co/"
                  >Ing. AFHM.</a
                ><br /><br />
              </div>
              <div class="col-md-6 text-center text-md-end">
                <div class="footer-menu">
                  <a href="">Inicio</a>
                  <a href="">Cookies</a>
                  <a href="">Help</a>
                  <a href="">FQAs</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer End -->

      <!-- Back to Top -->
      <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
        ><i class="bi bi-arrow-up"></i
      ></a>
    </div>

 <!-- Modal para Editar -->
    <div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editarModalLabel">Editar Tipo de Norma</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="form-editar">
                        <input type="hidden" id="tipoNormaId" name="id">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

  <!-- Ajax-->


<!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>
</html>