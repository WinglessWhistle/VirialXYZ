<?php
$output=null;
$retval=null;
echo ('cd into directory');
exec('cd /home/WinglessWhistle/VirialXYZ/', $output, $retval);
echo "Returned with status $retval and output:\n";
print_r($output);
$output=null;
$retval=null;
echo ('pulls changes from github');
exec('git pull', $output, $retval);
echo "Returned with status $retval and output:\n";
print_r($output);
?>