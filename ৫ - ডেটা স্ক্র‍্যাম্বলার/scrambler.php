<?php 
include_once "scramblerf.php";
$modtaske='encode';
if(isset($_GET['task']) && $_GET['task']!=''){
    $task = $_GET['task'];
}
$key ='abcdefghijklmnopqrstuvwzyz1234567890'; 

if('key'==$task){
    $key_original = str_split($key);
    shuffle($key_original); 
    $key = join('',$key_original);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Scrambal Project</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
    <style>
        body {
            margin-top: 30px;
        }

        #data {
            width: 100%;
            height: 140px;
        }

        #result {
            width: 100%;
            height: 140px;
        }

        .hidden {
            display: none;
        }
        .design a{
            color:#00a8ff;
            font-size:20px;
            font-weight:bold;
        }
        .design a:hover{
            color:#fbc531;
            
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="column column-60 column-offset-20">
       
            <h2>Data Scrambler</h2>
            <p>Use this application to scramble your data</p>
      
            <p class="design" >
                <a href="/scrambler.php?task=encode">Encode</a> |
                <a href="/scrambler.php?task=decode">Decode</a> |
                <a href="/scrambler.php?task=key">Generate Key</a>

            </p>
        </div>
    </div>
    <div class="row">
        <div class="column column-60 column-offset-20">
            <form method="POST" >
                <label for="key">Key </label>
                <input type="text" name="key" id="key" <?php  displayKey($key);?> >
                <label for="data">Data</label>
                <textarea name="data" id="data"></textarea>
                <label for="result">Result</label>
                <textarea id="result"></textarea>

                <button type='submit'>Do It For Me</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>