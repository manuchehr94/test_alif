<?php
include_once __DIR__ . "/../header.php";
?>
<!--BLOG-->
<section class="grey-bg" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-small-center text-center">
                    <span>My contacts</span>
                </h3>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <p class="content-details text-center">
                            Without these people I cannot live...
                        </p>
                    </div>
                </div>
                <!--GRID BLOG-->
                <div class="grid">
                    <?php foreach ($allContacts as $contacts) : ?>
                    <div class="grid-item">
                            <div class="wrap-article">
                                <img alt="blog-1" class="img-circle text-center" src="images/reza.jpg">
                                <h3 class="title">
                                    <?=$contacts['name']?>
                                </h3>
                                <p class="content-blog">
                                <label>Phone</label>
                                    <?=$contacts['phone']?>
                                </p>
                                <p class="content-blog">
                                <label>Email</label>
                                     <?=$contacts['email']?>
                                </p>
                            </div>
                    </div>
                    <?php endforeach; ?>
                </div>

            </div>
            <!--/.GRID BLOG END-->
        </div>
    </div>
</section>
<!--/.BLOG END-->
<?php
include_once __DIR__ . "/../footer.php";
?>
