<?php

include("header.php");


?>
        <div class="page-header-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <header class="entry-header">
                            <h1 class="text-light">CONTACT</h1>
                        </header><!-- .entry-header -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .page-header-overlay -->
    </div><!-- .page-header -->

    <div class="container mb-3">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs">
                    <ul class="flex flex-wrap align-items-center p-0 m-0">
                        <li><a href="http://127.0.0.140"><i class="fa fa-home"></i> Accueil</a></li>
                        <li>Contact</li>
                    </ul>
                </div><!-- .breadcrumbs -->
            </div><!-- .col -->
        </div><!-- .row -->

            <div class="col-12 col-lg-6 centered">
                <div class="contact-form">
                    <h3 class="text-center">Contact Form</h3>
                    <h4 class="notification"></h4>
                    <form id="myForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <input type="text" id="name" name="name" placeholder="Name" required>
                        <input type="email" id="email" name="email" placeholder="Email" required>
                        <input type="text" id="subject" name="subject" placeholder="Subject" required>
                        <textarea id="message" name="message" placeholder="Message" required></textarea>
                        <button class="btn btn-primary col-md-12 centered" type="submit" onclick="envoyeremail()">Envoyer</button>
                        <?php include("./mail.php");?>
                    </form>
                </div><!-- .contact-form -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->

<?php

include("footer.php");



?>
    <script src ="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/javascript">
        function envoyeremail(){
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var message = $("#message");
            if(isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(message)){
                $.ajax({
                    url:'',
                    method:'POST',
                    dataType:'json',
                    data:{
                        name : name.val(),
                        email : email.val(),
                        subject : subject.val(),
                        message : message.val(),
                    },success:function(response){
                        $('#myForm')[0].reset();
                        $('.notification').text(<?php $response ?>);
                    }
                });
            }
        }
        function isNotEmpty(caller){
            if(caller.val == ""){
                caller.css('border','1px solid red');
                return false;
            }else
                caller.css('border','');
                return true;
        }
    </script>
    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/masonry.pkgd.min.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>

</body>
</html>