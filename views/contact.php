<section id='contact' class='contact-section section'>
    <div class='contact-block section-block'>
        <div class='container'>
            <div class='row'>
                <div class='col-md-6 col-md-offset-3'>
                    <div class='section-header text-center'>
                        <h2 class='animate text-over-block' id="myContact1">Contact Me</h2>
                        <div class='divider-draft center'></div>
                        <p id="myContact2">
                            I'm available for freelancing. If you want something to be built or just to say hi, feel free to shoot me a message.
                        </p>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class='col-md-8 col-md-offset-2'>
                    <form id='contact-form' class='contact-form' data-toggle='validator'>
                        <div id='contact-form-result'></div><br>
                        <div class='row'>
                            <div class='col-md-6'>
                                <div class='form-group'>
                                    <input type='text' class='form-control' id="name" name="name" value='Name' required>
                                    <div class='help-block with-errors'></div>
                                </div>
                            </div>
                            <div class='col-md-6'>
                                <div class='form-group'>
                                    <input type='email' class='form-control' id="main" name="mail" value='Email' required>
                                    <div class='help-block with-errors'></div>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-md-6'>
                                <div class='form-group'>
                                    <input type='text' class='form-control' id="phone" name="phone" value='Phone' required>
                                    <div class='help-block with-errors'></div>
                                </div>
                            </div>
                            <div class='col-md-6'>
                                <div class='form-group'>
                                    <input type='text' class='form-control' id="website" name="website" value='Website'>
                                    <div class='help-block with-errors'></div>
                                </div>
                            </div>
                        </div>
                        <div class='form-group'>
                            <textarea rows='5' class='form-control' id="message" name="message" placeholder='' required></textarea>
                            <div class='help-block with-errors'></div>
                        </div>
                        <div class='form-group text-center'>
                            <button type='button' class='symp-btn' onclick="enviarContacto()" id="myContact3">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php require_once("./templates/footer.php") ?>
</section>