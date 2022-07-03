<?php
include './views/components/BasicHeader.php';
basicHeader("About Me");
?>
<br><br>
<section class="container">
    <div class="columns">
        <div class="column col-6 col-mx-auto">
            <div class="card modified-card">
                <div class="card-header">
                    <br>
                    <h1 class="text-center"><figure class="avatar avatar-xl" data-initial="<?php 
                        if (isset($_SESSION['mngr_email'])) {
                            if ($_SESSION['mngr_email'] == "saiful@email.com") {
                                echo "SA";
                            } else if ($_SESSION['mngr_email'] == "shahida@email.com") {
                                echo "NU";
                            }
                        } else { echo "NU"; }
                        ?>" style="background-color: #5755d9;"></figure></h1>
                </div>
                <div class="card-footer">
                    <h2 class="text-center"><strong>
                        <?php 
                        if (isset($_SESSION['mngr_email'])) {
                            if ($_SESSION['mngr_email'] == "saiful@email.com") {
                                echo "Mr. Saiful Nizam";
                            } else if ($_SESSION['mngr_email'] == "shahida@email.com") {
                                echo "Ms. Nur Shahida";
                            }
                        } else { echo "Ms. Nur Shahida"; }
                        ?>
                    </strong></h2>
                    <h5 class="text-center"><?php echo (isset($_SESSION['mngr_email'])) ? $_SESSION['mngr_email'] : "shahida@email.com" ?></h5>
                    <h5 class="text-center">Manager in Cyber Saujana Tuition</h5>
                    <br>
                    <form action="./auth/Logout.auth.php" method="post"><button class="btn btn-primary p-centered" type="submit">Logout</button></form>
                    <br>
                </div>
            </div>
            <br><br>
        </div>
    </div>
</section>