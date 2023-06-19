<?php
$name=$_GET['name'];
$key='a359a5eaaced4d60a02140512231906';
$url='http://api.weatherapi.com/v1/current.json?key='.$key.'&q='.$name.'&aqi=no';
$response=file_get_contents($url);
$data=json_decode($response,true);
?>



<table border="1">
<tr>
<th>City</th>
<th>Region</th>
<th>Country</th>
<th>Local Time</th>
<th>Temperature</th>
<th>Condition</th>
<th>Wind Speed</th>
<th>Wind Direction</th>
<th>Humidity</th>
<th>Pressure</th>
<th>Cloud</th>
<th>UV</th>
<th>Visibility</th>
<th>Precipitation</th>
</tr>
<tr>

<td><?php echo $data['location']['name'];?></td>
<td><?php echo $data['location']['region'];?></td>
<td><?php echo $data['location']['country'];?></td>
<td><?php echo $data['location']['localtime'];?></td>
<td><?php echo $data['current']['temp_c'];?>&deg;C</td>
<td><?php echo $data['current']['condition']['text'];?></td>
<td><?php echo $data['current']['wind_kph'];?>kph</td>
<td><?php echo $data['current']['wind_dir'];?></td>
<td><?php echo $data['current']['humidity'];?>%</td>
<td><?php echo $data['current']['pressure_mb'];?>mb</td>
<td><?php echo $data['current']['cloud'];?>%</td>
<td><?php echo $data['current']['uv'];?></td>
<td><?php echo $data['current']['vis_km'];?>km</td>
<td><?php echo $data['current']['precip_mm'];?>mm</td>
</tr>
</table>
<?php

?>
</body>
</html>

