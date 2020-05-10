
<?php
switch ($_SERVER["SCRIPT_NAME"]) {
    case "/php-template/about.php":
        $CURRENT_PAGE = "About";
        $PAGE_TITLE = "About Us";
        break;
    case "/php-template/contact.php":
        $CURRENT_PAGE = "Contact";
        $PAGE_TITLE = "Contact Us";
        break;
    default:
        $CURRENT_PAGE = "Index";
        $PAGE_TITLE = "Welcome to my homepage!";
}
?>

<title><?php print $PAGE_TITLE;?></title>

<?php if ($CURRENT_PAGE == "Index") { ?>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
<?php } ?>

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<style>
    #main-content {
        margin-top:20px;
    }
    .footer {
        font-size: 14px;
        text-align: center;
    }
</style>

<div class="jumbotron">
    <h1>Hello there!</h1>
</div>
<div class="container">
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link <?php if ($CURRENT_PAGE == "Index") {?>active<?php }?>" href="index2.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php if ($CURRENT_PAGE == "About") {?>active<?php }?>" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php if ($CURRENT_PAGE == "Contact") {?>active<?php }?>" href="contact.php">Contact</a>
        </li>
    </ul>
</div>


<div class="footer">
    &copy; <?php print date("Y");?>
</div>