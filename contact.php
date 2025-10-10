<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Contact</title>
</head>

<body>
    <div>
        <div class="container">
            <nav class="navbar navbar-expand-sm bg-light mt-2">
                <div class="container-fluid">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="bootstrap.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link 3</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <header class="row mt-3 container-fluid">
                <div class="col-lg-12 bg-light p-5 border rounded-3">
                    <p class="h1">Hello, world!</p>
                    <p class="h6">This is a simple hero unit, a simple jumbotron-style compononent for calling extra attention to featured content or information.</p><br><br>
                    <button type="button" class="btn btn-success">Learn more</button>
                </div>
            </header>
            <main class="row mt-4">
                <form action="" method="GET">
                    <label for="fname">First Name: </label><br>
                    <input type="text" id="fname" name="fname"><br>
                    <label for="lname">Last name: </label><br>
                    <input type="text" id="lname" name="lname"><br>
                    <label for="email">Email: </label><br>
                    <input type="text" id="email" name="email"><br><br>
                    <input type="submit" value="Submit"> 
                </form>
            </main>
        </div>
</body>

</html>