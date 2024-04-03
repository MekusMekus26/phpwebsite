<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="page1.css">
<link rel="stylesheet" href="animation.css">
<Title>Group ng mga pogi</Title>
</head>
<body>
    <header>
        <h1 id="welc">Welcome to adonis website</h1>
        
    </header>
     

    <main>
    <form method="post">
            <p id="formp">first name:<input class="Zaddy" type="text" name="fname" method="get" action='page2.php'></p>
            <p  id="formp">Last name:<input class="Zaddy" type="text" name="lname" method="get" action='page2.php'></p>
            <p  id="formp">Age:<input class="Zaddy" type="number" name="ageek" method="get"  action='page2.php'></p>
            <p  id="formp">Are you a hot papa?<input class="Zaddy" type="checkbox" name="agee" method="get" ></p>



             <button id="hello"  type ="submit" name="submit" value="submit">Submit</button>

        <?php
            $first=$_POST['fname'];
            $last=$_POST['lname'];
         $agenigu=$_POST["ageek"];
            $welc = "outp";
           if (isset($_POST["submit"])){
            if(empty($_POST["agee"]) or empty($_POST["fname"])or empty($_POST["lname"]) or  $agenigu<18 or empty($_POST["ageek"]) ){
                echo"<h1 id=$welc>Complete the form &#x1F612</h1>";
                if ($agenigu<18){

                echo"<h1 id=$welc>Too young &#x1F612</h1>";
                }

            }           
            

            
            else if(!empty($_POST["agee"])or !empty($_POST["fname"])or !empty($_POST["lname"])or  $agenigu>=18 or !empty($_POST["ageek"])  ){
                echo"<h1 id=$welc>Hi zaddy $first pwede ba ilagay mo yung $last sa last name ko !!! &#x1F60D &#x1F60D</h1>";
                echo'<input type="button" style="font: size 10vw; width:10vw; background-color: #BC13fe; height; 5vh" onclick="window.location=\'page2.php\'"/ value="Page 2">';
            }
            }




           


        ?>
        </form>
    </main>

    <footer>

    </footer>

<ul><p>Group members:</p>
        <li>Gaudencio Perez(coder)</li>
        <li>Clark Andre Celestial</li>
        <li> Curt Villanueva</li>
        <li>Isaac Palima</li>
        <li>Jouree Ezequiel Conception</li>
</ul>






</body>
</html>