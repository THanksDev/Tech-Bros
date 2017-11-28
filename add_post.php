<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta name="description" content="Tech Bros technology reviews blog and podcast">
	<meta name="keywords" content="tech reviews, podcast, gadgets, technology, video, media, digital, coding, programming, developers">
	<meta name="author" content="Travis Hanks and Ty Hanks">
	<title>Tech Bros | Control Panel</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
    
    <header>
        <div class="container">
            <div id="brand">
<!-- May Change to Logo Later -->
                <a href="index.php"><h1>Tech <span>Bros</span></h1></a>
            </div>
            <nav>
                <ul>
                    <li><a href="../index.php">Home</a></li>
<!-- These two link need to not be visible unless you are logged in to the admin panel -->
                    <li><a href="add_post.php">Post</a></li>
                    <li><a href="edit_post.php">Edit</a></li>
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
            
            
            <?
            if(!empty($_POST)) {
	           include '../mysql.php';
	           if(mysql_safe_query('INSERT INTO posts (title,body,caption,date) VALUES (%s,%s,%s,%s)', $_POST['title'], $_POST['body'], $_POST['caption'], time()))
// Need to make this an alert message using html and css
		          echo ('Entry posted!');
// End the alert message here
	           else
		          echo mysql_error();
            }
            ?>

<!-- Need this to be styled completely however you want -->
            <form method="post">
	           <table>
		          <tr>
			         <td><label for="title">Title</label></td>
			         <td><input name="title" id="title" /></td>
		          </tr>
                  <tr>
<!-- The upload image function of the posting has not been completed yet -->
			         <td><label for="img">Upload Image</label></td>
			         <td><input type="file" name="img" id="img" /></td>
		          </tr>
                  <tr>
			         <td><label for="caption">Image Caption</label></td>
			         <td><input name="caption" id="caption" /></td>
		          </tr>
		          <tr>
			         <td><label for="body">Body</label></td>
			         <td><textarea name="body" id="body"></textarea></td>
		          </tr>
		          <tr>
			         <td></td>
			         <td><input type="submit" value="Post" /></td>
		          </tr>
	           </table>
            </form>
            
        </div>
    </div>
    
    <footer>
        <p>T.Hanks Web Design. Copyright &copy; 2017</p>
    </footer>
    
</body>
</html>