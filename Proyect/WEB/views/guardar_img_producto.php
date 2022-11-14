<!DOCTYPE html>
<html lang="en">

<head>
    <title> Bootstrap Example </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php require_once('_css.php') ?>
    <?php require_once('_js.php') ?>

</head>

<body>

    <?php require_once('_header.php') ?>

    <div class="conte">
        <div class="con">
            <h1 class="title-p">
                <?php echo $producto->nombre ?> </h1>
            <?php if ($producto->path_original): ?>
            <div>
                <img class="img_p" src="<?php echo BASE_URL . $producto->path_original ?>" alt="" />
                <a href="#" class="btn" onclick="eliminarImagen('img_productos_eliminar.php?ide=<?php echo $producto->id ?>')"> Eliminar imagen </a>
            </div>
            <?php else: ?>
            <form action="img_productos.php" method="post" enctype="multipart/form-data">
                <div class="ar">
                    <label class="text-p" for="archivo"> Archivo </label>
                    <input type="file" class="control" name="archivo" id="archivo">
                </div>
                <input  type="hidden" name="ide" value="<?php echo $producto->id ?>">
                <button type="submit" class="btn">Enviar</button>
            </form>
            <?php endif ?>
        
        </div>

    </div>

    <?php require_once('_footer.php') ?>

    <script>
        var imagen_grande = document.getElementById("imagen_grande");

        function mostrarImagen(p_imagen) {
            imagen_grande.src = p_imagen;
            exampleModal.show();
        }

        function eliminarImagen(p_imagen) {

            Swal.fire({
                title: 'Está segura/o?',
                text: "Si elimina este archivo no se podrá recuperar!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'No, me arrepentí!',
                confirmButtonText: 'Sí, eliminar!'
            }).then((result) => {
                if (result.isConfirmed) {
                    //Lo que sucede cuando le da click al botón aceptar.
                    location.href = p_imagen;
                }
            });

        }
    </script>

</body>

</html>