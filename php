Questions : 1  What is Full form of PHP ? Who is the father or inventor of PHP ?
Answers : 1	Rasmus Lerdorf is known as the father of PHP that started development of PHP in 1994
for their own Personal Home Page (PHP) and they released PHP/FI (Forms Interpreter) version 1.0 publicly on 8 June 1995 But in 1997 two Israeli developers named Zeev Suraski and Andi Gutmans rewrote the parser that formed the base of PHP 3 and then changed the language's name to the PHP: Hypertext Preprocessor.
 	 
Questions : 2	What are the differences between PHP3 and PHP4 and PHP5 ? what is the current stable version of PHP ? what advance thing in php6 
Answers : 2	 The current stable version of PHP is PHP 5.4.11 on 2013-01-17 as still waiting for PHP6 with unicode handlig thing 
There are lot of difference among PHP3 and PHP4 and PHP5 version of php so Difference mean oldest version have less functionality as compare to new one like
View Answers
 	 
Questions : 3	Is variable name casesensitive ? could we start a variale with number like $4name ? What is the difference between $name and $$name?
Answer : 3	 Yes variable name casesensitive and we can not start a variable with number like $4name as A valid variable name starts with a letter or underscore, followed by any number of letters, numbers, or underscores.
where as $$ is variable of variable $name is variable where as $$name is variable of variable
like $name=sonia and $$name=singh so $sonia value is singh.	
 	 
Questions : 4	  What is use of header() function in php ? What the Limitation of HEADER()?
Answers : 4	 In PHP Important to notice the Limitation of HEADER() function is that header() must be called before any actual output is send. Means must use header function before HTML or any echo stateament 
There are Number of Use of HEADER() function in php like below
1> The header() function use to sends a raw HTTP header to a client.
2> We can use herder() function for redirection of pages. 
3> Use for refresh the page on given time interval automatically.
4> To send email header content like cc, bcc , reply to etc data and lot more .
View Answers
 	 
Questions : 5	How can we extract string "pcds.co.in" from a string "http://info@pcds.co.in" using regular expression of PHP? More on Reg can you explain
Answers : 5	 We can extract string "pcds.co.in" using this 
preg_match("/^http:\/\/.+@(.+)$/","http://info@pcds.co.in",$matches);
echo $matches[1];
More On regular expression interview question with very nice examples in 
View Answer in Details
 	 
Questions : 6	How do you connet mysql database with PHP ?
Answer : 6	 We can connect Mysql Database with PHP using both Procedural and Object oriented style like below
$link = mysqli_connect("localhost", "username", "password", "dbofpcds");

$mysqli = new mysqli("localhost", "username", "password", "dbname");
and in old type of connectivity were 
$link = mysql_connect("localhost", "username", "password");
mysql_select_db("database",$link);
Answer in Details
 	 
Questions : 7	In how many ways we can retrieve the data in the result set of
MySQL using PHP? What is the difference between mysql_fetch_object and mysql_fetch_array ?
Answers : 7	 we can retrieve the data in the result set of MySQL using PHP in 4 Ways
1. mysqli_fetch_row >> Get a result row as an enumerated array 
2. mysqli_fetch_array >> Fetch a result row as associative and numeric array 
3.mysqli_fetch_object >> Returns the current row of a result set as an object 
4. mysqli_fetch_assoc >> Fetch a result row as an associative array
mysqli_fetch_object() is similar to mysqli_fetch_array(), with one difference -
an object is returned, instead of an array. Indirectly, that means that
we can only access the data by the field names, and not by their
offsets (numbers are illegal property names).
Answer in Details
 	 
Questions : 8	How can we create a database using PHP and MySQL?
Answers : 8	We can create MySQL database with the use of
mysql_create_db("Database Name")
 	 
Questions : 9	What are the differences between require and include?
Answers : 9	 Both include and require used to include a file but when included file not found 
Include send Warning where as Require send Fatal Error .
 	 
Questions : 10	  Can we use include ("xyz.PHP") two times in a PHP page "index.PHP"?
Answers : 10	  Yes we can use include("xyz.php") more than one time in any page. but it create a prob when xyz.php file contain some funtions declaration then error will come for already declared function in this file else not a prob like if you want to show same content two time in page then must incude it two time not a prob
 	 
Questions : 11	  What are the different tables(Engine) present in MySQL, which one is default?
Answers : 11	  Following tables (Storage Engine) we can create
1. MyISAM(The default storage engine IN MYSQL Each MyISAM table is stored on disk in three files. The files have names that begin with the table name and have an extension to indicate the file type. An .frm file stores the table format. The data file has an .MYD (MYData) extension. The index file has an .MYI (MYIndex) extension. )
2. InnoDB(InnoDB is a transaction-safe (ACID compliant) storage engine for MySQL that has commit, rollback, and crash-recovery capabilities to protect user data.)
3. Merge
4. Heap (MEMORY)(The MEMORY storage engine creates tables with contents that are stored in memory. Formerly, these were known as HEAP tables. MEMORY is the preferred term, although HEAP remains supported for backward compatibility. )
5. BDB (BerkeleyDB)(Sleepycat Software has provided MySQL with the Berkeley DB transactional storage engine. This storage engine typically is called BDB for short. BDB tables may have a greater chance of surviving crashes and are also capable of COMMIT and ROLLBACK operations on transactions) 
6. EXAMPLE 
7. FEDERATED (It is a storage engine that accesses data in tables of remote databases rather than in local tables. )
8. ARCHIVE (The ARCHIVE storage engine is used for storing large amounts of data without indexes in a very small footprint. )
9. CSV (The CSV storage engine stores data in text files using comma-separated values format.)
10. BLACKHOLE (The BLACKHOLE storage engine acts as a "black hole" that accepts data but throws it away and does not store it. Retrievals always return an empty result)
 	 
Questions : 12	What are the differences between Get and post methods.
Answers : 12	
There are some defference between GET and POST method 
1. GET Method have some limit like only 2Kb data able to send for request 
But in POST method unlimited data can we send 
2. when we use GET method requested data show in url but 
Not in POST method so POST method is good for send sensetive request
 	 
Questions : 13	How can I execute a PHP script using command line?
Answers : 13	 Just run the PHP CLI (Command Line Interface) program and
provide the PHP script file name as the command line argument.
 	 
Questions : 14	Suppose your Zend engine supports the mode <? ?> Then how can u
configure your PHP Zend engine to support <?PHP ?> mode ?
Answers : 14	In php.ini file:
set
short_open_tag=on
to make PHP support
 	 
Questions : 15	Shopping cart online validation i.e. how can we configure Paypal,
etc.?
Answers : 15	Nothing more we have to do only redirect to the payPal url after
submit all information needed by paypal like amount,adresss etc.
 	 
Questions : 16	What is meant by nl2br()?
Answers : 16	Inserts HTML line breaks (<BR />) before all newlines in a string.
 	 
Questions : 17	What is htaccess? Why do we use this and Where?
Answers : 17	.htaccess files are configuration files of Apache Server which provide
a way to make configuration changes on a per-directory basis. A file, 
containing one or more configuration directives, is placed in a particular
document directory, and the directives apply to that directory, and all 
subdirectories thereof.
 	 
Questions : 18	How we get IP address of client, previous reference page etc ?
Answers : 18	By using $_SERVER['REMOTE_ADDR'],$_SERVER['HTTP_REFERER'] etc.
 	 
Questions : 19	What are the reasons for selecting lamp (Linux, apache, MySQL,
PHP) instead of combination of other software programs, servers and
operating systems?
Answers : 19	All of those are open source resource. Security of Linux is very
very more than windows. Apache is a better server that IIS both in
functionality and security. MySQL is world most popular open source
database. PHP is more faster that asp or any other scripting language.
 	 
Questions : 20	How can we encrypt and decrypt a data present in a MySQL table
using MySQL?
Answers : 20	AES_ENCRYPT () and AES_DECRYPT ()
 	 
Questions : 21	How can we encrypt the username and password using PHP?
Answers : 21	The functions in this section perform encryption and decryption, and
compression and uncompression:
encryption	decryption
AES_ENCRYT()	AES_DECRYPT()
ENCODE()	DECODE()
DES_ENCRYPT()	DES_DECRYPT()
ENCRYPT()	Not available
MD5()	Not available
OLD_PASSWORD()	Not available
PASSWORD()	Not available
SHA() or SHA1()	Not available
Not available	UNCOMPRESSED_LENGTH()
 	 
Questions : 22	What are the features and advantages of object-oriented
programming?
Answers : 22	One of the main advantages of OO programming is its ease of
modification; objects can easily be modified and added to a system there
by reducing maintenance costs. OO programming is also considered to be
better at modeling the real world than is procedural programming. It
allows for more complicated and flexible interactions. OO systems are
also easier for non-technical personnel to understand and easier for
them to participate in the maintenance and enhancement of a system
because it appeals to natural human cognition patterns.
For some systems, an OO approach can speed development time since many
objects are standard across systems and can be reused. Components that
manage dates, shipping, shopping carts, etc. can be purchased and easily
modified for a specific system
 	 
Questions : 23	What are the differences between procedure-oriented languages and
object-oriented languages?
Answers : 23	 There are lot of difference between procedure language and object oriented like below
1>Procedure language easy for new developer but complex to understand whole software as compare to object oriented model
2>In Procedure language it is difficult to use design pattern mvc , Singleton pattern etc but in OOP you we able to develop design pattern
3>IN OOP language we able to ree use code like Inheritance ,polymorphism etc but this type of thing not available in procedure language on that our Fonda use COPY and PASTE .
 	 
Questions : 24	What is the use of friend function?
Answers : 24	Sometimes a function is best shared among a number of different
classes. Such functions can be declared either as member functions of
one class or as global functions. In either case they can be set to be
friends of other classes, by using a friend specifier in the class that
is admitting them. Such functions can use all attributes of the class
which names them as a friend, as if they were themselves members of that
class.
A friend declaration is essentially a prototype for a member function,
but instead of requiring an implementation with the name of that class
attached by the double colon syntax, a global function or member
function of another class provides the match.
 	 
Questions : 25	What are the differences between public, private, protected,
static, transient, final and volatile?
Answer : 25	Public: Public declared items can be accessed everywhere.
Protected: Protected limits access to inherited and parent
classes (and to the class that defines the item).
Private: Private limits visibility only to the class that defines
the item.
Static: A static variable exists only in a local function scope,
but it does not lose its value when program execution leaves this scope.
Final: Final keyword prevents child classes from overriding a
method by prefixing the definition with final. If the class itself is
being defined final then it cannot be extended.
transient: A transient variable is a variable that may not
be serialized. 
volatile: a variable that might be concurrently modified by multiple
threads should be declared volatile. Variables declared to be volatile
will not be optimized by the compiler because their value can change at
any time.
 	 
Questions : 26	What are the different types of errors in PHP?
Answer : 26	Three are three types of errors:1. Notices: These are trivial,
non-critical errors that PHP encounters while executing a script â€“ for
example, accessing a variable that has not yet been defined. By default,
such errors are not displayed to the user at all â€“ although, as you will
see, you can change this default behavior.2. Warnings: These are more serious errors â€“ for example, attempting
to include() a file which does not exist. By default, these errors are
displayed to the user, but they do not result in script termination.3. Fatal errors: These are critical errors â€“ for example,
instantiating an object of a non-existent class, or calling a
non-existent function. These errors cause the immediate termination of
the script, and PHP's default behavior is to display them to the user
when they take place.
 	 
Questions : 27	What is the functionality of the function strstr and stristr?
Answers : 27	strstr Returns part of string from the first occurrence of needle(sub string that we finding out ) to the end of string. 
$email= 'sonialouder@gmail.com';
$domain = strstr($email, '@');
echo $domain; // prints @gmail.com
here @ is the needle 
stristr is case-insensitive means able not able to diffrenciate between a and A
 	 
Questions : 28	How can we submit a form without a submit button?
Answer : 28	 Java script submit() function is used for submit form without submit button
on click call document.formname.submit()
 	 
Questions : 29	How can we convert asp pages to PHP pages?
Answer : 29	there are lots of tools available for asp to PHP conversion. you can
search Google for that. the best one is available athttp://asp2php.naken.cc./
 	 
Questions : 30	What is the functionality of the function htmlentities?
Answer : 30	Convert all applicable characters to HTML entities
This function is identical to htmlspecialchars() in all ways, except
with htmlentities(), all characters which have HTML character entity
equivalents are translated into these entities.
 	 
Questions : 31	How can we get second of the current time using date function?
Answer : 31	$second = date("s");
 	 
Questions : 32	How can we convert the time zones using PHP?
Answer : 32	 For convert the time zones using PHP we have to first set time zone 
By using PHP function date_default_timezone_set() 
If we want to set time zone of 'Europe/London' we have to call this funtion as 
date_default_timezone_set('Europe/London') 
so Now generate the timestamp for that particular timezone, on Sept 1st, 2012 at 8 am 
$pcds = mktime(8, 0, 0, 9, 1, 2012); 
Now set the other timezone like US/Eastern 
date_default_timezone_set('US/Eastern'); 
date(DATE_RFC1123, $pcds) date(DATE_RFC1123, $pcds) 
Output the date in a standard format (RFC1123)
 	 
Questions : 33	What is meant by urlencode and urldocode?
Answer : 33	URLencode returns a string in which all non-alphanumeric characters
except -_. have been replaced with a percent (%)
sign followed by two hex digits and spaces encoded as plus (+)
signs. It is encoded the same way that the posted data from a WWW form
is encoded, that is the same way as in 
application/x-www-form-urlencoded media type.
urldecode decodes any %##
encoding in the given string.
 	 
Questions : 34	What is the difference between the functions unlink and unset?
Answer : 34	unlink() deletes the given file from the file system.
unset() makes a variable undefined.
 	 
Questions : 35	How can we register the variables into a session?
Answer : 35	$_SESSION['name'] = "sonia";
 	 
Questions : 36	How can we get the properties (size, type, width, height) of an
image using PHP image functions?
Answer : 36	To know the Image type use exif_imagetype () function
To know the Image size use getimagesize () function
To know the image width use imagesx () function
To know the image height use imagesy() function t
 	 
Questions : 37	How can we get the browser properties using PHP?
Answer : 37	By using 
$_SERVER['HTTP_USER_AGENT']
variable. 
 	 
Questions : 38	What is the maximum size of a file that can be uploaded using PHP
and how can we change this?
Answer : 38	By default the maximum size is 2MB. and we can change the following
setup at php.iniupload_max_filesize = 2M
 	 
Questions : 39	How can we increase the execution time of a PHP script?
Answer : 39	by changing the following setup at php.inimax_execution_time = 30
; Maximum execution time of each script, in seconds
 	 
Questions : 40	How can we take a backup of a MySQL table and how can we restore
it. ?
Answer : 40	To backup: BACKUP TABLE tbl_name[,tbl_nameâ€¦] TO
'/path/to/backup/directory'
RESTORE TABLE tbl_name[,tbl_nameâ€¦] FROM '/path/to/backup/directory'mysqldump: Dumping Table Structure and DataUtility to dump a database or a collection of database for backup or
for transferring the data to another SQL server (not necessarily a MySQL
server). The dump will contain SQL statements to create the table and/or
populate the table.
-t, â€“no-create-info
Don't write table creation information (the CREATE TABLE statement).
-d, â€“no-data
Don't write any row information for the table. This is very useful if
you just want to get a dump of the structure for a table!
 	 
Questions : 41	How can we optimize or increase the speed of a MySQL select
query?
Answer : 41	
first of all instead of using select * from table1, use select
column1, column2, column3.. from table1
Look for the opportunity to introduce index in the table you are
querying.
use limit keyword if you are looking for any specific number of
rows from the result set.
 	 
Questions : 42	How many ways can we get the value of current session id?
Answer : 42	session_id() returns the session id for the current session.
 	 
Questions : 43	How can we destroy the session, how can we unset the variable of
a session?
Answer : 43	session_unregister â€” Unregister a global variable from the current
session
session_unset â€” Free all session variables
 	 
Questions : 44	How can we set and destroy the cookie n php?
Answer : 44	 By using setcookie(name, value, expire, path, domain); function we can set the cookie in php ;
Set the cookies in past for destroy. like 
setcookie("user", "sonia", time()+3600); for set the cookie 
setcookie("user", "", time()-3600); for destroy or delete the cookies;
 	 
Questions : 45	How many ways we can pass the variable through the navigation
between the pages?
Answer : 45	
GET/QueryString
POST
 	 
Questions : 46	What is the difference between ereg_replace() and eregi_replace()?
Answer : 46	eregi_replace() function is identical to ereg_replace() except that
this ignores case distinction when matching alphabetic
characters.eregi_replace() function is identical to ereg_replace()
except that this ignores case distinction when matching alphabetic
characters.
 	 
Questions : 47	What are the different functions in sorting an array?
Answer : 47	Sort(), arsort(),
asort(), ksort(),
natsort(), natcasesort(),
rsort(), usort(),
array_multisort(), and
uksort().
 	 
Questions : 48	How can we know the count/number of elements of an array?
Answer : 48	2 ways
a) sizeof($urarray) This function is an alias of count()
b) count($urarray)
 	 
Questions : 49	what is session_set_save_handler in PHP?
Answer : 49	session_set_save_handler() sets the user-level session storage functions which are used for storing and retrieving data associated with a session. This is most useful when a storage method other than those supplied by PHP sessions is preferred. i.e. Storing the session data in a local database.
 	 
Questions : 50	How can I know that a variable is a number or not using a
JavaScript?
Answer : 50	bool is_numeric ( mixed var)
Returns TRUE if var is a number or a numeric string, FALSE otherwise.or use isNaN(mixed var)The isNaN() function is used to check if a value is not a number.
 	 
Questions : 51	List out some tools through which we can draw E-R diagrams for
mysql.
Answer : 51	Case Studio
Smart Draw
 	 
Questions : 52	How can I retrieve values from one database server and store them
in other database server using PHP?
Answer : 52	we can always fetch from one database and rewrite to another. here
is a nice solution of it.$db1 = mysql_connect("host","user","pwd")
mysql_select_db("db1", $db1);
$res1 = mysql_query("query",$db1);$db2 = mysql_connect("host","user","pwd")
mysql_select_db("db2", $db2);
$res2 = mysql_query("query",$db2);At this point you can only fetch records from you previous ResultSet,
i.e $res1 â€“ But you cannot execute new query in $db1, even if you
supply the link as because the link was overwritten by the new db.so at this point the following script will fail
$res3 = mysql_query("query",$db1); //this will failSo how to solve that?
take a look below.
$db1 = mysql_connect("host","user","pwd")
mysql_select_db("db1", $db1);
$res1 = mysql_query("query",$db1);
$db2 = mysql_connect("host","user","pwd", true)
mysql_select_db("db2", $db2);
$res2 = mysql_query("query",$db2);
So mysql_connect has another optional boolean parameter which
indicates whether a link will be created or not. as we connect to the
$db2 with this optional parameter set to 'true', so both link will
remain live.
now the following query will execute successfully.
$res3 = mysql_query("query",$db1);
 	 
Questions : 53	List out the predefined classes in PHP?
Answer : 53	Directory
stdClass
__PHP_Incomplete_Class
exception
php_user_filter
 	 
Questions : 54	How can I make a script that can be bi-language (supports
English, German)?
Answer : 54	You can maintain two separate language file for each of the
language. all the labels are putted in both language files as variables
and assign those variables in the PHP source. on runtime choose the
required language option.
 	 
Questions : 55	What are the difference between abstract class and interface?
Answer : 55	Abstract class: abstract classes are the class where one or more
methods are abstract but not necessarily all method has to be abstract.
Abstract methods are the methods, which are declare in its class but not
define. The definition of those methods must be in its extending class.Interface: Interfaces are one type of class where all the methods are
abstract. That means all the methods only declared but not defined. All
the methods must be define by its implemented class.
 	 
Questions : 56	How can we send mail using JavaScript?
Answer : 56	JavaScript does not have any networking capabilities as it is
designed to work on client site. As a result we can not send mails using
JavaScript. But we can call the client side mail protocol mailto
via JavaScript to prompt for an email to send. this requires the client
to approve it.
 	 
Questions : 57	How can we repair a MySQL table?
Answer : 57	The syntex for repairing a MySQL table is
REPAIR TABLENAME, [TABLENAME, ], [Quick],[Extended]
This command will repair the table specified if the quick is given the
MySQL will do a repair of only the index tree if the extended is given
it will create index row by row
 	 
Questions : 58	What are the advantages of stored procedures, triggers, indexes?
Answer : 58	A stored procedure is a set of SQL commands that can be compiled and
stored in the server. Once this has been done, clients don't need to
keep re-issuing the entire query but can refer to the stored procedure.
This provides better overall performance because the query has to be
parsed only once, and less information needs to be sent between the
server and the client. You can also raise the conceptual level by having
libraries of functions in the server. However, stored procedures of
course do increase the load on the database server system, as more of
the work is done on the server side and less on the client (application)
side.Triggers will also be implemented. A trigger is effectively a type of
stored procedure, one that is invoked when a particular event occurs.
For example, you can install a stored procedure that is triggered each
time a record is deleted from a transaction table and that stored
procedure automatically deletes the corresponding customer from a
customer table when all his transactions are deleted.Indexes are used to find rows with specific column values quickly.
Without an index, MySQL must begin with the first row and then read
through the entire table to find the relevant rows. The larger the
table, the more this costs. If the table has an index for the columns in
question, MySQL can quickly determine the position to seek to in the
middle of the data file without having to look at all the data. If a
table has 1,000 rows, this is at least 100 times faster than reading
sequentially. If you need to access most of the rows, it is faster to
read sequentially, because this minimizes disk seeks.
 	 
Questions : 59	What is the maximum length of a table name, database name, and
fieldname in MySQL?
Answer : 59	The following table describes the maximum length for each type of
identifier.
Identifier	Maximum Length
(bytes)
Database	64
Table	64
Column	64
Index	64
Alias	255
There are some restrictions on the characters that may appear in
identifiers:
 	 
Questions : 60	How many values can the SET function of MySQL take?
Answer : 60	MySQL set can take zero or more values but at the maximum it can
take 64 values
 	 
Questions : 61	What are the other commands to know the structure of table using
MySQL commands except explain command?
Answer : 61	describe Table-Name;
 	 
Questions : 62	How many tables will create when we create table, what are they?
Answer : 62	The '.frm' file stores the table definition.
The data file has a '.MYD' (MYData) extension.
The index file has a '.MYI' (MYIndex) extension,
 	 
Questions : 63	What is the purpose of the following files having extensions 1) .frm
2) .myd 3) .myi? What do these files contain?
Answer : 63	In MySql, the default table type is MyISAM.
Each MyISAM table is stored on disk in three files. The files have names
that begin with the table name and have an extension to indicate the
file type.
The '.frm' file stores the table definition.
The data file has a '.MYD' (MYData) extension.
The index file has a '.MYI' (MYIndex) extension,
 	 
Questions : 64	What is maximum size of a database in MySQL?
Answer : 64	If the operating system or filesystem places a limit on the number
of files in a directory, MySQL is bound by that constraint.The efficiency of the operating system in handling large numbers of
files in a directory can place a practical limit on the number of tables
in a database. If the time required to open a file in the directory
increases significantly as the number of files increases, database
performance can be adversely affected.
The amount of available disk space limits the number of tables.
MySQL 3.22 had a 4GB (4 gigabyte) limit on table size. With the MyISAM
storage engine in MySQL 3.23, the maximum table size was increased to
65536 terabytes (2567 â€“ 1 bytes). With this larger allowed table size,
the maximum effective table size for MySQL databases is usually
determined by operating system constraints on file sizes, not by MySQL
internal limits.The InnoDB storage engine maintains InnoDB tables within a tablespace
that can be created from several files. This allows a table to exceed
the maximum individual file size. The tablespace can include raw disk
partitions, which allows extremely large tables. The maximum tablespace
size is 64TB.
The following table lists some examples of operating system file-size
limits. This is only a rough guide and is not intended to be definitive.
For the most up-to-date information, be sure to check the documentation
specific to your operating system.
Operating System File-size LimitLinux 2.2-Intel 32-bit 2GB (LFS: 4GB)
Linux 2.4+ (using ext3 filesystem) 4TB
Solaris 9/10 16TB
NetWare w/NSS filesystem 8TB
Win32 w/ FAT/FAT32 2GB/4GB
Win32 w/ NTFS 2TB (possibly larger)
MacOS X w/ HFS+ 2TB
 	 
Questions : 65	Give the syntax of Grant and Revoke commands?
Answer : 65	The generic syntax for grant is as following
> GRANT [rights] on [database/s] TO [username@hostname] IDENTIFIED BY
[password]
now rights can be
a) All privileges
b) combination of create, drop, select, insert, update and delete etc.We can grant rights on all databse by using *.* or some specific
database by database.* or a specific table by database.table_name
username@hotsname can be either username@localhost, username@hostname
and username@%
where hostname is any valid hostname and % represents any name, the *.*
any condition
password is simply the password of userThe generic syntax for revoke is as following
> REVOKE [rights] on [database/s] FROM [username@hostname]
now rights can be as explained above
a) All privileges
b) combination of create, drop, select, insert, update and delete etc.
username@hotsname can be either username@localhost, username@hostname
and username@%
where hostname is any valid hostname and % represents any name, the *.*
any condition
 	 
Questions : 66	Explain Normalization concept?
Answer : 66	The normalization process involves getting our data to conform to
three progressive normal forms, and a higher level of normalization
cannot be achieved until the previous levels have been achieved (there
are actually five normal forms, but the last two are mainly academic and
will not be discussed).First Normal FormThe First Normal Form (or 1NF) involves removal of redundant data
from horizontal rows. We want to ensure that there is no duplication of
data in a given row, and that every column stores the least amount of
information possible (making the field atomic).Second Normal FormWhere the First Normal Form deals with redundancy of data across a
horizontal row, Second Normal Form (or 2NF) deals with redundancy of
data in vertical columns. As stated earlier, the normal forms are
progressive, so to achieve Second Normal Form, your tables must already
be in First Normal Form.Third Normal Form
I have a confession to make; I do not often use Third Normal Form. In
Third Normal Form we are looking for data in our tables that is not
fully dependant on the primary key, but dependant on another value in
the table
 	 
Questions : 67	How can we find the number of rows in a table using MySQL?
Answer : 67	Use this for mysql
>SELECT COUNT(*) FROM table_name;
 	 
Questions : 68	How can we find the number of rows in a result set using PHP?
Answer : 68	$result = mysql_query($sql, $db_link);
$num_rows = mysql_num_rows($result);
echo "$num_rows rows found";
 	 
Questions : 69	How many ways we can we find the current date using MySQL?
Answer : 69	SELECT CURDATE();
CURRENT_DATE() = CURDATE()
for time use
SELECT CURTIME();
CURRENT_TIME() = CURTIME()
 	 
Questions : 70	What are the advantages and disadvantages of Cascading Style
Sheets?
Answer : 70	External Style SheetsAdvantagesCan control styles for multiple documents at once. Classes can be
created for use on multiple HTML element types in many documents.
Selector and grouping methods can be used to apply styles under complex
contextsDisadvantagesAn extra download is required to import style information for each
document The rendering of the document may be delayed until the external
style sheet is loaded Becomes slightly unwieldy for small quantities of
style definitionsEmbedded Style Sheets
Advantages
Classes can be created for use on multiple tag types in the document.
Selector and grouping methods can be used to apply styles under complex
contexts. No additional downloads necessary to receive style information
Disadvantages
This method can not control styles for multiple documents at once
Inline Styles
Advantages
Useful for small quantities of style definitions. Can override other
style specification methods at the local level so only exceptions need
to be listed in conjunction with other style methods
Disadvantages
Does not distance style information from content (a main goal of
SGML/HTML). Can not control styles for multiple documents at once.
Author can not create or control classes of elements to control multiple
element types within the document. Selector grouping methods can not be
used to create complex element addressing scenarios
 	 
Questions : 71	What type of inheritance that PHP supports?
Answer : 71	In PHP an extended class is always dependent on a single base class,
that is, multiple inheritance is not supported. Classes are extended
using the keyword 'extends'.
 	 
Questions : 72	What is the difference between Primary Key and
Unique key?
Answer : 72	Primary Key: A column in a table whose values uniquely identify the
rows in the table. A primary key value cannot be NULL.
Unique Key: Unique Keys are used to uniquely identify each row in the
table. There can be one and only one row for each unique key value. So
NULL can be a unique key.There can be only one primary key for a table but there can be more
than one unique for a table.
 	 

Question : 73	what is garbage collection? default time ? refresh time?
Answer : 73	Garbage Collection is an automated part of PHP , If the Garbage Collection process runs, it then analyzes any files in the /tmp for any session files that have not been accessed in a certain amount of time and physically deletes them. Garbage Collection process only runs in the default session save directory, which is /tmp. If you opt to save your sessions in a different directory, the Garbage Collection process will ignore it. the Garbage Collection process does not differentiate between which sessions belong to whom when run. This is especially important note on shared web servers. If the process is run, it deletes ALL files that have not been accessed in the directory. There are 3 PHP.ini variables, which deal with the garbage collector: PHP ini value name default session.gc_maxlifetime 1440 seconds or 24 minutes session.gc_probability 1 session.gc_divisor 100
 	 
Questions : 74	What are the advantages/disadvantages of MySQL and PHP?
Answer : 74	Both of them are open source software (so free of cost), support
cross platform. php is faster then ASP and JSP.
 	 
Questions : 75	What is the difference between GROUP BY and ORDER BY in Sql?
Answer : 75	ORDER BY [col1],[col2],â€¦,[coln]; Tels DBMS according to what columns
it should sort the result. If two rows will hawe the same value in col1
it will try to sort them according to col2 and so on.GROUP BY
[col1],[col2],â€¦,[coln]; Tels DBMS to group results with same value of
column col1. You can use COUNT(col1), SUM(col1), AVG(col1) with it, if
you want to count all items in group, sum all values or view average
 	 
Questions : 76	What is the difference between char and varchar data types?
Answer : 76	Set char to occupy n bytes and it will take n bytes even if u r
storing a value of n-m bytes
Set varchar to occupy n bytes and it will take only the required space
and will not use the n bytes
eg. name char(15) will waste 10 bytes if we store 'romharshan', if each char
takes a byte
eg. name varchar(15) will just use 5 bytes if we store 'romharshan', if each
char takes a byte. rest 10 bytes will be free.
 	 
Questions : 77	What is the functionality of md5 function in PHP?
Answer : 77	Calculate the md5 hash of a string. The hash is a 32-character
hexadecimal number. I use it to generate keys which I use to identify
users etc. If I add random no techniques to it the md5 generated now
will be totally different for the same string I am using.
 	 
Questions : 78	How can I load data from a text file into a table?
Answer : 78	you can use LOAD DATA INFILE file_name; syntax to load data
from a text file. but you have to make sure thata) data is delimited
b) columns and data matched correctly
 	 
Questions : 79	How can we know the number of days between two given dates using
MySQL?
Answer : 79	SELECT DATEDIFF("2007-03-07","2005-01-01");
 	 
Questions : 80	How can we know the number of days between two given dates using PHP?
Answer : 80	$date1 = date("Y-m-d");
$date2 = "2006-08-15";
$days = (strtotime($date1) - strtotime($date2)) / (60 * 60 * 24);
 	 
Questions : 81	How we load all classes that placed in different directory in one PHP File , means how to do auto load classes
Answer : 81	

by using spl_autoload_register('autoloader::funtion');

Like below 

class autoloader

{

public static function moduleautoloader($class)

{

$path = $_SERVER['DOCUMENT_ROOT'] . "/modules/{$class}.php";

if (is_readable($path)) require $path;

}

public static function daoautoloader($class)

{

$path = $_SERVER['DOCUMENT_ROOT'] . "/dataobjects/{$class}.php";

if (is_readable($path)) require $path;

}

public static function includesautoloader($class)

{

$path = $_SERVER['DOCUMENT_ROOT'] . "/includes/{$class}.php";

if (is_readable($path)) require $path;

}

}

spl_autoload_register('autoloader::includesautoloader');

spl_autoload_register('autoloader::daoautoloader');

spl_autoload_register('autoloader::moduleautoloader');

 	 
Questions : 82	How many types of Inheritances used in PHP and how we achieve it
Answer : 82	 As far PHP concern it only support single Inheritance in scripting.
we can also use interface to achieve multiple inheritance.
 	 
Questions : 83	PHP how to know user has read the email?
Answers : 83	 Using Disposition-Notification-To: in mailheader we can get read receipt.
Add the possibility to define a read receipt when sending an email.
Itâ€™s quite straightforward, just edit email.php, and add this at vars definitions:
var $readReceipt = null;
And then, at â€˜createHeaderâ€™ function add:
if (!empty($this->readReceipt)) { 
$this->__header .= â€˜Disposition-Notification-To: â€˜ . $this->__formatAddress($this->readReceipt) . $this->_newLine; 
}
 	 
Questions : 84	 What are default session time and path?
Answers : 84	 default session time in PHP is 1440 seconds or 24 minutes
Default session save path id temporary folder /tmp
 	 
Questions : 85	how to track user logged out or not? when user is idle ?
Answers : 85	 By checking the session variable exist or not while loading th page. As the session will exist longer as till browser closes. The default behaviour for sessions is to keep a session open indefinitely and only to expire a session when the browser is closed. This behaviour can be changed in the php.ini file by altering the line session.cookie_lifetime = 0 to a value in seconds. If you wanted the session to finish in 5 minutes you would set this to session.cookie_lifetime = 300 and restart your httpd server.
 	 
Questions : 86	how to track no of user logged in ?
Answers : 86	 whenever a user logs in track the IP, userID etc..and store it in a DB with a active flag while log out or sesion expire make it inactive. At any time by counting the no: of active records we can get the no: of visitors.
 	 
Questions : 87	in PHP for pdf which library used?
Answers : 87	 The PDF functions in PHP can create PDF files using the PDFlib library With version 6, PDFlib offers an object-oriented API for PHP 5 in addition to the function-oriented API for PHP 4. There is also the Â» Panda module. FPDF is a PHP class which allows to generate PDF files with pure PHP, that is to say without using the PDFlib library. F from FPDF stands for Free: you may use it for any kind of usage and modify it to suit your needs. FPDF requires no extension (except zlib to activate compression and GD for GIF support) and works with PHP4 and PHP5.
 	 
Questions : 88	for image work which library?
Answers : 88	 we will need to compile PHP with the GD library of image functions for this to work. GD and PHP may also require other libraries, depending on which image formats you want to work with.
 	 
Questions : 89	what is design pattern? explain all including singleton pattern?
Answers : 89	 A design pattern is a general reusable solution to a commonly occurring problem in software design.
The Singleton design pattern allows many parts of a program to share a single resource without having to work out the details of the sharing themselves.
Answer in Details
 	 
Questions : 90	what are magic methods?
Answers : 90	 Magic methods are the members functions that is available to all the instance of class Magic methods always starts with "__". Eg. __construct All magic methods needs to be declared as public To use magic method they should be defined within the class or program scope Various Magic Methods used in PHP 5 are: __construct() __destruct() __set() __get() __call() __toString() __sleep() __wakeup() __isset() __unset() __autoload() __clone()
 	 
Questions : 91	what is magic quotes?
Answers : 91	 Magic Quotes is a process that automagically escapes ncoming data to the PHP script. Itâ€™s preferred to code with magic quotes off and to instead escape the data at runtime, as needed. This feature has been DEPRECATED as of PHP 5.3.0 and REMOVED as of PHP 6.0.0. Relying on this feature is highly discouraged.
 	 
Questions : 92	what is cross site scripting? SQL injection?
Answers : 92	 Cross-site scripting (XSS) is a type of computer security vulnerability typically found in web applications which allow code injection by malicious web users into the web pages viewed by other users. Examples of such code include HTML code and client-side scripts. SQL injection is a code injection technique that exploits a security vulnerability occurring in the database layer of an application. The vulnerability is present when user input is either incorrectly filtered for string literal escape characters embedded in SQL statements or user input is not strongly typed and thereby unexpectedly executed
 	 
Questions : 93	what is URL rewriting?
Answers : 93	 Using URL rewriting we can convert dynamic URl to static URL Static URLs are known to be better than Dynamic URLs because of a number of reasons 1. Static URLs typically Rank better in Search Engines. 2. Search Engines are known to index the content of dynamic pages a lot slower compared to static pages. 3. Static URLs are always more friendlier looking to the End Users. along with this we can use URL rewriting in adding variables [cookies] to the URL to handle the sessions.
 	 
Questions : 94	what is the major php security hole? how to avoid?
Answers : 94	 1. Never include, require, or otherwise open a file with a filename based on user input, without thoroughly checking it first. 
2. Be careful with eval() Placing user-inputted values into the eval() function can be extremely dangerous. You essentially give the malicious user the ability to execute any command he or she wishes! 
3. Be careful when using register_globals = ON It was originally designed to make programming in PHP easier (and that it did), but misuse of it often led to security holes 
4. Never run unescaped queries 
5. For protected areas, use sessions or validate the login every time. 
6. If you donâ€™t want the file contents to be seen, give the file a .php extension.
 	 
Questions : 95	whether PHP supports Microsoft SQL server ?
Answers : 95	 The SQL Server Driver for PHP v1.0 is designed to enable reliable, scalable integration with SQL Server for PHP applications deployed on the Windows platform. The Driver for PHP is a PHP 5 extension that allows the reading and writing of SQL Server data from within PHP scripts. using MSSQL or ODBC modules we can access Microsoft SQL server.
 	 
Questions : 96	what is MVC? why its been used?
Answers : 96	 Model-view-controller (MVC) is an architectural pattern used in software engineering. Successful use of the pattern isolates business logic from user interface considerations, resulting in an application where it is easier to modify either the visual appearance of the application or the underlying business rules without affecting the other. In MVC, the model represents the information (the data) of the application; the view corresponds to elements of the user interface such as text, checkbox items, and so forth; and the controller manages the communication of data and the business rules used to manipulate the data to and from the model. WHY ITS NEEDED IS 1 Modular separation of function 2 Easier to maintain 3 View-Controller separation means:
A â€” Tweaking design (HTML) without altering code B â€” Web design staff can modify UI without understanding code
 	 
Questions : 97	what is framework? how it works? what is advantage?
Answers : 97	 In general, a framework is a real or conceptual structure intended to serve as a support or guide for the building of something that expands the structure into something useful. Advantages : Consistent Programming Model Direct Support for Security Simplified Development Efforts Easy Application Deployment and Maintenance
 	 
Questions : 98	what is CURL?
Answers : 98	 CURL means Client URL Library
curl is a command line tool for transferring files with URL syntax, supporting FTP, FTPS, HTTP, HTTPS, SCP, SFTP, TFTP, TELNET, DICT, LDAP, LDAPS and FILE. curl supports SSL certificates, HTTP POST, HTTP PUT, FTP uploading, HTTP form based upload, proxies, cookies, user+password authentication (Basic, Digest, NTLM, Negotiate, kerberosâ€¦), file transfer resume, proxy tunneling and a busload of other useful tricks.
CURL allows you to connect and communicate to many different types of servers with many different types of protocols. libcurl currently supports the http, https, ftp, gopher, telnet, dict, file, and ldap protocols. libcurl also supports HTTPS certificates, HTTP POST, HTTP PUT, FTP uploading (this can also be done with PHPâ€™s ftp extension), HTTP form based upload, proxies, cookies, and user+password authentication.
 	 
Questions : 99	what is PDO ?
Answers : 99	
The PDO ( PHP Data Objects ) extension defines a lightweight, consistent interface for accessing databases in PHP. if you are using the PDO API, you could switch the database server you used, from say PgSQL to MySQL, and only need to make minor changes to your PHP code.
While PDO has its advantages, such as a clean, simple, portable API but its main disadvantage is that it doesn't allow you to use all of the advanced features that are available in the latest versions of MySQL server. For example, PDO does not allow you to use MySQL's support for Multiple Statements.
Just need to use below code for connect mysql using PDO
try {
$dbh = new PDO("mysql:host=$hostname;dbname=databasename", $username, $password);
$sql = "SELECT * FROM employee";
foreach ($dbh->query($sql) as $row)
{
print $row['employee_name'] .' - '. $row['employee_age'] ;
}
}
catch(PDOException $e)
{
echo $e->getMessage();
}
 	 
Questions : 100	What is PHP's mysqli Extension?
Answers : 100	
The mysqli extension, or as it is sometimes known, the MySQL improved extension, was developed to take advantage of new features found in MySQL systems versions 4.1.3 and newer. The mysqli extension is included with PHP versions 5 and later.
The mysqli extension has a number of benefits, the key enhancements over the mysql extension being: 
=>Object-oriented interface 
=>Support for Prepared Statements 
=>Support for Multiple Statements 
=>Support for Transactions 
=>Enhanced debugging capabilities 
=>Embedded server support 
