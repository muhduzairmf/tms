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
                        if (isset($_SESSION['tcr_email'])) {
                            if ($_SESSION['tcr_email'] == "meixing@email.com") {
                                echo "LI";
                            } else if ($_SESSION['tcr_email'] == "bazli@email.com") {
                                echo "BA";
                            }
                        } else { echo "TE"; }
                        ?>" style="background-color: #5755d9;"></figure></i></h1>
                </div>
                <div class="card-footer">
                    <h2 class="text-center"><strong>
                        <?php 
                        if (isset($_SESSION['tcr_email'])) {
                            if ($_SESSION['tcr_email'] == "lim@email.com") {
                                echo "Ms. Lim";
                            } else if ($_SESSION['tcr_email'] == "bazli@email.com") {
                                echo "Mr. Bazli";
                            }
                        } else { echo "Mr. Bazli"; }
                        ?>
                    </strong></h2>
                    <h5 class="text-center"><?php echo (isset($_SESSION['tcr_email'])) ? $_SESSION['tcr_email'] : "bazli@email.com" ?></h5>
                    <h5 class="text-center">Teacher in Cyber Saujana Tuition</h5>
                    <br>
                    <form action="./auth/Logout.auth.php" method="post"><button class="btn btn-primary p-centered" type="submit">Logout</button></form>
                    <br>
                </div>
            </div>
            <br><br>
        </div>
    </div>
</section>