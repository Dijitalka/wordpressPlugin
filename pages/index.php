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
            input{
                background-color: black;
                color: white;
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
                    <div class="mb-3">
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Dijitalka sistemlerinden aldığınız token değeri">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Dijitalka sistemlerine bağlanmamız için url">
                    </div>
                </div>
                <div class="col-6">

                </div>
            </div>
        </div>
    <?php
}