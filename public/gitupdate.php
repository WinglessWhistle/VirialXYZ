<?php
$output=null;
echo ("cd into directory\n");
$output=shell_exec('cd /home/WinglessWhistle/VirialXYZ/');
print_r($output);
$output=null;
echo ("pulls changes from github\n");
$output=shell_exec('git pull');
print_r($output);
?>