<?php

include_once __DIR__ . "/../../../common/src/Model/Search.php";

class SearchController
{
    public function view()
    {
        $queryForSearch = trim(htmlspecialchars(isset($_POST) ? $_POST['search'] : ''));
        $queryForSearch = htmlspecialchars(isset($_POST) ? $_POST['search'] : '');

        $searchArr = (new Search())->searchByName($queryForSearch);

        include_once __DIR__ . "/../../views/search/view.php";
    }
}