<?php
/*
Sometimes needs to be declare it first:
$title = '';
$description = '';
*/

$submitted = false;

// when dealing with post request need to check the request method
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit']))  // submit is the name of the button or whatever field i want to check
{
    //var_dump($_POST);
    //after writing on the form (title, description & click button) => array(3) { ["title"]=> string(6) "title1" ["description"]=> string(10) "descript 1" ["submit"]=> string(0) "" }  in the browser

    $title = htmlspecialchars($_POST['title'] ?? ''); // it prints it on the page and not in the url. If htmlspecialcharts is not here is a vulnerability if goes to the url
    $description = htmlspecialchars($_POST['description'] ?? '');
    //echo $title, $description; // whatever is being wrote in the fields ex.:(title one description one)

    $submitted = true;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Job Listing</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <div class="flex justify-center items-center h-screen">
        <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
            <h1 class="text-2xl font-semibold mb-6">
                Create Job Listing
            </h1>

            <!-- by default: method = "get" -->
            <form method="post"> <!-- if action="to whatever file even external one as .php". if action is not added then it will be submitted to the page page is on -->
                <div class="mb-4">
                    <label for="title"
                        class="block text-gray-700 font-medium">
                        Title
                    </label>

                    <input
                        type="text"
                        id="title"
                        name="title"
                        placeholder="Enter job title"
                        class="w-full px-4 py-2 border rounded focus:ring">
                </div>

                <div class="mb-4">
                    <label for="description"
                        class="block text-gray-700 font-medium">
                        Description
                    </label>

                    <textarea
                        id="description"
                        name="description"
                        placeholder="Enter job description"
                        class="w-full px-4 py-2 border rounded focus:ring"></textarea>
                </div>

                <div class="flex justify-between">
                    <button
                        type="submit"
                        name="submit"
                        class="bg-blue-500 text-white px-4 py-2 rounded">
                        Create Listing
                    </button>

                    <a href="index.php"
                        class="text-blue-500 hover:underline">
                        Back to Listings
                    </a>
                </div>
            </form>

            <?php if ($submitted) : ?>
                <!--  Display submitted data -->
                <div class="mt-6 p-4 border rounded bg-gray-200">
                    <h2 class="text-lg font-semibold">Submitted Job Listing:</h2>
                    <p>
                        <strong>Title:</strong>
                        <?= $title ?>
                    </p>
                    <p>
                        <strong>Description:</strong>
                        <?= $description ?>
                    </p>
                </div>
            <?php endif; ?>


        </div>
    </div>

</body>

</html>