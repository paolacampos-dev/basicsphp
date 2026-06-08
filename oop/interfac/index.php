<!-- INTERFACE is like a contract. It tells a class which methods it must have, but it does not say how those methods should work. Can't be instantiate it-->

<?php
interface ContentInterface
{
    public function display();
    public function edit();
}

class Article implements ContentInterface
{
    private $title;
    private $content;

    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    public function display()
    {
        echo "<h2>{$this->title}</h2>";
        echo "<p>{$this->content}</p>";
    }

    public function edit()
    {
        echo "Editing the article '{$this->title}'";
    }
}

class Video implements ContentInterface
{
    private $title;
    private $url;

    public function __construct($title, $url)
    {
        $this->title = $title;
        $this->url = $url;
    }

    public function display()
    {
        echo "<h2>{$this->title}</h2>";
        echo "<iframe src='{$this->url}'</iframe>";
    }

    public function edit()
    {
        echo "Editing this video '{$this->title}'";
    }
}

$article = new Article('Introduct to PHP',  'PHP is for WP');
//$video = new Video('PHP',  'url');


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">
                PHP From Scratch
            </h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <!-- because display() uses echo needs to add php instead of = -->
            <?php $article->display(); ?>
        </div>
    </div>
</body>

</html>