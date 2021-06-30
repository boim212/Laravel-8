<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RESET PASSWORD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-center">
                    <div class="card-header">Verify Your Email Address</div>
                    
                    <div class="card-body">
                        <h5 class="card-title">Hallo Admin Skuy-Replay</h5>
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif
                        <p class="card-text">Anda telah menerima email ini karena kami menerima permintaan pengaturan ulang kata sandi untuk akun anda</p>
                        <p>Silahkan Klik tombol Atur Ulang Password di bawah ini.</p>
                        <a href="http://localhost:8000/reset-password/{{$token}}" class="btn btn-primary">Atur Ulang Password</a>
                        <p>link pengaturan ulang kata sandi ini akan habis waktunya dalam 60 menit.</p>
                        <p>jika anda tidak pernah meminta pengaturan ulang kata sandi harap abaikan pesan ini.</p>

                        <strong>Hormat Kami,</strong>
                        <strong>Skuy-Replay | Tempat Replay Kuliah Terbaik</strong> 
                        <blockquote class="blockquote mb-0">
                            <footer class="blockquote-footer">Skuy-Replay<cite title="Source Title">Tempat Replay Kuliah Terbaik</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

