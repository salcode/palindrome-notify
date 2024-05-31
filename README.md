# Palindrome Notify

WordPress plugin to display an alert on the page when the title is a palindrome.

This plugin was originally created as part of Sal Ferrarello's WordCamp Montclair 2024 talk [Introduction to Unit Tests](https://montclair.wordcamp.org/2024/session/introduction-to-unit-tests/).

![image](https://github.com/salcode/palindrome-notify/assets/5194588/b5753b3a-38fb-4fa2-83dd-e72a9a2db2ad)

## How to Run the Unit Tests for this Plugin

This plugin includes multiple ways to run unit tests. In an actual project you would only choose one of these methods. All were added for instructional purposes.

In increasing order of complexity:

### 1. Override the Content of Posts on Webpages

In the root file `palindrome-notify.php` uncomment the line

```php
// include __DIR__ . '/tests/webpage-test-is-palindrome.php';
```

Now when you visit any blog post on your site, the content will be replaced with the results of the unit tests.

<img width="412" alt="image" src="https://github.com/salcode/palindrome-notify/assets/5194588/4a285326-5a7b-489e-9ea7-da819326c1b5">

Remember to comment out this line when you are done running the tests.
