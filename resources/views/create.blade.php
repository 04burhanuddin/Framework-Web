<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        {{-- bootsrap css V.4 --}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        {{-- title --}}
        <title>Add Product</title>

    </head>

    <body>
        <div class="container">
            <div class="row justify-content-center" style="margin-top: 10rem;">
                <div class="card h-100 w-100 col-md-5 mx-4 px-4" style="border-radius: 1rem">
                    <form action="/create" method="post">
                        <input type='hidden' name='_token' value='<?php echo csrf_token(); ?>'>
                        <div class="form pt-5">
                            <div class="form-group text-center">
                                <h2>Form Input Product</h2>
                            </div>
                        </div>
                        <div class="form">
                            <div class="form-group">
                                <label for="nim">Nama</label>
                                <input type="text" class="form-control" id="nama" name="name" placeholder="Nama Product">
                            </div>
                        </div>
                        <div class="form">
                            <div class="form-group">
                                <label for="nama">Price</label>
                                <input type="text" class="form-control" id="price" name="price" placeholder="Price">
                            </div>
                        </div>
                        <div class="form">
                            <div class="form-group">
                                <label for="password">Kategori</label>
                                <input type="text" class="form-control" id="kategori" name="category" placeholder="Kategori">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mb-5 mt-3">Simpan</button>
                    </form>
                    {{-- end form --}}
                </div>
            </div>
        </div>

        {{-- optional javascript --}}
        {{-- jQuery first, then Popper.js, then Bootstrap JS --}}
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}
    </body>

</html>