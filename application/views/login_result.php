<!DOCTYPE html>
<html>
<head>
    <title>Login Result</title>
    <style>
        body {
            background-color: <?php echo $status === 'success' ? 'green' : 'red'; ?>;
            color: white;
            text-align: center;
            font-size: 24px;
            padding: 50px;
        }
    </style>
</head>
<body>
    <?php echo $message; ?>
</body>
</html>
