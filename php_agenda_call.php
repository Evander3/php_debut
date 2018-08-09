
    <h2>Ajouter une entrée à l'agenda</h2>
    <!-- <br /> -->
    <form action="" method="POST">
        Date&nbsp;<input type="text" name="input_date" placeholder="YYYY-MM-DD">
        &nbsp;&nbsp;&nbsp;&nbsp;
        Entrée&nbsp;<input type="text" name="input_data" >
        <!-- <input type="text" name="field2"> -->
        <!-- <select name="logement">
            <option value="1">Maison</option>
            <option value="2">Appartement</option>
            <option value="3">Villa</option> -->
        </select>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit">
    </form>

    <br />
    <br />

    <?php
        $agenda_filename = "agenda.txt" ;
        $output_date = $_POST['input_date'];
        $input_date = explode('-',$output_date);
        $date_now = date("Y-m-d H:i:s");
        // var_dump($input_date);
        // echo (checkdate($input_date[1],$input_date[2],$input_date[0])===false);
        if (checkdate($input_date[1],$input_date[2],$input_date[0])===false) {
            echo "La date n'est pas valide !" ;
        } else {
            // echo "La date est valide, bravo champion !" ;
            $input_data = trim($_POST['input_data']);

            $ag_file_write = fopen($agenda_filename, "a+") or die("Nein nein nein nein nein !");
            fwrite($ag_file_write,"\n $output_date || $date_now || $input_data");
            fclose($ag_file_write);
        }
    ?>