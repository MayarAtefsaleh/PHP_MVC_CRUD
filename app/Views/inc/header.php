<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link href="/public/css/style.css" rel="stylesheet"> -->

    <style>
    @media only screen and (max-width: 600px) {

        tbody,
        td,
        tfoot,
        th,
        thead,
        tr {
            border-color: inherit;
            border-style: solid;
            border-width: 0;
            display: flex;
            flex-direction: column;
            width: 100%;
            vertical-align: middle;
            /* align-items: center; */
            justify-content: center;
            text-align: center;
        }
    }
    </style>

    <title>MVC</title>
</head>

<body>

    <nav class=" navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php url(); ?>">
                <img src="<?php echo BURL.'assets/images/proxy_form.png'; ?>" width="100" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php url();?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php url('product/index');?>">Products</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php url('product/add');?>">Add Product</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>