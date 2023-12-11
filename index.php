<?php
require_once("Settings/settings.php")    ;
require_once("Settings/functions.php") ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="revisit-after" content="7 Days">
    <title><?php echo $SiteTitle?></title>
    <meta name="description" content="<?php echo $SiteDescription?>">
    <meta name="keywords" content="<?php echo $SiteKeywords?>">
    <script type="text/javascript" src="Settings/functions.js" lang="javascript"></script>
    <script type="text/javascript" src="Frameworks\Jquery\jquery-3.7.1.min.js" lang="javascript"></script>
    <link rel="stylesheet" href="Settings/style.css">
</head>
<body>
    
</body>
</html>
<?php
$DbConnection = null ;
?>