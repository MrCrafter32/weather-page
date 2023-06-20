<?php
$name=$_GET['name'];
$key='a359a5eaaced4d60a02140512231906';
$url='http://api.weatherapi.com/v1/current.json?key='.$key.'&q='.$name.'&aqi=no';
$response=file_get_contents($url);
$data=json_decode($response,true);

?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="./css/action.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/home.css">
</head>
<body>


<?php
    include './includes/header.php'; 
?>

<div class='weather rounded'>
    <div class="weather-container rounded">
        <div class="city name d-flex flex-row mb-3">
            <img class = "weather-pin p-2" src="./img/weather-pin.png" height="50px" width="50px">
            <p class= "weather-name p-2"><?php echo $data['location']['name'].', '.$data['location']['region'].', '.$data['location']['country']; ?> </p>
        </div>
        <div class= "d-flex flex-row mb-3">
            <div>
            <div class="weather-icon p-2">
                <img src="<?php echo $data['current']['condition']['icon']; ?>" height="150px" width="150px">
            </div>
            <div class="weather-info p-2">
                <p class="weather-temp"><?php echo $data['current']['temp_c']; ?>°C</p>
                <p class="weather-condition"><?php echo $data['current']['condition']['text']; ?></p>
            </div>
            </div>
        </div>
    </div>
</div>

<?php
include './includes/footer.php'; 
?>
</body>

</body>
</html>

