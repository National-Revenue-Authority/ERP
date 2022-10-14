<?php 

// error_reporting(0);

$requests = ['section', 'division', 'action'];

foreach ($requests as $req) {
    if (isset($_GET[$req])) {
        define($req, $_GET[$req]);
    }
    else {
        define($req, "");
    }
}

ini_set("max_execution_time", 180000);


if (isset($_COOKIE['username']) AND isset($_COOKIE['division'])) {
    $username = $_COOKIE['username'];
    $division = $_COOKIE['division'];
}
else {
    header("Location: login.php?q=sessionexpired");
    exit();
}

?>


    <!-- Main content container -->

    <div class="container-fluid">

         <?php if (division == 'customs'): ?>

             <?php require 'customs.php'; ?>

        <?php elseif (division == 'corporate_service'): ?>

            <?php require 'corporate-service.php'; ?>

        <?php elseif (division == 'domestic_tax'): ?>

            <?php require 'domestic_tax.php'; ?>

        <?php elseif (division == 'internal_audit'): ?>

            <?php require 'internal-audit.php'; ?>

        <?php elseif (division == 'internal_affairs'): ?>

            <?php require 'internal-affairs.php'; ?>

        <?php elseif (division == ''): ?>

            <?php require 'login.php' ?>

         <?php endif ?>
    </div>

<!-- End of Main Content -->

<?php require 'footer.php'; ?>