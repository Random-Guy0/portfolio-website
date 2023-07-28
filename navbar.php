<?php 
enum Page
{
    case Home;
    case Projects;
    case About;
    case Contact;
}

enum Projects
{
    case idkyet;
}

$uri = $_SERVER['REQUEST_URI'];
$uri_substrings = explode("/", $uri);

$page = $uri_substrings[1]; //change to 0 for final version

if(count($uri_substrings) >= 3) //change to 2 for final version
{
    
}
?>
<nav>
    <ul>
        <!-- REMOVE /portfolio-website/ FROM FINAL VERSION -->
        <li><a href="/portfolio-website/">Amren Gill</a></li>
        <li><a href="/portfolio-website/">Home</a></li>
        <li><a href="/portfolio-website/projects/">Projects</a></li>
        <li><a href="/portfolio-website/about">About Me</a></li>
        <li><a href="/portfolio-website/contact">Contact</a></li>
    </ul>
</nav>