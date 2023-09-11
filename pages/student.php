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
                        <h3>Add Student Info</h3>
                    </div>
                    <div class="card-body">
                        <form action="route.php?page=get-student-info" method="post" enctype="multipart/form-data">
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Student Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="name" class="form-control"  />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Student Email</label>
                                <div class="col-md-8">
                                    <input type="email" name="email" class="form-control"  />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Student Mobile</label>
                                <div class="col-md-8">
                                    <input type="text" name="mobile"  class="form-control"  />
                                </div>
                            </div>
<!--                         ````````   <div class="row mt-2">-->
<!--                                <label for="" class="col-md-4">Total Words</label>-->
<!--                                <div class="col-md-8">-->
<!--                                    <input type="text" class="form-control" value="--><?php //echo isset($totalWords) ? ($totalWords):''?><!--" />-->
<!--                                </div>-->
<!--                            </div>-->
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Student Image</label>
                                <div class="col-md-8">
                                    <input type="file" name="image" src="" alt="" width="300" height="200">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-success" value="Add Student" />
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



