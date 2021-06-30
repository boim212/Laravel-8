<?php
        $nama=$_POST['nama'];
        $tujuan=$_POST['tujuan'];
        $subjek=$_POST['subjek'];
        $telpon =$_POST['telpon'];
        $pesan=$_POST['pesan'];
        $alamat=$_POST['alamat'];
        

        include "classes/class.phpmailer.php";
        $mail = new PHPMailer; 
        $mail->IsSMTP();
        $mail->SMTPSecure = 'ssl'; 
        $mail->Host = "smtp.gmail.com"; //host email
        $mail->SMTPDebug = 1;
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->Username = "email.website02@gmail.com"; //user email
        $mail->Password = "kgmiqobbyfxwcxbx"; //password email 
        $mail->SetFrom($tujuan,$nama); //set email pengirim
        $mail->Subject = $subjek; //subyek email
        $mail->AddAddress($alamat);  // email tujuan
        $mail->MsgHTML("
        <!DOCTYPE html>
        <html lang="."en".">
        <head>
          <meta charset="."UTF-8".">
          <meta http-equiv="."X-UA-Compatible"." content="."IE=edge".">
          <meta name="."viewport" ."content="."width=device-width, initial-scale=1.0".">
          <link rel="."stylesheet" ."href="."https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" ."integrity="."sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" ."crossorigin="."anonymous".">

          <title>Pesan Untuk Admin</title>
        </head>
        <body>
            <div class="."container".">
              <div class="."card".">
                <div class="."card-header".">
                  Pesan Untuk Admin Skuy-Replay
                </div>
                <div class="."card-body".">
                  <blockquote class="."blockquote mb-0".">
                    <p>Nama : ".$nama."</p>
                    <p>Nomer Telepon Yang Bisa Di Hubungi : ".$telpon."</p>
                    <p>Alamat Email Yang Aktif : ".$tujuan."</p>
                    <p>Pesan Nya : ".$pesan."</p>
                    <footer class="."blockquote-footer".">Someone famous in <cite title="."Source Title".">Source Title</cite></footer>
                  </blockquote>
                </div>
              </div>
            </div>
          <script src="."https://code.jquery.com/jquery-3.3.1.slim.min.js"." integrity="."sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"." crossorigin="."anonymous"."></script>
          <script src="."https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"." integrity="."sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" ."crossorigin="."anonymous"."></script>
          <script src="."https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"." integrity="."sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"." crossorigin="."anonymous"."></script>
        </body>
        </html>.");
        
        // Kamu Dapet Pesan Dari Seseorang "
        //                 "<br> Nama nya = ".$nama.
        //                 "<br>".
        //                 "<br>Ini Isi Pesan nya = ".
        //                 "<br>".$pesan.
        //                 "<br>".
        //                 "<br>Nomer Telepon Yang Bisa Di Hubungi = ".
        //                 "<br>".$telpon.
        //                 "<br>".
        //                 "<br>Alamat Email Pengirim = ".
        //                 "<br>".$tujuan); //pesan
                        


        // if($mail->Send()) {
        //     echo "Message has been sent";
        // }else{
        //     echo "Failed to sending message";  
        // } 
        if($mail->Send()){
          echo "<script>alert('Kirim Pesan Sukses')</script>";
          echo "<meta http-equiv='refresh' content='0; url=/contac_us'>";
        }else{
          echo "<script>alert('GAGAL')</script>";
          echo "<meta http-equiv='refresh' content='0; url=/contac_us'>";
        }
    ?>

<!-- Elseif Channel -->