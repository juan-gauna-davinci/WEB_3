<!DOCTYPE html>
<html lang="en">

<head>
  <title> Lista de productos </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php require_once('_css.php') ?>
  <?php require_once('_js.php') ?>

</head>

<body>

  <?php require_once('_header.php') ?>

  <div class="conte">
    <div class="cont">
      <h1 class="title-p"> Productos </h1>
      <table class="tb">
        <thead>
          <tr>
            <th class="th-text" > Imagen </th>
            <th class="th-text" > Nombre </th>
              <th class="th-text" > Precio </th>
            <th class="th-text" > Marca </th>
            <th class="th-text" > Acciones </th>
          </tr>
        </thead>
      <tbody>
      <?php foreach ($productos as $pro) : ?>
          <tr>
            <td class="tr-text">  
              <?php if($pro->path_editado): ?>
                <img style="max-width: 100%;" src="<?php echo BASE_URL . $pro->path_editado ?>" alt="">
              <?php endif;  ?>
            </td>
            <td class="tr-text" > <?php echo $pro->nombre ?> </td>
            <td class="tr-text"> $<?php echo number_format($pro->precio, 2, ',', '.') ?> </td>
            <td class="tr-text"> <?php echo $pro->nombre_categoria ?> </td>
            <td class="tr-text">
              <?php if($pro->path_editado): ?>
                <a href="<?php echo BASE_URL ?>img_productos.php?ide=<?php echo $pro->id ?>" class="td-text"> Imagen </a>
              <?php else: ?>
                <a href="<?php echo BASE_URL ?>img_productos.php?ide=<?php echo $pro->id ?>" class="td-text"> Imagen </a>
              <?php endif; ?>
              <a href="<?php echo BASE_URL ?>modificar_producto.php?ide=<?php echo $pro->id ?>" class="td-text">Editar</a>
              <a href="<?php echo BASE_URL ?>eliminar_producto.php?ide=<?php echo $pro->id ?>" class="td-text btn">Eliminar</a>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>

    <nav aria-label="...">
      <ul class="ul-p">
        <?php if($paginas['anterior']): ?>
          <li class="pagination">
            <a href="?pag=<?php echo $paginas['primera'] ?>" tabindex="-1"> Primera </a>
          </li>
          <li class="pagination">
            <a href="?pag=<?php echo $paginas['anterior'] ?>"> <?php echo $paginas['anterior'] ?> </a>
          </li>
        <?php endif ?>
        <li class="pagination">
          <a href="#"><?php echo $paginas['actual'] ?></a>
        </li>
        <?php if($paginas['siguiente']): ?>
          <li class="pagination">
            <a href="?pag=<?php echo $paginas['siguiente'] ?>"> <?php echo $paginas['siguiente'] ?> </a>
          </li>
          <li class="pagination">
            <a href="?pag=<?php echo $paginas['ultima'] ?>"> Última </a>
          </li>
        <?php endif ?>
      </ul>
    </nav>
  </div>
  </div>

  <?php require_once('_footer.php') ?>

  <input type="hidden" id="msj" value="<?php echo $msj ?>" />

  <script src="<?php echo BASE_URL ?>js/lista_productos.js"></script>

</body>

</html>