<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Year in Footer</title>
    <style>
        footer {
            background-color: #f2f2f2;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>Website Content</h1>
    <p>This is the content of your website.</p>
    
   
    <footer class="footer text-center"> <?php echo date("Y"); ?> &copy; Balaji Amrut - Developed by Balaji Amrut Builders and Promoters pvt. ltd. </footer>
</body>
</html>
