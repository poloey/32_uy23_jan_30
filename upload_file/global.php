<?php 

$name = 'sumon';

function hello() {
  // global $name;
  // echo $name;
  echo $GLOBALS['name'];
}
hello();

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <title>Document</title>
 </head>
 <body>
  <button>hello</button>
<script>
var button = document.querySelector('button');
var hello = 'hello world';
// window
function helloFn() {
  //local
  console.log(hello)
}
helloFn();
console.log(hello)



</script>
   
 </body>
 </html>



