<?php
$u = new User();
if(!($u->isLoggedIn())) {
    header("Location: " . View::url('/'));
    die();
}
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php');
?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                This page should not be displayed.
            </div>
        </div>
    </div>

<?php

$this->inc('elements/footer.php');