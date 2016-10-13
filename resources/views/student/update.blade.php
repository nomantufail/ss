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
    {{dd($response['data']['student'])}}
    <form action="{{url('/')}}/student/update" method="post">
        <input name="f_name" placeholder="first name here..">
        <input name="l_name" placeholder="last name here...">
        <input type="submit">
    </form>
</body>
</html>
