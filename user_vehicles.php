<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- <!DOCTYPE html>
<html>
<body>

<?php
$period = new DatePeriod(
    new DateTime('2010-10-01'),
    new DateInterval('P1D'),
    new DateTime('2010-10-06')
);
foreach ($period as $key => $value) {
    echo $value->format('Y-m-d') . '<br>';
}
?>

</body>
</html>
 -->




    <div class="container">
        <input type="text" name="date" class="form-control datepicker" autocomplete="off">
    </div>

</body>

<?php
include('include/connect.php');
// $dates = $con->prepare("select * from vec_order where vehicles_id =?");
// $dates->execute(array($_GET['id']));
// $date = $dates->fetch();
//
// $period = new DatePeriod(
//     new DateTime($date['startday']),
//     new DateInterval('P1D'),
//     new DateTime($date['endday'])
// );

$x = [];
foreach ($period as $value) {
    $x[] =  $value->format('d-m-Y');
}
/* $d = '';
foreach ($x as $key => $b) {
    $d .= '"' . $b . '",';
} */
?>
<script type="text/javascript" language="javascript">
    var pausecontent = new Array();
    <?php foreach ($x as $key => $val) { ?>
        pausecontent.push('<?php echo $val; ?>');
    <?php } ?>
</script>


<?php
//get all dates between to dates
$period = new DatePeriod(
    new DateTime('11-8-2022'),
    new DateInterval('P1D'),
    new DateTime('30-8-2022')
);
//get date format
foreach ($period as $key => $val) {

    $val->format('m-d-Y');
}

?>
<script type="text/javascript">
    var pausecontent = new Array();
    <?php

    foreach ($period as $key => $val) {
    ?>
        pausecontent.push('<?php echo $val->format('m-d-Y'); ?>');
    <?php } ?>

    console.log(typeof pausecontent)


    $('.datepicker').datepicker({
        format: 'mm/dd/yyyy',
        beforeShowDay: function(date) {
            dmy = date.getDate() + "-" + (date.getMonth() + 1) + "-" + date.getFullYear();
            console.log(pausecontent.hasOwnProperty(dmy))
            // can't comper dates
            // if () {
            //     return false;
            // } else {
            //     return true;
            // }
        }
    })
</script>

</html>