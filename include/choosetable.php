<div class="container">
    <!-- Choose Section Heading-->
    <h2 class="page-section-heading text-center text-uppercase text-white">Choose a Country</h2>
    <!-- Icon Divider-->
    <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
        <div class="divider-custom-line"></div>
    </div>
        <?php
            $ncountries = array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=>"Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France"=>"Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");
        ?>
        <!-- Form Action-->
        <form action="choosetable.php" method="GET" >
            <select  name="ncontries">
                <option value= "" disabled= "selected">Choose one country</option>
                            <?php
                                foreach($ncountries as $namecount => $ncapital) {
                                    echo "<option value='$namecount'>$namecount</option>";
                                }
                            ?>
                            <input type="submit" name="submit" value = "Show me">
                    </select>      
                </form>
    <br>
    <!--- Checking null variables --- https://www.w3schools.com/php/func_var_isset.asp--->
    <?php
        if (isset($POST['submit'])){
            foreach ($ncountries as $namecount => $ncapital){
                if($_POST['ncontries']==$namecount){
                    $count= $namecount;
                    $capital= $ncapital;
                }
            }
            echo '<h1> The country selectd was: ' .$count . '</h1>';
            echo '<h2> The capital is: ' .$capital . '</h2>';  
        }
        
    ?>
</div>
