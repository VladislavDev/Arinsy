<?php
    include $_SERVER["DOCUMENT_ROOT"]."/Arinsy/core/header.php";
?>


<div class="info-body">
    <div class="about_a_project">
        <h1>Arinsy</h1>
        <div class="AAP_info">
            This is an actively developed project. The aim of the project is to create a CRM with the 
            ability to manage business processes, its own workflow engine and flexible management of created
            tasks. With this system you will be able to create tasks and projects, realize the possibility 
            of teamwork and partially automate the workflow.
        </div>
        <h3>Project development</h3>
        <div class="AAP_info">
            Now you will not be able to try out the functionality, because the project has just started to 
            be developed. The first success and launch of the web-version is planned in early July. Later, 
            it is planned to create a desktop-version and a mobile application, as well as build-up of 
            functionality.
        </div>
        <h3 class="blue">Project support</h3>
        <div class="AAP_info">
            Now the <a href="https://github.com/VladislavDev/Arinsy">repository</a> is hosted 
            on GitHub, and we welcome any comments and pull-requests.
        </div>
    </div>
</div>
<a href="#LogIn">
    <div class="LogInButton">
        Log In
    </div>
</a>
<div class="LogInFormDialog" id="LogIn">
    <div class="LogInFormBody">
        <a href="#" title="Close" class="LogInFormClose">X</a>

        <form method="POST" class="LogInForm">
            <label for='.LogInForm' class="LIF_label">Enter your login and password:</label>
            <br/>
            <input type="text" class="LIF_input" name="Arinsy_Login" placeholder="Login or E-mail" required/>
            <br/>
            <input type="password" class="LIF_input" name="Arinsy_Pswd" placeholder="Password" required/>
        </form>
    </div>
</div>

<?php
    include $_SERVER["DOCUMENT_ROOT"]."/Arinsy/core/footer.php";
?>