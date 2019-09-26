<!DOCTYPE html>
<html>
<head>
    <title>How Send an Email in Laravel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        .box{
            width:600px;
            margin:0 auto;
            border:1px solid #ccc;
        }
        .has-error
        {
            border-color:#cc0000;
            background-color:#ffff99;
        }
    </style>
</head>
<body>
<br />
<br />
<br />
<div class="container box">
    <p>Hi, This is {{ $data['name'] }}</p>
    <p>I have some query like {{ $data['message'] }}.</p>
    <p>It would be appriciative, if you gone through this feedback.</p>

</div>
</body>
</html>