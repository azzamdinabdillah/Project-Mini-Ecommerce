
    


<div>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Registrasi Form</title>
    
        <link rel="stylesheet" type="text/css" href="/src/style.css">
    
        <!-- google font link -->
        <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> -->
        @livewireStyles
    </head>
    <body>
    
        <!-- <h1>Halaman Registrasi</h1>
    
    
        <form action="function/loginSystem.php" method="POST">
            <input type="text" name="username">
            <input type="text" name="password">
    
            <button type="submit" name="register">Registrasi</button>
        </form>
    
        <a href="index.php">Login Form</a> -->
    
    
    
    
    
        <section class="body">
    
            <div class="kotak1">
                
            </div>
    
            <div class="kotak2">
                
            </div>
    
            <div class="kotak3">
                
            </div>
    
            <div class="card">
                <div class="card-body">
                    <!-- <div class="pattern">
                        
                    </div> -->
                    <h1>Registration Page</h1>
    
                    <p class="login-welcome">Silahkan Registrasi Terlebih Dahulu Untuk Melakukan Login</p>
    
                    {{-- <p class="message-error"><?php echo $loginSystem->error ?></p> --}}
    
                    <form wire:submit.prevent="registerSystem" action="" method="POST" class="form-login">
                        <div class="div-username">
                            <input autocomplete="off" wire:model="username" type="text" name="username" class="username" required="required" id="username">
                            @error('username')
                                <p class="message-error">{{ $message }}</p>
                            @enderror
                            <label for="username" class="p-username">Username</label> 
                            <img src="/img/login/username-icon.png" width="23" class="username-icon"> 
                            <p class="username-garis"> | </p>
                        </div>
    
                        <div class="div-password">
                            <input autocomplete="off" wire:model="password" type="password" name="password" class="password" required="required" id="password">
                            @error('password')
                                <p class="message-error">{{ $message }}</p>
                            @enderror
                            <label wire:model="password" for="password" class="p-password">Password</label>
                            <img src="/img/login/password-icon.png" class="username-icon" width="23">                        <p class="username-garis"> | </p>
                        </div>
    
                        <button type="submit" name="register" class="login-button">Register</button>
                    </form>
    
                    <p class="register">Sudah Registrasi?
                        <a href="/login">Login Disini</a>
                    </p>
    
                    <!-- <a href="register.php">Register</a> -->
                </div>
            </div>
        </section> 
        
        @livewireScripts
    
    </body>
    </html>

</div>

