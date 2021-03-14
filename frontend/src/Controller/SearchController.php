<?php

include_once __DIR__ . "/../../../common/src/Model/Search.php";
include_once __DIR__ . "/../../../common/src/Service/HelperService.php";

class SearchController
{
    public function view()
    {
        $queryForSearch = $_GET['search'] ?? '';

        $searchArr = (new Search())->searchByName($queryForSearch);

        include_once __DIR__ . "/../../views/search/view.php";
    }
}