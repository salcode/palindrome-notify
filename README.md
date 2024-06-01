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

<img width="535" alt="image" src="https://github.com/salcode/palindrome-notify/assets/5194588/1389045c-cadf-4c8c-a7a9-e2a122534c2c">

Remember to comment out this line when you are done running the tests.

### 2. Run Unit Tests from the Command Line

From the root directory of the plugin, run the following command from the command line to run generic PHP code that has been added to this plugin.

```bash
php tests/cli-test-is-palindrome.php
```

<img width="795" alt="image" src="https://github.com/salcode/palindrome-notify/assets/5194588/739e0d4d-ceec-49ab-9da0-425fff367f40">

### 3. Run Unit Tests from the Command Line with the PHPUnit Framework

[PHPUnit](https://phpunit.de/) is a testing framework for PHP. To run these tests you need to first

#### Setup

While PHPUnit can be installed directly on your machine, in my experience it is preferable to install it as part of your project as a DEV dependency using [Composer](https://getcomposer.org/) because over time it is likely you'll have different projects using different versions of PHPUnit.

If you're new to Composer, you'll want to check out the Composer documentation on [Getting Started](https://getcomposer.org/doc/00-intro.md).

Because PHPUnit has been defined as a dev dependency in `composer.json`, you'll install PHPUnit by running the following from the command line from the root directory of the plugin.

```
composer install
```

#### Run the PHPUnit Tests

We'll run the version of PHPUnit installed by Composer with the following from the command line

```
./vendor/bin/phpunit
```

PHPUnit knows where to look for the relevant code based on the `phpunit.xml.dist` file we've added to the root directory of the plugin.

![PHPUnit unit tests run successfully](https://github.com/salcode/palindrome-notify/assets/5194588/ac8929c5-4f8d-4da7-92a5-52683f50704c)
