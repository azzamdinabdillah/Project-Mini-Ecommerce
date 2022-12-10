<div>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Form</title>
        <link rel="stylesheet" type="text/css" href="/src/style.css">
    
        <!-- google font link -->
        <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> -->
        <!-- <link href="font/Poppins/"> -->
        @livewireStyles
    </head>
    <body>

        @include('sweetalert::alert')
    
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
                    <h1>Login Page</h1>
    
                    <p class="login-welcome">Silahkan Login Terlebih Dahulu Sebelum Melanjutkan</p>
                    
                    @if (session()->has('gagalLogin'))    
                        <p class="message-error">
                            {{ session('gagalLogin') }}
                        </p>
                    @endif
                
    
                    <form wire:submit.prevent="loginSystem">
                        <div class="div-username">
                            <input wire:model="username" type="text" id="username" name="username" class="username" required="required" autocomplete="off">
                            @error('username')
                                <span>{{ $message }}</span>
                            @enderror
                            <label for="username" class="p-username">Username</label> 
                            <img src="/img/login/username-icon.png" width="23" class="username-icon">
                            <p class="username-garis"> | </p>
                        </div>
    
                        <div class="div-password">
                            
                            <input wire:model="password" id="password" type="password" name="password" class="password" required="required" autocomplete="off">
                            @error('password')
                                <span>{{ $message }}</span>
                            @enderror
                            <label for="password" class="p-password">Password</label>
                            <img src="/img/login/password-icon.png" class="username-icon" width="23">
                            <p class="username-garis"> | </p>
                        </div>
    
                        <button type="submit" name="login" class="login-button">Login</button>
                    </form>
    
                    <p class="register">Belum Registrasi?
                        <a href="/registration">Registrasi Disini</a>
                    </p>
    
                    <!-- <a href="register.php">Register</a> -->
                </div>
            </div>
        </section> 
        @livewireScripts

    </body>
    </html>
</div>
