
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>task5</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
<div class="row placeholders">
    <div class="col-xs-6 col-md-offset-3 col-sm-3 placeholder">

        <h6>Cookies</h6>
        <p>Cookie get: <?php echo $cookieGet; ?> </p>
        <p>Cookie delete: <?php echo $cookieDel; ?></p>
    </div>
    <div class="col-xs-6 col-sm-3 placeholder">
        <h6>Session</h6>
        <p>Session get: <?php echo $sessionGet; ?> </p>
        <p>Session delete: <?php echo $cookieDel; ?></p>
    </div>

</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-2 main">
            <h2 class="sub-header">SQL</h2>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>key</th>
                        <th>data</th>
                    </tr>
                    <thead>
                    <tbody>
                    <?foreach($mysqlGet as $data):?>
                       <tr>
                            <?foreach($data as $key => $value):?>
                            <td><?= $key;?></td>
                            <td> <?= $value; ?><td>
                        <? endforeach;?>
                       </tr>
                    <?endforeach;?>
                    <tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-2 main">
            <h2 class="sub-header">Postgres</h2>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>key</th>
                        <th>data</th>
                    </tr>
                    <thead>
                    <tbody>
                    <?foreach($postgresGet as $data):?>
                        <tr>
                            <?foreach($data as $key => $value):?>
                            <td><?= $key;?></td>
                            <td> <?= $value; ?><td>
                                <? endforeach;?>
                        </tr>
                    <?endforeach;?>
                    <tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->

</body>
</html>

