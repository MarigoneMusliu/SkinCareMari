<?php
    session_start();
    require("kontrolluesidb.php");
	$kontrolluesidb = new kontrolluesidb();
	
	$ID_Pergjigjja  = $_POST['Pergjigjja'];
	$ID_Pyetja = $_POST['Pyetja'];
	
	$query = "INSERT INTO wscm_votimi (ID_Pyetja,ID_Pergjigjja,ID_Pjesmarresi) VALUES ('" . $ID_Pyetja ."','" . $ID_Pergjigjja . "','" . $_SESSION["ID_Pjesmarresi"] . "')";
    $insert_id = $kontrolluesidb->insertQuery($query);
    
    if(!empty($insert_id)) {
        $query = "SELECT * FROM wscm_pergjigjet WHERE ID_Pyetja = " . $ID_Pyetja;
        $Pergjigjja = $kontrolluesidb->runQuery($query);
    }
    
    if(!empty($Pergjigjja)) {
?>        
        <div class="poll-heading"> Result </div> 
<?php
        $query = "SELECT count(ID_Pergjigjja) as total_count FROM wscm_votimi WHERE ID_Pyetja = " . $ID_Pyetja;
        $total_rating = $kontrolluesidb->runQuery($query);

        foreach($Pergjigjja as $k=>$v) {
            $query = "SELECT count(ID_Pergjigjja) as Pergjigjja_count FROM wscm_votimi WHERE ID_Pyetja = " .$ID_Pyetja . " AND ID_Pergjigjja = " . $Pergjigjja[$k]["ID"];
            $Pergjigjja_rating = $kontrolluesidb->runQuery($query);
            $Pergjigjejet_count = 0;
            if(!empty($Pergjigjja_rating)) {
                $Pergjigjejet_count = $Pergjigjja_rating[0]["Pergjigjja_count"];
            }
            $percentage = 0;
            if(!empty($total_rating)) {
                $percentage = ( $Pergjigjejet_count / $total_rating[0]["total_count"] ) * 100;
                if(is_float($percentage)) {
                    $percentage = number_format($percentage,2);
                }
            }
            
?>
		<div class="answer-rating"> <span class="answer-text"><?php echo $Pergjigjja[$k]["Pergjigjja"]; ?></span><span class="answer-count"> <?php echo $percentage . "%"; ?></span></div>      
<?php 
        }
    }
?>
<div class="poll-bottom">
	<button class="next-link" onClick="show_poll();">Continue</button>
</div>