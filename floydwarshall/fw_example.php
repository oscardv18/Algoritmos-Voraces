<?php

    include('fw.class.php');
                       # A B C D E F
    $graph = array(array(0,3,0,6,0,0),#A
                   array(0,0,5,0,1,4),#B
                   array(0,0,0,0,0,4),#C
                   array(0,1,4,0,2,0),#D
                   array(0,0,2,0,0,3),#E
                   array(0,0,0,0,0,0));#F
    $nodes = array("a", "b", "c", "d", "e", "f");

    $fw = new FloydWarshall($graph, $nodes);
    //$fw->print_path(0,2);
    $fw->print_graph();
    $fw->print_dist();
    $fw->print_pred();

    $sp = $fw->get_path(0,2);

    echo 'The sortest path from a to c is: <strong>';
    foreach ($sp as $value) {
        echo $nodes[$value] . ' ';
    }
    echo '</strong>';

    $sp = $fw->get_path(1,3);

    echo 'The sortest path from a to c is: <strong>';
    foreach ($sp as $value) {
        echo $nodes[$value] . ' ';
    }
    echo '</strong>';

    

    print_r($fw->get_distance(0,2));

?>
