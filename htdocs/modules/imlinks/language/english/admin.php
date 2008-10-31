<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: language/english/admin.php
*
* @copyright		http://www.xoops.org/ The XOOPS Project
* @copyright		XOOPS_copyrights.txt
* @copyright		http://www.impresscms.org/ The ImpressCMS Project
* @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
* ----------------------------------------------------------------------------------------------------------
* @package		WF-Links 
* @since			1.03
* @author		John N
* ----------------------------------------------------------------------------------------------------------
* @package		WF-Links 
* @since			1.03b and 1.03c
* @author		McDonald
* ----------------------------------------------------------------------------------------------------------
* @package		imLinks
* @since			1.00
* @author		McDonald
* @version		$Id$
*/
 
define( "_AM_IMLINKS_WARNINSTALL1", "<b>WARNING:</b> <u>Directory</u> %s exists on your server. <br />Please remove this directory for security reasons." );
define( "_AM_IMLINKS_WARNINSTALL2", "<b>WARNING:</b> <u>File</u> %s exists on your server. <br />Please remove this directory for security reasons." );
define( "_AM_IMLINKS_WARNINSTALL3", "<b>WARNING:</b> <u>Folder</u> %s does not exists on your server. <br />This folder is required by imLinks." );

define( "_AM_IMLINKS_MODULE_NAME", "imLinks" );

define( "_AM_IMLINKS_BMODIFY", "Modify" );
define( "_AM_IMLINKS_BDELETE", "Delete" );
define( "_AM_IMLINKS_BCREATE", "Create" );
define( "_AM_IMLINKS_BADD", "Add" );
define( "_AM_IMLINKS_BAPPROVE", "Approve" );
define( "_AM_IMLINKS_BIGNORE", "Ignore" );
define( "_AM_IMLINKS_BCANCEL", "Cancel" );
define( "_AM_IMLINKS_BSAVE", "Save" );
define( "_AM_IMLINKS_BRESET", "Reset" );
define( "_AM_IMLINKS_BMOVE", "Move Links" );
define( "_AM_IMLINKS_BUPLOAD", "Upload" );
define( "_AM_IMLINKS_BDELETEIMAGE", "Delete Selected Image" );
define( "_AM_IMLINKS_BRETURN", "Return to where you where!" );
define( "_AM_IMLINKS_DBERROR", "Database Access Error: Please report this error to the [url=http://community.impresscms.org/modules/newbb/viewforum.php?forum=9]ImpressCMS Community Forum - Module Support[/url] forum." );
// Other Options
define( "_AM_IMLINKS_TEXTOPTIONS", "Text Options:" );
define( "_AM_IMLINKS_DISABLEHTML", " Disable HTML Tags" );
define( "_AM_IMLINKS_DISABLESMILEY", " Disable Smilie Icons" );
define( "_AM_IMLINKS_DISABLEXCODE", " Disable BBCodes" );
define( "_AM_IMLINKS_DISABLEIMAGES", " Disable Images" );
define( "_AM_IMLINKS_DISABLEBREAK", " Use ICMS linebreak conversion?" );
define( "_AM_IMLINKS_UPLOADFILE", "Link Uploaded Successfully" );
define( "_AM_IMLINKS_NOMENUITEMS", "No menu items within the menu" );
// Admin Bread crumb
define( "_AM_IMLINKS_PREFS", "Preferences" );
define( "_AM_IMLINKS_BUPDATE", "Module Update" );
define( "_AM_IMLINKS_BINDEX", "Main Index" );
define( "_AM_IMLINKS_BPERMISSIONS", "Permissions" );
// define( "_AM_IMLINKS_BLOCKADMIN", "Blocks" );
define( "_AM_IMLINKS_BLOCKADMIN", "Block Settings" );
define( "_AM_IMLINKS_GOMODULE", "Go to module" );
define( "_AM_IMLINKS_ABOUT", "About" );
// Admin Summary
define( "_AM_IMLINKS_SCATEGORY", "Category: " );
define( "_AM_IMLINKS_SFILES", "Links: " );
define( "_AM_IMLINKS_SNEWFILESVAL", "Submitted: " );
define( "_AM_IMLINKS_SMODREQUEST", "Modified: " );
define( "_AM_IMLINKS_SREVIEWS", "Reviews: " );

// Admin Main Menu
define( "_AM_IMLINKS_MCATEGORY", "Category Management" );
define( "_AM_IMLINKS_MLINKS", "Link Management" );
define( "_AM_IMLINKS_MLISTBROKEN", "List Broken Links" );
define( "_AM_IMLINKS_MLISTPINGTIMES", "List Links Pingtime" );
define( "_AM_IMLINKS_INDEXPAGE", "Index Page Management" );
define( "_AM_IMLINKS_MCOMMENTS", "Comments" );
define( "_AM_IMLINKS_MVOTEDATA", "Vote Data" );
define( "_AM_IMLINKS_MUPLOADS", "Image Upload" );

// Catgeory defines
define( "_AM_IMLINKS_CCATEGORY_CREATENEW", "Create New Category" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY", "Modify Category" );
define( "_AM_IMLINKS_CCATEGORY_MOVE", "Move Category Links" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY_TITLE", "Category Title:" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY_FAILED", "Failed Moving Links: Cannot move to this Category" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY_FAILEDT", "Failed Moving Links: Cannot find this Category" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY_MOVED", "Links Moved and Database Updated Successfully" );
define( "_AM_IMLINKS_CCATEGORY_CREATED", "New Category Created and Database Updated Successfully" );
define( "_AM_IMLINKS_CCATEGORY_MODIFIED", "Selected Category Modified and Database Updated Successfully" );
define( "_AM_IMLINKS_CCATEGORY_DELETED", "Selected Category Deleted and Database Updated Successfully" );
define( "_AM_IMLINKS_CCATEGORY_AREUSURE", "WARNING: Are you sure you want to delete this Category and ALL its Links and Comments?" );
define( "_AM_IMLINKS_CCATEGORY_NOEXISTS", "You must create a Category before you can add a new link" );
define( "_AM_IMLINKS_FCATEGORY_GROUPPROMPT", "Category Access Permissions:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Select user groups who will have access to this Category.</span></div>" );
define( "_AM_IMLINKS_FCATEGORY_SUBGROUPPROMPT", "Category Submission Permissions:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Select user groups who will have permission to submit new links to this Category.</span></div>" );
define( "_AM_IMLINKS_FCATEGORY_MODGROUPPROMPT", "Category Moderation Permissions:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Select user groups who will have permission to moderate this Category.</span></div>" );

define( "_AM_IMLINKS_FCATEGORY_TITLE", "Category Title:" );
define( "_AM_IMLINKS_FCATEGORY_WEIGHT", "Category Weight:" );
define( "_AM_IMLINKS_FCATEGORY_SUBCATEGORY", "Set As Sub-Category:" );
define( "_AM_IMLINKS_FCATEGORY_CIMAGE", "Select Category Image:" );
define( "_AM_IMLINKS_FCATEGORY_DESCRIPTION", "Set Category Description:" );
define( "_AM_IMLINKS_FCATEGORY_SUMMARY", "Set Category Summary:" );
/**
 * Index page Defines
 */
define( "_AM_IMLINKS_IPAGE_UPDATED", "Index Page Modified and Database Updated Successfully!" );
define( "_AM_IMLINKS_IPAGE_INFORMATION", "Index Page Information" );
define( "_AM_IMLINKS_IPAGE_MODIFY", "Modify Index Page" );
define( "_AM_IMLINKS_IPAGE_CIMAGE", "Select Index Image:" );
define( "_AM_IMLINKS_IPAGE_CTITLE", "Index Title:" );
define( "_AM_IMLINKS_IPAGE_CHEADING", "Index Heading:" );
define( "_AM_IMLINKS_IPAGE_CHEADINGA", "Index Heading Alignment:" );
define( "_AM_IMLINKS_IPAGE_CFOOTER", "Index Footer:" );
define( "_AM_IMLINKS_IPAGE_CFOOTERA", "Index Footer Alignment:" );
define( "_AM_IMLINKS_IPAGE_CLEFT", "Align Left" );
define( "_AM_IMLINKS_IPAGE_CCENTER", "Align Center" );
define( "_AM_IMLINKS_IPAGE_CRIGHT", "Align Right" );
/**
 * Permissions defines
 */
define( "_AM_IMLINKS_PERM_MANAGEMENT", "Permissions Management" );
define( "_AM_IMLINKS_PERM_PERMSNOTE", "<div><b>NOTE:</b> Please be aware that even if you've set correct viewing permissions here, a group might not see the articles or blocks if you don't also grant that group permissions to access the module. To do that, go to <b>System admin > Groups</b>, choose the appropriate group and click the checkboxes to grant its members the access.</div>" );
define( "_AM_IMLINKS_PERM_CPERMISSIONS", "Category Permissions" );
define( "_AM_IMLINKS_PERM_CSELECTPERMISSIONS", "Select categories that each group is allowed to view" );
define( "_AM_IMLINKS_PERM_CNOCATEGORY", "Cannot set permission's: No Categories's have been created yet!" );
define( "_AM_IMLINKS_PERM_FPERMISSIONS", "Link Permissions" );
define( "_AM_IMLINKS_PERM_FNOFILES", "Cannot set permission's: No links have been created yet!" );
define( "_AM_IMLINKS_PERM_FSELECTPERMISSIONS", "Select the links that each group is allowed to view" );
/**
 * Upload defines
 */
define( "_AM_IMLINKS_LINK_IMAGEUPLOAD", "Image successfully uploaded to server destination" );
define( "_AM_IMLINKS_LINK_NOIMAGEEXIST", "Error: No link was selected for uploading.  Please try again!" );
define( "_AM_IMLINKS_LINK_IMAGEEXIST", "Image already exists in upload area!" );
define( "_AM_IMLINKS_LINK_FILEDELETED", "Link has been deleted." );
define( "_AM_IMLINKS_LINK_FILEERRORDELETE", "Error deleting Link: Link not found on server." );
define( "_AM_IMLINKS_LINK_NOFILEERROR", "Error deleting Link: No Link Selected For Deleting." );
define( "_AM_IMLINKS_LINK_DELETEFILE", "WARNING: Are you sure you want to delete this Image link?" );
define( "_AM_IMLINKS_LINK_IMAGEINFO", "Server Status" );
define( "_AM_IMLINKS_LINK_SPHPINI", "<b>Information taken from PHP ini Link:</b>" );
define( "_AM_IMLINKS_LINK_SAFEMODESTATUS", "Safe Mode Status: " );
define( "_AM_IMLINKS_LINK_REGISTERGLOBALS", "Register Globals: " );
define( "_AM_IMLINKS_LINK_SERVERUPLOADSTATUS", "Server Uploads Status: " );
define( "_AM_IMLINKS_LINK_MAXUPLOADSIZE", "Max Upload Size Permitted: " );
define( "_AM_IMLINKS_LINK_MAXPOSTSIZE", "Max Post Size Permitted: " );
define( "_AM_IMLINKS_LINK_SAFEMODEPROBLEMS", " (This May Cause Problems)" );
define( "_AM_IMLINKS_LINK_GDLIBSTATUS", "GD Library Support: " );
define( "_AM_IMLINKS_LINK_GDLIBVERSION", "GD Library Version: " );
define( "_AM_IMLINKS_LINK_GDON", "<b>Enabled</b> (Thumbs Nails Available)" );
define( "_AM_IMLINKS_LINK_GDOFF", "<b>Disabled</b> (No Thumb Nails Available)" );
define( "_AM_IMLINKS_LINK_OFF", "<b>OFF</b>" );
define( "_AM_IMLINKS_LINK_ON", "<b>ON</b>" );
define( "_AM_IMLINKS_LINK_CATIMAGE", "Category Images" );
define( "_AM_IMLINKS_LINK_SCREENSHOTS", "Screenshot Images" );
define( "_AM_IMLINKS_LINK_MAINIMAGEDIR", "Main images" );
define( "_AM_IMLINKS_LINK_FCATIMAGE", "Category Image Path" );
define( "_AM_IMLINKS_LINK_FSCREENSHOTS", "Screenshot Image Path" );
define( "_AM_IMLINKS_LINK_FMAINIMAGEDIR", "Main image Path" );
define( "_AM_IMLINKS_LINK_FUPLOADIMAGETO", "Upload Image: " );
define( "_AM_IMLINKS_LINK_FUPLOADPATH", "Upload Path: " );
define( "_AM_IMLINKS_LINK_FUPLOADURL", "Upload URL: " );
define( "_AM_IMLINKS_LINK_FOLDERSELECTION", "Select Upload Destination:" );
define( "_AM_IMLINKS_LINK_FSHOWSELECTEDIMAGE", "Display Selected Image:" );
define( "_AM_IMLINKS_LINK_FUPLOADIMAGE", "Upload New Image to Selected Destination:" );

// Main Index defines
define( "_AM_IMLINKS_MINDEX_LINKSUMMARY", "Module Admin Summary" );
define( "_AM_IMLINKS_MINDEX_PUBLISHEDLINK", "Published Links:" );
define( "_AM_IMLINKS_MINDEX_AUTOPUBLISHEDLINK", "Auto Published Links:" );
define( "_AM_IMLINKS_MINDEX_AUTOEXPIRE", "Auto Expire Links:" );
define( "_AM_IMLINKS_MINDEX_EXPIRED", "Expired Links:" );
define( "_AM_IMLINKS_MINDEX_OFFLINELINK", "Offline Links:" );
define( "_AM_IMLINKS_MINDEX_ID", "ID" );
define( "_AM_IMLINKS_MINDEX_TITLE", "Link Title" );
define( "_AM_IMLINKS_MINDEX_POSTER", "Poster" );
define( "_AM_IMLINKS_MINDEX_ONLINE", "Status" );
define( "_AM_IMLINKS_MINDEX_ONLINESTATUS", "Online Status" );
define( "_AM_IMLINKS_MINDEX_PUBLISH", "Published" );
define( "_AM_IMLINKS_MINDEX_PUBLISHED", "Published" );
define( "_AM_IMLINKS_MINDEX_EXPIRE", "Expired" );
define( "_AM_IMLINKS_MINDEX_NOTSET", "Date Not Set" );
define( "_AM_IMLINKS_MINDEX_SUBMITTED", "Date Submitted" );

define( "_AM_IMLINKS_MINDEX_ACTION", "Action" );
define( "_AM_IMLINKS_MINDEX_NOLINKSFOUND", "NOTICE: There are no links that match this criteria" );
define( "_AM_IMLINKS_MINDEX_PAGE", "<b>Page:<b> " );
define( '_AM_IMLINKS_MINDEX_PAGEINFOTXT', '<ul><li>imLinks main page details.</li><li>You can easily change the image logo, heading, main index header and footer text to suit your own look</li></ul><br />Note: The logo image choosen will be used throughout imLinks.' );
define( "_AM_IMLINKS_MINDEX_RESPONSE", "Response Time" );
// Submitted Links
define( "_AM_IMLINKS_SUB_SUBMITTEDFILES", "Submitted Links" );
define( "_AM_IMLINKS_SUB_FILESWAITINGINFO", "Waiting Links Information" );
define( "_AM_IMLINKS_SUB_FILESWAITINGVALIDATION", "Links Waiting Validation: " );
define( "_AM_IMLINKS_SUB_APPROVEWAITINGFILE", "<b>Approve</b> new link information without validation." );
define( "_AM_IMLINKS_SUB_EDITWAITINGFILE", "<b>Edit</b> new link information and then approve." );
define( "_AM_IMLINKS_SUB_DELETEWAITINGFILE", "<b>Delete</b> the new link information." );
define( "_AM_IMLINKS_SUB_NOFILESWAITING", "There are no links that match this critera" );
define( "_AM_IMLINKS_SUB_NEWFILECREATED", "New Link Data Created and Database Updated Successfully" );
// Vote Information
define( "_AM_IMLINKS_VOTE_RATINGINFOMATION", "Voting Information" );
define( "_AM_IMLINKS_VOTE_TOTALVOTES", "Total votes: " );
define( "_AM_IMLINKS_VOTE_REGUSERVOTES", "Registered User Votes: %s" );
define( "_AM_IMLINKS_VOTE_ANONUSERVOTES", "Anonymous User Votes: %s" );
define( "_AM_IMLINKS_VOTE_USER", "User" );
define( "_AM_IMLINKS_VOTE_IP", "IP Address" );
define( "_AM_IMLINKS_VOTE_DATE", "Submitted" );
define( "_AM_IMLINKS_VOTE_RATING", "Rating" );
define( "_AM_IMLINKS_VOTE_NOREGVOTES", "No Registered User Votes" );
define( "_AM_IMLINKS_VOTE_NOUNREGVOTES", "No Unregistered User Votes" );
define( "_AM_IMLINKS_VOTE_VOTEDELETED", "Vote data deleted." );
define( "_AM_IMLINKS_VOTE_ID", "ID" );
define( "_AM_IMLINKS_VOTE_FILETITLE", "Link Title" );
define( "_AM_IMLINKS_VOTE_DISPLAYVOTES", "Voting Data Information" );
define( "_AM_IMLINKS_VOTE_NOVOTES", "No User Votes to display" );
define( "_AM_IMLINKS_VOTE_DELETE", "No User Votes to display" );
define( "_AM_IMLINKS_VOTE_DELETEDSC", "<b>Deletes</b> the chosen vote information from the database." );
define( "_AM_IMLINKS_VOTEDELETED", "Selected Vote removed database updated" );

define( "_AM_IMLINKS_VOTE_USERAVG", "Average User Rating" );
define( "_AM_IMLINKS_VOTE_TOTALRATE", "Total Votes" );
define( "_AM_IMLINKS_VOTE_MAXRATE", "Max Item Vote" );
define( "_AM_IMLINKS_VOTE_MINRATE", "Min Item Vote" );
define( "_AM_IMLINKS_VOTE_MOSTVOTEDTITLE", "Most Voted For" );
define( "_AM_IMLINKS_VOTE_LEASTVOTEDTITLE", "Least Voted For" );
define( "_AM_IMLINKS_VOTE_MOSTVOTERSUID", "Most Active Voter" );
define( "_AM_IMLINKS_VOTE_REGISTERED", "Registered Votes" );
define( "_AM_IMLINKS_VOTE_NONREGISTERED", "Anonymous Votes" );
// Modifications
define( "_AM_IMLINKS_MOD_TOTMODREQUESTS", "Total Modification Requests: " );
define( "_AM_IMLINKS_MOD_MODREQUESTS", "Modified Links" );
define( "_AM_IMLINKS_MOD_MODREQUESTSINFO", "Modified Links Information" );
define( "_AM_IMLINKS_MOD_MODID", "ID" );
define( "_AM_IMLINKS_MOD_MODTITLE", "Title" );
define( "_AM_IMLINKS_MOD_MODPOSTER", "Original Poster: " );
define( "_AM_IMLINKS_MOD_DATE", "Submitted" );
define( "_AM_IMLINKS_MOD_NOMODREQUEST", "There are no requests that match this critera" );
define( "_AM_IMLINKS_MOD_TITLE", "link Title: " );
define( "_AM_IMLINKS_MOD_LID", "link ID: " );
define( "_AM_IMLINKS_MOD_CID", "Category: " );
define( "_AM_IMLINKS_MOD_URL", "link Url: " );
define( "_AM_IMLINKS_MOD_PUBLISHER", "Publisher: " );
define( "_AM_IMLINKS_MOD_FORUMID", "Forum: " );
define( "_AM_IMLINKS_MOD_SCREENSHOT", "Screenshot Image: " );
define( "_AM_IMLINKS_MOD_HOMEPAGE", "Home Page: " );
define( "_AM_IMLINKS_MOD_HOMEPAGETITLE", "Home Page Title: " );
define( "_AM_IMLINKS_MOD_SHOTIMAGE", "Screenshot Image: " );
define( "_AM_IMLINKS_MOD_DESCRIPTION", "Description: " );
define( "_AM_IMLINKS_MOD_MODIFYSUBMITTER", "Submitter: " );
define( "_AM_IMLINKS_MOD_MODIFYSUBMIT", "Submitter" );
define( "_AM_IMLINKS_MOD_PROPOSED", "Proposed link Details" );
define( "_AM_IMLINKS_MOD_ORIGINAL", "Orginal link Details" );
define( "_AM_IMLINKS_MOD_REQDELETED", "Modification request removed from the database" );
define( "_AM_IMLINKS_MOD_REQUPDATED", "Selected link Modified and Database Updated Successfully" );
define( '_AM_IMLINKS_MOD_VIEW', 'View' );
// Link management
define( "_AM_IMLINKS_LINK_ID", "Link ID: " );
define( "_AM_IMLINKS_LINK_IP", "Submitters IP Address: " );
define( "_AM_IMLINKS_LINK_ALLOWEDAMIME", "<div style='padding-top: 4px; padding-bottom: 4px;'><b>Allowed Admin Link Extensions</b>:</div>" );
define( "_AM_IMLINKS_LINK_MODIFYFILE", "Modify Link Information" );
define( "_AM_IMLINKS_LINK_CREATENEWFILE", "Create New Link" );
define( "_AM_IMLINKS_LINK_TITLE", "Link Title: " );
define( "_AM_IMLINKS_LINK_DLURL", "Link URL: " );
define( "_AM_IMLINKS_LINK_DIRCA", " Internet Content Rating: " );
define( "_AM_IMLINKS_LINK_DESCRIPTION", "Link Description: " );
define( "_AM_IMLINKS_LINK_CATEGORY", "Link Main Category: " );
define( "_AM_IMLINKS_LINK_FILESSTATUS", " Set link offline?<br /><br /><span style='font-weight: normal;'>link will not be viewable to all users.</span>" );
define( "_AM_IMLINKS_LINK_SETASUPDATED", " Set link Status as Updated?<br /><br /><span style='font-weight: normal;'>link will Display updated icon.</span>" );
define( "_AM_IMLINKS_LINK_SHOTIMAGE", "Link Screenshot Image: " );
define( "_AM_IMLINKS_LINK_DISCUSSINFORUM", "Add Discuss in this Forum?" );
define( "_AM_IMLINKS_LINK_PUBLISHDATE", "Link Publish Date:" );
define( "_AM_IMLINKS_LINK_EXPIREDATE", "Link Expire Date:" );
define( "_AM_IMLINKS_LINK_CLEARPUBLISHDATE", "<br /><br />Remove Publish date:" );
define( "_AM_IMLINKS_LINK_CLEAREXPIREDATE", "<br /><br />Remove Expire date:" );
define( "_AM_IMLINKS_LINK_PUBLISHDATESET", " Publish date set: " );
define( "_AM_IMLINKS_LINK_SETDATETIMEPUBLISH", " Set the date/time of publish" );
define( "_AM_IMLINKS_LINK_SETDATETIMEEXPIRE", " Set the date/time of expire" );
define( "_AM_IMLINKS_LINK_SETPUBLISHDATE", "<b>Set Publish Date: </b>" );
define( "_AM_IMLINKS_LINK_SETNEWPUBLISHDATE", "<b>Set New Publish Date: </b><br />Published:" );
define( "_AM_IMLINKS_LINK_SETPUBDATESETS", "<b>Publish Date Set: </b><br />Publishes On Date:" );
define( "_AM_IMLINKS_LINK_EXPIREDATESET", " Expire date set: " );
define( "_AM_IMLINKS_LINK_SETEXPIREDATE", "<b>Set Expire Date: </b>" );
define( "_AM_IMLINKS_LINK_DELEDITMESS", "Delete Broken Report?<br /><br /><span style='font-weight: normal;'>When you choose <b>YES</b> the Broken Report will automatically deleted and you confirm that the link now works again.</span>" );
define( "_AM_IMLINKS_LINK_MUSTBEVALID", "Screenshot image must be a valid image link under %s directory (ex. shot.gif). Leave it blank if there is no image link." );
define( "_AM_IMLINKS_LINK_EDITAPPROVE", "Approve link:" );
define( "_AM_IMLINKS_LINK_NEWFILEUPLOAD", "New Link Created and Database Updated Successfully" );
define( "_AM_IMLINKS_LINK_FILEMODIFIEDUPDATE", "Selected Link Modified and Database Updated Successfully" );
define( "_AM_IMLINKS_LINK_REALLYDELETEDTHIS", "Really delete the selected link?" );
define( "_AM_IMLINKS_LINK_FILEWASDELETED", "Link %s successfully removed from the database!" );
define( "_AM_IMLINKS_LINK_FILEAPPROVED", "Link Approved and Database Updated Successfully" );
define( "_AM_IMLINKS_LINK_CREATENEWSSTORY", "<b>Create News Story From link</b>" );
define( "_AM_IMLINKS_LINK_SUBMITNEWS", "Submit New link as News item?" );
define( "_AM_IMLINKS_LINK_NEWSCATEGORY", "Select News Category to submit News:" );
define( "_AM_IMLINKS_LINK_NEWSTITLE", "News Title:<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: normal;'>Leave Blank to use Link Title</span></div>" );
define( "_AM_IMLINKS_LINK_PUBLISHER", "Link Publisher Name: " );

/**
 * Broken links defines
 */
define( "_AM_IMLINKS_SBROKENSUBMIT", "Broken: " );
define( "_AM_IMLINKS_BROKEN_FILE", "Broken Reports" );
define( "_AM_IMLINKS_BROKEN_FILEIGNORED", "Broken report ignored and successfully removed from the database!" );
define( "_AM_IMLINKS_BROKEN_NOWACK", "Acknowledged status changed and database updated!" );
define( "_AM_IMLINKS_BROKEN_NOWCON", "Confirmed status changed and database updated!" );
define( "_AM_IMLINKS_BROKEN_REPORTINFO", "Broken Report Information" );
define( "_AM_IMLINKS_BROKEN_REPORTSNO", "Broken Reports Waiting:" );
define( "_AM_IMLINKS_BROKEN_IGNOREDESC", "<b>Ignores</b> the report and only deletes the broken link report." );
define( "_AM_IMLINKS_BROKEN_DELETEDESC", "<b>Deletes</b> the reported link data and broken link reports for the link." );
define( "_AM_IMLINKS_BROKEN_EDITDESC", "<b>Edit</b> the link to fix the problem." );
define( "_AM_IMLINKS_BROKEN_ACKDESC", "<b>Acknowledged</b> Set Acknowledged state of broken file report." );
define( "_AM_IMLINKS_BROKEN_CONFIRMDESC", "<b>Confirmed</b> Set confirmed state of broken link report." );
define( "_AM_IMLINKS_BROKEN_ACKNOWLEDGED", "Acknowledged" );
define( "_AM_IMLINKS_BROKEN_DCONFIRMED", "Confirmed" );

define( "_AM_IMLINKS_BROKEN_ID", "ID" );
define( "_AM_IMLINKS_BROKEN_TITLE", "Title" );
define( "_AM_IMLINKS_BROKEN_REPORTER", "Reporter" );
define( "_AM_IMLINKS_BROKEN_FILESUBMITTER", "Submitter" );
define( "_AM_IMLINKS_BROKEN_DATESUBMITTED", "Submit Date" );
define( "_AM_IMLINKS_BROKEN_ACTION", "Action" );
define( "_AM_IMLINKS_BROKEN_NOFILEMATCH", "There are no Broken reports that match this critera" );
define( "_AM_IMLINKS_BROKENFILEDELETED", "link removed from database and broken report removed" );
/**
 * About defines
 */
define( "_AM_IMLINKS_BY", "by" );
// block defines
define( "_AM_IMLINKS_BADMIN", "Block Administration" );
define( "_AM_IMLINKS_BLKDESC", "Description" );
define( "_AM_IMLINKS_TITLE", "Title" );
define( "_AM_IMLINKS_SIDE", "Alignment" );
define( "_AM_IMLINKS_WEIGHT", "Weight" );
define( "_AM_IMLINKS_VISIBLE", "Visible" );
define( "_AM_IMLINKS_ACTION", "Action" );
define( "_AM_IMLINKS_SBLEFT", "Left" );
define( "_AM_IMLINKS_SBRIGHT", "Right" );
define( "_AM_IMLINKS_CBLEFT", "Center Left" );
define( "_AM_IMLINKS_CBRIGHT", "Center Right" );
define( "_AM_IMLINKS_CBCENTER", "Center Middle" );
define( "_AM_IMLINKS_ACTIVERIGHTS", "Active Rights" );
define( "_AM_IMLINKS_ACCESSRIGHTS", "Access Rights" );
// image admin icon
define( "_AM_IMLINKS_ICO_EDIT", "Edit This Item" );
define( "_AM_IMLINKS_ICO_DELETE", "Delete This Item" );
define( "_AM_IMLINKS_ICO_RESOURCE", "Edit This Resource" );

define( "_AM_IMLINKS_ICO_ONLINE", "Online" );
define( "_AM_IMLINKS_ICO_OFFLINE", "Offline" );
define( "_AM_IMLINKS_ICO_APPROVED", "Approved" );
define( "_AM_IMLINKS_ICO_NOTAPPROVED", "Not Approved" );

define( "_AM_IMLINKS_ICO_LINK", "Related link" );
define( "_AM_IMLINKS_ICO_URL", "Add Related URL" );
define( "_AM_IMLINKS_ICO_ADD", "Add" );
define( "_AM_IMLINKS_ICO_APPROVE", "Approve" );
define( "_AM_IMLINKS_ICO_STATS", "Stats" );
define( "_AM_IMLINKS_ICO_VIEW", "View this item" );

define( "_AM_IMLINKS_ICO_IGNORE", "Ignore" );
define( "_AM_IMLINKS_ICO_ACK", "Broken Report Acknowledged" );
define( "_AM_IMLINKS_ICO_REPORT", "Acknowledge Broken Report?" );
define( "_AM_IMLINKS_ICO_CONFIRM", "Broken Report Confirmed" );
define( "_AM_IMLINKS_ICO_CONBROKEN", "Confirm Broken Report?" );
define( "_AM_IMLINKS_ICO_RES", "Edit Resources/Links for this Item" );
define( "_AM_IMLINKS_MOD_URLRATING", "Interent Content Rating:" );
// Alternate category
define( "_AM_IMLINKS_ALTCAT_CREATEF", "Add Alternate Category" );
define( "_AM_IMLINKS_MALTCAT", "Alternate Category Management" );
define( "_AM_IMLINKS_ALTCAT_MODIFYF", "Alternate Category Management" );
define( "_AM_IMLINKS_ALTCAT_INFOTEXT", "<ul><li>Alternate categories can be added or removed easily via this form.</li></ul>" );
define( '_AM_IMLINKS_ALTCAT_CREATED', 'Alternate categories was saved!' );

define( "_AM_IMLINKS_MRESOURCES", "Resource Management" );
define( "_AM_IMLINKS_RES_CREATED", "Resource Management" );
define( "_AM_IMLINKS_RES_ID", "ID" );
define( "_AM_IMLINKS_RES_DESC", "Description" );
define( "_AM_IMLINKS_RES_NAME", "Resource Name" );
define( "_AM_IMLINKS_RES_TYPE", "Resource Type" );
define( "_AM_IMLINKS_RES_USER", "User" );
define( "_AM_IMLINKS_RES_CREATEF", "Add Resource" );
define( "_AM_IMLINKS_RES_MODIFYF", "Modify Resource" );
define( "_AM_IMLINKS_RES_NAMEF", "Resource name:" );
define( "_AM_IMLINKS_RES_DESCF", "Resource description:" );
define( "_AM_IMLINKS_RES_URLF", "Resource URL:" );
define( "_AM_IMLINKS_RES_ITEMIDF", "Resource Item ID:" );
define( "_AM_IMLINKS_RES_INFOTEXT", "<ul><li>New resources can be added, edited or removed easily via this form.</li>
	<li>List all resources linked to a link</li>
	<li>Modify resource name and description</li></ul>
	" );
define( "_AM_IMLINKS_LISTBROKEN", "Displays Links that are possibly broken. NB: These results may not be accurate and should be taken as a rough guide.<br /><br />Please check the link does exist first before any action taken.<br /><br />" );
define( "_AM_IMLINKS_PINGTIMES", "Displays the first estimated round ping time to each link.<br /><br />NB: These results may not be accurate and should be taken as a rough guide.<br /><br />" );

define( "_AM_IMLINKS_NO_FORUM", "No forum Selected" );

define( "_AM_IMLINKS_PERM_RATEPERMISSIONS", "Rate Permissions" );
define( "_AM_IMLINKS_PERM_RATEPERMISSIONS_TEXT", "Select the groups that can rate a link in the selected categories." );

define( "_AM_IMLINKS_PERM_AUTOPERMISSIONS", "Auto Approve Links" );
define( "_AM_IMLINKS_PERM_AUTOPERMISSIONS_TEXT", "Select the groups that will have new links auto approved without admin intervention." );

define( "_AM_IMLINKS_PERM_SPERMISSIONS", "Submitter Permissions" );
define( "_AM_IMLINKS_PERM_SPERMISSIONS_TEXT", "Select the groups who can submit new links to selected categories." );

define( "_AM_IMLINKS_PERM_APERMISSIONS", "Moderator Groups" );
define( "_AM_IMLINKS_PERM_APERMISSIONS_TEXT", "Select the groups who have moderator privligages for the selected categories." );

// added by McDonald
define( "_AM_IMLINKS_COUNTRY", "Country:" );
define( "_AM_IMLINKS_KEYWORDS", "Keywords:" );
define( "_AM_IMLINKS_KEYWORDS_NOTE", "Keywords should be seperated with a comma (keyword1, keyword2, keyword3, ..)" );
define( "_AM_IMLINKS_CHECKURL", "Check URL" );
define( "_AM_IMLINKS_CATTITLE", "Category" );
define( "_AM_IMLINKS_LINK_GOOGLEMAP", "Google Maps" );
define( "_AM_IMLINKS_LINK_YAHOOMAP", "Yahoo Maps" );
define( "_AM_IMLINKS_LINK_MULTIMAP", "Multimap" );
define( "_AM_IMLINKS_LINK_CHECKMAP", "Check map" );
define( "_AM_IMLINKS_STREET1", "Street 1" );
define( "_AM_IMLINKS_STREET2", "Street 2 (optional)" );
define( "_AM_IMLINKS_TOWN", "Town" );
define( "_AM_IMLINKS_STATE", "State" );
define( "_AM_IMLINKS_ZIPCODE", "ZIP code" );
define( "_AM_IMLINKS_TELEPHONE", "Telephone" );
define( "_AM_IMLINKS_FAX", "Fax" );

// Version 1.05 RC2
define( "_AM_IMLINKS_WARNINSTALL4", "<b>WARNING:</b> <u>Folder</u> %s is not writeable. <br />This folder needs to be writeable (CHMOD 777) for imLinks." );
// Version 1.05 RC5
define( "_AM_IMLINKS_VOIP", "VoIP" );
define( "_AM_IMLINKS_LINK_SUBMITTER", "Link Submitter Name: " );
define( "_AM_IMLINKS_MOBILE", "Mobile" );
define( "_AM_IMLINKS_CATSPONSOR", "Select Category Sponsor:" );
define( "_AM_IMLINKS_CATSPONSORDSC", "If you select a Client the banner id from the form below will not be saved!" );
define( "_AM_IMLINKS_BANNER", "Banner" );
define( "_AM_IMLINKS_FBANNER", "Banner" );
define( "_AM_IMLINKS_BANNERID", "Select Banner ID:" );
define( "_AM_IMLINKS_BANNERIDDSC", "If you have selected a Client in the form above the banner id will not be saved!" );

// Version 1.05 RC6
define( "_AM_IMLINKS_VAT", "VAT Reg No" );
define( "_AM_IMLINKS_VATWIKI", "For more information see <a href='http://en.wikipedia.org/wiki/Value_added_tax_identification_number' target='_blank'>Wikipedia</a>" );
define( "_AM_IMLINKS_EMAIL", "E-Mail" );
define( "_AM_IMLINKS_ICO_EXPIRE", "Expired" );
define( "_AM_IMLINKS_LINK_NORESPONSE", 'No Response' );
define( "_AM_IMLINKS_LINK_CREATEADDRESS", '&nbsp;<b>Address form</b>' );
define( "_AM_IMLINKS_LINK_MISCLINKSETTINGS", '&nbsp;<b>Miscellaneous Link settings</b>' );

// Version 1.06 RC1
define( "_AM_IMLINKS_READWRITEERROR", "You either did not choose a file to upload or the server has insufficient read/writes to upload this file!" );
define( "_AM_IMLINKS_INVALIDFILESIZE", "Invalid File Size" );
define( "_AM_IMLINKS_FILENAMEEMPTY", "Filename Is Empty" );
define( "_AM_IMLINKS_NOFILEUPLOAD", "No file uploaded, this is a error" );
define( "_AM_IMLINKS_UPLOADERRORZERO", "There was a problem with your upload. Error: 0" );
define( "_AM_IMLINKS_UPLOADERRORONE", "The file you are trying to upload is too big. Error: 1" );
define( "_AM_IMLINKS_UPLOADERRORTWO", "The file you are trying to upload is too big. Error: 2" );
define( "_AM_IMLINKS_UPLOADERRORTHREE", "The file you are trying upload was only partially uploaded. Error: 3" );
define( "_AM_IMLINKS_UPLOADERRORFOUR", "No file selected for upload. Error: 4" );
define( "_AM_IMLINKS_UPLOADERRORFIVE", "No file selected for upload. Error: 5" );
define( "_AM_IMLINKS_NOUPLOADDIR", "Upload directory not set" );
define( "_AM_IMLINKS_FAILOPENDIR", "Failed opening directory: " );
define( "_AM_IMLINKS_FAILOPENDIRWRITEPERM", "Failed opening directory with write permission: " );
define( "_AM_IMLINKS_FILESIZEMAXSIZE", "File Size: %u. Maximum Size Allowed: %u" );
define( "_AM_IMLINKS_FILESIZEMAXWIDTH", "File width: %u. Maximum width allowed: %u" );
define( "_AM_IMLINKS_FILESIZEMAXHEIGHT", "File height: %u. Maximum height allowed: %u" );
define( "_AM_IMLINKS_MIMENOTALLOW", "MIME type not allowed: " );
define( "_AM_IMLINKS_FAILEDUPLOADING", "Failed uploading file: " );
define( "_AM_IMLINKS_FILE", "File " );
define( "_AM_IMLINKS_ALREADYEXISTTRYAGAIN", " already exists on the server. Please rename this file and try again.<br />" );
define( "_AM_IMLINKS_ERRORSRETURNUPLOAD", "<h4>Errors Returned While Uploading</h4>" );
define( "_AM_IMLINKS_DOESNOTEXIST", " does not exist!" );
define( "_AM_IMLINKS_INFORMATION", "Link Information" );
define( "_AM_IMLINKS_HITS", "Hits: " );
define( "_AM_IMLINKS_PAGERANK", "PageRank™: ");
define( "_AM_IMLINKS_ERROR_CATISCAT", "You can NOT set a category as a sub-category of itself!" );
define( "_AM_IMLINKS_MOD_COUNTRY", "Country:" );
define( "_AM_IMLINKS_MOD_KEYWORDS", "Keywords:" );
define( "_AM_IMLINKS_MOD_ITEM_TAG", "Tags:" );
define( "_AM_IMLINKS_MOD_GOOGLEMAP", "Google Maps:" );
define( "_AM_IMLINKS_MOD_YAHOOMAP", "Yahoo Maps:" );
define( "_AM_IMLINKS_MOD_MULTIMAP", "Multimap:" );
define( "_AM_IMLINKS_MOD_STREET1", "Street 1:" );
define( "_AM_IMLINKS_MOD_STREET2", "Street 2 (optional):" );
define( "_AM_IMLINKS_MOD_TOWN", "Town:" );
define( "_AM_IMLINKS_MOD_STATE", "State:" );
define( "_AM_IMLINKS_MOD_ZIP", "ZIP code:" );
define( "_AM_IMLINKS_MOD_TEL", "Telephone:" );
define( "_AM_IMLINKS_MOD_FAX", "Fax:" );
define( "_AM_IMLINKS_MOD_VOIP", "VoIP:" );
define( "_AM_IMLINKS_MOD_MOBILE", "Mobile:" );
define( "_AM_IMLINKS_MOD_EMAIL", "E-Mail:" );
define( "_AM_IMLINKS_MOD_VAT", "VAT:" );

// version 1.06 RC-2
define( "_AM_IMLINKS_IPAGE_SHOWLATEST", "Show Latest Listings?" );
define( "_AM_IMLINKS_IPAGE_LATESTTOTAL", "How many links to show?" );
define( "_AM_IMLINKS_IPAGE_LATESTTOTAL_DSC", "0 Turns this option off." );

//version 1.06 Final
define( "_AM_IMLINKS_DOCUMENTATION", "Documentation" );
define( "_AM_IMLINKS_SHOWNOIMAGE", "Show no image" );
define( "_AM_IMLINKS_NOSELECTION", "No selection" );
define( "_AM_IMLINKS_NOFILESELECT", "No selected file" );
?>