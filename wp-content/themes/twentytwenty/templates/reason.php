<div class='container'>
    <?php global $redux_demo; echo  $redux_demo['reason-title'] ?>

    <div class='row justify-content-center my-3'>
        <div class='col-lg-6 col-sm-12 py-5'>
            <?php global $redux_demo; echo  $redux_demo['reason-content-left'] ?>
        </div>

        <div class='col-lg-6 col-sm-12'>
            <?php global $redux_demo; echo '<img src="'.$redux_demo['hosting-in-the-cloud-img-1']['url'].'">'; ?>
        </div>

    </div>

    <div class='row justify-content-center'>
        <div class='col-lg-6 col-sm-12 d-none d-md-block'>
            <?php global $redux_demo; echo 
                    '<img src="'.$redux_demo['hosting-in-the-cloud-img-2']['url'].'">'; 
                    ?>
        </div>
        <div class='col-lg-6 col-sm-12 py-5'>
            <?php global $redux_demo; echo  $redux_demo['reason-content-right'] ?>
        </div>

        <div class='col-lg-6 col-sm-12 d-block d-sm-none'>
            <?php global $redux_demo; echo 
                    '<img src="'.$redux_demo['hosting-in-the-cloud-img-2-hidden']['url'].'">'; ?>
        </div>
    </div>
</div>