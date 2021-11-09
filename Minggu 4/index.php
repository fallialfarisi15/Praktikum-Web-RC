<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Praktikum web minggu 4</title>
</head>
<body>
    <header>
        <h1>Cek Status Mahasiswa</h1>
    </header>
    <div class="form">
        <h2>Input data diri anda</h2>
        <form method="post" id="user_form">
            <table class="table">
                <tr>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="text" id="fname" name="fname">
                    </td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td><input type="text" id="nim" name="nim"></td>
                </tr>
                <tr>
                    <td>Prodi</td>
                    <td><input type="text" id="prodi" name="prodi"></td>
                </tr>
                <tr>
                    <td>Angkatan</td>
                    <td><input type="text" id="angkatan" name="angkatan"></td>
                </tr>
            </table>
            <input type="submit" class="button" id="addData" value="cek status anda">
        </form>
    </div>

    <div id="show_data">

    </div>

    <script type="text/javascript">
        $(document).ready(function(){

                showData()

                function showData(){
                    $.ajax({
                        url:'show.php',
                        type:'GET',
                        success : function(data){
                            $(#show_data).html(data);
                        }
                    })
                }
        
            
            $('#addData').click(function(){
                var data = $('#user_form').serialize();
                $.ajax({
                        type : 'POST',
                        url : "add.php",
                        data : data,
                        success : function(data){
                        showData() 
                    }
                });
            });

            //belomm niiih
            $('#show').on('click','#editButton',function(){
                    var id = $(this).attr("value");
                    $.ajax({
                        type :'GET',
                        url : 'edit.php',
                        data :{id:id},
                        success : function(data){
                            // alert(data);
                        $('#show_data').html(data);
                    }
                });
            });

            $('#show').on('submit','#form_mahasiswa_edit',function(){
                var dataForm = $(this).serialize();
                $.ajax({
                    type :'POST',
                    url : 'store.php',
                    data :dataForm,
                    cache : false,
                    success : function(data){
                        $('#show_data').html(data);
                    }
                });
            });

            // $('#show').on('click','#batalFile',function(){
                $.ajax({
                    type : 'GET',
                    url : 'show.php',
                    success : function(data){
                        $('#show_data').html(data);
                    }
                });
            });

             // $('#show').on('click','#deleteButton',function(){
                // var hapusId = $(this).attr("value");
                $.ajax({
                    type : 'POST',
                    url : 'delete.php',
                    // data : {hapusId:hapusId},
                    success : function(data){
                        showData();
                    }
                });
            });

        }); 

    </script>

    <!-- <?php
        $mysqli = new mysqli("localhost", "root" , "" , "namadb" );
        if($mysqli->connect_error) {
        exit('Could not connect');
        }

        $sql = "SELECT customerid, companyname, contactname, address, city, postalcode, country
        FROM customers WHERE customerid = ?";

        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("s", $_GET['q']);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($cid, $cname, $name, $adr, $city, $pcode, $country);
        $stmt->fetch();
        $stmt->close();

        echo "<table>";
        echo "<tr>";
        echo "<th>CustomerID</th>";
        echo "<td>" . $cid . "</td>";
        echo "<th>CompanyName</th>";
        echo "<td>" . $cname . "</td>";
        echo "<th>ContactName</th>";
        echo "<td>" . $name . "</td>";
        echo "<th>Address</th>";
        echo "<td>" . $adr . "</td>";
        echo "<th>City</th>";
        echo "<td>" . $city . "</td>";
        echo "<th>PostalCode</th>";
        echo "<td>" . $pcode . "</td>";
        echo "<th>Country</th>";
        echo "<td>" . $country . "</td>";
        echo "</tr>";
        echo "</table>";
    ?> -->
</body>
</html>