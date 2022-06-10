<?php
include './views/components/BasicHeader.php';
basicHeader("Home");

$features = [
    [
        'tab'=>'My Class',
        'section'=>'My Subject',
        'url'=>'./teacher.php?tab=my-class&section=my-subject',
        'pic'=>'https://res.cloudinary.com/webalys/image/private/w_120,h_120,ar_1/f_auto/v1/icons/illustrations-duotone/business/spreadsheet/invoice-spreadsheet-2-lujyhi3mjslt8gwzpj92y.png'
    ],
    [
        'tab'=>'My Class',
        'section'=>'Student Attendance',
        'url'=>'./teacher.php?tab=my-class&section=student-attendance',
        'pic'=>'https://res.cloudinary.com/webalys/image/private/w_120,h_120,ar_1/f_auto/v1/icons/illustrations-duotone/marketing-advertising/advertising/megaphone-hand-1-vj3vqi7f8lewprpnyixqec.png'
    ],
    [
        'tab'=>'My Class',
        'section'=>'My Student List',
        'url'=>'./teacher.php?tab=my-class&section=my-student-list',
        'pic'=>'https://res.cloudinary.com/webalys/image/private/w_120,h_120,ar_1/f_auto/v1/icons/illustrations-duotone/users/user-profile-data/folder-document-1-3a8y5drnos5r0aq5vhawd.png'
    ],
    [
        'tab'=>'Timetable',
        'section'=>'Confirm Availability',
        'url'=>'./teacher.php?tab=timetable&section=confirm-availability',
        'pic'=>'https://res.cloudinary.com/webalys/image/private/w_120,h_120,ar_1/f_auto/v1/icons/illustrations-duotone/business/business-ideas/creative-idea-imac-1-abw9iwmq8jnh92gu7obv.png'
    ],
    [
        'tab'=>'Salary',
        'section'=>'Salary Payment History',
        'url'=>'/teacher.php?tab=salary&section=salary-payment-history',
        'pic'=>'https://res.cloudinary.com/webalys/image/private/w_120,h_120,ar_1/f_auto/v1/icons/illustrations-duotone/business/growth-profit-success/floating-cash-1-6r2qluhyyxwmzj8hgpgcy.png'
    ],
    [
        'tab'=>'Setting',
        'section'=>'About Me',
        'url'=>'/teacher.php?tab=setting&section=about-me',
        'pic'=>'https://res.cloudinary.com/webalys/image/private/w_120,h_120,ar_1/f_auto/v1/icons/illustrations-duotone/users/user-identification/avatar-frame-6-632i6c3pcr7g2983zu9fp.png'
    ],
    [
        'tab'=>'Setting',
        'section'=>'Change Password',
        'url'=>'./teacher.php?tab=setting&section=change-password',
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