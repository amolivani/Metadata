<?php

include 'config.php';
 // Connect to the Database
if (isset($_POST["template_submit"])) {
//get records from database
header('Content-Type: text/csv;');
header('Content-Disposition: attachment; filename=template.csv');
$fp = fopen("php://output", "w");
fputcsv($fp, array('common_name','sde_name','tags_guide','tags_sde','summary','summary_update_date','description','description_data_loc',' data_steward','data_engineer','credits','genconst','legconst','update_freq','date_last_update','date_underlying_data','data_source','version','common_uses','data_quality','caveats','future_plans','distribution'));

fclose($fp);
}

?>