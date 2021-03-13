<?php


class ArrayFormService
{
    public static function formArray($initialArray) {
        $resultArray = [];

        foreach ($initialArray as $item) {
            if(empty($resultArray[$item['name']])) {
                $resultArray[$item['name']]['phone'] = [];
                $resultArray[$item['name']]['email'] = [];
            }

            if(!in_array($item['phone'], $resultArray[$item['name']]['phone']) ) {
                $resultArray[$item['name']]['phone'][] = $item['phone'];
            }

            if(!in_array($item['email'], $resultArray[$item['name']]['email']) ) {
                $resultArray[$item['name']]['email'][] = $item['email'];
            }

        }

        return $resultArray;
    }

}