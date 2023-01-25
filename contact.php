<?php include("header.php")?> 

<div class="container" >
<!--Section: Contact v.2-->
<section class="mb-4">
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5 " style="font-size:20px;">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" onsubmit="send(); ">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0  ">
                        <label for="name" >Your Name</label>
                            <input type="text" id="name" name="name" class="form-control">
                       
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                        <label for="email" >Your Email</label>
                            <input type="text" id="Email" name="Email" class="form-control">
                  
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                        <label for="subject" >Subject</label>
                            <input type="text" id="subject" name="subject" class="form-control">
            
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                        <label for="message" >Your Message</label>
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                         
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="text-center text-md-left mt-2">
                <a class="btn btn-outline-dark" >Send</a>
            </div>
            
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>Kaniyakumari, Nagercoil, TamilNadu</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p >+ 8988989989</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p >Tanishq@gmail.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->
</div>

<script src=" https://smtpjs.com/v3/smtp.js">
    </script>
    <script>
        function send(){
            Email.send({
    Host : "smtp.gmail.com",
    Username : "Navya A",
    Password : "Navya@123",
    To : 'navya2022developer@gmail.com',
    From : document.getElementById("Email").value,
        Subject : "This is the subject",
    Body : "And this is the body"
}).then(
  message => alert(message)
);
        }
        </script>
