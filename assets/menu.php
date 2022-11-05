    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <style>
    body{
        margin: 0;
    }

    header{
    background-color: #5a0505;
    display: flex;
    justify-content: space-around;
    padding-top: 20px;
}

.dropbtn {
    background-color: inherit;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
  }
  
  .dropdown {
    position: relative;
    display: inline-block;
  }
  
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.055);
    z-index: 1;
  }
  
  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }
  
  .dropdown-content a:hover {background-color: #ddd;}
  
  .dropdown:hover .dropdown-content {display: block;}
  
  .dropdown:hover .dropbtn {
    text-decoration: underline;
    }
    </style>

    <header>

        <div class="dropdown">
            <button class="dropbtn">Clients</button>
            <div class="dropdown-content">
                <a href="http://localhost/TP-web_avancee/client-create.php">Ajout</a>
                <a href="http://localhost/TP-web_avancee/client-index.php">Modification</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Livres</button>
            <div class="dropdown-content">
                <a href="http://localhost/TP-web_avancee/livre-create.php">Ajout</a>
                <a href="#">Modification</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Auteurs</button>
            <div class="dropdown-content">
                <a href="http://localhost/TP-web_avancee/auteur-create.php">Ajout</a>
                <a href="#">Modification</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Maison édition</button>
            <div class="dropdown-content">
                <a href="http://localhost/TP-web_avancee/maison-edition-create.php">Ajout</a>
                <a href="#">Modification</a>
            </div>
        </div>
    </header>
        