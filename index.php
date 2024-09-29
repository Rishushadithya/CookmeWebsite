

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="./CSS/home.css">
    <title>Home page</title>
</head>
<body>
     <?php require_once('headerIndex.php'); ?> 

    <main class="container">
        <div>
            <div style="position: relative; text-align: center;">
                <img id="coverimage" src="./image/cover2.jpg" alt="cover" width="100%">
                
                <div class="welcome-message">
    <h1 id="welcome">Welcome to Cook Me</h1>
    <style>
        .welcome-message {    
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 3vw; /* Changed from px to vw for responsiveness */
            animation: fadeIn 2s ease-in-out;
        }
        #welcome {
            color: white;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</div>

            </div>
        </div>

        <section class="section">
            <h2>Recipes in this Category</h2>
            <div class="grid">
        
            <a href="./category.php#c1">
                    <article class="card">
                            <img src="./image/recipe/2-1.jpg" alt="Recipe Image">
                            <h3>Italian Recipes</h3>
                             <p>Brief description of the recipe...</p>
                        
                    </article>
                    </a>
                    
                    <a href="./category.php#c2">
                    <article class="card">
                            <img src="./image/recipe/2-1.jpg" alt="Recipe Image">
                        <h3>French Recipes</h3>
                        <p>Brief description of the recipe...</p>
                    </article>
                    </a>
                    
                    <a href="./category.php#c3">
                    <article class="card">
                            <img src="./image/recipe/2-1.jpg" alt="Recipe Image">
                        <h3>Chinese Recipes</h3>
                        <p>Brief description of the recipe...</p>
                    </article>
                    </a>

                    <a href="./category.php#c4">
                    <article class="card">
                            <img src="./image/recipe/2-1.jpg" alt="Recipe Image">
                        <h3>Japanese Recipes</h3>
                        <p>Brief description of the recipe...</p>
                    </article>
                    </a>
                
            </div>
            <a href="./category.php" class="btn">See More</a>
        </section>

        <section class="section why-register">
            <h2>Why Register With Us?</h2>
            <p>Registering with us unlocks a world of benefits designed to enhance your experience. 
                As a member, you gain access to exclusive recipes, personalized meal plans, and tailored cooking tips that match your culinary preferences. 
                Enjoy early access to special promotions and events, and receive our monthly newsletter filled with the latest cooking trends and inspirations. 
                Plus, by registering, you can save your favorite recipes, create shopping lists, and join a community of fellow cooking enthusiasts. 
                Don’t miss out—register today and start your culinary journey with us!</p>
            <a href="#" class="btn">Register Now</a>
        </section>

        <section class="section">
            <h2>Most Popular Collections</h2>
            <div class="slider">
                <div class="grid">
                    <?php for ($i = 0; $i < 4; $i++): ?>
                        <article class="card">
                            <a href="recipe.php">
                                <img src="./image/recipe/3-1.jpg" alt="Collection Image">
                            </a>
                            <h3>Collection Title</h3>
                            <p>Brief description of the collection...</p>
                        </article>
                    <?php endfor; ?>
                </div>
                <a href="#" class="slider-nav prev">&#10094;</a>
                <a href="#" class="slider-nav next">&#10095;</a>
            </div>
        </section>

        <section class="section">
            <h2>This Month's Recipe Collections</h2>
            <div class="grid">
                <?php for ($i = 0; $i < 4; $i++): ?>
                    <article class="card">
                        <a href="recipe.php">
                            <img src="./image/recipe/4-1.jpg" alt="Collection Image">
                        </a>
                        <h3>Collection Title</h3>
                    </article>
                <?php endfor; ?>
            </div>
        </section>

        <section class="section">
            <h2>You May Like Other Recipe Category Collection</h2>
            <div class="slider">
                <div class="grid">
                    <?php for ($i = 0; $i < 4; $i++): ?>
                        <article class="card">
                            <a href="#">
                                <img src="./image/recipe/5-1.jpg" alt="Category Image">
                            </a>
                            <h3>Category Name</h3>
                        </article>
                    <?php endfor; ?>
                </div>
                <a href="#" class="slider-nav prev">&#10094;</a>
                <a href="#" class="slider-nav next">&#10095;</a>
            </div>
        </section>
    </main>

    <?php require_once('footer.php'); ?>
</body>
</html>
