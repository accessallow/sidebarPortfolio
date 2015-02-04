<?php include_once './template/header.php'; ?>
<?php

$file = "home.html";

if (isset($_GET['id'])) {

    $myid = $_GET['id'];
    
    switch ($myid) {
        case 1: $file = "home.html";
            break;
        case 2: $file = "projects.html";
            break;
        case 3: $file = "resume.html";
            break;
        case 4: $file = "academics.html";
            break;
        case 5: $file = "about.html";
            break;
        default:$file = "oops.html";
            break;
    }
}

        $fileContent = file_get_contents('site_content/' . $file);
        echo $fileContent;
        
?>

<?php //include_once './template/footer.php'; ?>
