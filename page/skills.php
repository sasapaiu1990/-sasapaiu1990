

<?php

require'header.php';


?>

      <div class="container">
          
               <h1 class="pag_name"><b>Skills</b></h1>
          
               <div class="skill_img"></div>
      
      
          <div class="motto">
              <p>| <em> "Sometimes the questions are complicated and the answers are simple."  </em> </p>
              <p><b>Dr. Seuss</b></p>
              
          </div>  
          
 
          
          
     </div>


<div class="main" >
    <h2>Areas of Experience</h2>
    <br>
        <div class="myProgress" >
        <div id="id_php" php="79.76"></div>
        </div>
    
        <div class="myProgress" >
        <div id="id_xml" xml="83.09"></div>
        </div>
    
            <div class="myProgress" >
            <div id="css" css="87.70"></div>
            </div>
    
            <div class="myProgress" >
            <div id="id_apache" apache="87.54"></div>
            </div>
    
                <div class="myProgress" >
                <div id="id_js" js="93.42"></div>
                </div>
                    
                <div class="myProgress" >
                <div id="id_core_js" corejs="93.42"></div>
                </div>
    
            <div class="myProgress" >
            <div id="id_sql" sql="86.25"></div>
            </div>

            <div class="myProgress" >
            <div id="id_wp" wp="85.89"></div>
            </div>
        <div class="myProgress" >
            <div id="id_dm" dm="91.08"></div>
            </div>

        <div class="myProgress" >
        <div id="id_criptografia" crypt="95.81"></div>
        </div>
    <script type="text/javascript">
       
        window.onscroll = function() {myFunction()};

        var php = document.querySelector('#id_php');
        var xml = document.querySelector('#id_xml');
        var css = document.querySelector('#css');
        var apache = document.querySelector('#id_apache');
        var js = document.querySelector('#id_js');
        var corejs = document.querySelector('#id_core_js');
        var sql = document.querySelector('#id_sql');
        var wp = document.querySelector('#id_wp');
        var dm = document.querySelector('#id_dm');
        var crypt = document.querySelector('#id_criptografia');
               
       function myFunction() { 
           if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
               
                php.style.width = php.getAttribute('php') + "%" ;
                php.innerHTML = "<h4 class='php'>Core PHP 79.76%</h4>";
               
                xml.style.width = xml.getAttribute('xml') + "%" ;
                xml.innerHTML = "<h4 class='php'>XML/PHP 83.09%</h4>";

                css.style.width = css.getAttribute('css') + "%" ;
                css.innerHTML = "<h4 class='php'>HTML & CSS 80.76%</h4>";

                apache.style.width = apache.getAttribute('apache') + "%" ;
                apache.innerHTML = "<h4 class='php'>Apache 87.54%</h4>";

                js.style.width = js.getAttribute('js') + "%" ;
                js.innerHTML = "<h4 class='php'>JavaScript și Ajax 93.42%</h4>";  corejs

                corejs.style.width = corejs.getAttribute('corejs') + "%" ;
                corejs.innerHTML = "<h4 class='php'>Core JavaScript 92.11%</h4>";
                
                sql.style.width = sql.getAttribute('sql') + "%" ;
                sql.innerHTML = "<h4 class='php'>MySQL 86.25%</h4>";

                wp.style.width = wp.getAttribute('wp') + "%" ;
                wp.innerHTML = "<h4 class='php'>WordPress 85.89%</h4>";
               
                dm.style.width = dm.getAttribute('dm') + "%" ;
                dm.innerHTML = "<h4 class='php'>Digital marketing 91.08%</h4>";

                crypt.style.width = crypt.getAttribute('crypt') + "%" ;
                crypt.innerHTML = "<h4 class='php'>Web cryptography 95.81%</h4>";
      
            }
       }
        
    </script>
    <div class="skill">
        <h2>Personal Skills</h2>
        <br>
        <ul>
            <li>Time management</li>
            <li>Goals orientated</li>
            <li>I adapt very easily and working in a team is a pleasure.</li>
            <li>Ability to grasp concepts quickly</li>
            <li>I have never run away from problems or difficulties that make me stronger.</li>
            <li>I'm pretty stubborn and never give up halfway.</li>
            <li>High social competence, team spirit and communication skills</li>
            <li>I am tolerant and resistant to stress.</li>
            <li>I like to dedicate myself entirely to the entrusted application or the entrusted project</li>
            <li>I am a punctual person who fits well into the team. I am contact-friendly and I get out of any problems easily.</li>

        </ul>
    </div>
</div>








<?php

require'footer.php';


?>