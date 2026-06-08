<?php
/*
Challenge 1
Create a class called Article that has the following properties:
    title
    content
    published

The published property should be private and have a default value of false.

Create a constructor that takes in the title and content as arguments and sets the values of the properties.
Create a method called publish that changes the value of the published property to true.
Create a method called isPublished that returns the value of the published property. Remember, it is private, so we cannot access it directly outside of the class.
Create two new instances of the Article class and call the publish method on one of them, which should set the published property to true. Then call the isPublished method on both of the articles to see if they are published.

When you echo out the result of the isPublished method, you can wrap it in a var_dump or var_export function to see the actual true or false value instead of just 1 or 0.
*/

class Article
{
    public $title;
    public $content;
    private $published = false;

    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    public function publish()
    {
        $this->published = true;
    }

    public function isPublished()
    {
        return $this->published;
    }
}

$article1 = new Article('today', 'weather');
$article2 = new Article('yesterday', 'holiday');

$article1->publish();

var_dump($article1); // object(Article)#1 (3) { ["title"]=> string(5) "today" ["content"]=> string(7) "weather" ["published":"Article":private]=> bool(true) }


/*
Challenge 2
Create a class called StringUtility that has the following static methods:

shout($string) - Takes in a string and returns it in all uppercase letters with an exclamation mark added to the end.
whisper($string) - Takes in a string and returns it in all lowercase letters with a period added to the end.
repeat($string, $times) - Takes in a string and a number and returns the string repeated the specified number of times. Use a default value of 2 for the $times parameter.

Create a new instance of the StringUtility class and call each of the methods on it.

Hints
You can use the strtoupper and strtolower functions to convert a string to uppercase or lowercase.
You can use the str_repeat function to repeat a string a certain number of times.
*/

class StringUtility
{
    public static function shout($string)
    {
        return strtoupper($string) . '!' . '<br>';
    }

    public static function wisper($string)
    {
        return strtolower($string) . '.' . '<br>';
    }

    public static function repeat($string, $times = 2)
    {
        return str_repeat($string . ' ', $times) . '<br>';
    }
}

echo StringUtility::shout('hello morning'); // HELLO MORNING!
echo StringUtility::wisper('HI LOVE'); // hi love.
echo StringUtility::repeat('hello morning', 5); // hello morning hello morning...
