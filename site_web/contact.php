<?php 
    if(isset($_POST['submit'])){
        $name = $_POST['name'] ?? null;
        $email = $_POST['email'] ?? null;
        $subject = $_POST['subject'] ?? null;
        $message = $_POST['message'] ?? null;
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
                        <input type="text" id="name" name="name" class="form-control">
                        <label for="name" class="">Votre nom</label>
                    </div>
                </div>
                <!--Grid column-->
                
                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <input type="text" id="email" name="email" class="form-control">
                        <label for="email" class="">Votre email</label>
                    </div>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="md-form mb-0">
                        <input type="text" id="subject" name="subject" class="form-control">
                        <label for="subject" class="">Sujet</label>
                    </div>
                </div>
            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-12">

                    <div class="md-form">
                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                        <label for="message">Votre message</label>
                    </div>

                </div>
            </div>
            <!--Grid row-->

        </form>

        <div class="text-center text-md-left">
            <a class="btn btn-primary">Envoyez email</a>
        </div>
        <div class="status"></div>
    </div>
    <!--Grid column-->


</div>
