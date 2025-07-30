<?php
include_once("conexion.php"); 
?>
<!--Busca por VaidrollTeam para más proyectos. -->
<html>
<head>    
	<title>JAVIER CAMPOS</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<link rel="icon" href="logo.png">
</head>
<body>
    <?php
 
    $filasmax = 5;
 
    if (isset($_GET['pag'])) 
	{
        $pagina = $_GET['pag'];
    } else 
	{
        $pagina = 1;
    }
 
 if(isset($_POST['btnbuscar']))
{
$buscar = $_POST['txtbuscar'];

 $qrproductos = mysqli_query($conn, "SELECT cod,des,cate.catdes,pre,stock FROM productos pro,categoria cate 
 where pro.cat=cate.catcod and des = '".$buscar."'");

}
 
    ?>

    <table><tr>
	<th colspan="6"><h1>LISTA DE PRODUCTOS</h1></th></tr>
	<tr>
	<th><a href="index.php">&#128400; Inicio</a></th>
	<form method="POST">
	<th colspan="4">
	<input type="submit" value="&#128270; Buscar" name="btnbuscar">
	<input type="text" name="txtbuscar" id="cajabuscar" placeholder="Ingresar producto" autocomplete="off"></th>
	</form>
	<th>
	<?php echo "<a href=\"agregar.php?pag=$pagina\">&#10010; Agregar</a>";?>
	</th>
	</tr>
	<tr>
	    <th >Código</th>
            <th>Descripción</th>
            <th>Categoría</th>
            <th >Precio</th>
            <th >Stock</th>
	    <th>Acción</th>
	</tr>
 
        <?php
 
        while ($mostrar = mysqli_fetch_assoc($qrproductos)) 
		{
           echo "<tr>";
            echo "<td>".$mostrar['cod']."</td>";
            echo "<td>".$mostrar['des']."</td>";
            echo "<td>".$mostrar['catdes']."</td>";    
			echo "<td>".$mostrar['pre']."</td>";  
			echo "<td>".$mostrar['stock']."</td>";  
            echo "<td style='width:24%'>
			<a href=\"editar.php?cod=$mostrar[cod]&pag=$pagina\">&#9998; Modificar</a> 
			<a href=\"eliminar.php?cod=$mostrar[cod]&pag=$pagina\" 
			onClick=\"return confirm('¿Estás seguro de eliminar a $mostrar[des]?')\">&#10006; Eliminar</a>
			</td>";  		
        }
 
        ?>

    </table>
<div>
</div>
    <div style="text-align:center">
        <?php
        if (isset($_GET['pag'])) 
		{
	if ($_GET['pag'] > 1) {
        ?>
	<a href="index.php?pag=<?php echo $_GET['pag'] - 1; ?>">Anterior</a>
            <?php
	} 
	else 
	{
            ?>
	<a href="#" style="pointer-events: none">Anterior</a>
            <?php
	}
            ?>
            <?php
        } 
		else 
	{
        ?>
        <a href="#" style="pointer-events: none">Anterior</a>
            <?php
        }
 
        if (isset($_GET['pag'])) {
            if ((($pagina) * $filasmax) < $maxproductos) {
                ?>
            <a href="index.php?pag=<?php echo $_GET['pag'] + 1; ?>">Siguiente</a>
        <?php
            } else {
        ?>
            <a href="#" style="pointer-events: none">Siguiente</a>
        <?php
            }
        ?>
        <?php
        } else {
        ?>
            <a href="index.php?pag=2">Siguiente</a>
        <?php
        }
        ?>
    </div>
    </form>
</div>
</body>
</html>