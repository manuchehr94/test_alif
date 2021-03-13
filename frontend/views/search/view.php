<?php
include_once __DIR__ . "/../header.php";
include_once __DIR__ . "/../../../common/src/Model/Contacts.php";
include_once __DIR__ . "/../../../common/src/Service/PagerService.php";
?>


<!--BLOG-->
<section class="grey-bg" id="blog">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="productSearch">
                    <form action="" method="GET">
                        <input type="hidden" name="model" value="search">
                        <input type="hidden" name="action" value="view">
                        <input class="productSearchInput" type="text" placeholder="Search" name="search">
                        <img class="searchIcon" src="images/search.png" alt="search" title="search" aria-hidden="true">
                    </form>
                </div>
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
                    <?php
                        if(empty($searchArr)) {
                            echo "We could't found anyone that matches your search...";
                        }
                    ?>
                    <div class="grid">
                        <?php if(isset($searchArr) && is_array($searchArr)) :
                            foreach ($searchArr as $oneContactKey => $oneContactValue) : ?>
                            <div class="grid-item">
                                <div class="wrap-article">
                                    <img alt="blog-1" class="img-circle text-center" src="images/<?=rand(1, 5)?>.jpg">
                                    <h1 class="title">
                                        <?=$oneContactKey?>
                                    </h1>
                                    <p class="content-blog">
                                        <label>Phone(s):</label>
                                        <ol>
                                        <?php foreach ($oneContactValue['phone'] as $phone): ?>
                                                 <li><?=$phone?></li>
                                        <?php endforeach; ?>
                                        </ol>
                                    </p>
                                    <p class="content-blog">
                                        <label>Email(s):</label>
                                        <ol>
                                            <?php foreach ($oneContactValue['email'] as $email): ?>
                                                <li><?=$email?></li>
                                            <?php endforeach; ?>
                                        </ol>
                                    </p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <!--/.GRID BLOG END-->
            </div>
        </div>
    </div>
</section>
<!--/.BLOG END-->

<!-- Pager -->
<?php
    PagerService::printPager();
?>
<!-- Pager End -->
<div>
    <br>
    <br>
    <br>
    <br>
</div>
<?php
include_once __DIR__ . "/../footer.php";
?>
