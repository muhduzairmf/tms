<?php

/**
 * A function that will display unauthorized message
 * if the user try to access the page that need them
 * to login
 */
function unauthorized() {
    ?>
    <div class="hero hero-lg bg-error">
        <div class="hero-body">
            <h1 class="text-center">Unauthorized. Login is required.</h1>
        </div>
    </div>
    <?php
}