<?php 
$uri = $_SERVER['REQUEST_URI'];
$uri_substrings = explode("/", $uri);

$page = $uri_substrings[2]; //change to 1 for final version

if(count($uri_substrings) >= 4) //change to 3 for final version
{
    $project = $uri_substrings[3]; //change to 2 for final version
}
?>
<nav>
    <ul>
        <!-- REMOVE /portfolio-website/ FROM FINAL VERSION -->
        <li><a href="/portfolio-website/">Amren Gill</a></li>
        <li><a <?php if($page == "") { echo "class='active'"; } ?> href="/portfolio-website/">Home</a></li>
        <li><a <?php if($page == "projects") { echo "class='active'"; } ?> href="/portfolio-website/projects/">Projects</a></li>
        <li><a <?php if($page == "about") { echo "class='active'"; } ?> href="/portfolio-website/about">About Me</a></li>
        <li><a <?php if($page == "contact") { echo "class='active'"; } ?> href="/portfolio-website/contact">Contact</a></li>
    </ul>
</nav>