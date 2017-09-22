<html>
    <head>

    </head>
    <body>
		<img src="qrcode.png"/>
        <?php
        require_once('otphp/lib/otphp.php');
        $totp = new \OTPHP\TOTP("JBSWY3DPEHPK3PXP");
        echo "Current OTP: ". $totp->now();
        ?>
    </body>
</html>
