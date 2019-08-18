<?php
include('simple_html_dom.php');
$html = new simple_html_dom();
$url="https://tutorialsclass.com";
// Create DOM from URL or file
$html = file_get_html($url);

$h1=array();
$count = 0;
foreach($html->find('h1') as $i=> $element) {
    $h1 [$count++]= $element->plaintext;    
}
$num=count($h1);
echo $url." Has Total H1 Tag is = ".$num;
if($num==true){
    echo "<div style='color:green';> Good </div>";
}
else{
    echo "<div style='color:red';> H1 Not Found</div>";
}
