+<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            background-color: rgba(255, 255, 255, 1);
            font-family: Arial, sans-serif;
        }

        .linkcontainer {
            padding: 20px;
            text-align: center;
            background-color: #f0f0f0;
            border-bottom: 2px solid #ff8226;
        }

        .linkcontainer .logo {
            width: 10%;
        }

        .linkcontainer .navbar {
            margin: 0 15px;
            text-decoration: none;
            color: #2196F3;
            font-size: 18px;
        }

        .linkcontainer .navbar:hover {
            color: #064579;
        }

        .content {
            text-align: center;
            padding: 20px;
        }

        .table-container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #2196F3;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body style="background-color: rgba(255, 255, 255, 255)">

<div class="linkcontainer">
  <img class="logo" src="logo_home.png" alt="logo" style="width:5%">
  <a class="navbar" href="kontakt/kontakt.php">Kontakt</a>
  <a class="navbar" href="onama.php">O nama</a>

</div>

<hr style="height:2px; background-color:rgba(35,50,120,255)">

<?php
$data = json_decode(file_get_contents('data.json'), true);
?>

<div class="content">
  <h3><?php echo $data['title']; ?></h3>

  <h4>
    <a href="#pt1">Rani život</a> | 
    <a href="#pt2">Rana karijera</a> | 
    <a href="#pt3">Najveći uspjesi</a> | 
    <a href="#tablica">Tablica</a>
  </h4>
  
  <hr>

  <?php foreach ($data['sections'] as $section): ?>
    <a id="<?php echo $section['id']; ?>"><h4><?php echo $section['title']; ?></h4></a>
    <h5><?php echo $section['content']; ?></h5>
    <img src="<?php echo $section['image']; ?>" alt="logo" style="width:10%">
    <hr>
  <?php endforeach; ?>

  <a id="tablica"><h4>Tablica</h4></a>
  <table style="width:60%;">
    <tr>
      <?php foreach ($data['table']['headers'] as $header): ?>
        <td><?php echo $header; ?></td>
      <?php endforeach; ?>
    </tr>
    <?php foreach ($data['table']['rows'] as $row): ?>
      <tr>
        <?php foreach ($row as $cell): ?>
          <td><?php echo $cell; ?></td>
        <?php endforeach; ?>
      </tr>
    <?php endforeach; ?>
  </table>
</div>

<hr style="height:2px; background-color:rgba(255,130,38,255)">

</body>
</html>
