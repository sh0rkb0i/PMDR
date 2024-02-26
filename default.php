<?php
//PMDR: Settings for this Document
define ("mdpath", "Example.md"); //Where is the document located? 
define ("background", "LightGrey"); //The color of the background that is behind the document
define ("foreground", "White"); //The color of the document's background
define ("foregroundtext", "Black"); //The color of the text in the document
define ("showcredits", true); //Please keep this enabled if you want to support my dev work and so more people can discover PMDR

//You can use HTML in the markdown document
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?=mdpath?> - PMDR</title>
        <style>
            h1{
                margin-top:0;
            }
            html{
                Background-Color:<?=background?>;
                Padding:0;
                Margin:0;
            }
            body{
                Background-Color:<?=foreground?>;
                Border-Left:1px Black Solid;
                Border-Right:1px Black Solid;
                Width:100%;
                Max-Width:900px;
                Margin:0 auto;
                Margin-Top:0;
                Min-Height:100vh;
                Font-Family:'Calibri',Verdana,'Trebuchet MS',Arial,Sans-Serif;
                Color:<?=foregroundtext?>;
            }
            hr{ /*I didn't make the list styles -sh0rkb0i*/
                Background:Transparent;
                Border:0;
                Border-Top:1px Black Solid;
                Margin-Top:1px;
            }
            ul { 
                list-style-type: disc; 
                list-style-position: inside; 
            }
            ol { 
                list-style-type: decimal; 
                list-style-position: inside; 
            }
            ul ul, ol ul { 
                list-style-type: circle; 
                list-style-position: inside; 
                margin-left: 15px; 
            }
            ol ol, ul ol { 
                list-style-type: lower-latin; 
                list-style-position: inside; 
                margin-left: 15px; 
            }
            blockquote{
                Margin-Left:5px;
                Padding-Left:5px;
                Border-Left:2px Grey Solid;
            }
            /*p,ul,ol,hr,h2,h3,h4,h5,h6{
                Margin-Top:5px;
            }*/
            tr,td,th{
                border:1px black solid;
            }
            img{
                max-width:100%;
            }
        </style>
    </head>
    <body>
        <?php
        require'Parsedown.php';
        function pd($filePath) {
            if(!file_exists($filePath)){
                echo"<h1>PMDR ERROR</h1> NOT FOUND";
                return;
            }
            $p=new Parsedown();
            echo$p->text(file_get_contents($filePath));
        }
        pd(mdpath);
        ?>
        <?if(showcredits==true){?>
        <hr>
        <small>Generated via <a href="https://github.com/sh0rkb0i/PMDR">PMDR</a> / <a href="https://github.com/sh0rkb0i/PMDR/issues">Report an Issue</a></small>
        <?}?>
    </body>
</html>
