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
                border:none !important;
                border-bottom-style:solid !important;
                border-color: orange ;

            }
        </style>
        <div class="container p-5 text-center">
            <div class="row">
                <div class="col-12">
                    <img src="https://dijitalka.com/wp-content/uploads/2022/05/3-300x114.png">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="input-group flex-nowrap ">
                        <span class="input-group-text" id="addon-wrapping">Site URL</span>
                        <input type="text" class="form-control transparent-input" name="siteURL" placeholder="Site URL" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                </div>
                <div class="col-6">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">TOKEN</span>
                        <input type="text" class="form-control transparent-input" placeholder="TOKEN" name="token" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                </div>
            </div>
        </div>
    <?php
}