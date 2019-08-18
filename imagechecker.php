<?php
include('simple_html_dom.php');
$html = new simple_html_dom();
$url="https://tutorialsclass.com";
// Create DOM from URL or file
$html = file_get_html($url);

$count = 0;
foreach($html->find('img') as $i=> $element) {
    $image [$count++]= $element->plaintext; 
       
}

//count total image
$num=count($image);
echo " Image = ".$num. "<br/>";

//Print image alt text
$alt=$element->alt;
$title=$element->title;
echo "image Alt Text = ".$alt . "<br/>"; 
echo "image Title Text = ".$title . "<br/>"; 
if($alt==true){
    echo "<div style='color:green';> Alt Good </div>";
}
else{
    echo "<div style='color:red';> Image Alt Not Found</div>";
}

if($title==true){
    echo "<div style='color:green';> Title Good </div>";
}
else{
    echo "<div style='color:red';> Image Title Not Found</div>";
}