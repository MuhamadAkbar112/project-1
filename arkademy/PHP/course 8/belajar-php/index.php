<!DOCTYPE html>
<html>
    <head>
            <title>Profile page</title>
            <meta name="viewport" content="width=device-width,initial-scale=1.0">
            <link rel="stylesheet" href="assets/css/style.css">
    </head>

    <body>
<nav>
    <div class="menu-mobile">

        <a href="#" onclick="showMenu()">Menu</a>
    </div>
    <ul id="menu">
            <li><a href="#">HOME</a></li>
            <li><a href="#">PRODUCT</a></li>
            <li><a href="#">GALLERY</a></li>
            <li><a href="#">NEWS</a></li>
            <li><a href="#">MY INVENTORY</a></li>
    </ul>
</nav>

<section id="box-profile">
    <div class="img-profile">
        <div class="photo" style="background-image:url(assets/img/profile.png);"></div>
    </div>

    <div class="description">
        <h1 id="pName"></h1>
        <p id="pRole"></p>
    <a href="#input-form" class="button bg-green" onclick="editForm()">Edit</a>
    <a href="#" class="button border-blue">Resume</a>
    </div>

    <div class="information">
        <div class="data">
            <p class="field">Availability</p>
            <p id="pAvailable" class="text-gray"></p>
        </div>
        <div class="data">
            <p class="field">Age</p>
            <p  id="pAge" class="text-gray"></p>
        </div>
        <div class="data">
            <p class="field">Location</p>
            <p id="pLocation" class="text-gray"></p>
        </div>
        <div class="data">
            <p class="field">Years Experience</p>
            <p id="pExperience" class="text-gray"></p>
        </div>
        <div class="data">
            <p class="field">Email</p>
            <p id="pEmail" class="text-gray"></p>
        </div>
    </div>
</section>

<section id="input-form">
    <form method="#" action="#">
        <div class="form">
            <label>Name</label>
        <input id="inpName" type="text" name="name">
        </div>
        <div class="form">
            <label>Role</label>
        <input id="inpRole" type="text" name="role">
        </div>
        <div class="form">
            <label>Availability</label>
        <input id="inpAvailability" type="text" name="availability">
        </div>
        <div class="form">
            <label>Age</label>
        <input id="inpAge" type="number" name="age">
        </div>
        <div class="form">
            <label>Location</label>
        <input id="inpLocation" type="text" name="location">
        </div>
        <div class="form">
            <label>Years Experience</label>
        <input id="inpYears" type="number" name="years">
        </div>
        <div class="form">
            <label>Email</label>
        <input id="inpEmail" type="email" name="email">
        </div>
        <div class="form">
        <input onclick="simpanForm()" type="submit" name="submit" value="SUBMIT" class="bg-blue">
        </div>
    </form>
</section>

<script>
    var forMenu= document.getElementById("input-form");
    forMenu.style.display = "none";

    function editForm(){
        if(forMenu.style.display === "none"){
            forMenu.style.display ="block";
        }else{
            forMenu.style.display= "none";
        }

        var name = document.getElementById("pName").innerHTML;
        var role = document.getElementById("pRole").innerHTML;
        var available = document.getElementById("pAvailable").innerHTML;
        var age = document.getElementById("pAge").innerHTML;
        var location = document.getElementById("pLocation").innerHTML;
        var experience = document.getElementById("pExperience").innerHTML;
        var email = document.getElementById("pEmail").innerHTML;

        document.getElementById("inpName").value = name ;
        document.getElementById("inpRole").value = role ;
        document.getElementById("inpAvailability").value = available ;
        document.getElementById("inpAge").value = age ;
        document.getElementById("inpLocation").value = location ;
        document.getElementById("inpYears").value = experience ;
        document.getElementById("inpEmail").value = email ;
        
    }

    
    function showMenu(){
        var menu = document.getElementById("menu");
        var box = document.getElementById("box-profile");

        if(menu.style.display === "block"){
            menu.style.display ="none";
            box.style.paddingTop = "0px";
        }else{
            menu.style.display ="block";
            box.style.paddingTop = "125px";
        }
    }
</script>
    </body>
</html>