<?php require "views/partials/head.php" ?>
<?php require "views/partials/nav.php" ?>
<?php require "views/partials/banner.php" ?>


<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="container flex justify-left text-4xl font-bold underline text-gray-900">
            <h1><?= $heading?></h1>
        </div>
    </div>
    <div class="w-full flex justify-center">
        <p class="text-xl mt-5 align-middle">
            <?= $note['body'] ?>

        </p>
    </div>
</main>
<?php require "views/partials/footer.php" ?>
