<?php

include_once __DIR__ . "/../Model/Contacts.php";

class PagerService
{
    public static function printPager()
    {

        $NumberOfAllPages = (new Contacts())->getNumberPage(Contacts::LIMIT_PER_PAGE);
        $currentPage = intval($_GET['page'] ?? 1);
        $arrNumberPages = [];
        $firstNumberPage = 1;

        if($currentPage >= 2) {
            if($currentPage > $NumberOfAllPages - 2) {
                $arrNumberPages[] = $currentPage - 4;
            }
            if($currentPage > $NumberOfAllPages - 1) {
                $arrNumberPages[] = $currentPage - 3;
            }
            if($currentPage >= 3) {
                $arrNumberPages[] = $currentPage - 2;
            }
            $arrNumberPages[] = $currentPage - 1;
        }

        $arrNumberPages[] = $currentPage;

        for($next = 1; sizeof($arrNumberPages) < 5; $next++) {
            $arrNumberPages[] = $currentPage + $next;
        }
        ?>

        <div id="pager">
            <?php
                print '<div class="link-to-end">
                            <a href="/php/Alif_Academy_php/test_alif/frontend/?model=contacts&action=all&page=1">
                                <<
                            </a>
                        </div>';
                print '<div class="link-to-left">
                            <a href="/php/Alif_Academy_php/test_alif/frontend/?model=contacts&action=all&page=' . intval(($currentPage > 2) ? ($currentPage - 1) : 1)  . '">
                                <
                            </a>
                        </div>';
                foreach ($arrNumberPages as $numberPage) {
                    print '<div class="link-pager ' .  (intval($_GET['page'] ?? 0) === $numberPage ? 'current' : '') . '">
                                <a href="/php/Alif_Academy_php/test_alif/frontend/?model=contacts&action=all&page=' . $numberPage . '">' . $numberPage . '
                                </a>
                            </div>';
                }
                print '<div class="link-to-right">
                            <a href="/php/Alif_Academy_php/test_alif/frontend/?model=contacts&action=all&page=' . intval(($currentPage < ($NumberOfAllPages)) ? ($currentPage + 1) : ($NumberOfAllPages)) . '">
                                >
                            </a>
                        </div>';
                print '<div class="link-to-end">
                            <a href="/php/Alif_Academy_php/test_alif/frontend/?model=contacts&action=all&page=' . ($NumberOfAllPages) . '">
                                >>
                            </a>
                        </div>';
            ?>
        </div>
        <?php
    }

}