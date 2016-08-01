<strong>States: </strong>
<ul>
   <?php
   $states = array("Selangor", "Johor", "Negeri Sembilan", "Melaka", "Perak", "Perlis", "Kelantan", "Terengganu", "Pulau Pinang", "Pahang", "Sabah", "Sarawak", "Kuala Lumpur", "Labuan", "Putrajaya");
   $num = 1;
   do{
       echo "<li>".$states[$num] . PHP_EOL."</li>";
       $num++;
   }while($num <= 12);
   ?>
</ul>
