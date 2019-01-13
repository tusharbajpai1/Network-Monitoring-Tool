<?php
exec("./scriptfile.sh");
echo "Script file running in background ....Wait for couple of seconds";
header('refresh:5,URL="welcome.php"');
	


?>
