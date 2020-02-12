<?php
$domOBJ = new DOMDocument();
$domOBJ->load("https://www.bls.gov/feed/jolts.rss");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>

<body>
    <div>
        <?php
        $content = $domOBJ->getElementsByTagName("entry");

        foreach ($content as $data) {
            $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
            $content = $data->getElementsByTagName("content")->item(0)->nodeValue;
            $category = $data->getElementsByTagName("category")->item(0)->nodeValue;
            $link = $data->getElementsByTagName("link")->item(0)->nodeValue;
            $published = $data->getElementsByTagName("published")->item(0)->nodeValue;
        ?>
            <ul>
                <li><strong><?php echo $title ?></strong></li>
                <ul>
                    <li><?php echo $content ?></li>
                    <li><?php echo $category ?></li>
                    <li><?php echo $published ?></li>
                </ul>
            </ul>
        <?php } ?>
    </div>
    <h2>Job Links</h2>
<a href="https://www.indeed.com/" target="_blank">Visit for job opportunities</a>
</body>


</html>