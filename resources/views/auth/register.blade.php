<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMPSTI</title>
    <!-- BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- STYLE -->
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
</head>
<body>
    <!-- Form Container -->
     <div class="form-container">
        <div class="col col-1">
            <div class="image-layer">
                <img src="{{ asset('assets/img/white-outline.png') }}" class="form-image-main" alt="">
                <img src="{{ asset('assets/img/dots.png') }}" class="form-image dots" alt="">
                <img src="{{ asset('assets/img/coin.png') }}" class="form-image coin" alt="">
                <img src="{{ asset('assets/img/spring.png') }}" class="form-image spring" alt="">
                <img src="{{ asset('assets/img/rocket.png') }}" class="form-image rocket" alt="">
                <img src="{{ asset('assets/img/cloud.png') }}" class="form-image cloud" alt="">
                <img src="{{ asset('assets/img/stars.png') }}" class="form-image stars" alt="">
            </div>
            <p class="featured-words">You Are Few Minutes Way To Boost Your Skills With <span>HMPSTI</span></p>
        </div>

        <div class="col col-2">
            <!-- Login Form Container -->
            <div class="login-form active">
                <div class="form-tittle">
                    <span>Create Account</span>
                </div>
                <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data" class="form-inputs">
                    @csrf
                    <input class="w-full placeholder px-3 rounded shadow py-2" type="text" hidden name="status" value="student">
                    <x-input-error :messages="$errors->get('foto')" class="mt-2" />
                    <div class="input-box">
                        <input id="uploadBtn" class="input-field" :value="old('foto')" autocomplete="username" type="file" name="foto" placeholder="Foto">
                        <label class="label-img" for="uploadBtn"><i class="bx bxs-camera-plus"></i> Upload Image</label>
                    </div>
 

                    <div class="input-box">
                        <input class="input-field" placeholder="Full Name" id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        <i class="bx bx-user icon"></i>
                    </div>

                    <div class="input-box">
                        <input class="input-field" placeholder="Email" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        <i class="bx bx-envelope icon"></i>
                    </div>


                    <div class="input-box">
                        <input class="input-field" type="text" name="nim" placeholder="NIM" required id="nim" autofocus autocomplete="nim" :value="old('nim')">
                        <x-input-error :messages="$errors->get('nim')" class="mt-2" />
                        <i class="bx bxs-graduation icon"></i>
                    </div>


                    <div class="input-box">
                        <select id="background" name="id_kelas" class="input-field" required autocomplete="background">
                            <option value="" disabled selected hidden>Cluster</option>
                            @foreach ( $data as $d )
                            <option value="{{ $d->id_kelas }}" class="select">{{ $d->nama_kelas }}</option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('id_kelas')" class="mt-2" />
                        <i class='bx bx-chevron-down icon'></i>
                    </div>


                    <div class="input-box">
                        <input class="input-field" type="text" name="no_hp" placeholder="Phone Number" id="no_hp" :value="old('no_hp')" required autocomplete="username">
                        <x-input-error :messages="$errors->get('no_hp')" class="mt-2" />
                        <i class="bx bx-phone icon"></i>
                    </div>


                    <div class="input-box">
                        <input id="password" class="input-field" type="password" name="password" placeholder="Password" required autocomplete="new-password">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>


                    <div class="input-box">
                        <input id="password_confirmation" class="input-field" type="password" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>


                    <div class="forgot-pass">
                        <a href="{{ route('login') }}">Already registered?</a>
                    </div>
                    <div class="input-box">
                       <button class="input-submit" type="submit">
                            <span>Sign Up</span>
                            <i class="bx bx-right-arrow-alt"></i>
                       </button>    
                    </div>
                </form>

            </div>
        </div>
     </div>
    <!-- JS -->
    <script src="{{ asset('assets/js/login.js') }}"></script>
</body>
</html>


