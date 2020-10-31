<div class = "container table">  
<table class="table table-striped">
    <thead class="thead-dark">
      <tr><th>Country</th><th>Capital</th></tr>
    </thead>
    <?php
      $ncountries = array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=>"Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France"=>"Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");
          
      foreach($ncountries as $namecount => $ncapital) {
        echo "<tr><td>$namecount</td><td>$ncapital</td></tr>";
      }

    ?>
  </table>
</div>