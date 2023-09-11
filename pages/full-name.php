<?php include 'includes/header.php' ?>
<?php
if (!isset($_SESSION['id'])){
    header('Location: route.php?page=login');
}

?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3>Get Full Name</h3>
                    </div>
                    <div class="card-body">
                        <form action="route.php?page=get-full-name" method="post">
                            <div class="row mt-2">
                                <label for="" class="col-md-4">First name</label>
                                <div class="col-md-8">
                                    <input type="text" name="first_name" class="form-control" value="<?php echo isset($firstName) ? $firstName:'' ?>"  />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Last name</label>
                                <div class="col-md-8">
                                    <input type="text" name="last_name" class="form-control" value="<?php echo isset($lastName) ? $lastName:'' ?>"  />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Full name</label>
                                <div class="col-md-8">
                                    <input type="text"  class="form-control" value="<?php echo isset($fullName) ? $fullName:'' ?>" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Total Words</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" value="<?php echo isset($totalWords) ? ($totalWords):''?>" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Total  Character</label>
                                <div class="col-md-8">
                                    <input type="text"  class="form-control" value="<?php echo isset($totalCharacter) ? ($totalCharacter):''?>" />
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


