Udemy
**PHP from scratch course - Brad Traversy**

---

Run the terminal: php -S localhost:8000
then save and refresh the browser

---

## to write in php: <?php         ?> (Execute in the server and sent to the browser what interprets)

**shortcuts to create html:**

h2.text-xl.font-semibold then press enter and it will format itself

<!-- input:submit (press enter) --> <input type="submit" value="">

// .grid-item (press TAB) --> will complete as a CSS class => <div class="grid-item"></div>
// span.text-xs.text-white.bg-blue-500.rounded-full.px-2.py-1.ml-2 (press TAB) --><span class="text-xs text-white bg-blue-500 rounded-full px-2 py-1 ml-2"></span> (Settings --> settings --> Emmet include languages -php-html)
echo is used as print <?php   echo 'hello'; ?> the ; marks the end of the instruction ==> shortcut <?= '   '?> means ==> php echo >

---

echo '<pre>'; --> will format the output nice and neat
inside a function needs to be closed afterwrads and before the end of the function
echo '</pre>'

---

## die(); will kill anyhting that comes afterwards. It will finish here

PHP documentation: (https://www.php.net/manual/en/ref. .php)

---

**Permissions when creating a file through the code:**
0755 is a set of Linux/Unix file permissions
mkdir($uploadDir, 0755, true);
--> the 0755 tells the operating system who can read, write, and execute the directory.
Owner Group Others
7 5 5

Each number is a combination of:
4 = Read (r)
2 = Write (w)
1 = Execute (x)

So:
7 = 4 + 2 + 1 = rwx
5 = 4 + 0 + 1 = r-x
5 = 4 + 0 + 1 = r-x

Which means:
Owner = rwx (read, write, execute)
Group = r-x (read, execute)
Others = r-x (read, execute)

In directory form:
drwxr-xr-x
Why use 0755?

For an uploads folder:
uploads/
Your application can create files there.
Other users/processes can read the directory.
Nobody except the owner can modify it.
Common permissions
0755 -> drwxr-xr-x (most common for directories)
0644 -> -rw-r--r-- (most common for files)
0777 -> drwxrwxrwx (everyone can do everything - usually bad)
0700 -> drwx------ (only owner has access)

mkdir($uploadDir, 0755, true);
means:
"Create the directory with normal, reasonably secure permissions."

---

# PHP From Scratch - Brad Traversy (UDEMY)

My personal notes, concepts, and quick-reference guide.

---

# Development Environment

## Start PHP Local Server

Run from the project folder:

```bash
php -S localhost:8000
```

After making changes:

1. Save the file.
2. Refresh the browser.

---

# PHP Basics

## PHP Tags

PHP code is executed on the server and the result is sent to the browser.

```php
<?php

?>
```

### Echo Output

```php
echo 'Hello World';
```

Shortcut:

```php
<?= 'Hello World' ?>
```

Equivalent to:

```php
<?php echo 'Hello World'; ?>
```

Purpose:

- Display content in the browser.
- Commonly used inside HTML.

---

## Statement Terminator

```php
echo 'Hello';
```

The semicolon (`;`) marks the end of a PHP statement.

---

## die()

```php
die();
```

Purpose:

- Stops script execution immediately.
- Nothing after it will run.
  Useful for debugging.

---

# Debugging

## Format Output

```php
echo '<pre>';
var_dump($variable);
echo '</pre>';
```

Purpose:

- Makes arrays and objects easier to read.
- Commonly used when debugging.

Example:

```php
echo '<pre>';
var_dump($_POST);
echo '</pre>';
```

---

# Forms

## GET Requests

Data appears in the URL.
Example:

```text
http://localhost:8000/?location=Chicago
```

Access with:

```php
$_GET['location']
```

Purpose:

- Filters
- Search terms
- Pagination
- URL parameters

---

## POST Requests

Data is sent in the request body.
Example:

```html
<form method="post"></form>
```

Access with:

```php
$_POST['title']
```

Purpose:

- Forms
- Logins
- Registrations
- Contact forms

---

## Check Request Method

```php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle form
}
```

Purpose:

- Detect when a form has been submitted.

---

## Sanitize User Input

```php
$title = htmlspecialchars($_POST['title'] ?? '');
```

Purpose:

- Prevent malicious HTML or JavaScript from being rendered.
- Helps protect against XSS attacks.

---

# File Uploads

## File Input

```html
<input type="file" name="logo" />
```

Files are accessed through:

```php
$_FILES['logo']
```

Purpose:

- Image uploads
- PDFs
- Documents
- User files

---

# Useful PHP Superglobals

## $\_GET

Data from URL parameters.

```php
$_GET['location']
```

---

## $\_POST

Data submitted from forms.

```php
$_POST['title']
```

---

## $\_FILES

Uploaded files.

```php
$_FILES['logo']
```

---

## $\_SERVER

Information about the current request.

```php
$_SERVER['REQUEST_METHOD']
```

---

## $\_REQUEST

Combination of:

```php
$_GET
$_POST
$_COOKIE
```

Usually prefer using `$_GET` or `$_POST` directly.

---

# Emmet Shortcuts (VS Code)

## Create Elements Quickly

Type:

```text
h2.text-xl.font-semibold
```

Press:

```text
TAB
```

Result:

```html
<h2 class="text-xl font-semibold"></h2>
```

---

Type:

```text
.grid-item
```

Press:

```text
TAB
```

Result:

```html
<div class="grid-item"></div>
```

---

Type:

```text
span.text-xs.text-white.bg-blue-500.rounded-full.px-2.py-1.ml-2
```

Press:

```text
TAB
```

Result:

```html
<span class="text-xs text-white bg-blue-500 rounded-full px-2 py-1 ml-2"></span>
```

---

## Enable Emmet in PHP Files

VS Code:
Settings → Emmet Include Languages
Add:

```json
{
  "php": "html"
}
```

Purpose:

- Allows HTML Emmet shortcuts inside PHP files.

---

# Linux File Permissions

## Creating Directories

```php
mkdir($uploadDir, 0755, true);
```

Purpose:

- Creates a directory with secure default permissions.

---

## Understanding 0755

```text
Owner  Group  Others
  7      5      5
```

Permission values:

```text
4 = Read
2 = Write
1 = Execute
```

Calculations:

```text
7 = 4 + 2 + 1 = rwx
5 = 4 + 0 + 1 = r-x
5 = 4 + 0 + 1 = r-x
```

Result:

```text
drwxr-xr-x
```

Meaning:
Owner:

- Read
- Write
- Execute

Group:

- Read
- Execute

Others:

- Read
- Execute

---

## Common Permissions

```text
0755 -> drwxr-xr-x
0644 -> -rw-r--r--
0777 -> drwxrwxrwx
0700 -> drwx------
```

### Recommended

Directories:

```text
0755
```

Files:

```text
0644
```

---

# Documentation

PHP Official Documentation:

https://www.php.net/manual/en/
