# shinka-publisher-lib-php
Shinka Publisher Library for PHP    
    
Supports image as well as text banners.

## Configuration

#### Option 1 - Image Resizing
####
If you only have a single ad unit set up (320x50/300x50), you can use image resizing to support devices with smaller screen sizes.

The included **image-resizer.php** script can handle image resizing for you, but your PHP installation needs to have the **PHP GD extension** installed in order for it to work.

###### Example configuration
<pre>
$config = array('AdUnitID_320'  => '31XXXXX',
                'RESIZE_IMAGES' => TRUE,
                'REFERER'       => 'sampleapp');
</pre> 

#### Option 2 - Multiple Ad Units
####

If you are unable to resize the image banners, it is recommended that you request Shinka to set up 4 different ad units for 4 different device widths:  

-  320
-  216
-  168
-  120

###### Example configuration
<pre>
$config = array('AdUnitID_320'  => '31XXXXX',
                'AdUnitID_216'  => '31XXXXX',
                'AdUnitID_168'  => '31XXXXX',
                'AdUnitID_120'  => '31XXXXX',
                'RESIZE_IMAGES' => FALSE,
                'REFERER'       => 'sampleapp');
</pre> 

## Implementation
#### (See the included index.php file for an example)
####

###### Image ad
<pre>
require_once("shinka-publisher-lib-php/ShinkaBannerAd.php");
$ShinkaBannerAd = new ShinkaBannerAd();    
$ShinkaBannerAd->doServerAdRequest('image');
print $ShinkaBannerAd->generateHTMLFromAd();
</pre>

###### Text ad
<pre>
require_once("shinka-publisher-lib-php/ShinkaBannerAd.php") 
$ShinkaBannerAd = new ShinkaBannerAd();  
$ShinkaBannerAd->doServerAdRequest('text');
print $ShinkaBannerAd->generateHTMLFromAd();
</pre>

###### Multiple ads
<pre>
require_once("shinka-publisher-lib-php/ShinkaBannerAd.php");
$ShinkaBannerAd = new ShinkaBannerAd()    
$ShinkaBannerAd->doServerAdRequest('image');
print $ShinkaBannerAd->generateHTMLFromAd();    
$ShinkaBannerAd->doServerAdRequest('text');
print $ShinkaBannerAd->generateHTMLFromAd();     
$ShinkaBannerAd->doServerAdRequest('image');
print $ShinkaBannerAd->generateHTMLFromAd();
</pre>
