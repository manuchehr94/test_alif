<?php

include_once __DIR__ . "/../../../common/src/Model/Search.php";

class SearchController
{
    public function view()
    {
        $queryForSearch = $_GET['search'];
//        if (isset($_GET['search'])) {
//            $_GET['model'] = 'search';
//            $_GET['action'] = 'view';
//        }

//        print_r($queryForSearch = $_GET['model']);
//        die();
        //$queryForSearchGet = $_GET['search'];
        //print_r($queryForSearchGet);
       // $queryForSearch = htmlspecialchars(isset($_POST) ? $_POST['search'] : '');

        $searchArr = (new Search())->searchByName($queryForSearch);

        include_once __DIR__ . "/../../views/search/view.php";
    }
}