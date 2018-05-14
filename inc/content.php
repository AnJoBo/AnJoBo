    <div class='content'>
        <div class="header">
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
        <p class="aboutMe">
        My interest in technology has been around since my earliest days. From the first time I played any game on a computer I thought to myself, "This is magic!" 
        Ever since then, I've been fascinated with the possibilities that tech could do.<br><br>  
        My first exposure to any type of code was with the site MySpace, back when it was the social-media giant. Users started having custom pages and I wanted to find out how they did it, so I plugged away at the internet until I found out how to do this myself.<br><br> 
        Eventually, the idea that I could create my own games, mobile apps, and even AR/VR content become more and more attractive. So I decided that this was what I will 
        do for the rest of my life - <strong>software development</strong>.
    </p>
    <footer class="footer">
        &copy;Andrew J. Borkowski 2018
    </footer>
    </div>
</body>
</html>