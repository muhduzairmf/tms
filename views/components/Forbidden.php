<?php

/**
 * A function that will display the forbidden message
 * if the user try to access the page that are not
 * appropriate for them
 */
function forbidden($homeurl) {
    ?>
    <style>
        .centered {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
    <div class="bg-error centered">
        <div>
            <h1 class="text-light">Forbidden. Inappropriate page to show.</h1>
            <a href="<?php echo $homeurl; ?>" class="text-light">Back to home page</a>
        </div>
    </div>
    <?php
}