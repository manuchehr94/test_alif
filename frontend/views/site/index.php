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
                    <div class="grid-item">
                        <?php foreach ($allContacts as $contact) : ?>
                            <div class="wrap-article">
                                <img alt="blog-1" class="img-circle text-center" src="images/blog-1.png">
                                <a href="#">
                                    <h3 class="title">
                                        Popular Design in 2015
                                    </h3>
                                </a>
                                <p class="content-blog">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.
                                </p>
                            </div>
                        <?php endforeach; ?>
                    </div>
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
