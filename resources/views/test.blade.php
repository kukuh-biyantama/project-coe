<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        @foreach ($response as $item);
        <div class="form-group">
            <label for="exampleInputEmail1">ID IoT</label>
            <input type="text" class="form-control" id="id_iot" aria-describedby="emailHelp" placeholder="id_iot">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Data PH Tanah</label>
            <input type="text" class="form-control" id="data_ph_tanah" placeholder="data_ph_tanah">
        </div>
        @endforeach
        <button type="submit" class="btn btn-primary">Submit</button>
      
    </form>
</body>
</html>