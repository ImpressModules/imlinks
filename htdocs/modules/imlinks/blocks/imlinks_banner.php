<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: blocks/imlinks_banner.php
*
* @copyright		http://www.xoops.org/ The XOOPS Project
* @copyright		XOOPS_copyrights.txt
* @copyright		http://www.impresscms.org/ The ImpressCMS Project
* @license		GNU General Public License (GPL)
*				a copy of the GNU license is enclosed.
* ----------------------------------------------------------------------------------------------------------
* @package		WF-Links 
* @since			1.03
* @author		John N
* ----------------------------------------------------------------------------------------------------------
* 				WF-Links 
* @since			1.03b and 1.03c
* @author		McDonald
* ----------------------------------------------------------------------------------------------------------
* 				imLinks
* @since			1.00
* @author		McDonald
* @version		$Id$
*/
 
function b_imlinks_banner_show( $options ) { 
	$mydirname = basename( dirname(  dirname( __FILE__ ) ) ) ;
    $block = array();
    $time = time();
    $modhandler = icms::handler( 'icms_module' );
    $imlModule = &$modhandler -> getByDirname( $mydirname );
    $result = icms::$xoopsDB -> query( 'SELECT a.cid as acid, a.title, a.client_id, a.banner_id, b.bid, b.cid, b.imptotal, b.impmade, b.clicks FROM ' . icms::$xoopsDB -> prefix( 'imlinks_cat' ) . ' a, ' . icms::$xoopsDB -> prefix( 'banner' ) . ' b WHERE (b.cid = a.client_id) OR (b.bid = a.banner_id) ORDER BY b.cid, b.bid, a.title ASC' );
    while ( $myrow = icms::$xoopsDB -> fetchArray( $result ) ) {
        $impmade = $myrow['impmade'];
        $clicks = $myrow['clicks'];
        $imptotal = $myrow['imptotal'];
        $bannerload = array();
        $result2 = icms::$xoopsDB -> query( 'SELECT name FROM ' . icms::$xoopsDB -> prefix( 'bannerclient' ) . ' WHERE cid=' . intval( $myrow['cid'] ) );
        $myclient = icms::$xoopsDB -> fetchArray( $result2 );
        if ( $impmade == 0 ) {
            $percent = 0;
        } else {
            $percent = substr( 100 * $clicks / $impmade, 0, 5 );
        }
        if ( $imptotal == 0 ) {
            $left = _MB_IMLINKS_UNLIMIT;
        } else {
            $left = intval( $imptotal - $impmade );
        }
        $bannerload['cat'] 		= intval( $myrow['acid'] );
        $bannerload['bid'] 		= intval( $myrow['bid'] );
        $bannerload['cid'] 		= intval( $myrow['cid'] );
        $bannerload['imptotal'] = intval( $myrow['imptotal'] );
        $bannerload['impmade'] 	= intval( $myrow['impmade'] );
        $bannerload['impleft'] 	= $left;
        $bannerload['clicks'] 	= intval( $myrow['clicks'] );
        $bannerload['client'] 	= $myclient['name'];
        $bannerload['percent'] 	= $percent . '%';
        $bannerload['cattitle'] = $myrow['title'];
        $bannerload['dirname'] 	= $mydirname;
        $block['banners'][] 	= $bannerload;
    }
    unset( $_block_check_array );
    return $block;
}

function b_imlinks_banner_edit( $options ) {
    $form = '';
    return $form;
} 
?>