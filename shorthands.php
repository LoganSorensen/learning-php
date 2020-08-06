<?php
    $loggedIn = true;
    $arr = [1,2,3,4,5]

    // if($loggedIn){
    //     echo 'you are logged in';
    // } else {
    //     echo 'you are not logged in';
    // }

    // echo ($loggedIn) ? 'you are logged in' : 'you are not logged in';

    // $isRegistered = ($loggedIn == true) ? true : false;
    // echo $isRegistered;

    // $age = 20;
    // $score = 15;

    // echo 'Your score is: '.($score > 10 ? ($age > 10 ? 'Average' : 'Exceptional'):($age > 10 ? 'Horrible':'Average'));


?>

<div>
<?php if($loggedIn){ ?>
    <h1>Welcome User</h1>
<?php } else { ?>
    <h1>Welcome Guest</h1>
<?php } ?>
</div>
<!-- below is an alternative syntax for this if/else statement that feels cleaner -->
<div>
<?php if($loggedIn): ?>
    <h1>Welcome User</h1>
<?php else: ?>
    <h1>Welcome Guest</h1>
<?php endif; ?>
</div>

<div>
    <?php foreach($arr as $val): ?>
        <?php echo $val; ?>
    <?php endforeach; ?>
</div>