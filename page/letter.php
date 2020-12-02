

<?php

require'header.php';


?>
    
      <div class="container">
          
               <h1 class="pag_name"><b>Letter of intient</b></h1>
                <div class="letter_img">
                    
                </div>
          
          
          <div class="motto">
              <p>| <em>" The starting point of all achievement is DESIRE. Keep this constantly in mind. Weak desire brings weak results, just as a small fire makes a small amount of heat.. "  </em> </p>
              <p><b>Napoleon Hill</b></p>
              
          </div>     
     </div>

    <div class="main">
        <div class="text" >
             <button class="letter_close">Close</button>

            <h3>Dear Sir/Madam,</h3>
            <br>
            <!-- Create extra space: &nbsp;&nbsp; --> 
                <p> &nbsp;&nbsp;&nbsp;&nbsp; Being a fresh Web Developer graduate at Link Akademy, with a bachelor degree in economical field, I am expresing my interest for the listed job role. I really want to apply all my knowladge gained and do by best to develop them. „He who moves not forward, goes backward” Johann Wolfgang von Goethe.</p>

                <p>&nbsp;&nbsp;&nbsp;&nbsp; During the studies that I just completed, I have gained knowledge on programming languages (HTML, CSS, PHP, JavaScript (Librarys ), Apache) and Further IT skills such as Notepad ++, Brackets, Dreamweaver, MySQL Workbench 8.0.</p>

                <p>&nbsp;&nbsp;&nbsp;&nbsp; And I believe that I am a very deligent and highly motivated person, while studing I did not fail any exam. I am certain to push through with the dedication I have always worked with to accomplish my goals and to improve myself.</p>
                <br>
                <p>&nbsp;&nbsp;&nbsp;&nbsp; Being a sociable, dynamic and a determined person I easily face up any challenge and I am always interested in a continuous professional development. The chance to work with you would give me the opportunity to highlight my intellectual abilities and experience gained for completing the work tasks for the company benefit.</p>
                <br>
                <p> &nbsp;&nbsp;&nbsp;&nbsp;I am aware that I will encounter many new things at the beginning and I will need your patience, however, I assure you that I will do my best to worth it! I am convinced that I will be a valuable addition to your company.</p>
                <br>
                <p> I'm looking forward to discussing the position and my qualifications with you in more detail soon.</p>
                <br>
                <p> Thank you for taking the time and consideration of my application.</p>
            <br><br><br>
            <p>Kindest regards,</p><br>
            <p class="signature">Alexandru Paiu</p>
            <br>
            <br>
        </div>

       
       
        
    </div>
     <p class="letter_open">Open letter</p>

        <script>
            $(document).ready(function(){


              $(".letter_close").click(function(){
                $(".text").animate({height: "0px"},1500)
                          .animate({display: "none"},100)
                          .animate({opacity: "0"},1000)
              });
                 $(".letter_open").click(function(){
                
                $(".text").animate({height: "100%"},100)
                          .animate({display: "block"},100)
                          .animate({opacity: "1"},500)
                          
                            
              });
            });
        </script>




<?php

require'footer.php';


?>