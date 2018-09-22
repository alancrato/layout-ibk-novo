<?php
    require 'header.php';
?>

<div class="row"></div>
<div class="margin-top-about"></div>

<div class="container">
    <div class="row center">
        <div class="col s12 m3"></div>
        <div class="col s12 m6">
            <div class="title-contato">
                Fale Conosco
            </div>
            <div class="subtitle-contato">
                Preencha os campos e entre em contato conosco.
            </div>
        </div>
        <div class="col s12 m3"></div>
    </div>
    <div class="row">
        <div class="col s12 m8">
            <form>
                <div class="input-field col s12">
                    <input id="first_name" type="text" class="validate">
                    <label for="first_name">Nome:</label>
                </div>
                <div class="input-field col s12">
                    <input id="first_name" type="text" class="validate">
                    <label for="first_name">E-mail:</label>
                </div>
                <div class="input-field col s12">
                    <input id="first_name" type="text" class="validate">
                    <label for="first_name">Assunto:</label>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                    <label for="textarea1">Mensagem:</label>
                </div>
                <div class="col s12">
                    <div class="left-align">
                        <button class="btn waves-effect waves-light orange" type="submit" name="action">ENVIAR
                            <i class="material-icons right seta">send</i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col s12 m4">
            <div class="inf-contact">
                <div class="inf-contact-title">
                    Telefone:
                </div>
                <div class="inf-contact-content">
                    <i class="fa fa-phone" aria-hidden="true"></i> (88) 9999-9999
                </div>

                <div class="inf-contact-title">
                    E-mail:
                </div>
                <div class="inf-contact-content">
                    <i class="fa fa-envelope" aria-hidden="true"></i> contato@ibkcalcados.com.br
                </div>

                <div class="inf-contact-title">
                    WhatsApp da IBK:
                </div>
                <div class="inf-contact-content">
                    <i class="fa fa-whatsapp" aria-hidden="true"></i> (85) 9-9999-9999
                </div>
            </div>
        </div>
    </div>
</div>

<div class="margin-top-about"></div>

<?php
    require 'footer.php';
?>
