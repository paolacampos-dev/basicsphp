<!-- 
Average Salary Challenge

Create a function that will calculate the average salary
of all the salaries in the job listings array.

Function Signature:

function calculateAverageSalary($jobListings) {
// Your code here
}

The function should:

1. Take the entire $jobListings array.
2. Loop through the array.
3. Add up all of the salaries.
4. Calculate the average salary.
5. Return the average salary.

Hints
-   You can use the count() function to get the number of items in an array.
-   You can either use the array_sum() function in combination with
    array_column() to add up the salaries or loop over the
    $jobListings array using a foreach loop and add up the salaries
    using the += operator.
-   Use the formatSalary function that we created to format the average.
-->

<?php

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

function formatSalary($salary)
{
    return '$' . number_format($salary, 2); // 2 is for the number of decimals we want if we want any if not not need to write the parameter
}


function highlightTags($tags, $searchTerm)
{
    $tagsStr = implode(', ', $tags);
    return str_replace($searchTerm, "<span class='bg-yellow-200'>{$searchTerm}</span>", $tagsStr);
}

//Solution 1:
function calculateAverageSalary($jobListings)
{
    $totalSalary = 0;
    $count = count($jobListings);

    foreach ($jobListings as $job) {
        $totalSalary += $job['salary'];
    }
    $averageSalary = ($count > 0) ? $totalSalary / $count : 0;
    return formatSalary($averageSalary); // average salary: $65,000.00
}

// Solution 2:
function calculateAverageSalary2($jobListings)
{
    $salaries = array_column($jobListings, 'salary'); // we are creating a new array called salary
    //var_dump($salaries); //Average Salary: array(5) { [0]=> int(80000) [1]=> int(60000) [2]=> int(75000) [3]=> int(70000) [4]=> int(40000) }

    $totalSalary = array_sum($salaries);
    $count = count($jobListings);

    $averageSalary = ($count > 0) ? $totalSalary / $count : 0;
    return formatSalary($averageSalary);
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
            <h2 class="text-xl font-semibold mb-4">Average Salary: <?= calculateAverageSalary($jobListings) ?><br><?= calculateAverageSalary2($jobListings) ?></h2>
        </div>

        <!-- OUTPUT: -->
        <?php
        foreach ($jobListings as $index => $job): ?>
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
                                <?= formatSalary($job['salary']) ?>
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