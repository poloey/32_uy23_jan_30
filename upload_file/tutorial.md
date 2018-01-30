## simple file uploading in php

<hr>

### enctype
When we upload file we have to set a `enctype="multipart/form-data"` attribute to `form` tag.

~~~html
<form action="" method="post" enctype="multipart/form-data">
~~~

### to create a folder in php   

~~~php
mkdir('foldername')
~~~

### to check any file or folder exists we use `file_exists` function. which will return boolean

~~~php
//file
file_exists('hello.txt')
//folder
file_exists('hello')
~~~


### to upload file in php we use `move_uploaded_file` function. Which takes 2 arguments. file and destination location.

~~~php
  move_uploaded_file($tmp_name, $destination);
~~~

### Uploading code in at a glance

~~~php
<?php
if (isset($_FILES['file'])) {
  $file = $_FILES['file'];
  $name = $file['name'];
  $tmp_name = $file['tmp_name'];
  if (! file_exists('hello')) {
    mkdir('hello');
  }
  $destination = 'hello/' . $name;
  move_uploaded_file($tmp_name, $destination);
}
~~~


### in_array()     

To check whether value exists in array or not 

~~~php
$fruit = ['apple', 'orange', 'banana', 'mango'];
in_array('apple', $fruit); // true
in_array('jackfruit', $fruit); // false
~~~

### end()

It will extract last value from array

~~~php
$array = ['dhaka', 'chittagong', 'borishal', 'feni'];
end($array) // feni
~~~

### explode()    

It will explode string into array    

~~~php
$string = 'apple, orange, banana';
explode(',', $string); // ['apple', 'orange', 'banana']
~~~

### implode()     

It will implode array into string          

~~~php
$array = ['apple', 'orange', 'banana'];
implode(',', $array); //  'apple, orange, banana'
~~~









