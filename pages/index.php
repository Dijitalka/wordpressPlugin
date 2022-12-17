<?php

function coreSettings()
{
    ?>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <style>
            body
            {
                background-color: black ; !important;
                color: white;
            }
            input.transparent-input{
                background-color:transparent !important;
                border-bottom-style:solid !important;
                border-color: #E6A822 ;
            }
            .input:focus {
                outline: none !important;
            }
            input[type=text]:focus {
                border: 3px solid #bdbdbd;
            }
        </style>
        <div class="container p-5 text-center">
            <div class="row">
                <div class="col-12">
                    <img src="<?= get_site_url()?>/wp-content/plugins/dijitalka/assets/image/logo.png">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="input-group flex-nowrap ">
                        <input type="text" class="form-control transparent-input text-white" name="siteURL" placeholder="Site URL" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                </div>
                <div class="col-6">
                    <div class="input-group flex-nowrap">
                        <input type="text" class="form-control transparent-input text-white" placeholder="TOKEN" name="token" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                </div>
            </div>
        </div>
    <?php
}