<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta name="description" content="Tech Bros technology reviews blog and podcast">
	<meta name="keywords" content="tech reviews, podcast, gadgets, technology, video, media, digital, coding, programming, developers">
	<meta name="author" content="Travis Hanks and Ty Hanks">
	<title>Tech Bros | Home</title>
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
</head>
<body>
    
    <header>
        <div class="container">
            <div id="brand">
                <h1>Tech <span>Bros</span></h1>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="podcast.php">Podcast</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
<!--
    <div class="container">
        <h2>All Things Tech</h2>
    </div>
-->
    <div id="main">
        <div class="container">
            <section id="blog">

            <!-- Beginning of PHP - View all posts in query -->
            <?   
            include 'mysql.php';
                
            $result = mysql_safe_query('SELECT * FROM posts ORDER BY date DESC');

            if(!mysql_num_rows($result)) {
	           echo 'No posts yet.';
            } 
            else {
	           while($row = mysql_fetch_assoc($result)) {
		          echo '<article>';
                  echo '<h3>'.$row['title'].'</h3>';
                  echo '<h4>Posted '.date('F j<\s\up>S</\s\up>, Y', $row['date']).'</h4>';
                  echo '<img src="./img/macbook.jpg" alt="(Image Goes Here)">';
                  echo '<h4>'.$row['caption'].'</h4>';
                  echo '<p>'.$row['body'].'</p>';
// Need to echo out two buttons for read more and comments and style them
                  echo '</article>';

	           }
            }
            ?>
            <!-- End of PHP -->
                
            <article>        
                <h3>BLOG TITLE - Post Number</h3>
                <h4>DATE</h4>
                <img src="./img/macbook.jpg" alt="(Image Goes Here)">
                <h4>Caption for image.</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent elementum sagittis ultrices. Maecenas pellentesque consectetur odio nec dapibus. Pellentesque lacinia ornare quam ac gravida. Curabitur sodales eros nec ultrices euismod. Etiam ut augue iaculis, viverra urna id, cursus mi. Nullam semper feugiat dui non mattis. Curabitur nec tortor tempor, vehicula ex id, tristique leo. Sed pharetra massa in mauris pulvinar facilisis. Nullam eleifend venenatis posuere. Donec malesuada, tellus ac imperdiet facilisis, ex nisl ultricies arcu, quis dapibus erat augue id purus.</p>
            </article>

            <article>       
                <h3>BLOG TITLE</h3>
                <h4>DATE</h4>
                <img src="./img/tech.jpg" alt="(Image Goes Here)">
                <h4>Caption for image.</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent elementum sagittis ultrices. Maecenas pellentesque consectetur odio nec dapibus. Pellentesque lacinia ornare quam ac gravida. Curabitur sodales eros nec ultrices euismod. Etiam ut augue iaculis, viverra urna id, cursus mi. Nullam semper feugiat dui non mattis. Curabitur nec tortor tempor, vehicula ex id, tristique leo. Sed pharetra massa in mauris pulvinar facilisis. Nullam eleifend venenatis posuere. Donec malesuada, tellus ac imperdiet facilisis, ex nisl ultricies arcu, quis dapibus erat augue id purus.</p>
            </article>
            
            </section>
            
            
            <aside class="dark">
                <p>THIS WILL BE THE SIDE BAR WHEN CONSTRUCTION IS COMPLETE</p>
                <p>THIS WILL BE THE SIDE BAR WHEN CONSTRUCTION IS COMPLETE</p>
                <p>THIS WILL BE THE SIDE BAR WHEN CONSTRUCTION IS COMPLETE</p>
                <p>THIS WILL BE THE SIDE BAR WHEN CONSTRUCTION IS COMPLETE</p>
                <p>THIS WILL BE THE SIDE BAR WHEN CONSTRUCTION IS COMPLETE</p>
            </aside>
            
        </div>
    </div>
    
    <footer>
        <p>T.Hanks Web Design. Copyright &copy; 2017</p>
    </footer>
    
</body>
</html>