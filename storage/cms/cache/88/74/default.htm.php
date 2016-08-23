<?php 
class Cms57bbe10ec6bfe_672225928Class extends \Cms\Classes\LayoutCode
{
public function onInit() {
    $baseUrl = $this->url;
    $imageUrls = Storage::files('media'.$baseUrl);
    $this['galleryImages'] = $imageUrls;
}
}
