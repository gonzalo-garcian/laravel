<?php require('partials/head.view.php'); ?>

<?php require "partials/nav.view.php"; ?>

<?php require "partials/banner.view.php"; ?>

    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">


            <ul>
                <?php
                foreach ($notes as $note) : ?>
                    <li><h2><?= $note['body'] ?></h2></li>
                <?php endforeach;?>
            </ul>

            <?php $deck->cardsToString(); ?>
        </div>
    </main>

<?php require "partials/footer.view.php"; ?>