<?php //include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') 


function d($var)
{
    echo "<pre>";
    print_r($var);
    echo "</pre>";
}

function dd($var)
{
    d($var);
    die();
}
?>
<?php

// dd($_GET);

// sanitize

// validation


// image processing

// store : as json data to json file

$id = 11;
$uuid = 'asdfasdf';
$src = $_GET['url'];
$alt = $_GET['alt'];
// $title = $_GET['title'];
$caption = $_GET['caption'];

$slide = [
    'id' => $id,
    'uuid' => $uuid,
    'src' => $src,
    'alt' => $alt,
    // 'title'=>$title,
    'caption' => $caption
];


$dataSlides = file_get_contents('data.json');
$slides = json_decode($dataSlides);

$slides[] = (object) $slide;
$data_slides = json_encode($slides);



if (file_exists("data.json")) {
    $result = file_put_contents("data.json", $data_slides);
} else {
    echo "File not found";
}




dd($result);

// give appropriate message to user
