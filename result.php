<?php
include('simple_html_dom.php');
$url=$_POST['web'];
$html = new simple_html_dom();

// Create DOM from URL or file
$html = file_get_html($url);

$title=array();
$title = $html->find('title',0)->innertext;
if($title==true){
    echo $title;
    $titl_length=strlen($title);

    if(strlen($title<=55)){
        echo "<div style='color:green;'>"."Title Length Is Good"."</div> <br>";

    if($titl_length>55){
        echo "<div style='color:red;'>"."Title Length not Good Remove Some Words For Good SEO"."</div>";
    }
    return true;
}
}

//To get Meta Description
$meta_description=array();
$meta_description = $html->find("meta[name='description']", 0)->content;

    if($meta_description==true){
        echo "Meta Descrption = "."<div style='border:2px solid red';>".$meta_description."</div>"; 
        echo "<br>";
        $length=strlen($meta_description);
    
        if(strlen($length<=155 || $length<=160)){
        echo "Your meta Description is Good"; return false;
        }

        if(strlen($length<155)){
            echo "Not Good For Seo + Add More Words "; return false;
    }
        if(strlen($length>160)){
        echo "Not Good For Seo - Remove Some Words For Good Seo.. "; return false;
}
return true;
}