<html>

<head>
    <title>Test</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</head>

<body>
    <form action="{{ route('store') }}" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Event</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Nama">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Jenis Event</label>
            <input type="text" name="jenis_event" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" placeholder="Jenis">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Harga</label>
            <input type="number" name="harga" class="form-control" id="exampleInputPassword1" placeholder="Harga">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" id="exampleInputPassword1" placeholder="Tanggal">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>
