<html>
<head>
    <link rel="stylesheet" href="css/styles.css"/>
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:700" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Kristaps Naglis</title>
</head>
<body>
<?php
if (isset($_POST ['country'])) {
    setCookie("country", $_POST['country']);
}
if (isset($_POST ['language'])) {
    setCookie("language", $_POST['language']);
}
if (isset($_GET ['country'])) {
    setCookie("country", $_GET['country']);
}
if (isset($_GET ['language'])) {
    setCookie("language", $_GET['language']);
}

if (isset($_GET['country'])) {
    $country = $_GET['country'];
} else if (isset($_POST['country'])) {
    $country = $_POST['country'];
} else if (isset($_COOKIE['country'])) {
    $country = $_COOKIE['country'];
} else {
    $country = "";
}

if (isset($_GET['language'])) {
    $language = $_GET['language'];
} else if (isset($_POST['language'])) {
    $language = $_POST['language'];
} else if (isset($_COOKIE['language'])) {
    $language = $_COOKIE['language'];
} else {
    $language = "";
}

?>
<div class="container">
    <form action="index.php" method="post">
        <div class="containerGrid">
            <div class="left">
                <div class="country">
                    <div class="countLabel">
                        Country:
                    </div>
                    <div>
                        <select class="countrySelection" name="country">
                            <option value="lv" <?php if ($country == "lv") echo "selected" ?>>Latvia</option>
                            <option value="us" <?php if ($country == "us") echo "selected" ?>>United States</option>
                            <option value="ger" <?php if ($country == "ger") echo "selected" ?>>Germany</option>
                        </select>
                    </div>
                </div>
                <div class="language">
                    <div class="langLabel">
                        Language:
                    </div>
                    <div>
                        <select class="languageSelection" name="language">
                            <option value="latvian" <?php if ($language == "latvian") echo "selected" ?>>latvian</option>
                            <option value="english" <?php if ($language == "english") echo "selected" ?>>english</option>
                            <option value="german" <?php if ($language == "german") echo "selected" ?>>german</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="right">
                <button class="buttonSubmit" type="submit">Submit</button>
            </div>
        </div>

        <div class="footer">
            <a href="index.php?country=lv&language=latvian">Reset selection</a>
        </div>
    </form>
</div>

</body>
</html>
