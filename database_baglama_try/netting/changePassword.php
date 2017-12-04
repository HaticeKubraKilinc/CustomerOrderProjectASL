<?php
include 'baglan.php';
session_start();
$admin_kadi=$_SESSION['admin_kadi'];

if ($admin_kadi) {

if ($_POST['re_password']) {
$old_pass=md5($_POST['old_pass']);
$new_pass=md5($_POST['new_pass']);
$re_pass=md5($_POST['re_pass']);

$queryget =mysql_query("SELECT admin_sifre FROM login WHERE admin_kadi='$admin_kadi'");
$row = mysql_fetch_assoc($queryget);
$old_passdb=$row['admin_sifre'];

if ($old_pass==$old_passdb) {

	if ($new_pass==$re_pass) {
		$querychange=mysql_query("UPDATE login SET admin_sifre='$new_pass' WHERE admin_kadi='$admin_kadi'");
        session_destroy();

        echo "<script>alert('Update Sucessfully'); window.location='login.php'</script>";

		
	}
    else
    {
        die("passwords dpesnt match!");

    }

	
}
else{
	die("wrong old paas!");
}




}

 ?>
<form action="changePassword.php" method="POST">
        <dl>
            <dt>
                Old Password
            </dt>
                <dd>
                    <input type="password" name="old_pass" placeholder="Old Password..." value="" required />
                </dd>
        </dl>
        <dl>
            <dt>
                New Password
            </dt>
                <dd>
                    <input type="password" name="new_pass" placeholder="New Password..." value=""  required />
                </dd>
        </dl>
        <dl>
            <dt>
                Retype New Password
            </dt>
                <dd>
                    <input type="password" name="re_pass" placeholder="Retype New Password..." value="" required />
                </dd>
        </dl>
 
        <p align="center">
            <input type="submit" class="btn" value="Reset Password" name="re_password" />
        </p>
    </form>
    <?php
	
}
else {
	die("you must be logged in");
}

?>