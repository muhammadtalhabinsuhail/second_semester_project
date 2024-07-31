<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customized Bootstrap Date Picker Example</title>

  <!-- Bootstrap CSS (you need to include Bootstrap in your project) -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- Bootstrap-datepicker CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

  <style>
    /* Custom styles for the date picker */
    .datepicker-dropdown {
      border: 1px solid #ccc;
      border-radius: 4px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .datepicker table {
      width: 100%;
    }

    .datepicker th,
    .datepicker td {
      text-align: center;
    }

    .datepicker th {
      font-weight: bold;
    }

    .datepicker-days th,
    .datepicker-months th {
      text-transform: uppercase;
      font-size: 0.8rem;
    }

    .datepicker .today {
      background-color: #f0f0f0;
    }

    .datepicker th.prev,
    .datepicker th.next {
      cursor: pointer;
      font-size: 1rem;
    }

    .datepicker .prev i,
    .datepicker .next i {
      display: inline-block;
    }
  </style>
</head>
<body>

  <div class="container mt-5">
    <label for="datepicker">Select a date:</label>
    <div class="input-group date" data-provide="datepicker">
      <input type="text" class="form-control" id="datepicker">
      <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS (you need to include Bootstrap JS in your project) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Bootstrap-datepicker JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

  <script>
    // Initialize datepicker
    $(document).ready(function(){
      $('#datepicker').datepicker();
    });
  </script>

</body>
</html>
