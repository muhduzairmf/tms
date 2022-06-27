<?php
include './views/components/BasicHeader.php';
basicHeader("Home");

$features = [
    [
        'tab'=>'Student',
        'section'=>'Registered List',
        'url'=>'./clerk.php?tab=student&section=register-list',
        'pic'=>'https://res.cloudinary.com/webalys/image/private/w_120,h_120,ar_1/f_auto/v1/icons/office/document-sign-1-a1f8w3o1ko00s8uec50iuqf.png/document-sign-1-tprx8jb7o5c59mtdvbu1xj.png'
    ],
    [
        'tab'=>'Student',
        'section'=>'Fee Payment',
        'url'=>'./clerk.php?tab=student&section=fee-payment',
        'pic'=>'https://res.cloudinary.com/webalys/image/private/w_120,h_120,ar_1/f_auto/v1/icons/illustrations-duotone/marketing-advertising/pay-per-view-pay-per-click/click-revenue-browser-1-ayuwq6b8jjj8z2omi9m5qi.png'
    ],
    [
        'tab'=>'Staff',
        'section'=>'Add New',
        'url'=>'./clerk.php?tab=staff&section=add-new',
        'pic'=>'https://res.cloudinary.com/webalys/image/private/w_120,h_120,ar_1/f_auto/v1/icons/illustrations-duotone/users/users-actions/avatar-add-2-1-oek122gmkbaaz5z3if9536.png'
    ],
    [
        'tab'=>'Staff',
        'section'=>'Teacher Salary Payment',
        'url'=>'./clerk.php?tab=staff&section=teacher-salary-payment',
        'pic'=>'https://res.cloudinary.com/webalys/image/private/w_120,h_120,ar_1/f_auto/v1/icons/illustrations-duotone/work/office-workers/boss-sit-3-2-1fzvo8nkz7rqxehvt8xto.png'
    ],
    [
        'tab'=>'Timetable',
        'section'=>'Adjust Timetable',
        'url'=>'./clerk.php?tab=timetable&section=adjust-timetable',
        'pic'=>'https://res.cloudinary.com/webalys/image/private/w_120,h_120,ar_1/f_auto/v1/icons/illustrations-duotone/work/schedule-working-hours/work-calendar-xyecx4jlwwslg37ljzkso9.png'
    ],
    [
        'tab'=>'Timetable',
        'section'=>'Check Teacher Availability',
        'url'=>'./clerk.php?tab=timetable&section=check-teacher-availability',
        'pic'=>'https://res.cloudinary.com/webalys/image/private/w_120,h_120,ar_1/f_auto/v1/icons/illustrations-duotone/work/schedule-working-hours/work-alarm-3-cdihfpgrbdtcfudbn4fz4d.png'
    ],
    [
        'tab'=>'Setting',
        'section'=>'About Me',
        'url'=>'./clerk.php?tab=setting&section=about-me',
        'pic'=>'https://res.cloudinary.com/webalys/image/private/w_120,h_120,ar_1/f_auto/v1/icons/illustrations-duotone/users/user-identification/avatar-frame-6-632i6c3pcr7g2983zu9fp.png'
    ],
    [
        'tab'=>'Setting',
        'section'=>'Change Password',
        'url'=>'./clerk.php?tab=setting&section=change-password',
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