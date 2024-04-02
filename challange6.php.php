<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
        }
        .background-gray {
            background-color: #d3d3d3;
        }
        .background-white {
            background-color: white;
        }
    </style>
</head>
<body>
    <h1>Galeri Hewan</h1>
    <table>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Foto</th>
            <th>Jumlah Kaki</th>
            <th>Cari di Google</th>
        </tr>
        <?php
        $data = array(
            array('namaHewan' => 'Ayam', 'jumlahKaki' => 2),
            array('namaHewan' => 'Angsa', 'jumlahKaki' => 2),
            array('namaHewan' => 'Bebek', 'jumlahKaki' => 2),
            array('namaHewan' => 'Domba', 'jumlahKaki' => 4),
            array('namaHewan' => 'Kalkun', 'jumlahKaki' => 2),
            array('namaHewan' => 'Kambing', 'jumlahKaki' => 4),
            array('namaHewan' => 'Kelinci', 'jumlahKaki' => 4),
            array('namaHewan' => 'Kerbau', 'jumlahKaki' => 4),
            array('namaHewan' => 'Kuda', 'jumlahKaki' => 4),
            array('namaHewan' => 'Sapi', 'jumlahKaki' => 4)
        );    

        function sortData($a, $b) {
            return strcmp($a['namaHewan'], $b['namaHewan']);
        }

        usort($data, 'sortData');

        $i = 1;
        
        foreach ($data as $item) {
            $class;
            if ($i % 2 == 0) {
                $class = 'background-white';
            } else {
                $class = 'background-gray';
            }
        ?>
        <tr class="<?php echo $class ?>">
            <td><?php echo $i ?></td>
            <td><?php echo $item['namaHewan'] ?></td>
            <td><img src="img/<?php echo $item['namaHewan'] ?>.jpg" width="50" height="50"></td>
            <td><?php echo $item['jumlahKaki'] ?></td>
            <td><a href="https://www.google.com/search?tbm=isch&q=<?php echo $item['namaHewan'] ?>" target="_blank">Cari</a></td>
        </tr>
        <?php
        $i++;
        }
        ?>
       
    </table>
</body>
</html>
