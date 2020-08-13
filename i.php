<a href="?delete">Delete</a>
<?php

if(isset($_GET['delete'])){
    unlink(__FILE__);
    exit("Bye.");
}

echo phpinfo();