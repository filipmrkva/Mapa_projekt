<html>
    <head>
       <title>Formulář</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
        <style>
            input{
    width: 100%;
    height: 5%;
    border: 1px;
    border-radius: 05px;
    padding: 8px 15px 8px 15px;
    margin: 10px 0px 15px 0px;
    box-shadow: 2px 2px 3px 2px grey;
}
            .card{
    background-color:#bebecb;
    border: 2px;
    border-style: solid;
    border-color: white;
}
body {
     text-align: center;
     background-image: url(<?php echo base_url();?>images/wecantrryit.jpg);
    }
        </style>
    </head>
    <body>
        <div class="row">
            <div class="col-4"></div>
        <div class="col-4">
                <div class="card">
  <div class="card-body">
    <center>
        <h4> Přidání dat do databáze </h4>
        <form action="" method="POST">
            <input type="text" name="nazev" placeholder="Zadejte název školy"/><br/>
            <input type="text" name="nazevm" placeholder="Zadejte název města"/><br/>
            <input type="text" name="pocet" placeholder="Zadejte počet přijatých"/><br/>
            <input type="text" name="nazevo" placeholder="Zadejte název oboru"/><br/>
            
            <input type="submit" name="insert" value="Přidat data">
        </form>
    </center>
      <div><br>&nbsp</div>
            </div>
            </div>
            </div>
            <div class="col-4"></div>
        </div>
    </body>
</html>

<?php

 // přidávání dat do databáze

    $connect = mysqli_connect("localhost","root","","mapa_proj");
    if(isset($_POST['insert'])) {
        
        $nazev = $_POST['nazev'];
        $nazevm = $_POST['nazevm'];
        $pocet = $_POST['pocet'];
        $nazevo = $_POST['nazevo'];
        
    if(!empty($nazev) && !empty($nazevm) && !empty($pocet) && !empty($nazevo) )   {
    
          $sql = "INSERT INTO `skola.nazev, mesto.nazevm, pocet_prijatych.pocet, obor.nazevo" . "`(`nazev`, `nazevm`, `pocet`,`nazevo`)"
                               . " VALUES ('$nazev','$nazevm','$pocet','$nazevo')" ;
       /* $sql = "INSERT skola.nazev as 'Škola', mesto.nazevm as 'Město', pocet_prijatych.pocet as 'Počet přijatých', obor.nazevo as 'Obor' from skola INNER JOIN mesto ON mesto.id=skola.mesto INNER join pocet_prijatych ON pocet_prijatych.skola = skola.id INNER JOIN obor ON obor.id = pocet_prijatych.obor INTO `skola && mesto && pocet_prijatych && obor`(`nazev`, `nazevm`, `pocet`,`nazevo`)"
                               . " VALUES ('$nazev','$nazevm','$pocet','$nazevo')" ; */
    $qry = mysqli_query($connect, $sql);
    if($qry){
        echo '<script type="text/javascript"> alert("Data byla úspěšně přidána do databáze") </script>';
    }   
        
    } else {
        echo '<script type="text/javascript"> alert("Všechny kolonky musí být vyplněné") </script>';
    }
     
    }
    mysqli_close($connect);

   /* $sql = "INSERT INTO `majitel`(`jmeno`, `prijmeni`, `adresa`,`telefon`, `email`)"
                               . " VALUES ('$jmeno','$prijmeni','$adresa','$telefon','$email')" ; */
    ?>