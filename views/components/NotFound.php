<?php

/**
 * A function that will display the not found message
 * if the user try to access the unavailable page
 */
function notFound() {
    ?>
    <div class="hero hero-lg bg-error">
        <div class="hero-body">
            <h1 class="text-center">Page not found. Try to access valid URL.</h1>
        </div>
    </div>
    <?php
}