<?php
echo "What's your name\n";
$string = fgets(STDIN);
if ($string == "Clark Kent\n"){
    echo "You're Superman\n";
}
else {
    echo "Sorry to bother you\n";

}
