<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Formulario</title>
    </head> 

    <body>
    <div class="col-md-4 mx-auto">
    <div class="card-body">
        <div class="card-header">
            <h1>Complete Boot Camp PHP</h1>
        </div>
        <div>
            <?php
            session_start();
            $value = "";
            if($_SESSION['boolt'] == true){    
                if(empty($_SESSION['username']) && empty( $_SESSION['password'])){
                    $value = $_SESSION['err_messg'];
                    echo "<p>".$value."</p>";
                }else{
                    echo "";
                }
            }
            
                
            ?>
        </div>
        <form action="/form-php/datos.php" method="POST">
            <div class="form-group">
                <input type="text" name="user" placeholder="Username" class="form-control">
                <br>
            </div>
        
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" class="form-control">
                <br>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">
                    Save
                </button>
            </div>

        </form>
    </div>
    </div>
    </body>
</html>

