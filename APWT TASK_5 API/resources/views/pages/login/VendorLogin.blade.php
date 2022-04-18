<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Vendor Login</title>
</head>
<body>
    <section>
    <br><br>
    <h2 style="text-align: center; color: red;">Vendor Login</h2>
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-12 col-sn-8 col-md-6 m-auto">
                    <div class="card">
                        <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="500" height="60" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>
                        <form action="{{route('Vendorlogin')}}"  method="post">
                        {{@csrf_field()}}
                        <input type="text" name="Name" class="form-control my-4 py-2" placeholder="UserName">
                        <input type="password" name="Password" class="form-control my-4 py-2" placeholder="Password">
                        <div class="text-center mt-3">
                        <input type="submit" value="Log-in" class="btn btn-primary">
                        </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>