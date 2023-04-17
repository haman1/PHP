<?php   include_once('header.php'); ?>
<?php   include_once('functions.php'); ?>

<?php $responseArray = convertIntoArray(); ?>
<div class="container-lg main">
    <h2 class="my-title mt-3 text-center"></h2>
    <div class="row mt-4">

        <?php foreach($responseArray['results'] as $object){ ?>
        <div class="col-lg-3 col-md-12 col-sm-12 text-center mb-3">
            <div class="card single-card">
                <img src="<?php echo $object['picture']['large']; ?>" alt="" class="single-card-img">
                <div class="card-body">
                    <div class="card-title" style="font-weight: bold;"><?php echo $object['name']['first']; ?></div>
                    <div class=" card-text single-card-text">
                        <?php echo $object['email'];?>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

    <?php   include_once('footer.php');?>