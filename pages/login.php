<?php include "includes/header.php"; ?>
<?php
if (isset($_SESSION['id'])){
    header('Location: route.php?page=login');
}

?>
<section class="py-5 bg-success-subtle">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Login
                        </h3>
                    </div>
                    <div class="card-body">
                        <span class="text-danger"><?php echo isset($message) ? $message : '' ?></span>
                        <form action="route.php?page=login-user" method="post">
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Email</label>
                                <div class="col-md-8">
                                    <input type="text" name="email" class="form-control" value="" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Password</label>
                                <div class="col-md-8">
                                    <input type="text" name="password" class="form-control" value="" />
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

<?php include "includes/footer.php"; ?>

