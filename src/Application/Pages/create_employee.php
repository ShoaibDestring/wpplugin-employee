<?php
session_start();

if (isset($_POST['submit'])) {


    global $wpdb;
    global $table_prefix;
    $table_name = $table_prefix . 'employees';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_no'];
    $address = $_POST['address'];

    $sql = "INSERT INTO $table_name (name,email,phone_no,address)
    VALUES ('$name', '$email', '$phone_no', '$address' )";

    $result = $wpdb->query($sql);

    if ($result) {
        $_SESSION['status'] = "Data Successfully Submitted";
    } else {
        $_SESSION['status'] = "Data Not Submitted";
    }
}
?>
<div class="container mt-3">
    <div class="row m-2" style=" display: flex;
  justify-content: center;">
        <div class="col-md-8">
            <center>
                <div class="div">
                    <h1>Enter Employee Data</h1>
                </div>
            </center>
            <div class="form m-2 py-2">
                <?php
                if (isset($_SESSION['status'])) {
                ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Hurrah!</strong> <?php echo $_SESSION['status']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                <?php
                    unset($_SESSION['status']);
                }
                ?> <form action="" method="post">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="name" class="form-control" name="name" id="name" aria-describedby="emailHelp" required>

                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="email" required>

                    </div>
                    <div class="form-group">
                        <label for="phone_no">Phone</label>
                        <input type="phone_no" class="form-control" name="phone_no" id="phone_no" aria-describedby="phone_no" required>

                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" class="form-control" id="address" required>
                    </div>

                    <div class="m-2">
                        <center> <button type="submit" class="btn btn-primary btn-sm" name="submit">Save</button></center>

                    </div>
                </form>
            </div>

        </div>
    </div>
</div>