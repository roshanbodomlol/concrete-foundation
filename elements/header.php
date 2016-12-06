<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html lang="<?php echo Localization::activeLanguage()?>">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo $view->getThemePath()?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $view->getThemePath()?>/css/global.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $view->getThemePath()?>/css/responsive.css">

    <?php Loader::element('header_required', array('pageTitle' => isset($pageTitle) ? $pageTitle : '', 'pageDescription' => isset($pageDescription) ? $pageDescription : '', 'pageMetaKeywords' => isset($pageMetaKeywords) ? $pageMetaKeywords : ''));?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
            var msViewportStyle = document.createElement('style');
            msViewportStyle.appendChild(
                document.createTextNode(
                    '@-ms-viewport{width:auto!important}'
                )
            );
            document.querySelector('head').appendChild(msViewportStyle)
        }
    </script>
    <?php
    if(!($c->isEditMode())) { ?>
        <script src="<?php echo $view->getThemepath(); ?>/js/jquery.js"></script>
    <?php }
    ?>

    <script>
        var globalVariable = {
            themeURL : '<?php echo $view->getThemePath(); ?>',
            siteURL : '<?php echo View::url('/'); ?>'
        }
    </script>

</head>

<?php
$bodyClasses = '';
$u = new User();
if($u->isLoggedIn()) {
    $bodyClasses = 'logged_in';
}
if($c->isEditMode()) {
    $bodyClasses .= ' inEdit';
}
?>

<body class="<?php echo $bodyClasses; ?>">

<div class="<?php echo $c->getPageWrapperClass()?>" id="wrapper-outer">

<div id="wrapper">

    <div id="loading_screen" class="<?php if($c->isEditMode()){echo 'off'; } ?>">
        <div class="table_outer">
            <div class="table_inner va_middle text-center">
                <img src="<?php echo $view->getThemePath(); ?>/img/loading.gif">
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="theModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                <img class="loadingImg" src="<?php echo $view->getThemepath(); ?>/img/loading.gif">

                <div class="modal-body">

                </div>
            </div>
        </div>
    </div>


    <div id="header-wrapper">

    </div>

    <div id="content-wrapper">