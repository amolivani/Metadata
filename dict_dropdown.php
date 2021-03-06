<!-- code for getting the dropdown list of all the data dictionary tables in the database that begin with dd_
 -->
<?php
include 'config.php';

//this is the reference link for the code below 
//https://stackoverflow.com/questions/21136065/how-to-programmatically-find-out-which-queries-the-psql-command-d-does

    $sql = "SELECT c.relname AS Tables_in FROM pg_catalog.pg_class c
        LEFT JOIN pg_catalog.pg_namespace n ON n.oid = c.relnamespace
WHERE pg_catalog.pg_table_is_visible(c.oid)
        AND c.relkind = 'r'
        AND relname NOT LIKE 'pg_%'
        AND relname LIKE 'dd_%'
ORDER BY 1";
    $result = pg_query($sql);

    if (!$result) {
        echo "DB Error, could not list tables\n";
        echo 'MySQL Error: ' . pg_error();
        exit;
    }

    while ($row = pg_fetch_row($result)) {


   $tables .= "<option value={$row[0]}>{$row[0]}</option>";
    }

    pg_free_result($result);
    ?>