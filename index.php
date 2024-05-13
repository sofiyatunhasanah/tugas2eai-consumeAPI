
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website API Football</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-primary">
        <div class="container">
            <span class="navbar-brand my-3 h3 text-white">Website Football</span>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg mb-20">
        <div class="container d-flex justify-content-center">
            <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
                <ul class="navbar-nav mb-3 mt-4 fw-bold">
                    <li class="nav-item">
                        <a class="nav-link btn btn-lg <?php echo (isset($_GET['league']) && $_GET['league'] == 'indonesia') ? 'text-primary' : ''; ?>" href="index.php?league=indonesia">Indonesia League</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-lg <?php echo (isset($_GET['league']) && $_GET['league'] == 'english') ? 'text-primary' : ''; ?>" href="index.php?league=english">English League</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link btn btn-lg <?php echo (isset($_GET['league']) && $_GET['league'] == 'spain') ? 'text-primary' : ''; ?>" href="index.php?league=spain">Spain League</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-lg <?php echo (isset($_GET['league']) && $_GET['league'] == 'france') ? 'text-primary' : ''; ?>" href="index.php?league=france">France League</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-lg <?php echo (isset($_GET['league']) && $_GET['league'] == 'german') ? 'text-primary' : ''; ?>" href="index.php?league=german">German League</a>
                    </li>
                    <li class="nav-item">
                        <a  class="nav-link btn btn-lg <?php echo (isset($_GET['league']) && $_GET['league'] == 'italy') ? 'text-primary' : ''; ?>" href="index.php?league=italy">Italy League</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <?php
            if(isset($_GET['league'])) {
                $league = $_GET['league'];

                if ($league === 'english') {
                    include 'classement/english.php';
                } elseif ($league === 'france') {
                    include 'classement/france.php';
                } elseif ($league === 'german') {
                    include 'classement/german.php';
                } elseif ($league === 'indonesia') {
                    include 'classement/indonesia.php';
                } elseif ($league === 'italy') {
                    include 'classement/italy.php';
                } elseif ($league === 'spain') {
                    include 'classement/spain.php';
                }
            } else {
            include 'classement/english.php'; 
            }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>


