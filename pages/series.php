
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
                        <h3 class="text-center">Series</h3>
                    </div>
                    <div class="card-body">
                        <form action="route.php?page=get-series-result" method="post">
                            <div class="row mt-2">
                                <label for="" class="col-md-4">First number</label>
                                <div class="col-md-8">
                                    <input type="text" name="first_number" class="form-control"  value="<?php echo isset($firstNumber) ? $firstNumber:'' ?>"  />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Last number</label>
                                <div class="col-md-8">
                                    <input type="text" name="last_number" class="form-control" value="<?php echo isset($lastNumber) ? $lastNumber:'' ?>"   />
                                </div>
                            </div>
<!--                            <div class="row mt-2">-->
<!--                                <label for="" class="col-md-4">Operators</label>-->
<!--                                <div class="col-md-8">-->
<!--                                    <label for=""><input type="radio" name="operators" checked value="+">Add</label>-->
<!--                                    <label for=""><input type="radio" name="operators" value="-">Sub</label>-->
<!--                                    <label for=""><input type="radio" name="operators" value="*">Multi</label>-->
<!--                                    <label for=""><input type="radio" name="operators" value="/">Divi</label>-->
<!--                                    <label for=""><input type="radio" name="operators" value="%">Mod</label>-->
<!--                                </div>-->
<!--                            </div>-->
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Result</label>
                                <div class="col-md-8">
                                   <textarea name="" class="form-control" id="" cols="30" rows="10"><?php echo isset($result) ? $result:'' ?></textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-success" value="submit" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<?php include  'includes/footer.php' ?>
