<?php

echo '<table border="1">';
$start_row=1;
$array = array();
if(($csv_file = fopen("C:\\xampp\\htdocs\\test\\monthly_payrolls.csv","r"))!==False){
    $total =0; 
    while(($read_data=fgetcsv($csv_file,1000,","))!==False){
        $total =0; 
        $column_count=count($read_data);
        echo "<tr>";
        $start_row++;
        for($c=0;$c<$column_count;$c++){
            echo "<td>".$read_data[$c]."</td>";
            $total+=intval($read_data[$c]);
            
        }
        echo "<td >". $total."</td>";
    }
    fclose($csv_file);
}
echo '</table>';


?>