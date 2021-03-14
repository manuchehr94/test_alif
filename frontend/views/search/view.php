<?php
include_once __DIR__ . "/../header.php";
include_once __DIR__ . "/../../../common/src/Model/Contacts.php";
include_once __DIR__ . "/../../../common/src/Service/PagerService.php";
?>


<!--CONTACTS-->
<section class="grey-bg" id="blog">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="productSearch">
                    <form action="" method="GET">
                        <input class="productSearchInput" type="text" placeholder="Search" name="search">
                        <input type="hidden" name="model" value="search">
                        <input type="hidden" name="action" value="view">
                        <img class="searchIcon" src="images/search.png" alt="search" title="search" aria-hidden="true">
                    </form>
                </div>
                <a href="/?model=contacts&action=all">
                    <h3 class="title-small-center text-center">
                        <span>My contacts</span>
                    </h3>
                </a>


                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <p class="content-details text-center">
                            <?=(!empty($searchArr)) ?
                                'Without this man I cannot live...' :
                                'We couldn\'t find anyone that matches your search. Please revise your search'
                            ?>
                        </p>
                    </div>
                </div>

                <!--GRID CONTACTS-->
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
                                    <label><?=(count($oneContactValue['phone']) > 1) ? 'Phones:' : 'Phone:'?></label>

                                    <?php if(!empty($oneContactValue['phone'][0])) : ?>
                                    <ol>
                                        <?php foreach ($oneContactValue['phone'] as $phone): ?>
                                            <li><?=$phone?></li>
                                        <?php endforeach; ?>
                                    </ol>

                                    <?php else: print "Contact doesn't have any phone" ?>
                                    <?php endif;?>
                                </p>

                                <p class="content-blog">
                                    <label><?=(count($oneContactValue['email']) > 1) ? 'Emails:' : 'Email:'?></label>

                                    <?php if(!empty($oneContactValue['email'][0])) : ?>
                                    <ol>
                                    <?php foreach ($oneContactValue['email'] as $email): ?>
                                        <li><?=$email?></li>
                                    <?php endforeach; ?>
                                    </ol>

                                    <?php else: print "Contact doesn't have any email" ?>
                                    <?php endif;?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>

                    <?php endif; ?>
                </div>
                <!--/.GRID CONTACTS END-->

            </div>
        </div>
    </div>
</section>
<!--/.CONTACTS END-->

<!-- Pager -->
<div class="sitePager">
    <?php
    PagerService::printPager();
    ?>
    <!-- Pager End -->
</div>
<?php
include_once __DIR__ . "/../footer.php";
?>
