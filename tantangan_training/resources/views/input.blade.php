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
    <div class="container-fluid bg-dark">
        <h1 class="pt-5 text-center  text-white">Enter Your Items Here</h1>
        <form class="pt-5 pb-5 d-flex flex-column align-items-center" action="{{route('inventory.store')}}" method="POST">
        @csrf
            <div class="
            justify-content-center 
            col-sm-12 col-md-10 col-lg-8 col-xl-8 
            form-group text-white">
                <label for="item_name">Item Name:</label>
                <input type="text" name="item_name" class="form-control" placeholder="Enter Item Name">
            </div>
            <div class="col-sm-12 col-md-10 col-lg-8 col-xl-8 form-group text-white">
                <label for="pwd">Item Qtt:</label>
                <input type="number" name="item_qtt" class="form-control" placeholder="Quantity">
            </div>
            <div class="col-sm-12 col-md-10 col-lg-8 col-xl-8 form-group text-white">
                <label for="pwd">Price:</label>
                <input type="number" name="item_price" class="form-control" placeholder="for 1">
            </div>
            <div class="col-sm-12 col-md-10 col-lg-8 col-xl-8 form-group text-white">
                <label for="item_name">Condition:</label>
                <input type="text" name="item_condition" class="form-control" placeholder="Item Condition">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>