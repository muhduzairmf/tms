<?php
include './views/components/BasicHeader.php';
basicHeader("Home");

$features = [
    [
        'tab'=>'Teacher',
        'section'=>'Approve Salary Payment',
        'url'=>'./manager.php?tab=teacher&section=approve-salary-payment',
        'pic'=>'https://res.cloudinary.com/webalys/image/private/w_120,h_120,ar_1/f_auto/v1/icons/illustrations-duotone/business/business-people/self-employed-1-5jf4b1ns47fypblkkkvgi.png'
    ],
    [
        'tab'=>'Timetable',
        'section'=>'Approve New Timetable',
        'url'=>'./manager.php?tab=timetable&section=approve-new-timetable',
        'pic'=>'https://res.cloudinary.com/webalys/image/private/w_120,h_120,ar_1/f_auto/v1/icons/illustrations-duotone/marketing-advertising/seo/seo-document-ahoe4t5gdsdremyq015nz.png'
    ],
    [
        'tab'=>'Setting',
        'section'=>'About Me',
        'url'=>'./manager.php?tab=setting&section=about-me', 
        'pic'=>'https://res.cloudinary.com/webalys/image/private/w_120,h_120,ar_1/f_auto/v1/icons/illustrations-duotone/users/user-identification/avatar-frame-6-632i6c3pcr7g2983zu9fp.png'
    ],
    [
        'tab'=>'Setting',
        'section'=>'Change Password',
        'url'=>'./manager.php?tab=setting&section=change-password',
        'pic'=>'https://res.cloudinary.com/webalys/image/private/w_120,h_120,ar_1/f_auto/v1/icons/illustrations-duotone/users/user-protection/padlock-square-2ebfef8os3d114t80ns64gi.png'
    ]
];
?>
<br><br>
<section class="container grid-lg">
    <div class="columns">
        <?php
        foreach ($features as $feature) {
        ?>
            <div class="column col-sm-12 col-lg-6 col-4 py-2">
                <a href="<?php echo $feature['url']; ?>">
                <div class="card modified-card my-2">
                <div class="card-image"><img src="<?php echo $feature['pic']; ?>" alt="<?php echo $feature['section']; ?>" class="img-responsive p-centered my-2"></div>
                <div class="card-header">
                    <div class="card-title h5"><?php echo $feature['tab']; ?></div>
                    <div class="card-subtitle text-dark"><?php echo $feature['section']; ?></div>
                </div>
                </div>
                </a>
            </div>
        <?php
        }
        ?>
    </div>
</section>