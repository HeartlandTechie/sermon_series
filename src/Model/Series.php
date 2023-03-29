<?php
namespace HearlandTechie\SermonSeries\Model;


use SilverStripe\ORM\DataObject;

use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\DropdownField;
use SilverStripe\Forms\CurrencyField;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\ORM\ArrayLib;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\TabSet;


class Series extends DataObject
{
    private static $table_name = 'Series';
    private static $db = [
        'SeriesNumber' => 'Int',
        'SeriesName' => 'Varchar(255)',
        'DateBegins' => 'Date'
    ];


    public function getCMSfields()
    {
        $fields = FieldList::create(TabSet::create('Root'));
        $fields->addFieldsToTab('Root.Main', [
            TextField::create('SeriesName'),


        ]);

        return $fields;
    }
}
