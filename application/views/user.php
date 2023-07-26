<!DOCTYPE html>
<html lang="en">

<head>
    <title>tes</title>
    <style>

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  width: 600px;
}


.container {
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

@media (min-width: 768px) {
  .container {
    width: 750px;
  }
}

@media (min-width: 992px) {
  .container {
    width: 970px;
  }
}

@media (min-width: 1200px) {
  .container {
    width: 1170px;
  }
}



.container .col p {
  padding: .25rem .75rem;
}


/* 2 columns (600px) */

@media only screen and (min-width:600px) {
  .container .col {
    float: left;
    width: 50%;
  }
}


/* 3 columns (768px) */

@media only screen and (min-width:768px) {
  .container .col {
    width: 33.333%;
  }
}


/* 4 columns (992px) */

@media only screen and (min-width:992px) {
  .container .col {
    width: 25%;
  }
}



    </style>
</head>

<body>

<div class="container" >
<table>
<thead>
<th style="width:500px; height:70px;" >Form Data Diri</th>
</thead>

<tbody>
    <td style="padding-top: 1em;">

    <div class="col"> Nama Lengkap </div>
<div class="col" style="width: 300px;"> : <input type="text" name="nama" id="nama"> </div>

<div class="col" style="padding-top: 0.5em;"> Tempat Tanggal Lahir </div>
<div class="col" style="width: 300px; padding-top: 0.5em; "> : <input type="text" name="nama" id="tempat" size="10">
<input type="text" name="nama" id="tanggal" size="2"> <input type="text" name="nama" id="bulan" size="3"> <input type="text" name="nama" id="tahun" size="1"></div>
</div>

<div class="col" style="padding-top: 0.5em;"> <button type="submit" id="click" >tampilkan</button> </div>




</td>
</tbody>






</table>


</div>

</body>

<script>
    
    
    document.getElementById('click').onclick = function(){
        
        var nama = document.getElementById("nama").value;

    alert('Nama Lengkap :' + nama);
}

</script>



</html>