<html>
<head>
<title> DISCRIPTION </title>
<h1 style="color:Red;text-align:center;"> APACHE SERVER</h1>

</head>
<body style="background-color:lightgrey;">
<center>
<img src="apache.jpg" alt="HTML5 Icon" width="150" height="150">
</center><br><br>
<p1 style="font-family:courier; text-align:center; font-size:100%;">
The Apache HTTP Server is the world's most widely used web server software.

Originally based on the NCSA HTTP server, development of Apache began in early 1995 after work on the NCSA code stalled. Apache played a key role in the initial growth of the World Wide Web, quickly overtaking NCSA HTTPd as the dominant HTTP server, and has remained the most popular HTTP server since April 1996. In 2009, it became the first web server software to serve more than 100 million websites.


Apache is developed and maintained by an open community of developers under the auspices of the Apache

Apache supports a variety of features, many implemented as compiled modules which extend the core functionality. These can range from server-side programming language support to authentication schemes. Some common language interfaces support Perl, PHP, Python, TCP and PHP. Popular authentication modules include mod_access, mod_auth.

A sample of other features include Secure Sockets Layer and Transport Layer Security support (mod_ssl), a URL rewriter (mod_rewrite), custom log files (mod_log_config), and filtering support (mod_include and mod_ext_filter).

Virtual hosting allows one Apache installation to serve many different Web sites. For example, one machine with one Apache installation could simultaneously serve
www.example.com, www.example.org, test47.test-server.example.edu, etc.

Apache features configurable error messages, DBMS-based authentication databases, and content negotiation. It is also supported by several graphical user interfaces (GUIs).

Instead of implementing a single architecture, Apache provides a variety of MultiProcessing Modules (MPMs), which allow Apache to run in a process-based, hybrid (process and thread) or event-hybrid mode, to better match the demands of each particular infrastructure.

</p1>
<br><br><p1 style="margin-left: 4em; font-family:courier; text-align:center; font-size:100%;">
Instead of implementing a single architecture, Apache provides a variety of MultiProcessing Modules (MPMs), which allow it to run in either a process-based mode, a hybrid (process and thread) mode, or an event-hybrid mode, in order to better match the demands of each particular infrastructure. Choice of MPM and configuration is therefore important. Where compromises in performance must be made, Apache is designed to reduce latency and increase throughput relative to simply handling more requests, thus ensuring consistent and reliable processing of requests within reasonable time-frames.[clarification needed]

For delivering static pages, Apache 2.2 series was considered significantly slower than nginx and varnish.To address this issue, the Apache developers created the Event MPM, which mixes the use of several processes and several threads per process in an asynchronous event-based loop[clarification needed] This architecture as implemented in the Apache 2.4 series performs at least as well as event-based web servers, according to Jim Jagielski and other independent sources.However, some independent but significantly outdated benchmarks show that it is still half as fast as nginx, e.g.</p1>
</body>
</html>
