<?php

namespace HeartlandTechie\SermonSeries;

use Page;

class ArticlePage extends Page
{

    private static $can_be_root = false;


    private static $db = [
        'Date' => 'Date',
        'Teaser' => 'Text',
        'Author' => 'Varchar',
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        return $fields;
    }

}
