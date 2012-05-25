<?php

foreach( explode(",", $_POST['tags']) as $tag ){
    echo $tag . "<br />";
}
