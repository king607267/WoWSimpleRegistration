<?php
/**
 * Created by Amin.MasterkinG
 * Website : MasterkinG32.CoM
 * Email : lichwow_masterking@yahoo.com
 * Date: 11/26/2018 - 8:36 PM
 */
require_once 'header.php';
?>
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
<?php require_once 'footer.php'; ?>
