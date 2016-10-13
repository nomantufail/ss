<?php
/**
 * Created by PhpStorm.
 * User: nomantufail
 * Date: 28/09/2016
 * Time: 9:13 PM
 */
?>

<html>
<body>
<pre>
    <?php
    foreach($response['data']['students'] as $student /* @var $student \App\DB\Providers\SQL\Models\Student\Student::class */){
       echo $student->fName." ".$student->lName;
    }
    ?>
</pre>
</body>
</html>
