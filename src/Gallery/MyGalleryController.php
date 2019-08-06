<?php

namespace Inferno\InfernoGallery\Gallery;


    use SilverStripe\CMS\Controllers\ContentController;
    use SilverStripe\Core\Extension;
    use SilverStripe\View\Requirements;

    class MyGalleryController extends Extension
    {
        public function onAfterInit() {

            Requirements::set_write_js_to_body(true);
            Requirements::set_force_js_to_bottom(true);

            Requirements::css("opticinferno/infernogallery:client/lightgallery/Styles.css");

            Requirements::css("opticinferno/infernogallery:client/lightgallery/dist/css/lg-fb-comment-box.css");
            Requirements::css("opticinferno/infernogallery:client/lightgallery/dist/css/lg-transitions.css");
            Requirements::css("opticinferno/infernogallery:client/lightgallery/dist/css/lightgallery.css");

            Requirements::javascript("opticinferno/infernogallery:client/lightgallery/dist/js/ajax-jqeury.js");
            Requirements::javascript("opticinferno/infernogallery:client/lightgallery/dist/js/picturefill.js");

            Requirements::javascript("opticinferno/infernogallery:client/lightgallery/dist/js/lightgallery-all.js");
            Requirements::javascript("opticinferno/infernogallery:client/lightgallery/lib/jquery.mousewheel.min.js");
            Requirements::javascript("opticinferno/infernogallery:client/lightgallery/lib/picturefill.min.js");




        }

}
