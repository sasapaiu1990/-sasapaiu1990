

<?php
require'header.php';
?>

          
               <h1 class="pag_name"><b>Contact Details </b></h1>
                
          
          
          <div class="motto">
              <p>| <em> "I may not have gone where I intended to go, but I think I have ended up where I needed to be"  </em> </p>
              <p><b>Douglas Adams</b></p>
              
          </div>     
        <div class="main">
        <div class="adress">
        <ul> 
            <li><i class='fas fa-globe'></i> Germany</li>
            <li><i class='fas fa-home'></i> Address: Siechendorf 6, Zolling 85406</li>
            <li><i class='fas fa-baby'></i> Born: 18.081990 R.Moldau, Vulcanesti</li>
            <li><i class='fas'>&#xf095; </i> Tel: 01520 8602034</li>
            <li><i class='fas fa-envelope-open-text' style='color:green;'> </i> E-Mail: sasapaiu1990@gmail.com</li>
            
        </ul>
        </div>
        <div class="network">
            <br>
            <i class='fas fa-exclamation-triangle' style='font-size:48px;color:red'></i>
            <p>Please contact me by <span>e-mail</span>. No phone conection at home!</p>
            
        </div>
        <button class="button">Send me a message</button>
        <script>
            $(document).ready(function(){
                  $(".button").click(function(){
                    $(".text_me").slideDown("slow");
                   
                  });
                });
        
        </script>
         
        
        <div class="text_me">
            <form action="../config/validate.php" method="POST" >

              <label >First name: <br> <input type="text" name="name" onkeyup=Validation(this) placeholder="Type a name..."> 
                  <p id="name"></p>     </label> <br>
                
              <label >Last name: <br>  <input type="text" name="surname" onkeyup=Validation(this) placeholder="Type a surname...">   
                  <p id="lastname"></p>    </label> <br>
                
              <label >The Company's name: <br>  <input type="text" name="company_name" onkeyup=Validation(this) placeholder="Company name...">      <p id="company"></p>  </label> <br>
                
              <label >Email: <br> <input type="email" name="email" onkeyup=Validation(this) placeholder="Type a email...">
                <p id="email"></p></label> <br>
                
              <label >Phone nr: <br>  <input type="number" name="phone" onkeyup=Validation(this) placeholder="Phone nr...">  
                  <p id="phone"></p></label> <br>
                
              <label >Message: <br>   <textarea type="text" name="message"  rows="4" cols="40" placeholder="..."></textarea></label> <br>

              <input id="btn" type="submit" value="Send" >


            </form>
           
        </div>
            <?php
              if(isset($_GET['info']) && $_GET['info']=='true'){

                    echo '<h2 style="text-align:center; color: green;">The message was successfully sent!</h2>';


                }else  if(isset($_GET['info']) && $_GET['info']=='error'){
                        echo '<h2 style="text-align:center; color: red;"> Faild.</h2>';

                }else  if(isset($_GET['info']) && $_GET['info']=='false'){
                        echo '<h2 style="text-align:center; color: red;"> All fields must be filled in .</h2>';
                }
         ?> 
        </div>
    
        
        
        <script>
        function buttonFunction(){
            buttons = true; 
                if (document.getElementsByClassName("valid").length!=5) {
                    buttons = false;
                    document.getElementById("btn").disabled = true;
                }
            if (buttons) {
                document.getElementById("btn").disabled = false;
            }
        }
        
        function Processor(ins, regp, msgCorect, msgIncorect,regex){
            switch (regex) {
                case "x":
                    x = /^[a-zA-Z\\s]{3,25}$/;
                    break;
                case "m":
                    x = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,4}))$/;
                    break;
                case "j":
                    x = /^[0-9]{8,13}$/;
                    break;
            }
                     if (x.test(ins.value)) {
                        document.getElementById(regp).innerHTML = msgCorect;
                        document.getElementById(regp).style.color = "blue";
                        ins.setAttribute("class", "valid");
                    }else{document.getElementById(regp).innerHTML = msgIncorect;
                    document.getElementById(regp).style.color = "red";
                    ins.setAttribute("class", "false");}
        }
        function Validation(item){
            switch (item.name){
                case "name":
                   Processor(item, "name", "Correct name.", "Incorrect name!", "x");
                    break;
                case "surname":
                    Processor(item, "lastname", "Correct last name.", "Incorrect last name!", "x");
                    break;
                case "company_name":
                    Processor(item, "company", "Correct !", "Incorrect company name!", "x");
                    break;
                case "email":
                     Processor(item, "email", "Correct e-mail.", "Incorrect e-mail!", "m");
                    break;
                case "phone":
                    Processor(item, "phone", "Correct phone nr.", "Incorrect phone nr!", "j");
                    break;
                
            }
            buttonFunction();
        }
        
    </script>
        

<?php
require'footer.php';
?>