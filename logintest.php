<?php
session_start();
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginPage</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body style="background-color: #fbf6ef; ">

    <div class="Contaitner">
                // บังคับให้ทำใส่ข้อความ ขึ้นแจ้งเตือนเมื่อไม่ใส่ข้อความ
            <?php if(!empty($_SESSION['message'])): ?>
            <div class="alert alert-danger alert-dismissible fade show my-5" role="alert">
                <?php echo $_SESSION['message']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php unset($_SESSION['message']); ?>
            <?php endif; ?>

            //เลื่อนบล็อคข้อความลงมา + อยุ่ตรงกลาง
        <div class="row d-flex align-items-center justify-content-center" stlye="height:600px;" >
            <div class="col-sm-5"> 
                    
            <h1 style="color: #95b3db;"> Login</h1>

                // สร้างกล่องข้อความล้อคอิน
                <form action="<?php echo $base_url . '/login-form.php'; ?> "method="post" class="border rounded p-4 border border-4" >

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="กรุณาใส่อีเมล">
                    </div> 
                        <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="กรุณาใส่รหัสผ่าน">
                    </div>
                        <button type="submit" class="btn btn-primary" type="button" style="background-color: #95b3db;" >Submit</button>
                        <a href="<?php echo $base_url . '/registration.php'; ?>" class="btn btn-outline-primary" type="button">Go to registration page</a>
                </form>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 

</body>
</html>