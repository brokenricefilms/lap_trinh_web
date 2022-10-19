	<?php

    function BCC($n, $colorHead = "gray", $color1 = "green", $color2 = "yellow")
    {
    ?>
	    <table>
	        <tr>
	            <td colspan="3" bgcolor="<?php echo $colorHead ?>">Bảng cửu chương <?php echo $n; ?></td>
	        </tr>
	        <?php
            for ($i = 1; $i <= 10; $i++) {
            ?>
	            <?php
                if ($i % 2 === 0) {
                ?>
	                <tr bgcolor="<?php echo $color1 ?>">
	                    <td><?php echo $n; ?></td>
	                    <td><?php echo $i; ?></td>
	                    <td><?php echo $n * $i; ?></td>
	                </tr>
	            <?php
                } else {
                ?>
	                <tr bgcolor="<?php echo $color2 ?>">
	                    <td><?php echo $n; ?></td>
	                    <td><?php echo $i; ?></td>
	                    <td><?php echo $n * $i; ?></td>
	                </tr>
	            <?php
                } ?>
	        <?php
            }
            ?>
	    </table>
	<?php
    }

    function BanCo($size = 8)
    {
    ?>
	    <div id="banco">
	        <?php
            for ($i = 1; $i <= $size; $i++) {
                for ($j = 1; $j <= $size; $j++) {
                    $classCss = (($i + $j) % 2) == 0 ? "cellWhite" : "cellBlack";
                    echo "<div class='$classCss'> $i - $j</div>";
                }
                echo "<div class='clear' />";
            }
            ?>
	    </div>
	<?php

    }
    ?>