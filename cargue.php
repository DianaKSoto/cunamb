<!DOCTYPE html>
<!-- Declaración del tipo de documento, indicando que es un documento HTML5 -->
<html lang="es">
<!-- Inicio del elemento HTML, especificando el idioma como español -->
<head>
    <meta charset="utf-8" />
    <!-- Define la codificación de caracteres del documento como UTF-8 -->
    
    <title>Cunamb - Documentación</title>
    <!-- Título de la página que aparecerá en la pestaña del navegador -->

    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <!-- Configuración para la visualización en dispositivos móviles, asegurando que se escale correctamente -->

    <meta content="" name="keywords" />
    <!-- Metaetiqueta para palabras clave, actualmente vacía -->

    <meta content="" name="description" />
    <!-- Metaetiqueta para la descripción de la página, actualmente vacía -->

    <!-- Favicon -->
    <link href="img/tierra.png" rel="icon" />
    <!-- Enlace a la imagen que se usará como favicon en la pestaña del navegador -->

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <!-- Establece una conexión anticipada con el dominio de Google Fonts para mejorar la carga -->
    
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- Conexión anticipada con la fuente de Google Fonts, permitiendo el uso de CORS -->

    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet" />
    <!-- Enlace a las fuentes de Google, cargando varias variaciones de las fuentes Heebo, Nunito y Pacifico -->

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <!-- Enlace a Font Awesome, que proporciona iconos escalables que se pueden personalizar con CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Enlace a Bootstrap Icons, una biblioteca de iconos para usar en proyectos con Bootstrap -->

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <!-- Enlace a la hoja de estilo de la biblioteca Animate.css, que permite animaciones CSS -->

    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <!-- Enlace a la hoja de estilo de Owl Carousel, utilizada para carruseles de imágenes -->

    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <!-- Enlace a la hoja de estilo de Tempus Dominus, un plugin de Bootstrap para selección de fechas -->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Enlace a la hoja de estilo de Bootstrap, la biblioteca de CSS para diseño responsive -->

    <!-- jQuery (necesario para Bootstrap JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Enlace a jQuery, necesario para ciertos plugins de JavaScript de Bootstrap -->

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- Enlace a una hoja de estilo personalizada de Bootstrap, puede contener estilos específicos para el proyecto -->

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- Enlace a la hoja de estilo principal del template, que contiene estilos personalizados para la página -->

    <style>
        .dropdown-toggle::after {
            margin-left: 0.5rem;
        }
        /* Estilo personalizado para el botón de menú desplegable, agregando un margen a la derecha del icono de flecha */
    </style>
</head>

<body>
<!-- Inicio del cuerpo del documento -->
    <div class="container-xxl bg-white p-0">
    <!-- Contenedor principal que ocupa todo el ancho y tiene un fondo blanco -->

      <!-- Spinner Start -->
      <div
        id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
      >
        <!-- Contenedor del spinner de carga que se muestra en el centro de la pantalla -->
        
        <div
          class="spinner-border text-primary"
          style="width: 3rem; height: 3rem"
          role="status"
        >
          <span class="sr-only">Loading...</span>
          <!-- Texto alternativo para lectores de pantalla, indica que está cargando -->
        </div>
      </div>
      <!-- Spinner End -->

      <!-- Navbar & Hero Start -->
      <div class="container-xxl position-relative p-0">
      <!-- Contenedor para la barra de navegación y el encabezado principal -->

        <nav
          class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0"
        >
          <!-- Barra de navegación con diseño oscuro y clases de Bootstrap -->
          
          <a href="" class="navbar-brand p-0">
            <!-- Enlace a la página de inicio -->
            <h1 class="text-primary m-0"></h1>
            <!-- Título (actualmente vacío) -->
            <img src="img/logo-cun.png" alt="Logo" />
            <!-- Imagen del logo de la empresa -->
          </a>

          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
          >
            <span class="fa fa-bars"></span>
            <!-- Icono del menú hamburguesa que se muestra en dispositivos móviles -->
          </button>

          <div class="collapse navbar-collapse" id="navbarCollapse">
            <!-- Contenedor que se expande y colapsa en función del tamaño de la pantalla -->
            <div class="navbar-nav ms-auto py-0 pe-4">
              <!-- Navegación a la derecha -->
              <a href="index.html" class="nav-item nav-link active">Inicio</a>
              <!-- Enlace a la página de inicio -->
              <a href="about.html" class="nav-item nav-link">Acerca</a>
              <!-- Enlace a la página "Acerca" -->
              <a href="#" class="nav-item nav-link">Servicios</a>
              <!-- Enlace a la sección de servicios (actualmente sin destino) -->
              <!--<a href="#" class="nav-item nav-link">Menu</a> -->
              <!-- Enlace comentado para un menú (no activo) -->
              <a href="contact.html" class="nav-item nav-link">Contacto</a>
              <!-- Enlace a la página de contacto -->
            </div>
            <a href="doc.html" class="btn btn-primary py-2 px-4"
              >Documentacion</a
            >
            <!-- Botón que lleva a la sección de documentación -->
          </div>
        </nav>

        <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <!-- Encabezado principal con fondo oscuro -->
          <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">
              Documentación
            </h1>
            <!-- Título principal de la sección de documentación con animación -->
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center text-uppercase"></ol>
              <!-- Navegación de migas (breadcrumb), actualmente vacía -->
            </nav>
          </div>
        </div>
      </div>
      <!-- Navbar & Hero End -->      
        <div class="container mt-5">
<!-- Contenedor principal con un margen superior de 5 (mt-5) para separación respecto al contenido superior -->

    <h1 class="text-center">Gestión de Datos - Normativa Ambiental</h1>
    <!-- Título principal de la sección, centrado en la página -->

    <!-- Tabs de navegación -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
    <!-- Lista desordenada que contiene las pestañas de navegación; se le asignan clases de Bootstrap para el estilo de pestañas -->
    
        <li class="nav-item" role="presentation">
        <!-- Elemento de la lista que representa una pestaña; el atributo role indica su función como presentación -->
        
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
            <!-- Botón de la pestaña "Tipo de Norma", con varias propiedades para la interacción y accesibilidad -->
            Tipo de Norma
            </button>
        </li>

        <li class="nav-item" role="presentation">
        <!-- Otro elemento de lista para la pestaña "Tipo de Elemento" -->
        
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
            <!-- Botón de la pestaña "Tipo de Elemento" -->
            Tipo de Elemento
            </button>
        </li>

        <li class="nav-item" role="presentation">
        <!-- Elemento para la pestaña "Categoría" -->
        
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
            <!-- Botón de la pestaña "Categoría" -->
            Categoría
            </button>
        </li>

        <li class="nav-item" role="presentation">
        <!-- Elemento para la pestaña "Entidad" -->
        
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
            <!-- Botón de la pestaña "Entidad" -->
            Entidad
            </button>
        </li>

        <li class="nav-item" role="presentation">
        <!-- Elemento para la pestaña "Ubicación" -->
        
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
            <!-- Botón de la pestaña "Ubicación" -->
            Ubicación
            </button>
        </li>

        <li class="nav-item" role="presentation">
        <!-- Elemento para la pestaña "Documento" -->
        
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
            <!-- Botón de la pestaña "Documento" -->
            Documento
            </button>
        </li>

        <li class="nav-item" role="presentation">
        <!-- Elemento para la pestaña "Enlace Adjunto" -->
        
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
            <!-- Botón de la pestaña "Enlace Adjunto" -->
            Enlace Adjunto
            </button>
        </li>
    </ul>

    <!-- Contenido de las pestañas -->      
            <div class="tab-content" id="myTabContent">
<!-- Contenedor principal que agrupa el contenido de las pestañas. Se le asigna un ID para referencia en JavaScript -->

    <!-- Pestaña de Tipo de Norma -->
    <div class="tab-pane fade show active" id="tipo-norma" role="tabpanel" aria-labelledby="tipo-norma-tab">
    <!-- Contenedor para el contenido de la pestaña "Tipo de Norma". 
         La clase 'show active' indica que esta pestaña está activa al cargar la página. -->

        <h2 class="mt-4">Agregar Tipo de Norma</h2>
        <!-- Título de la sección para agregar un nuevo tipo de norma, con margen superior -->

        <form id="form-tipo-norma">
        <!-- Formulario para agregar un nuevo tipo de norma. Se le asigna un ID para manipulación con JavaScript -->
        
            <div class="form-group mb-3">
            <!-- Contenedor para un grupo de formulario, con un margen inferior de 3 -->
            
                <label for="nombre_tipo_norma">Nombre del Tipo de Norma:</label>
                <!-- Etiqueta para el campo de entrada -->
                
                <input type="text" class="form-control" id="nombre_tipo_norma" name="nombre_tipo_norma" required>
                <!-- Campo de entrada de texto para el nombre del tipo de norma. 
                     'required' indica que es un campo obligatorio -->
            </div>

            <button type="submit" class="btn btn-primary">Guardar norma</button>
            <!-- Botón para enviar el formulario. 
                 Se puede cambiar el estilo del botón usando diferentes clases de Bootstrap -->
        </form>

        <h2 class="mt-4">Tipos de Norma Registrados</h2>
        <!-- Título de la sección que muestra los tipos de norma registrados, con margen superior -->

        <table class="table table-striped" id="tabla-tipos-norma">
        <!-- Tabla para mostrar los tipos de norma registrados, con un estilo de rayas -->
        
            <thead>
                <tr>
                    <th class="table-header">ID</th>
                    <th class="table-header">Nombre</th>
                    <th class="table-header">Acciones</th>
                    <!-- Encabezados de la tabla -->
                </tr>
            </thead>
            <tbody>
                <?php include '../Cunamb/Conexiones/obtener_tipo_norma.php'; ?>
                <!-- Se incluye un archivo PHP que obtiene y muestra los tipos de norma desde la base de datos -->
            </tbody>
        </table>
    </div>

    <!-- Pestaña de Tipo de Elemento -->
    <div class="tab-pane fade" id="tipo-elemento" role="tabpanel" aria-labelledby="tipo-elemento-tab">
    <!-- Contenedor para el contenido de la pestaña "Tipo de Elemento" -->

        <h2 class="mt-4">Agregar Tipo de Elemento</h2>
        <!-- Título de la sección para agregar un nuevo tipo de elemento -->

        <form>
        <!-- Formulario para agregar un nuevo tipo de elemento -->
        
            <div class="mb-3">
            <!-- Contenedor para un grupo de formulario, con margen inferior de 3 -->
            
                <label for="nombreTipoElemento" class="form-label">Nombre del Tipo de Elemento</label>
                <!-- Etiqueta para el campo de entrada -->
                
                <input
                    type="text"
                    class="form-control"
                    id="nombreTipoElemento"
                    placeholder="Ej: Material, Proceso"
                />
                <!-- Campo de entrada de texto para el nombre del tipo de elemento -->
            </div>

            <button type="submit" class="btn btn-primary">
                Agregar Tipo de Elemento
            </button>
            <!-- Botón para enviar el formulario -->
        </form>

        <h2 class="mt-4">Tipos de Elemento Registrados</h2>
        <!-- Título de la sección que muestra los tipos de elemento registrados -->

        <table class="table table-striped">
        <!-- Tabla para mostrar los tipos de elemento registrados -->
        
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <!-- Encabezados de la tabla -->
                </tr>
            </thead>
            <tbody>
                <!-- Aquí se agregarían los tipos de elemento dinámicamente -->
            </tbody>
        </table>
    </div>

    <!-- Pestaña de Categoría -->
    <div class="tab-pane fade" id="categoria" role="tabpanel" aria-labelledby="categoria-tab">
    <!-- Contenedor para el contenido de la pestaña "Categoría" -->

        <h2 class="mt-4">Agregar Categoría</h2>
        <!-- Título de la sección para agregar una nueva categoría -->

        <form>
        <!-- Formulario para agregar una nueva categoría -->
        
            <div class="mb-3">
            <!-- Contenedor para un grupo de formulario, con margen inferior de 3 -->
            
                <label for="nombreCategoria" class="form-label">Nombre de la Categoría</label>
                <!-- Etiqueta para el campo de entrada -->
                
                <input
                    type="text"
                    class="form-control"
                    id="nombreCategoria"
                    placeholder="Ej: Conservación"
                />
                <!-- Campo de entrada de texto para el nombre de la categoría -->
            </div>

            <div class="mb-3">
            <!-- Otro contenedor para un grupo de formulario -->
            
                <label for="tipoElementoCategoria" class="form-label">Tipo de Elemento</label>
                <!-- Etiqueta para el campo de selección -->
                
                <select class="form-select" id="tipoElementoCategoria">
                    <option selected>Selecciona el tipo de elemento</option>
                    <!-- Opción predeterminada en el menú desplegable -->
                    <!-- Aquí se agregarían los tipos de elementos dinámicamente -->
                </select>
            </div>

            <button type="submit" class="btn btn-primary">
                Agregar Categoría
            </button>
            <!-- Botón para enviar el formulario -->
        </form>

        <h2 class="mt-4">Categorías Registradas</h2>
        <!-- Título de la sección que muestra las categorías registradas -->

        <table class="table table-striped">
        <!-- Tabla para mostrar las categorías registradas -->
        
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Tipo de Elemento</th>
                    <!-- Encabezados de la tabla -->
                </tr>
            </thead>
            <tbody>
                <!-- Aquí se agregarían las categorías dinámicamente -->
            </tbody>
        </table>
    </div>
          <!-- Pestaña de Entidad -->
<div class="tab-pane fade" id="entidad" role="tabpanel" aria-labelledby="entidad-tab">
<!-- Contenedor para el contenido de la pestaña "Entidad". 
     La clase 'fade' indica que la pestaña tiene una transición suave al mostrarla. -->

    <h2 class="mt-4">Agregar Entidad</h2>
    <!-- Título de la sección para agregar una nueva entidad, con margen superior -->

    <form>
    <!-- Formulario para agregar una nueva entidad -->
    
        <div class="mb-3">
        <!-- Contenedor para un grupo de formulario, con margen inferior de 3 -->
        
            <label for="nombreEntidad" class="form-label">Nombre de la Entidad</label>
            <!-- Etiqueta para el campo de entrada -->
            
            <input
                type="text"
                class="form-control"
                id="nombreEntidad"
                placeholder="Ej: Ministerio de Ambiente"
            />
            <!-- Campo de entrada de texto para el nombre de la entidad, con un ejemplo de texto -->
        </div>

        <button type="submit" class="btn btn-primary">
            Agregar Entidad
        </button>
        <!-- Botón para enviar el formulario y agregar la entidad -->
    </form>

    <h2 class="mt-4">Entidades Registradas</h2>
    <!-- Título de la sección que muestra las entidades registradas, con margen superior -->

    <table class="table table-striped">
    <!-- Tabla para mostrar las entidades registradas, con un estilo de rayas -->
    
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <!-- Encabezados de la tabla -->
            </tr>
        </thead>
        <tbody>
            <!-- Aquí se agregarían las entidades dinámicamente -->
        </tbody>
    </table>
</div>

<!-- Pestaña de Ubicación -->
<div class="tab-pane fade" id="ubicacion" role="tabpanel" aria-labelledby="ubicacion-tab">
<!-- Contenedor para el contenido de la pestaña "Ubicación" -->

    <h2 class="mt-4">Agregar Ubicación</h2>
    <!-- Título de la sección para agregar una nueva ubicación, con margen superior -->

    <form>
    <!-- Formulario para agregar una nueva ubicación -->
    
        <div class="mb-3">
        <!-- Contenedor para un grupo de formulario, con margen inferior de 3 -->
        
            <label for="nombreUbicacion" class="form-label">Nombre de la Ubicación</label>
            <!-- Etiqueta para el campo de entrada -->
            
            <input
                type="text"
                class="form-control"
                id="nombreUbicacion"
                placeholder="Ej: Parque Nacional Amacayacu"
            />
            <!-- Campo de entrada de texto para el nombre de la ubicación, con un ejemplo de texto -->
        </div>

        <div class="mb-3">
        <!-- Otro contenedor para un grupo de formulario -->
        
            <label for="entidadUbicacion" class="form-label">Entidad Asociada</label>
            <!-- Etiqueta para el campo de selección -->
            
            <select class="form-select" id="entidadUbicacion">
                <option selected>Selecciona la entidad</option>
                <!-- Opción predeterminada en el menú desplegable -->
                <!-- Aquí se agregarían las entidades dinámicamente -->
            </select>
        </div>

        <button type="submit" class="btn btn-primary">
            Agregar Ubicación
        </button>
        <!-- Botón para enviar el formulario y agregar la ubicación -->
    </form>

    <h2 class="mt-4">Ubicaciones Registradas</h2>
    <!-- Título de la sección que muestra las ubicaciones registradas, con margen superior -->

    <table class="table table-striped">
    <!-- Tabla para mostrar las ubicaciones registradas, con un estilo de rayas -->
    
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Entidad Asociada</th>
                <!-- Encabezados de la tabla -->
            </tr>
        </thead>
        <tbody>
            <!-- Aquí se agregarían las ubicaciones dinámicamente -->
        </tbody>
    </table>
</div>
          <!-- Pestaña de Documento -->
<div class="tab-pane fade" id="documento" role="tabpanel" aria-labelledby="documento-tab">
<!-- Contenedor para el contenido de la pestaña "Documento". 
     La clase 'fade' permite una transición suave al mostrar la pestaña. -->

    <h2 class="mt-4">Agregar Documento</h2>
    <!-- Título de la sección para agregar un nuevo documento, con margen superior -->

    <form>
    <!-- Formulario para agregar un nuevo documento -->
    
        <div class="mb-3">
        <!-- Contenedor para un grupo de formulario, con margen inferior de 3 -->
        
            <label for="tituloDocumento" class="form-label">Título del Documento</label>
            <!-- Etiqueta para el campo de entrada del título del documento -->
            
            <input
                type="text"
                class="form-control"
                id="tituloDocumento"
                placeholder="Ej: Ley de Protección de Parques"
            />
            <!-- Campo de entrada de texto para el título del documento, con un ejemplo de texto -->
        </div>

        <div class="mb-3">
        <!-- Contenedor para el campo de selección del tipo de norma -->
        
            <label for="tipoNormaDocumento" class="form-label">Tipo de Norma</label>
            <!-- Etiqueta para el campo de selección -->
            
            <select class="form-select" id="tipoNormaDocumento">
                <option selected>Selecciona el tipo de norma</option>
                <!-- Opción predeterminada en el menú desplegable -->
                <!-- Aquí se agregarían los tipos de norma dinámicamente -->
            </select>
        </div>

        <div class="mb-3">
        <!-- Contenedor para el campo de selección de categoría -->
        
            <label for="categoriaDocumento" class="form-label">Categoría</label>
            <!-- Etiqueta para el campo de selección -->
            
            <select class="form-select" id="categoriaDocumento">
                <option selected>Selecciona la categoría</option>
                <!-- Opción predeterminada en el menú desplegable -->
                <!-- Aquí se agregarían las categorías dinámicamente -->
            </select>
        </div>

        <div class="mb-3">
        <!-- Contenedor para el campo de selección de ubicación -->
        
            <label for="ubicacionDocumento" class="form-label">Ubicación</label>
            <!-- Etiqueta para el campo de selección -->
            
            <select class="form-select" id="ubicacionDocumento">
                <option selected>Selecciona la ubicación</option>
                <!-- Opción predeterminada en el menú desplegable -->
                <!-- Aquí se agregarían las ubicaciones dinámicamente -->
            </select>
        </div>

        <div class="mb-3">
        <!-- Contenedor para el campo de entrada de versión -->
        
            <label for="versionDocumento" class="form-label">Versión</label>
            <!-- Etiqueta para el campo de entrada -->
            
            <input
                type="text"
                class="form-control"
                id="versionDocumento"
                placeholder="Ej: 1.0"
            />
            <!-- Campo de entrada de texto para la versión del documento, con un ejemplo de texto -->
        </div>

        <div class="mb-3">
        <!-- Contenedor para el campo de entrada de resumen -->
        
            <label for="resumenDocumento" class="form-label">Resumen</label>
            <!-- Etiqueta para el campo de entrada -->
            
            <textarea
                class="form-control"
                id="resumenDocumento"
                rows="3"
                placeholder="Resumen del documento"
            ></textarea>
            <!-- Área de texto para ingresar un resumen del documento -->
        </div>

        <div class="mb-3">
        <!-- Contenedor para el campo de entrada de aplicación -->
        
            <label for="aplicacionDocumento" class="form-label">Aplicación</label>
            <!-- Etiqueta para el campo de entrada -->
            
            <textarea
                class="form-control"
                id="aplicacionDocumento"
                rows="3"
                placeholder="Aplicación del documento"
            ></textarea>
            <!-- Área de texto para ingresar la aplicación del documento -->
        </div>

        <div class="mb-3">
        <!-- Contenedor para el campo de entrada de estado -->
        
            <label for="estadoDocumento" class="form-label">Estado</label>
            <!-- Etiqueta para el campo de entrada -->
            
            <input
                type="text"
                class="form-control"
                id="estadoDocumento"
                placeholder="Ej: Vigente"
            />
            <!-- Campo de entrada de texto para el estado del documento, con un ejemplo de texto -->
        </div>

        <div class="mb-3">
        <!-- Contenedor para el campo de entrada de fecha de publicación -->
        
            <label for="fechaPublicacionDocumento" class="form-label">Fecha de Publicación</label>
            <!-- Etiqueta para el campo de entrada -->
            
            <input
                type="date"
                class="form-control"
                id="fechaPublicacionDocumento"
            />
            <!-- Campo de entrada para seleccionar la fecha de publicación del documento -->
        </div>

        <button type="submit" class="btn btn-primary">
            Agregar Documento
        </button>
        <!-- Botón para enviar el formulario y agregar el documento -->
    </form>

    <h2 class="mt-4">Documentos Registrados</h2>
    <!-- Título de la sección que muestra los documentos registrados, con margen superior -->

    <table class="table table-striped">
    <!-- Tabla para mostrar los documentos registrados, con un estilo de rayas -->
    
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
                <!-- Encabezados de la tabla -->
            </tr>
        </thead>
        <tbody>
            <!-- Aquí se agregarían los documentos dinámicamente -->
        </tbody>
    </table>
</div>

         <!-- Pestaña de Enlace Adjunto -->
<div class="tab-pane fade" id="enlace-adjunto" role="tabpanel" aria-labelledby="enlace-adjunto-tab">
    <!-- Contenedor para el contenido de la pestaña "Enlace Adjunto" -->
    <!-- 'fade' proporciona una transición suave al mostrar la pestaña. -->

    <h2 class="mt-4">Agregar Enlace Adjunto</h2>
    <!-- Título de la sección para agregar un nuevo enlace adjunto, con margen superior -->

    <form>
        <!-- Formulario para agregar un nuevo enlace adjunto -->

        <div class="mb-3">
            <!-- Contenedor para un grupo de formulario, con margen inferior de 3 -->

            <label for="documentoEnlaceAdjunto" class="form-label">Documento Asociado</label>
            <!-- Etiqueta para el campo de selección del documento asociado -->

            <select class="form-select" id="documentoEnlaceAdjunto">
                <option selected>Selecciona el documento</option>
                <!-- Opción predeterminada en el menú desplegable -->
                <!-- Aquí se agregarían los documentos dinámicamente -->
            </select>
        </div>

        <div class="mb-3">
            <!-- Contenedor para el campo de entrada de URL -->

            <label for="urlEnlaceAdjunto" class="form-label">URL</label>
            <!-- Etiqueta para el campo de entrada de URL -->

            <input
                type="url"
                class="form-control"
                id="urlEnlaceAdjunto"
                placeholder="Ej: http://ejemplo.com/documento.pdf"
            />
            <!-- Campo de entrada para la URL del enlace adjunto, con un ejemplo de texto -->
        </div>

        <div class="mb-3">
            <!-- Contenedor para el campo de entrada de descripción -->

            <label for="descripcionEnlaceAdjunto" class="form-label">Descripción</label>
            <!-- Etiqueta para el campo de entrada de descripción -->

            <input
                type="text"
                class="form-control"
                id="descripcionEnlaceAdjunto"
                placeholder="Descripción del enlace"
            />
            <!-- Campo de entrada para la descripción del enlace adjunto -->
        </div>

        <button type="submit" class="btn btn-primary">
            Agregar Enlace Adjunto
        </button>
        <!-- Botón para enviar el formulario y agregar el enlace adjunto -->
    </form>

    <h2 class="mt-4">Enlaces Adjuntos Registrados</h2>
    <!-- Título de la sección que muestra los enlaces adjuntos registrados, con margen superior -->

    <table class="table table-striped">
        <!-- Tabla para mostrar los enlaces adjuntos registrados, con un estilo de rayas -->

        <thead>
            <tr>
                <th>ID</th>
                <th>Documento Asociado</th>
                <th>URL</th>
                <th>Descripción</th>
                <!-- Encabezados de la tabla -->
            </tr>
        </thead>
        <tbody>
            <!-- Aquí se agregarían los enlaces adjuntos dinámicamente -->
        </tbody>
    </table>
</div>
<!-- Fin de la pestaña de Enlace Adjunto -->

<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <!-- Contenedor del pie de página, con fondo oscuro y texto claro -->
    <!-- 'wow fadeIn' permite animaciones de entrada -->

    <div class="container py-5">
        <!-- Contenedor interno con padding vertical de 5 -->

        <div class="row g-5">
            <!-- Fila de columnas con espacio entre ellas -->

            <div class="col-lg-3 col-md-6">
                <!-- Columna que ocupa 3 espacios en pantallas grandes y 6 en medianas -->
                
                <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">
                    Nosotros
                </h4>
                <!-- Título de sección con estilo secundario y color primario -->
                
                <a class="btn btn-link" href="about.html">Acerca de</a>
                <a class="btn btn-link" href="contact.html">Contactanos</a>
                <a class="btn btn-link" href="">Servicios</a>
                <a class="btn btn-link" href="">Politica de privacidad</a>
                <a class="btn btn-link" href="">Terminos y condiciones</a>
                <!-- Enlaces de navegación con estilo de botón -->
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- Columna para la sección de contacto -->

                <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">
                    Contacto
                </h4>
                <!-- Título de sección para contacto -->
                
                <p class="mb-2">
                    <i class="fa fa-map-marker-alt me-3"></i>Sede principal Bogotá:
                    <br />
                    Calle 12b #04-79
                </p>
                <!-- Dirección de contacto, con un ícono de localización -->
                
                <p class="mb-2">
                    <i class="fa fa-phone-alt me-3"></i>+57 318 4313047
                </p>
                <!-- Número de teléfono, con un ícono de teléfono -->
                
                <p class="mb-2">
                    <i class="fa fa-envelope me-3"></i>info@cunamb.com
                </p>
                <!-- Correo electrónico, con un ícono de correo -->
                
                <div class="d-flex pt-2">
                    <!-- Contenedor para los íconos sociales, con diseño flexible -->
                    
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    <!-- Botones para redes sociales -->
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- Columna para horario de atención -->

                <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">
                    Horario atención
                </h4>
                <!-- Título de sección para horario de atención -->
                
                <h5 class="text-light fw-normal">Lunes - Sabado</h5>
                <p>07AM - 05PM</p>
                <!-- Horario de atención de lunes a sábado -->
                
                <h5 class="text-light fw-normal">Sabado</h5>
                <p>10AM - 12AM</p>
                <!-- Horario de atención para sábado -->
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- Columna para suscripciones a noticias -->

                <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">
                    Noticias
                </h4>
                <!-- Título de sección para noticias -->
                
                <p>
                    Suscríbete y recibe las últimas novedades ambientales en tu
                    correo.
                </p>
                <!-- Texto invitando a la suscripción -->
                
                <div class="position-relative mx-auto" style="max-width: 400px">
                    <!-- Contenedor para el campo de entrada, centrado y con un ancho máximo -->
                    
                    <input
                        class="form-control border-primary w-100 py-3 ps-4 pe-5"
                        type="text"
                        placeholder="Tu correo"
                    />
                    <!-- Campo de entrada para el correo electrónico, con estilo personalizado -->
                    
                    <button
                        type="button"
                        class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2"
                    >
                        Unete
                    </button>
                    <!-- Botón para unirse a la suscripción -->
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- Contenedor para el área de derechos de autor -->

        <div class="copyright">
            <!-- Contenedor para el texto de derechos de autor -->

            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Cunamb</a>, Todos los
                    derechos reservados.
                    <!-- Texto de derechos de autor, enlazando a la página de Cunamb -->

                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Diseñado por
                    <a class="border-bottom" href="https://cun.edu.co/">Ing. AFHM.</a>
                    <br /><br />
                    <!-- Enlace al autor del diseño -->
                </div>

                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="">Inicio</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FQAs</a>
                        <!-- Menú de navegación adicional en el pie de página -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
    <!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top">
    <!-- Enlace que permite regresar a la parte superior de la página -->
    <i class="bi bi-arrow-up"></i>
    <!-- Icono de flecha hacia arriba que indica la función del botón -->
</a>
</div>

<!-- Modal para Editar -->
<div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
    <!-- Contenedor del modal, que se usa para editar información -->
    <!-- 'fade' proporciona una transición suave al mostrar el modal -->
    <!-- 'tabindex="-1"' permite que el modal no sea enfocado inicialmente -->
    <!-- 'aria-labelledby' y 'aria-hidden' mejoran la accesibilidad -->

    <div class="modal-dialog">
        <!-- Diálogo del modal, que contiene el contenido del modal -->
        
        <div class="modal-content">
            <!-- Contenido principal del modal -->
            
            <div class="modal-header">
                <!-- Cabecera del modal -->
                
                <h5 class="modal-title" id="editarModalLabel">Editar Tipo de Norma</h5>
                <!-- Título del modal que indica la función de edición -->
                
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <!-- Botón de cierre para el modal -->
                <!-- 'data-bs-dismiss="modal"' permite cerrar el modal al hacer clic -->
                <!-- 'aria-label' mejora la accesibilidad al describir la acción -->
            </div>

            <div class="modal-body">
                <!-- Cuerpo del modal que contiene el formulario para editar -->

                <form id="form-editar">
                    <!-- Formulario para editar los datos, identificado por 'form-editar' -->
                    
                    <input type="hidden" id="tipoNormaId" name="id">
                    <!-- Campo oculto para almacenar el ID del tipo de norma que se está editando -->

                    <div class="mb-3">
                        <!-- Contenedor para el grupo de formulario, con margen inferior de 3 -->

                        <label for="nombre" class="form-label">Nombre</label>
                        <!-- Etiqueta para el campo de entrada del nombre -->
                        
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                        <!-- Campo de entrada para el nombre del tipo de norma -->
                        <!-- 'required' indica que este campo debe ser llenado antes de enviar el formulario -->
                    </div>

                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <!-- Botón para enviar el formulario y actualizar el tipo de norma -->
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Ajax-->
<!-- Espacio reservado para agregar funcionalidades de Ajax, aunque no se incluyen en este fragmento -->


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Carga la biblioteca jQuery (versión 3.6.0) desde el CDN de jQuery, utilizada para facilitar la manipulación del DOM y la gestión de eventos -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<!-- Carga la biblioteca Popper.js (versión 2.9.3) desde el CDN de jsDelivr, necesaria para el posicionamiento de elementos emergentes como tooltips y dropdowns en Bootstrap -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Carga la biblioteca Bootstrap (versión 5.3.0) desde el CDN de jsDelivr, incluyendo todos los componentes de Bootstrap junto con sus dependencias -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Carga una versión anterior de Bootstrap (5.1.3) desde el CDN de jsDelivr; esta línea puede ser redundante y se podría eliminar si no se necesita -->

<script src="lib/wow/wow.min.js"></script>
<!-- Carga la biblioteca WOW.js, que permite animaciones de entrada para elementos en la página cuando se desplazan a la vista -->

<script src="lib/easing/easing.min.js"></script>
<!-- Carga la biblioteca de easing, que proporciona funciones de suavizado para animaciones en la interfaz de usuario -->

<script src="lib/waypoints/waypoints.min.js"></script>
<!-- Carga la biblioteca Waypoints, que permite detectar el desplazamiento del usuario y ejecutar funciones en función de la posición de los elementos en la página -->

<script src="lib/counterup/counterup.min.js"></script>
<!-- Carga la biblioteca CounterUp, que anima la cuenta ascendente de números al desplazarse a su posición en la vista -->

<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<!-- Carga la biblioteca Owl Carousel, utilizada para crear carruseles de imágenes y contenido en la interfaz de usuario -->

<script src="lib/tempusdominus/js/moment.min.js"></script>
<!-- Carga Moment.js, que facilita la manipulación y formateo de fechas y horas -->

<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<!-- Carga Moment Timezone, que añade soporte para zonas horarias a Moment.js -->

<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Carga Tempus Dominus, un complemento de Bootstrap para crear selectores de fecha y hora, utilizando Bootstrap 4 -->

<!-- Template Javascript -->
<script src="js/main.js"></script>
<!-- Carga el archivo JavaScript principal (main.js) que contiene la lógica personalizada del sitio web -->

</body>
<!-- Cierra la etiqueta <body>, indicando el final del contenido del documento HTML -->
</html>
