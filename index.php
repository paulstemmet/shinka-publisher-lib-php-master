<?php

/**
 * Require the Shinka Publisher Library
 */
require_once("shinka-publisher-lib-php/ShinkaBannerAd.php"); 

try
{
    /**
     * Configuration for Shinka Banners
     */
    $config = array('AdUnitID_320'  => '31XXXXX',
                    'RESIZE_IMAGES' => TRUE,
                    'REFERER'       => 'YOUR_APP_MXITID',
                    'TESTUSER'      => 'YOUR_MXITID');

    /*
     * Create shinka banner ad object.
     * Can be done at top of page, and re-used to display multiple banners on page.
     */
    $ShinkaBannerAd = new ShinkaBannerAd($config);	

    /*
     * Do a server ad request to populate the BannerAd object with a new banner.
     * This can be done multiple times with the same ShinkaBannerAd object to get new banners for the same user
     */
    $ShinkaBannerAd->doServerAdRequest('image');

    /**
     * Get HTML that should be displayed for this banner
     */
    print $ShinkaBannerAd->generateHTMLFromAd();

    print '<br/>Some more html and text here<br/>';

    /**
     * Get another banner for this user, and display it
     */
    $ShinkaBannerAd->doServerAdRequest('image');
    print $ShinkaBannerAd->generateHTMLFromAd();

    /**
     * Get a text banner for this user, and display it
     */
    $ShinkaBannerAd->doServerAdRequest('text');
    print $ShinkaBannerAd->generateHTMLFromAd();
}
catch (Exception $e)
{
    print $e->getMessage();
}
