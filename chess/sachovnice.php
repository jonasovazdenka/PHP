<table style="margin:auto">
    <?php
        for($radek=1; $radek <= 8; $radek++){
            echo "<tr>";
            for($sloupec=1; $sloupec <=8; $sloupec++){
                if($sloupec % 2 == 0) {
                    $color = '#fff';
                } else {
                    $color = '#000';
                }

                if($radek % 2 == 0) {
                    if($sloupec % 2 == 0) {
                    $color = '#000';
                } else {
                    $color = '#fff';
                }
            }
                echo "<td style = 'border:0 solid; height:100px;width:100px;background-color:$color;'></td>";
            }
            echo "</tr>";
        }
    ?>

</table>