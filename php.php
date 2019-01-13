<html>
<head>
<title> DISCRIPTION </title>
<h1 style="color:Red;text-align:center;"> PHP</h1>

</head>
<body style="background-color:lightgrey;">
<center>
<img src="PHP.jpg" alt="HTML5 Icon" width="300" height="150">
</center><br><br>
<p1 style="font-family:courier;  text-align:center; font-size:100%;">
PHP is a server-side scripting language created in 1995 and designed for web development but also used as a general-purpose programming language. PHP stands for: Hypertext Preprocessor, which is a recursive backronym.

PHP code can be simply mixed with HTML code, or it can be used in combination with various templating engines and web frameworks. PHP code is usually processed by a PHP interpreter, which is usually implemented as a web server's native module or a Common Gateway Interface (CGI) executable. After the PHP code is interpreted and executed, the web server sends resulting output to its client, usually in form of a part of the generated web page; for example, PHP code can generate a web page's HTML code, an image, or some other data. PHP has also evolved to include a command-line interface (CLI) capability and can be used in standalone graphical applications.

</p1>
<br><br><p1 style="margin-left: 4em; font-family:courier; text-align:center; font-size:100%;">
In 2018, 3% of all vulnerabilities listed by the National Vulnerability Database were linked to PHP;[original research?] historically, about 30% of all vulnerabilities listed since 1996 in this database are linked to PHP. Technical security flaws of the language itself or of its core libraries are not frequent (22 in 2009, about 1% of the total although PHP applies to about 20% of programs listed).Recognizing that programmers make mistakes, some languages include taint checking to automatically detect the lack of input validation which induces many issues. Such a feature is being developed for PHP, but its inclusion into a release has been rejected several times in the past.

There are advanced protection patches such as Suhosin and Hardening-Patch, especially designed for web hosting environments.

Historically, old versions of PHP had some configuration parameters and default values for such runtime settings that made some PHP applications prone to security issues. Among these, magic_quotes_gpc and register_globals configuration directives were the best known; the latter made any URL parameters become PHP variables, opening a path for serious security vulnerabilities by allowing an attacker to set the value of any uninitialized global variable and interfere with the execution of a PHP script. Support for "magic quotes" and "register globals" settings has been deprecated as of PHP 5.3.0, and removed as of PHP 5.4.0.

Another example for the potential runtime-settings vulnerability comes from failing to disable PHP execution (for example by using the engine configuration directive) for the directory where uploaded files are stored; enabling it can result in execution of malicious code embedded within the uploaded files.The best practice is to either locate the image directory outside of the document root available to the web server and serve it via intermediary script, or disable PHP execution for the directory which stores the uploaded files.

Also, enabling the dynamic loading of PHP extensions (via enable_dl configuration directive) in a shared web hosting environment can lead to security issues.</p1>
</body>
</html>
