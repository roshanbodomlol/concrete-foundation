<?php defined('C5_EXECUTE') or die("Access Denied."); ?>


</div> <!--CONTENT WRAPPER-->

<div id="footer-wrapper">
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                This is the footer.
            </div>
        </div>
    </div>
    
</div> <!--FOTOER WRAPPER-->

</div> <!--WRAPPER-->

</div> <!--CONCRETE WRAPPER-->

<?php Loader::element('footer_required'); ?>

<?php
if(!($c->isEditMode())) { ?>
    <script src="<?php echo $view->getThemepath(); ?>/js/bootstrap.min.js"></script>
<?php }
?>

<script src="<?php echo $view->getThemePath(); ?>/js/thescripts.js"></script>


</body>
</html>
