<?php
require("/home/WinglessWhistle/VirialXYZ/src/lib/githubwebhookthing.php");

use GitHubWebhook\Handler;

$handler = new Handler("killme", __DIR__);
shell_exec('cd /home/WinglessWhistle/VirialXYZ/');
if($handler->handle()) {
    echo "OK";
} else {
    echo "Wrong secret";
}
?>