<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Plant</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/eadaeebdec.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/add-plant.css">
</head>

<body class="add-plant-container">
    <header>
        <p class="logo-main">gplant</p>
        <nav>

            <div class="nav-desktop">
                <ul>
                    <li><a href="#">home</a></li>
                    <li><a href="#">discover</a></li>
                    <li><a href="#">contact</a></li>
                    <li><a href="public/views/login.html">sign in</a></li>
                </ul>
            </div>
        </nav>
        <div class="nav-bottom-mobile">

            <a href="#"><i class="fas fa-seedling"></i>My Plants</a>
            <a href="#"><i class="fas fa-plus-circle"></i>Add Plant</a>
            <a href="#"><i class="fas fa-university"></i>Discover</a>

        </div>
    </header>
    <main class="add-plant-main">
        <section class="form-section">
            <form class="add-plant-form" action="addPlant"  method="POST" ENCTYPE="multipart/form-data">
                <?php if(isset($messages)){
                    foreach ($messages as $message)
                        echo $message;
                }
                ?>
                <div class="form-img">
                    <label class="label-img" for="file-input">
                        <i class="far fa-images"></i>
                        <p>PRESS TO CHOOSE A FILE</p>
                    </label>
                    <input id="file-input" name="file" type="file">
                    
                </div>
                <div class="form-text">
                    <input type="text" name="name" placeholder="name">
                    <input type="text" name="type" placeholder="type">
                    <button type="submit">ADD</button>

                </div>

            </form>
        </section>
       
    </main>
</body>

</html>