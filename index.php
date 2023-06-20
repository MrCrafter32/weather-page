<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<body>
    <?php 
    include 'includes/header.php';
    ?>

    <div class="header">
        <h1>Enter your City Name</h1>


    <div>
        <form action="action.php" method="get">
            <input  type="text" name="name" placeholder="Name">
            <button type="submit" name="submit">Submit</button>
        </form>
         </div>
    </div>




    <?php
     include 'includes/footer.php';  
    ?>

    
</body>

</html>