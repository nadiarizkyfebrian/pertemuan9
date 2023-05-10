<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan3</title>
</head>
<body>

    <form>
        <div>
            Nama lengkap
            <input type="text" id="txNAMA">
        </div>

        <div>
            <button type="button" onclick="checknama()"> Check Nama</button>
        </div>

    </form>

    <script>
        function checknama(){
                let nm = document.getElementById("txNAMA").value;
                alert("Isi dari field nama: " + nm);
        }
    </script>

</body>
</html>