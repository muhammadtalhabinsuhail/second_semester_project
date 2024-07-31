<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pie Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>

    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql = "SELECT category, value FROM your_table";
$result = $conn->query($sql);

$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// Convert data to JSON
$json_data = json_encode($data);

// Close the connection
$conn->close();
?>

    <canvas id="myPieChart" width="200" height="2s00"></canvas>

    <script>
    var ctx = document.getElementById('myPieChart').getContext('2d');
    var data = <?php echo $json_data; ?>;

    var labels = data.map(function(item) {
        return item.category;
    });

    var values = data.map(function(item) {
        return item.value;
    });

    var myPieChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: labels,
            datasets: [{
                data: values,
                backgroundColor: ['red', 'blue', 'green', 'yellow', 'orange'],
            }]
        }
    });
    </script>

</body>

</html>