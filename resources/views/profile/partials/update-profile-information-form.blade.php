<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <img id="profileImg" class="shadow rounded-full aspect-square object-center object-cover w-56" src="{{ asset('storage/photo-profile/'.$user->foto) }}" alt="">
        <div class="">
    <label class="label-img w-1/2 gap-2 max-[550px]:w-full" for="uploadBtn"><i data-feather="camera"></i> Update Image</label>
    <input id="uploadBtn" class="input-field" type="file" name="foto" accept="image/*" onchange="previewImage(this)" />
    <x-input-error class="mt-2" :messages="$errors->get('foto')" />
    <p id="imageStatus" class="text-xs mt-1"></p>
</div>



        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="nim" :value="__('NIM')" />
            <x-text-input id="nim" name="nim" type="text" class="mt-1 block w-full" :value="old('nim', $user->nim)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('nim')" />
        </div>
        <div>
            <x-input-label for="no_hp" :value="__('Phone Number')" />
            <x-text-input id="no_hp" name="no_hp" type="text" class="mt-1 block w-full" :value="old('no_hp', $user->no_hp)" placeholder="Contoh: 08212345678" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('no_hp')" />
        </div>
        @if (Auth::user()->status === 'admin')
        <select id="id_kelas" name="id_kelas" class="input-field" required autocomplete="background">
            <option :value="old('id_kelas', $user->id_kelas)" disabled selected hidden>Cluster</option>
            @foreach ( $data as $d )
            <option value="{{ $d->id_kelas }}" class="select">{{ $d->nama_kelas }}</option>
            @endforeach
        </select>
        <x-input-error :messages="$errors->get('id_kelas')" class="mt-2" />
        @endif
        @if (Auth::user()->status !== 'admin')
        <x-text-input id="id_kelas" hidden name="id_kelas" type="text" :value="old('id_kelas', $user->id_kelas)" required />
        @endif

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>

<script>
function previewImage(input) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('profileImg').src = e.target.result;
        }
        reader.readAsDataURL(input.files[0]);
        
        // Check if same image
        if (input.files[0].name === '{{ $user->foto }}') {
            document.getElementById('imageStatus').textContent = 'Gambar ini sudah diupload ya';
            document.getElementById('imageStatus').className = 'text-xs mt-1 text-yellow-600';
        } else {
            document.getElementById('imageStatus').textContent = '';
        }
    }
}
</script>