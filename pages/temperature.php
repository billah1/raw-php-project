<?php include 'includes/header.php' ?>
<?php
if (!isset($_SESSION['id'])){
    header('Location: route.php?page=login');
}

?>
<section class="py-5 bg-warning-subtle">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4>Temperature Series</h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="row mb-3">
                                <label class="col-md-3">Temperature Number</label>
                                <div class="col-md-9">
                                    <input type="number" name="temperature_number" class="form-control"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Result</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" id="" cols="30" rows="5"><?php echo "Fer: ". $fer ?></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="temp_btn" class="btn btn-dark " value="submit"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>


<?php include 'includes/footer.php' ?>
