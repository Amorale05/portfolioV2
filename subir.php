<?php
include_once('config/db.php');

$conn = new mysqli($host, $user, $pass, $db);
$conn->set_charset("utf8mb4");

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // ==========================
    // SUBIR SKILL
    // ==========================
    if (isset($_POST["tipo"]) && $_POST["tipo"] === "skill") {

        $nombre    = trim($_POST["nombre"]);
        $categoria = $_POST["categoria"];

        if (!empty($_FILES["imagen"]["name"])) {

            $nombreArchivo = time() . "_" . basename($_FILES["imagen"]["name"]);
            $ruta = "img/" . $nombreArchivo;

            if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta)) {

                $stmt = $conn->prepare(
                    "INSERT INTO skill (nombre, imagen, categoria)
                     VALUES (?, ?, ?)"
                );
                $stmt->bind_param("sss", $nombre, $ruta, $categoria);

                if ($stmt->execute()) {
                    $mensaje = "Skill guardado correctamente.";
                } else {
                    $mensaje = "Error al guardar skill.";
                }
            } else {
                $mensaje = "No se pudo subir la imagen.";
            }
        }
    }

    // ==========================
    // SUBIR PROYECTO
    // ==========================
    if (isset($_POST["tipo"]) && $_POST["tipo"] === "project") {

        $titulo      = trim($_POST["titulo"]);
        $descripcion = trim($_POST["descripcion"]);

        $github = trim($_POST["github"]);
        $demo   = trim($_POST["demo"]);

        $github = ($github === "") ? NULL : $github;
        $demo   = ($demo === "")   ? NULL : $demo;

        $techs = [];

        if (isset($_POST["technologies"])) {
            foreach ($_POST["technologies"] as $t) {
                $t = trim($t);
                if ($t !== "") {
                    $techs[] = $t;
                }
            }
        }

        $technologies = implode(", ", $techs);

        if (!empty($_FILES["imagen"]["name"])) {

            $nombreArchivo = time() . "_" . basename($_FILES["imagen"]["name"]);
            $ruta = "img/" . $nombreArchivo;

            if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta)) {

                $stmt = $conn->prepare(
                    "INSERT INTO project
                    (titulo, descripcion, imagen, technologies, github, demo)
                    VALUES (?, ?, ?, ?, ?, ?)"
                );

                $stmt->bind_param(
                    "ssssss",
                    $titulo,
                    $descripcion,
                    $ruta,
                    $technologies,
                    $github,
                    $demo
                );

                if ($stmt->execute()) {
                    $mensaje = "Proyecto guardado correctamente.";
                } else {
                    $mensaje = "Error al guardar proyecto.";
                }

            } else {
                $mensaje = "No se pudo subir la imagen.";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Subir contenido</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<section class="contact">
<div class="container">

<h2 class="section-title">Panel de carga</h2>
<p class="section-description">
Agregar skills y proyectos a tu portafolio
</p>

<?php if($mensaje): ?>
<p style="text-align:center; margin-bottom:2rem;">
<?= htmlspecialchars($mensaje) ?>
</p>
<?php endif; ?>

<div class="contact-grid">

<!-- ============================= -->
<!-- FORM SKILL -->
<!-- ============================= -->
<div class="contact-form-container">

<h3>Agregar Skill</h3>

<form class="contact-form" method="POST" enctype="multipart/form-data">

<input type="hidden" name="tipo" value="skill">

<div class="form-group">
<label>Nombre</label>
<input type="text" name="nombre" required>
</div>

<div class="form-group">
<label>Categoría</label>
<select name="categoria" required
style="padding:0.75rem 1rem;border:1px solid #cbd5e1;border-radius:0.5rem;">
<option value="">Seleccione...</option>
<option value="frontend">Frontend</option>
<option value="backend">Backend</option>
<option value="other">Other</option>
</select>
</div>

<div class="form-group">
<label>Imagen</label>
<input type="file" name="imagen" accept="image/*" required>
</div>

<button class="btn btn-primary btn-full" type="submit">
Guardar skill
</button>

</form>
</div>

<!-- ============================= -->
<!-- FORM PROYECTO -->
<!-- ============================= -->
<div class="contact-form-container">

<h3>Agregar Proyecto</h3>

<form class="contact-form" method="POST" enctype="multipart/form-data" id="formProject">

<input type="hidden" name="tipo" value="project">

<div class="form-group">
<label>Título</label>
<input type="text" name="titulo" required>
</div>

<div class="form-group">
<label>Descripción</label>
<textarea name="descripcion" required></textarea>
</div>

<div class="form-group">
<label>Imagen</label>
<input type="file" name="imagen" accept="image/*" required>
</div>

<div class="form-group">
<label>Tecnologías</label>

<div id="techContainer">
<input type="text" name="technologies[]" placeholder="Ej. PHP">
</div>

<button type="button"
class="btn btn-secondary"
onclick="addTech()">
Agregar tecnología
</button>

</div>

<div class="form-group">
<label>GitHub (opcional)</label>
<input type="url" name="github">
</div>

<div class="form-group">
<label>Demo (opcional)</label>
<input type="url" name="demo">
</div>

<button class="btn btn-primary btn-full" type="submit">
Guardar proyecto
</button>

</form>

</div>

</div>
</div>
</section>

<script>
function addTech() {
    const cont = document.getElementById("techContainer");
    const input = document.createElement("input");
    input.type = "text";
    input.name = "technologies[]";
    input.placeholder = "Otra tecnología";
    input.style.marginTop = "0.5rem";
    cont.appendChild(input);
}
</script>

</body>
</html>