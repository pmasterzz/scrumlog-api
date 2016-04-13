<?php
    include 'php/getAllScrumlogs.php';
   
?>
<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="doorzichtig">
                    <h1>Scrumlog</h1>
                    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Show menu</a>
                    <p>
                    <?php 
                     if (isset($_POST["submit"])){
                         
                         //echo $scrumlogArray[0]['Input_Help'];
                        foreach($scrumlogArray as $scrumlog)
                        {
                            echo '<p>Datum:' .  '<br>';
                            echo $scrumlog['Date'] .  '<br>';
                            echo 'Wat heb je gister gedaan knuppel:' .  '<br>';
                            echo $scrumlog['Input_Yesterday'] .  '<br>';
                            echo 'wat zat je in de weg:' .  '<br>';
                            echo $scrumlog['Input_Problems'] .  '<br>';
                            echo 'wat denk je vandaag te bereiken:' .  '<br>';
                            echo $scrumlog['Input_Today'] .  '<br>';
                            echo 'hulp heb je zeker nodig:' .  '<br>';
                            echo $scrumlog['Input_Help'] .  '<br>';
                            echo 'welk van deze slachtoffers moet jouw helpen?' .  '<br>';
                            echo $scrumlog['Radio_Help'] .  '<br></p>';
                        }
                    }
                    else 
                    {
                        echo 
                        '<form method="post" action="" class="invullen">'
                        . ' <input type="date" name="Date" class="invullen" required><br>'
                        . ' <button type="submit" name="submit">Submit</button>'
                        . ' </form>';
                    }
                    ?>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
</div>