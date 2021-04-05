<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Vue Js</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  


</head>
<style type="text/css">
 [ v-cloak]{
  display: none;
 };
</style>
<body>

<!-- Navbar -->
<?php include 'sidebar.php' ;?>

 
<div class="container-fluid bg-2 text-center text"  v-cloak style="background: #225aaf">
  <h3 class="margin">{{message}}</h3>
  <p style="margin-top:-29px">{{message1}}<br>{{message2}}</p>
  <a href="#" class="btn btn-default btn-lg">
    <span class="glyphicon glyphicon-search"></span> {{message3}}
  </a>
</div>

<!-- Third Container (Grid) -->
 

</body>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script> 
  <!--------her i include my js page---->
  <script src="vuejs.js"></script> 
  <!--------her i include my js page---->
</html>
