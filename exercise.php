<strong> Negeri:</strong><br/>


   <?php
   $states = array("Selangor", "Johor", "Kedah", "Kelantan", "Melaka", "Negeri sembilan", "Pahang", "Perak", "Perlis", "Pulau Pinang", "Sabah", "Sarawak", "Terengganu" );

   $ibunegeri = array("Shah Alam", "Johor bahru", "Alor Setar", " Kota Bahru", "Melaka", "Seremban", "Kuantan", "Ipoh", "Kangar", "Georgetown", "KKinabalu", "Kuching", "Kuala Terengganu");

   $shortname = array("SGR", "JHR", "KDH", "KTN", "MLK", "NSN", "PHG", "PRK", "PLS", "PNG", "SBH", "SWK", "TRG");

   
   echo "<table border='1' cellspacing='0' cellpadding='0'>";
   echo "<tr><td width=150px align=center><strong>Negeri</strong></td><td width=150px align=center><strong>Ibu Negeri</strong></td><td width=150px align=center><strong>Short Name</strong></td>";
	

   $num = 0;
   do{
   		echo "<table border='1' cellspacing='0' cellpadding='0'>";
   		if($states[$num]=="Johor")
       		echo "<tr><td width=150px align=center><strong>".$states[$num]."</strong></td><td width=150px align=center><strong>".$ibunegeri[$num]."</strong></td><td width=150px align=center><strong>".$shortname[$num]."</strong></tr></table>";
       
       	else
       		echo "<tr><td width=150px align=center>".$states[$num]."</td><td width=150px align=center>".$ibunegeri[$num]."</td><td width=150px align=center>".$shortname[$num]."</tr></table>";

       $num++;
   }while($num <= 12);
   
   ?>
<hr/>
<strong>*Bold</strong> state is the state you're living in.