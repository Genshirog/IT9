<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['yes'])) {
            echo "ngi bayot";
        } elseif (isset($_POST['no'])) {
            echo "wa kay choice bayot jud ka";
        }
    } else {
        echo "Are you gay?";
        echo '<form method="post">
                <input type="submit" name="yes" value="Yes">
                <input type="submit" name="no" value="No">
              </form>';
    }
?>
