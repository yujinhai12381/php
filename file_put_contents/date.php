<?php
    echo "start time :".date("Y-m-d h:i:sa")."\n";
    file_put_contents("time.txt",date("Y-m-d h:i:sa")."\n");
