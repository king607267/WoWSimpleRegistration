<?php
/**
 * Created by Amin.MasterkinG
 * Website : MasterkinG32.CoM
 * Email : lichwow_masterking@yahoo.com
 * Date: 11/26/2018 - 8:36 PM
 */
if (version_compare(PHP_VERSION, '7.0', '<')) {
    echo "<p>You need to use PHP >= 7.0.0</p>";
    echo "<hr>";
    echo "<p><a href='https://www.apachefriends.org/index.html' target='_blank'>XAMPP - Windows/Mac/Linux</a></p>";
    echo "<p><a href='http://www.wampserver.com/en/' target='_blank'>WAMP Server - Windows</a></p>";
    echo "<hr>";
    echo "<p><a href='https://www.vultr.com/docs/how-to-install-and-configure-php-70-or-php-71-on-ubuntu-16-04' target='_blank'>Install PHP 7 on Ubuntu 16.04</a></p>";
    echo "<p><a href='https://www.digitalocean.com/community/tutorials/how-to-upgrade-to-php-7-on-ubuntu-14-04' target='_blank'>Install PHP 7 on Ubuntu 14.04</a></p>";
    echo "<hr>";
    echo "<p><a href='https://tecadmin.net/install-php-7-on-ubuntu/' target='_blank'>Install PHP 7 on Ubuntu 18.04</a></p>";
    echo "<p><a href='https://www.vultr.com/docs/how-to-install-and-configure-php-70-or-php-71-on-ubuntu-16-04' target='_blank'>Install PHP 7 on Ubuntu 16.04</a></p>";
    echo "<p><a href='https://www.digitalocean.com/community/tutorials/how-to-upgrade-to-php-7-on-ubuntu-14-04' target='_blank'>Install PHP 7 on Ubuntu 14.04</a></p>";
    echo "<hr>";
    echo "<p><a href='https://computingforgeeks.com/install-php-on-debian-10-buster/' target='_blank'>Install PHP 7 on Debian 10</a></p>";
    echo "<p><a href='https://computingforgeeks.com/how-to-install-php-7-3-on-debian-9-debian-8/' target='_blank'>Install PHP 7 on Debian 8/9</a></p>";
    echo "<hr>";
    echo "<p><a href='https://linuxize.com/post/install-php-7-on-centos-7/' target='_blank'>Install PHP 7 on CentOS 7</a></p>";
    echo "<p><a href='https://www.tecmint.com/install-php-7-in-centos-6/' target='_blank'>Install PHP 7 on CentOS 6</a></p>";
    echo "<hr>";
    echo "<p><a href='https://www.a2hosting.com/kb/cpanel/cpanel-software/changing-php-versions-and-settings-in-cpanel' target='_blank'>CPanel change PHP version</a></p>";
    echo "<p><a href='https://www.liquidweb.com/kb/installing-additional-php-versions-using-easyapache-4/' target='_blank'>CPanel EasyApache4 install PHP 7</a></p>";
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="MasterkinG32.CoM"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="description" content="Index">
    <meta name="description" content="WJMWoW">
    <title>WJMWoW</title>
    <link rel="stylesheet"
          href="./css/bootstrap.min.css">
    <link rel="stylesheet"
          href="./css/style.css">
    <script src="./js/jquery-3.3.1.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/popper.min.js"></script>
</head>
<body>
<div class="container">
<div class="row">
    <div class="main-box">
        <img src="images/wow-logo.png">
        <div class="col-xs-12" style="margin-top: 20px;">
            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                <div class="tab-pane fade active show" id="nav-topplayers" role="tabpanel"
                     aria-labelledby="nav-topplayers-tab">
                    <button onclick="location.href='classic.php'" type="button" class="btn btn-info" data-toggle="modal" data-aos="fade-up"
                            data-aos-delay="100" data-target="#modal-id1">经典旧世（classic）
                    </button>
                    <button onclick="location.href='tbc.php'" type="button" class="btn btn-info" data-toggle="modal" data-aos="fade-up"
                            data-aos-delay="100" data-target="#modal-id2">燃烧的远征（tbc）
                    </button>
                    <button onclick="location.href='wotlk.php'" type="button" class="btn btn-info" data-toggle="modal" data-aos="fade-up"
                            data-aos-delay="100" data-target="#modal-id5">巫妖王之怒（wtolk）
                    </button>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<footer class="text-center">
    <a target="_blank" href="https://qm.qq.com/cgi-bin/qm/qr?k=TuCwkQcKkc4Pz57ii60Fma91Lwvsht77&jump_from=webapi">魔兽闲聊学习讨论群 745274862</a>
</footer>
</body>
</html>
