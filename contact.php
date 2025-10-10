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
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </main>
        </div>
</body>

</html>