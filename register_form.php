<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coins shop</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="containe">
        <h1>Enter Etudiant info</h1>
        <?php
    if ( isset($_GET["error"])) {
        if($_GET["error"] == "emptyinput") {
            echo '<p class="error">Fill in all Fields !</p>';
        }else if ($_GET['error'] == "empty") {
            echo '<p>Complet Data !</p>';
        }
       
        else if ($_GET['error'] == "none") {
            echo '<p class="succes">You have signed up succefuly !</p>';
        }
    }

    echo "<style>";
    echo ".error {
        color: white;
        background: red;
        padding: .6rem 1rem;
        font-weight: 700;
        border-radius: 5px;
    }";
    echo ".succes {
        color: white;
        background: green;
        padding: .6rem 1rem;
        font-weight: 700;
        border-radius: 5px;
    }";
    echo "</style>";
    ?>
        <form method="post" action="register.inc.php">
            <div class="box">
                <input type="text" name="username"  placeholder="...">
                <span>name :</span>
            </div>
            <div class="box">
                <input type="text" name="francais"  placeholder="...">
                <span>francais :</span>
            </div>
            <div class="box">
                <input type="text" name="arabe"   placeholder="...">
                <span>arabe :</span>
            </div>
            <div class="box">
                <input type="text" name="anglais" placeholder="...">
                <span>anglais :</span>
            </div>
            <div class="btn">
                <button type="submit" name="submit">go</button>

            </div>
        </form>
        
    </div>

   

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>