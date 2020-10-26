<?php include("./include/header.php");?>


<section id="main">    
    <div class="content">
    <!-- First page in the website this h1  loads an animation in line 57 on the style.css file -->
        <h1></h1> 
    </div>
</section>

<section id="second">
    <!-- second page on the website loads a style card with the student information -->
    <div class="card middle">
        <div class="top-section">
            <img src="./img/atik.jpg"></img>
            <div class="name">
                <h3>Jose Paulo</h3>
                <span>Goncalves</span>
            </div>
        </div>
        <div class="info-section">
            <h2>About
            <div class="border"></div>
            </h2>
            <p>Student Number: 2019222</p>
            <p>Bachelor of Science in Information Technology</p>
            <p>CCT College Dublin</p>
            <p>Assignment Compiler: John Snel</p> 
            <h2>contact
                <div class="border"></div>
            </h2>
            <div class="s-m">
                <a href="#" class="fab fa-github"></a>            
                <a href="#" class="fab fa-linkedin-in"></a> 
            </div>
        </div>        
    </div> 
</section>

<section id="third">       
    <div class="buscar-caja">
        <!-- this div loads he serch box on the third page gets the input from the user and save in the superglobal $_POST["search"] -->
        <form action="#country-table" method="POST">
            <input type="text" name="search" class="buscar-txt" placeholder="Search..."/>              
            <button type="submit" class="buscar-btn">
                <i class="far fa-search"></i>
            </button>
        </form>          
    </div>

    <div class="countris-table"> 
        <table id="country-table"class="table-fill">
            <tr>
                <th>Country</th>
                <th>Capital</th>
            </tr>
            <?php                
                $europe = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels","Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris",
                            "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
                            "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
                            "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta", "Austria" => "Vienna",
                            "Poland"=>"Warsaw"); 
                            // loads the table and reads the array and render the country and capital on the website
                foreach ($europe as $country =>$capital){
                    $lowercase = strtolower($country);                    
                    
                    echo "<tr>
                            <td><i class=\"$lowercase flag\"></i>$country</td>
                            <td>$capital</td>
                         </tr>";
                } 

                function function_alert($msg) {         
                    //render the message to the user with the capital of the country or if the country is not listed         
                  echo '<h2 id="msg">'. $msg.'</h2>';                  
                };

                function check_table($arr){      
                    //this function check if the superglobal has a value and if it is true correct the format of the input with the methods 
                    // ucwords() that transform the first letter of each word to capital letters and strtoower() that trasfor the letter to lower case
                    if(isset($_POST["search"])){
                        $search = ucwords(strtolower($_POST["search"]));                   
                        
                        if(array_key_exists($search, $arr)){   //checks the input and display the correct message to the user
                            $msg = "The capital of: " .ucfirst($search). " is " .$arr[$search];                    
                           function_alert($msg);
                            
                        }else{
                            function_alert("Country not listed");                                           
                        }                                                  
                    }                                  
                }               
                
                check_table($europe); //calling the function
            ?>
        </table>
    </div>
</section>

<?php include("./include/footer.php");?>