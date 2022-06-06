<?php include_once('php/autoload.php');
$title = 'Formulario registro de libros'; ?>
<?php require_once('php/components/head.php'); ?>
<?php require_once('php/logic/alert.php');
// Cargamos los datos de autores y tipos de libros
$datosAutor = $book->getAutores();
$datosTiposDeLibros = $book->getTipoLibros();
?>

<?php require_once('php/view/books/form_libro.php'); ?>
<?php require_once('php/components/footer.php'); ?>