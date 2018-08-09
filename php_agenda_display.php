    <h2>Contenu de l'agenda :</h2>

    <form action="" method="POST">
        Mois à afficher &nbsp;
        <select name="mois2disp">
            <option value="1">Janvier</option>
            <option value="2">Février</option>
            <option value="3">Mars</option>
            <option value="4">Avril</option>
            <option value="5">Mai</option>
            <option value="6">Juin</option>
            <option value="7">Juillet</option>
            <option value="8">Aout</option>
            <option value="9">Septembre</option>
            <option value="10">Octobre</option>
            <option value="11">Novembre</option>
            <option value="12">Décembre</option>
        </select>
        <select name="an2disp">
            <option value="2015">2015</option>
            <option value="2016">2016</option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
            <option value="2019">2019</option>
        </select>
        &nbsp;&nbsp;
        <input type="submit">


    <table style="width:100%">
    <?php
        $an2disp=$_POST['an2disp'];
        $mois2disp=$_POST['mois2disp'];

        $begin = new DateTime("$an2disp-$mois2disp-01");
        $end = $begin->modify( '+1 month' ); 
        $end = $end->modify( '-1 day' ); 

        $interval = new DateInterval('P1D');
        $daterange = new DatePeriod($begin, $interval ,$end);

        foreach($daterange as $date){
            echo $date->format("Ymd") . "<br>";
        }

            $now = date_create(date('Y-m-d'));
            $ag_file_read = fopen($agenda_filename, "r") or die("Nein nein nein nein nein !");
            $contents = fread($ag_file_read,filesize($agenda_filename));
            fclose($ag_file_read);

            $contents = explode("\n",$contents);

            for ($x = 0; $x < count($contents); $x++) {
                $content2disp = explode(" || ",$contents[$x]);

                $then = date_create($content2disp[0]);
  
                $interval = date_diff($now, $then);
                $interval = $interval->format('Ecart: %y Ans %m Mois %d Jour');
                
                // echo'<pre>';
                // var_dump($content2disp);
                // echo'</pre>';
                echo "<tr>
                    <th>$content2disp[0]</th>
                    <th>$interval</th>
                    <th>$content2disp[1]</th>
                    <th>$content2disp[2]</th>
                </tr>";
            } 
            // echo '<pre>';
            // var_dump($contents);
            // echo '<pre>';
    ?>

    </table>


</body>
</html>