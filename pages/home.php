<?php include 'includes/header.php' ?>
<?php
        if (!isset($_SESSION['id'])){
            header('Location: route.php?page=login');
        }

?>
    <h1>this is home page</h1>


<?php include 'includes/footer.php' ?>