<html>
<head>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="estilo/estilo.css">
<div class="testbox">
  <h1>Ingresar</h1>
  <title></title>
</head>
<body>
  <form action="/">
      <hr>
    <div class="accounttype">
      <input type="radio" value="None" id="radioOne" name="account" checked/>
      <label for="radioOne" class="radio" chec>Personal</label>
      <input type="radio" value="None" id="radioTwo" name="account" />
      <label for="radioTwo" class="radio">Admin</label>
    </div>
  <hr>
  <!--<label id="icon" for="name"><i class="icon-envelope "></i></label>
  <input type="text" name="name" id="name" placeholder="Email" required/> -->
  <label id="icon" for="name"><i class="icon-user"></i></label>
  <input type="text" name="name" id="name" placeholder="Nombre" required/>
  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="password" name="name" id="name" placeholder="Contrasenia" required/>
  <div class="gender">
   <!-- <input type="radio" value="None" id="male" name="gender" checked/>
    <label for="male" class="radio" chec>Male</label> -->
    <input type="radio" value="None" id="female" name="gender" />
    <label for="female" class="radio">Recordame</label>
   </div> 
   <input  type="button" onclick="MostarLogin()"   value="Ingresar" title="Registra tu cuenta">
   <!--  <a href="#" class="button">Register</a>-->
  </form>
</div>
</body>
</html>
