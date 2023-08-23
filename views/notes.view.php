<?php require "views/partials/head.php" ?>
<?php require "views/partials/nav.php" ?>
<?php require "views/partials/banner.php" ?>


    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <div class="container flex justify-start text-4xl font-bold underline text-gray-900">
                <h1><?=$heading?></h1>
            </div>
        </div>
        <hr>
        <div class="mx-auto my-3 text-xl flex justify-center">
            <ul>
                <?php
                foreach ($notes as $note):
                    echo '<li>
                        <a class="hover:underline hover:font-bold text-fuchsia-900" href="note?id='.$note['id'].'">'
                        .substr($note['body'],0,3).
                        ' click to see more...</a></li>';
                endforeach;
                ?>
            </ul>
        </div>
    </main>
<?php require "views/partials/footer.php" ?>