<?php

namespace Inferno\InfernoGallery\Gallery;

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataObject;
use SilverStripe\Security\Permission;

class GalleryImage extends DataObject {

    private static $db = array(
        'Title' => 'Varchar',
        'Description' => 'Varchar(500)',
        'SortOrder' => 'Int',
    );

    // One-to-one relationship with gallery page
    private static $has_one = array(
        'Image' => Image::class,
        'GalleryPage' => GalleryPage::class
    );
    private static $table_name = 'GalleryImage';
    private static $owns = ['Image'];

    private static $summary_fields = [
        'Image.CMSThumbnail' => 'Image',
        'Title' => 'Title'
    ];

    // Add fields to dataobject
    public function getCMSFields() {
        $fields = parent::getCMSFields();


        $fields->addFIeldTOTab('Root.Main',new TextField('Title','Image Title'));
        $fields->addFIeldTOTab('Root.Main',new TextareaField('Description','Photo Description (Max 500 Charachters)'));
        $fields->addFIeldTOTab('Root.Main',new UploadField('Image','Photo'));

        return $fields;
    }



    // Tell the datagrid what fields to show in the table

    // this function creates the thumnail for the summary fields to use

    public function onAfterWrite()
    {
        if ($this->owner->ImageID) {
            $this->owner->Image()->publishSingle();
        }
    }


}



