<?php
ini_set('display_error',1);
echo filter_input (input_server,'DOCUMENT_ROOT');
include filter_input(INPUT_SERVER, 'DOCUMENT_ROOT')."/les7/include/lib.php";
get_value(1, 3);

