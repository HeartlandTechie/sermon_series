<?php
namespace HearlandTechie\SermonSeries\Model;


use SilverStripe\ORM\DataObject;

use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\DropdownField;
use SilverStripe\Forms\CurrencyField;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\DateField;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\ORM\ArrayLib;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\TabSet;


class Sermon extends DataObject
{
    private static $table_name = 'Sermon';
    private static $db = [
        'Title' => 'Varchar(255)',
        'Description' => 'Text',
        'SermonDate' => 'Date'
    ];

    private static $has_one = [
        'Series' => Series::class,

    ];

    public function getCMSfields()
    {
        $fields = FieldList::create(TabSet::create('Root'));
        $fields->addFieldsToTab('Root.Main', [
            TextField::create('SeriesName'),
            DateField::create('DateBegins'),


        ]);

        return $fields;
    }

    private static $summary_fields = [
        'SeriesName' => 'Series Name',

    ];
}
