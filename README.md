# Unijson.php
Universal PHP script to generate JSON from any MySQL database. [unijson.php](unijson.php) is a PHP script that can convert any existing database into JSON format easily. It is well documented and customizable (See the inline comments in the code). App developers can customize the code and use it as a backend for their applications.

### How to use unijson.php
Simply copy the [unijson.php](ujson.php) to your server and edit the line below and add your MySQL database credentials:
```PHP
$db='database'; // Database Name
$table='table'; // Table Name
$host='db_host'; // Database Host
$usn='db_user'; // Database User
$pss='dc_password'; // Database Password
```

### What is unijson.php
Unijson.php will convert any existing MySQL database into JSON format. See an example below:

Using unijson.php on the datiabase below

| name | email | phno |
|--------|--------|--------|
| test | test@test.com | 123456 |
| test2 | test2@test.com | 123456 |
| test3 | test3@test.com | 123456 |

Will produce the following output:
```JSON
[{"json_uuid":0,"name":"test","email":"test@test.com","phno":"123456"},
{"json_uuid":1,"name":"test2","email":"test2@test.com","phno":"123456"},
{"json_uuid":2,"name":"test3","email":"test3@test.com","phno":"123456"}]

```

### License
MIT License
