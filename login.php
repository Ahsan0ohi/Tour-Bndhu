<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="/css/btn.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Log In </title>
    <style>
      .xyz{
        border-radius: 3%;
       
         /* background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQU5JbUiAzp5myRwUBhxTG1nXP3EY5nvQyq_g&usqp=CAU"); */
         background-repeat: no-repeat;
         background-size: 100%;
         box-shadow:10px 10px 10px black;
         border: 5px solid black;
         /* background-color:black; */
      }
     
        body{
        background-image: url("https://wallpapers.com/images/featured/green-nature-tgy6dtxhgtwubez9.jpg");
         background-repeat: no-repeat;
         background-size: 100%;
         height: auto;
         background-color: rgba(18, 18, 86,0.3);

      }
    </style>
  </head>
  <body>
    
   <div class="container-fluid ">
    <div class="row justify-content-center mt-5 ">
   <div class="col-lg-4 col-md-6 p-4 xyz">
    
      <form action="loginaction.php" method="post" data-aos="zoom-in-down">
      <div class="mb-4 mt-2">
      <h3 style="display: flex; align-items: center; justify-content: center; color:White; ">Log In Here</h3> 
      </div>
  

  <div class="mb-3">
   <span style="color:White">Email:</span> 
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="l_email">  
  </div>
  <div class="mb-3">
  <span style="color:White">Password:</span> 
    <input type="password" class="form-control" name="l_passworld">
  </div>

  
  <div class="pb-3 pt-3">
  <button type="submit" class=" btn btn-success col-12" name="btn2">Log In</button>
  </div>
  
  <p class="text-center pb-3 text-secondary"><a href="regi.php">Forgot your password?</a></p>
  <p class="text-center pb-3 text-light">Have not an  accont <a href="regi.php"> Sign Up</a></p>

</form>
   
   <div class="text-center pb-4">
  <a href="home.php"><button class="btn btn-outline-info " style="width:60%;"> Leave </button></a>
  </div>

      </div>
    </div>
   </div>

   
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
     <!-- for trasatio -->
     <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
        AOS.init( {
          offset: 400,
          duration: 1000,
        }
         );
      </script>
  </body>
</html>