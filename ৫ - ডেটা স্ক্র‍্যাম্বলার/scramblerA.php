<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scrambler Project</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .btn-primary{
            background: goldenrod !important;
            border: none;
        }
        .width{
            height:100px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row ml-3">
            <div class="col-md-4 offset-md-4">
                <div class="text-left ">
                    <h1>Data Scrambler</h1>
                    <p>Use this application to scramble your data</p>
                    <a href="">Encode | </a>
                    <a href="">Decode | </a>
                    <a href="">Generate Key </a>

                </div>
            </div>
        </div>
        <div class="row ml-3">
            

<form class="col-md-6 offset-md-4">
  <div class="form-group">
    <label for="exampleInputEmail1">Key</label>
    <input type="email" class="form-control" id="exampleInputEmail1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Data</label>
    <textarea name="" id="" cols="30" rows="10" class="form-control width" ></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Result</label>
    <textarea name="" id="" cols="30" rows="10" class="form-control width" ></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Do IT FOR ME</button>
</form>
        </div>
    </div>

</body>

</html>