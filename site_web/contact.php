<?php 
    const ERROR_REQUIRED = 'Ce champ est requis';
    const ERROR_EMAIL = 'Veuillez entrer une adresse email valide';
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $errors = [];
        if(empty($_POST['name'])) {
            $errors['name'] = ERROR_REQUIRED;
        }
        if(empty($_POST['email'])) {
            $errors['email'] = ERROR_REQUIRED;
        } elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = ERROR_EMAIL;
        }
        if(empty($_POST['subject'])) {
            $errors['subject'] = ERROR_REQUIRED;
        }
        if(empty($_POST['message'])) {
            $errors['message'] = ERROR_REQUIRED;
        }
        if(empty($errors)) {
            $to = 'sam@protfolio.com';
            $subject = htmlspecialchars($_POST['subject']);
            $message = htmlspecialchars($_POST['message']);
            $headers = 'From: ' . $_POST['email'];
            mail($to, $subject, $message, $headers);
            header('Location: index.php');
            exit();
        }
    }

?>

<h2 class="h1-responsive font-weight-bold text-center my-4">Me contacter</h2>
<!--Section description-->
<p class="text-center w-responsive mx-auto mb-5">Vous voulez me contacter ? juste ici !</p>

<div class="row">

    <!--Grid column-->
    <div class="col-md-9 mb-md-0 mb-5 mx-auto">
        <form id="contact-form" name="contact-form" action="index.php" method="POST">

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <label for="name" class="">Votre nom</label>    
                        <input type="text" id="name" name="name" class="form-control">
                        <?= !empty($errors['name']) ? "<span style='color: red;'>" . $errors['name'] . "</span>" : "" ?>
                    </div>
                </div>
                <!--Grid column-->
                
                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <label for="email" class="">Votre email</label>    
                        <input type="text" id="email" name="email" class="form-control">
                        <?= !empty($errors['email']) ? "<span style='color: red;'>" . $errors['email'] . "</span>" : "" ?>
                    </div>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="md-form mb-0">
                        <label for="subject" class="">Sujet</label>    
                        <input type="text" id="subject" name="subject" class="form-control">
                        <?= !empty($errors['subject']) ? "<span style='color: red;'>" . $errors['subject'] . "</span>" : "" ?>
                    </div>
                </div>
            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-12">

                    <div class="md-form">
                        <label for="message">Votre message</label>    
                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>  
                        <?= !empty($errors['message']) ? "<span style='color: red;'>" . $errors['message'] . "</span>" : "" ?>
                    </div>

                </div>
            </div>
            <!--Grid row-->

        </form>

        <div class="text-center text-md-left">
            <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Envoyer</a>
        </div>
        <div class="status"></div>
    </div>
    <!--Grid column-->


</div>
