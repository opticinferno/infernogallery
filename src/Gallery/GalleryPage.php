<?php
namespace Inferno\InfernoGallery\Gallery;
    use Colymba\BulkUpload\BulkUploader;
    use Inferno\InfernoGallery\Gallery\GalleryImage;
    use SilverStripe\Forms\GridField\GridField;
    use SilverStripe\Forms\GridField\GridFieldConfig_RelationEditor;
    use SilverStripe\Forms\TextField;
    use UndefinedOffset\SortableGridField\Forms\GridFieldSortableRows;

    class GalleryPage extends \Page{

        private static $db = [
            "ImageHeight" => 'Int',
            "ImageWidth" => 'Int'
        ];
        private static $table_name = 'GalleryPage';
        private static $singular_name = 'Gallery Page';
        private static $has_one = [];
        private static $has_many = [
            'GalleryImage' => GalleryImage::class,
        ];
        public function getCMSFields(){
            $fields = parent::getCMSFields();
            $fields->addFieldToTab('Root.Gallery', TextField::create('ImageHeight', 'Height for images'));
            $fields->addFieldToTab('Root.Gallery', TextField::create('ImageWidth', 'Width for images'));
            $gridFieldConfig= GridFieldConfig_RelationEditor::create(30);
            $gridFieldConfig->addComponent(new GridFieldSortableRows('SortOrder'));
            $gridFieldConfig->addComponent(new \Colymba\BulkUpload\BulkUploader());
            $GridField = new GridField("GalleryImage", "Gallery Images", $this->owner->GalleryImage()->sort("SortOrder"), $gridFieldConfig);
            $fields->addFieldToTab('Root.Gallery', $GridField);


            return $fields;
        }
    }
