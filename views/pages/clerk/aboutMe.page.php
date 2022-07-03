
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
                    <h1 class="text-center"><figure class="avatar avatar-xl" data-initial="KA" style="background-color: #5755d9;"></figure></i></h1>
                </div>
                <div class="card-footer">
                    <h2 class="text-center"><strong>Kamal Adli</strong></h2>
                    <h5 class="text-center">kamal@email.com</h5>
                    <h5 class="text-center">Clerk in Cyber Saujana Tuition</h5>
                    <br>
                    <form action="./auth/Logout.auth.php" method="post"><button class="btn btn-primary p-centered" type="submit">Logout</button></form>
                    <br>
                </div>
            </div>
            <br><br>
        </div>
    </div>
</section>