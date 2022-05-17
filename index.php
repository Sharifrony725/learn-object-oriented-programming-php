<?php
require_once './vendor/autoload.php';

use App\Classes\Student;
use App\Classes\Calculator;

$result = '';
if (isset($_POST['btn'])) {
    $student = new Student($_POST);
    $result = $student->index();
}
$calResult = '';
if(isset($_POST['btn2'])){
    $calculator = new Calculator($_POST);
    $calResult = $calculator->index();
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>PHP OOP</title>
</head>

<body>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3>Please fill up the form</h3>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="first_name" placeholder="first name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="last_name" placeholder="last name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Full Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="<?php echo $result ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn-outline-success" name="btn" value="submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3>My Calculator</h3>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3">First Number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="first_number" placeholder="first number">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3">Second Number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="second_number" placeholder="second number">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3">Action</label>
                                    <div class="col-md-9">
                                        <label><input type="radio" name="action" value="+"> Add</label>
                                        <label><input type="radio" name="action" value="-"> Sub</label>
                                        <label><input type="radio" name="action" value="/"> Div</label>
                                        <label><input type="radio" name="action" value="*"> Multi</label>
                                        <label><input type="radio" name="action" value="%"> Rem</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3">Result</label>
                                    <div class="col-md-9">
                                        <input type="number" readonly  class="form-control" value="<?php echo $calResult;?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn-outline-success btn-block" name="btn2" value="submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>