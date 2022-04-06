<?php

    include 'config/connection.php';

    $sql = 'SELECT * FROM t_drh_master';

    $list1 = $mysqli->query($sql);
    $list2 = $mysqli->query($sql);

    include 'views/v_index.php';

?>