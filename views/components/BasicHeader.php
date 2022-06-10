<?php

/**
 * A function that will display the basic header and 
 * the title of the header, based on the passed parameter
 */
function basicHeader($title) {
    ?>
    <section class="hero hero-sm bg-gray">
        <article class="hero-body">
            <h1 class="text-center"><?= $title ?></h1>
        </article>
    </section>
    <?php
}