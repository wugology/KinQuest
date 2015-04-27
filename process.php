/* All this code is from:

http://stackoverflow.com/questions/22264375/how-to-export-html-form-to-csv-file 

I don't have this on a server so I can't test if it works.
*/

<?php
    $keys = array('language','source_type','other_source','source_of_information','region','mother','father','parent','sibling','brother','sister','ego','spouse','husband','wife','child','daughter','son','niece','nephew','niece/nephew');
    $csv_line = array();
    foreach($keys as $key){
        array_push($csv_line,'' . $_GET[$key]);
    }
    $fname = 'kinquestdata.csv';
    $csv_line = implode(',',$csv_line);
    if(!file_exists($fname)){$csv_line = "\r\n" . $csv_line;}
    $fcon = fopen($fname,'a');
    $fcontent = $csv_line;
    fwrite($fcon,$csv_line);
    fclose($fcon);
?>
