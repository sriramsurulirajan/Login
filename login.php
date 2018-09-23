<html>
  <head>
    <meta charset="utf-8">
    <title>
        login
    </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
   </head>
   <body>
   <php class="validate executablePath:null"></php>
     
     <div class="box">
       <h2>Login</h2>
       <form action="process.php" method="POST">
         <div class="inputbox">
            <input type="text" id="username" name="username" required="">
            <label>username</label>
         </div>
         <div class=inputbox>
           <input type="password" id="password" name="password" required="">
           <label>password</label>
         </div>
         <input type="submit"name="" value="submit" onclick="getInfo()">
       </form>
     </div>
     
    
   </body>
</html>