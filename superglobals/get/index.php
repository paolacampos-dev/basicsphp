<?php

//var_dump($_GET); // array(0) { } (if we pass on the url/?name=Brad then we get in the browser --> array(1) { ["name"]=> string(4) "Brad" })

/* if we need to check to get the values from the url (query)
    echo isset($_GET['name']) ? $_GET['name'] : '';
or  echo $_GET['name'] ?? '';
*/

// From challenges/functionsAverageSalary2:

$jobListings = [
    [
        'id' => 1,
        'title' => 'Software Engineer',
        'description' => 'We are seeking a skilled software engineer to develop high-quality software solutions.',
        'salary' => 80000,
        'location' => 'San Francisco',
        'tags' => ['Software Development', 'Java', 'Python', 'SEO']
    ],
    [
        'id' => 2,
        'title' => 'Marketing Specialist',
        'description' => 'We are looking for a marketing specialist to develop and implement effective marketing strategies.',
        'salary' => 60000,
        'location' => 'New York',
        'tags' => ['Digital Marketing', 'Social Media', 'SEO']
    ],
    [
        'id' => 3,
        'title' => 'Web Developer',
        'description' => 'Join our team as a web developer and create amazing web applications.',
        'salary' => 75000,
        'location' => 'Chicago',
        'tags' => ['HTML', 'CSS', 'JavaScript']
    ],
    [
        'id' => 4,
        'title' => 'UX Designer',
        'description' => 'We are seeking a talented UX designer to create intuitive and visually appealing user interfaces.',
        'salary' => 70000,
        'location' => 'Seattle',
        'tags' => ['User Experience', 'Wireframing', 'Prototyping']
    ],
    [
        'id' => 5,
        'title' => 'Customer Service Representative',
        'description' => 'We are looking for a friendly customer service representative to assist customers and resolve issues.',
        'salary' => 40000,
        'location' => 'New York',
        'tags' => []
    ]
];
// WP: $jobs = $wpdb->get_results(...); or: $posts = get_posts();


/*function formatSalary($salary)
{
    return '$' . number_format($salary, 2); // 2 is for the number of decimals we want if we want any if not not need to write the parameter
}
*/
$formatSalary = fn($salary) => '$' . number_format($salary, 2);

function highlightTags($tags, $searchTerm)
{
    $tagsStr = implode(', ', $tags);
    return str_replace($searchTerm, "<span class='bg-yellow-200'>{$searchTerm}</span>", $tagsStr);
}

//Solution 1:
function calculateAverageSalary($jobListings, $formatSalary)
{
    $totalSalary = 0;
    $count = count($jobListings);

    foreach ($jobListings as $job) {
        $totalSalary += $job['salary'];
    }
    $averageSalary = ($count > 0) ? $totalSalary / $count : 0;
    return $formatSalary($averageSalary); // average salary: $65,000.00
}

// Solution 2:
function calculateAverageSalary2($jobListings, $formatSalary)
{
    $salaries = array_column($jobListings, 'salary'); // we are creating a new array called salary
    //var_dump($salaries); //Average Salary: array(5) { [0]=> int(80000) [1]=> int(60000) [2]=> int(75000) [3]=> int(70000) [4]=> int(40000) }

    $totalSalary = array_sum($salaries);
    $count = count($jobListings);

    $averageSalary = ($count > 0) ? $totalSalary / $count : 0;
    return $formatSalary($averageSalary);
}

function filterJobListingsByLocation($joblistings, $location)
{
    // echo $location;// chicago
    return array_filter($joblistings,  function ($job) use ($location) {
        return strcasecmp($job['location'], $location) === 0;
    }); // returns the ones's array with Chicago location
}

//check if location query params is there:
if (isset($_GET['location'])) {
    $location = $_GET['location'];

    $filteredJobListings = filterJobListingsByLocation($jobListings, $location);
} else {
    $filteredJobListings = $jobListings;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Job Listings</title>
</head>

<body class="bg-gray-100">

    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">Job Listings</h1>
        </div>
    </header>

    <div class="container mx-auto p-4 mt-4">
        <div class="bg-green-100 rounded-lg shadow-md p-6 my-6">
            <h2 class="text-xl font-semibold mb-4">Average Salary: <?= calculateAverageSalary($jobListings, $formatSalary) ?><br><?= calculateAverageSalary2($jobListings, $formatSalary) ?></h2>
        </div>

        <!-- OUTPUT: -->
        <!-- added to the url:http://localhost:8000/?location=Chicago -->
        <?php
        foreach ($filteredJobListings as $index => $job): ?> <!-- chicago -->
            <div class="my-4">
                <div class="rounded-lg shadow-md 
                                    <?= $index % 2 === 0 ? 'bg-blue-100' :  'bg-white'
                                    ?>
                                ">
                    <div class="p-4">

                        <h2 class="text-xl font-semibold">
                            <?= $job['title'] ?>
                        </h2>

                        <p class="text-gray-700 text-lg mt-2">
                            <?= $job['description'] ?>
                        </p>

                        <ul class="mt-4">
                            <li class="mb-2">
                                <strong>Salary:</strong>
                                <?= $formatSalary($job['salary']) ?>
                            </li>

                            <li class="mb-2">
                                <strong>Location:</strong><?= $job['location'] ?>
                                <?= $job['location'] === 'New York' ? '<span class="text-xs text-white bg-blue-500 rounded-full px-2 py-1 ml-2">Local</span>' : '<span class="text-xs text-white bg-green-500 rounded-full px-2 py-1 ml-2">Remote</span>' ?>
                            </li>

                            <!-- if a label is empty as in tags dont show label -->
                            <?= (!empty($job['tags'])) ? '<li class="mb-2">
                                    <strong>Tags:</strong>' . highlightTags($job['tags'], 'SEO') . '</li>' : '' ?>
                        </ul>

                    </div>
                </div>
            </div>
        <?php endforeach;
        ?>

    </div>

</body>

</html>