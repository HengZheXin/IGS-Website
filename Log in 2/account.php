<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account - RedStore | Ecommerce Website Design</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
       
<?php require_once '../ShareDesign/header2.php'; ?>
       
<!--------------Cart Items details--------------->
<div class="accout-page">
    <div class="container">
  
       <div class="row2">
         
          <div class="col-2">
             <img src="images/acc3.gif" width="100%">
          </div>
          
           <div class="col-2">
              <div class="form-container">
                 <div class="form-btn">
                     <span onclick="login()">Login</span>
                     <span onclick="register()">Register</span>
                     <hr id="indicator">
                 </div>
                 
               <form id="LoginForm">
                   <input type="text" placeholder="username">
                   <input type="password" placeholder="Password">
                   <button type="submit" class="btn">Login</button>
                   <a href="">Forgot password</a>
               </form>

               <form id="RegForm">
                   <input type="text" placeholder="username">
                   <input type="email" placeholder="Email">
                   <input type="password" placeholder="Password">
                   <button type="submit" class="btn">Register</button>
               </form>
              </div>
           </div>
       </div>
</div>
</div>



<!-------------js for toggle menu-------------->

<script>
    var MenuItems = document.getElementById("MenuItems");
    
    MenuItems.style.maxHeight = "0px";
    
    function menutoggle()
    {
        if(MenuItems.style.maxHeight == "0px")
            {
                MenuItems.style.maxHeight = "200px";
            }else
            {
                MenuItems.style.maxHeight = "0px"
            } 
    }
     
</script>
<!------------------- form toggle ----------->
    <script>
        var LoginForm = document.getElementById("LoginForm");
        var RegForm = document.getElementById("RegForm");
        var Indicator = document.getElementById("indicator");
        
        function register(){
                RegForm.style.transform = "translateX(0px)";
                LoginForm.style.transform = "translateX(0px)";
                Indicator.style.transform = "translateX(100px)"
            };
        function login(){
                RegForm.style.transform = "translateX(300px)";
                LoginForm.style.transform = "translateX(300px)";
                Indicator.style.transform = "translateX(0px)"
            };
            
    </script>
    
    
    
</body>
</html>

<?php require_once '../ShareDesign/footer.php'; ?>