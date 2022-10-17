
<div class="main">

<form  method="POST" action="action-lognIn.php">

<a class="logo" href=""><img src="public/layout/img//logo/logo.png" alt=""></a>
<h3 style="margin: 30px 0; font-size: 2.5em;">Sign in</h3>
    <input type="text" class="ipl"  placeholder="Username" aria-label="Username" name="ten_dang_nhap" aria-describedby="basic-addon1" required="">
    <input type="password" class="ipl"  placeholder="Password" aria-label="Password" name="mat_khau" aria-describedby="basic-addon1" required="">
    <?php if (isset($_SESSION['error_login'])) { ?>
        <div class="alert alert-danger" role="alert">
            Bạn đã sai tài khoản mật khẩu
        </div>
    <?php } ?>
    <div class="form-group">
        <div class="p-t-20">
            <!-- <button  id="to-recover" type="button"><i class="fa fa-lock m-r-5"></i> Lost password?</button> -->
            <a href="register.php">Register</a>
            <button class="login" type="submit" name="login">Login</button>
        </div>
    </div>

</form>
</div>