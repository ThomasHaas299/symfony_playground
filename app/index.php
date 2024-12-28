Im Container symfony-php wurde eine bash geöffnet
<pre>
    docker exec -it symfony-php bash
</pre>
Dort wurde dann folgendes ausgeführt:
<pre>
    composer require nesbot/carbon
</pre>
Hinweis: Es hat etliche symfony-Abhängigkeiten.<br>
Und das wird im Folgenden verwendet.
<hr>

<?php
require 'vendor/autoload.php';

use Carbon\Carbon;

$now = Carbon::now();
echo "Aktuelles Datum: " . $now->toDateString() . "<br>";
echo "Vor einer Woche: " . $now->subWeek()->toDateString();
