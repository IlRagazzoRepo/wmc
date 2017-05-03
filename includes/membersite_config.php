<?PHP
require("constants.php");
require_once("fg_membersite.php");
$fgmembersite = new FGMembersite();
//Provide your site name here
$fgmembersite->SetWebsiteName('user11.com');
//Provide the email address where you want to get notifications
$fgmembersite->SetAdminEmail('user11@user11.com');
//Provide your database login details here:
//hostname, user name, password, database name and table name
//note that the script will create the table (for example, fgusers in this case)
//by itself on submitting register.php for the first time//2/21/15
$fgmembersite->InitDB(/*hostname*/DB_SERVER,
                      /*username*/DB_USER,
                      /*password*/DB_PASS,
                      /*database name*/DB_NAME,
                      /*table name*/'users');//$fgmembersite->InitDB();
//For better security. Get a random string from this link: http://tinyurl.com/randstr
// and put it here
$fgmembersite->SetRandomKey('qSRcVS6DrTzrPvr');
?>