<?php


class HelperService
{
    public static function formArray($initialArray, $formField, $firstField, $secondField) {
        $resultArray = [];

        foreach ($initialArray as $item) {
            if(empty($resultArray[$item[$formField]])) {
                $resultArray[$item[$formField]][$firstField] = [];
                $resultArray[$item[$formField]][$secondField] = [];
            }

            if(!in_array($item[$firstField], $resultArray[$item[$formField]][$firstField]) ) {
                $resultArray[$item[$formField]][$firstField][] = $item[$firstField];
            }

            if(!in_array($item[$secondField], $resultArray[$item[$formField]][$secondField]) ) {
                $resultArray[$item[$formField]][$secondField][] = $item[$secondField];
            }

        }

        return $resultArray;
    }

    public static function checkQuery($query)
    {
        $query = htmlspecialchars(trim($query));

        $result = '';
        $please = 'Please make a correct search';

        if(empty($query)) {
            $result = 'You have entered nothing in the search. ' . $please;
        }
        else if (strlen($query) < 3) {
            $result = 'The word you\'ve typed in is less than 3 symbols. ' . $please;
        }

        return empty($result) ? $query : $result;
    }

}