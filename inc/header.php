<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>AJB - <?php echo $pageTitle ?></title>

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <script src="scripts/aframe-master.min.js"></script>
    <script src="scripts/rounded.js"></script>

</head>

<body>

    <div class="header">
        <div class="myPictureContainer">
            <img class="myPicture" src="images/me00.png" />
        </div>
        <div class="header-info">
            <div class="title">
                <h1>Andrew J. Borkowski</h1>
                <p>Full-Stack Web Developer and AR/VR Enthusiast</p>
            </div>
            <div class="nav">
                <ul>
                    <li>
                        <?php if($pageTitle != 'Home') {
                            echo "<a href=\"index.php\">Home</a>";
                        } else {echo '<p class="current-page">Home</p>';} ?>
                    </li> | 
                    <li>
                        <?php if($pageTitle != 'Resume') {
                            echo "<a href=\"resume.php\">Resume</a>";
                        } else {echo '<p class="current-page">Resume</p>';} ?>
                    </li> | 
                    <li>
                        <?php if($pageTitle != 'Projects') {
                            echo "<a href=\"projects.php\">Projects</a>";
                        } else {echo '<p class="current-page">Projects</p>';} ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>