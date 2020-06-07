<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Inventory</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-fluid pt-3 bg-dark text-white">
        <header class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h1 class="text-center">Hello Sir, Here's What You Have in Your Inventory.</h1>
        </header>
        <div class="row d-flex align-items-center justify-content-center pt-3">
            <table class="table col-sm-8 col-md-8 col-lg-8 col-xl-8">
                <thead>
                    <tr>
                        <th class="text-white">Num</th>
                        <th class="text-white">Item Name</th>
                        <th class="text-white">Quantity</th>
                        <th class="text-white">Price</th>
                        <th class="text-white">Condition</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-white">1</td>
                        <td class="text-white">Banana</td>
                        <td class="text-white">17</td>
                        <td class="text-white">10000</td>
                        <td class="text-white">Edible</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row d-flex align-items-center justify-content-center">
            <a href="/input"><h3>Click Here to Add</h3></a>
        </div>

    </div>
</body>
</html>