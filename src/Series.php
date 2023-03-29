<?php

use SilverStripe\ORM\DataObject;

class Series extends DataObject 
{
    private static $db = [
        'SeriesNumber' => 'Int',
        'SeriesName' => 'Varchar(255)',
        'DateBegins' => 'Date'
    ];
}
