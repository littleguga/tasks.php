<?php
/*
 * Created by PhpStorm.
 * User: littleguga
 * Github: https://github.com/littleguga/
 * Date: 08.08.2015
 * Time: 12:09
 */
?>
        <div class="center">
            <h2>
                <?php echo $LANG["logneeded"] ?>
            </h2>
            <form name="login" action="action.php" method="GET">
                <div class="row">
                    <input name="ulogin" type="text" value="" placeholder="login" />
                </div>
                <div class="row">
                    <input name="upass" type="password" value="" />
                </div>
                <div class="row">
                    <input type="hidden" name="action" value="login" />
                    <input type="submit" name="submit" value="<?php echo $LANG["login"] ?>" />
                </div>
            </form>
        </div>
