
 <html>
 <head>
 
    <link href="assets/css/sifreDegis.css" rel="stylesheet" />
 </head>
 <body>
 
 

 <fieldset>
        <legend>Change Password</legend>
    <form action="netting/islem.php" method="POST">
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
    </fieldset>
    </body>
    </html>