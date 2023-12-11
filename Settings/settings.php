 <?php
 try {
    $DbConnection = new PDO("mysql:host=localhost;dbname=ecommerce;charset=UTF8", "root", "");
 } catch (Exception $e) {
    echo "connection error". $e->getMessage();
    die();
 }

 $SettingsQuery = $DbConnection->prepare("SELECT * FROM settings LIMIT 1");
 $SettingsQuery->execute();
 $SettingCount = $SettingsQuery->rowCount();
 $Settings = $SettingsQuery->fetch(PDO::FETCH_ASSOC);
 if ($SettingCount > 0) {
$SiteName= $Settings["SiteName"];
$SiteTitle= $Settings["SiteTitle"];
$SiteDescription= $Settings["SiteDescription"];
$SiteKeywords= $Settings["SiteKeywords"];
$SiteCopyright= $Settings["SiteCopyrightText"];
$SiteLogo= $Settings["SiteLogo"];
$SiteEmail= $Settings["SiteEmail"];
$SiteEmailPassword= $Settings["SiteEmailPassword"];

 }
 else {
    echo "settings query is wrong";
    die();
  }

 ?>