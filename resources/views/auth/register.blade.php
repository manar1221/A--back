{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<x-app-layout>
    <section class="vh-100 pt-5">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

              <form class="mt-5" method="POST" action="{{route('register')}}">
                @csrf
                <!-- Name input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3">Name</label>
                    <input type="text" name="name" id="form3Example3" class="form-control form-control-lg p-3"
                      placeholder="Enter your name" :value="old('name')" required autofocus autocomplete="name"/>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3">Email</label>
                  <input type="email" name="email" id="form3Example3" class="form-control form-control-lg p-3"
                    placeholder="Enter a valid email" :value="old('email')" required/>
                </div>

                <!-- phone input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3">Phone</label>
                    <input type="number" id="phone" class="form-control form-control-lg p-3" name="phone" placeholder="Enter your phone" :value="old('phone')" required>
                  </div>

                  <!-- grade input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3">grade</label>
                    <input type="number" id="grade" class="form-control form-control-lg p-3" name="grade" placeholder="Enter your grade" :value="old('grade')" required>
                </div>

                <!-- city input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3">City</label>
                    <input type="text" id="city" class="form-control form-control-lg p-3" name="city" placeholder="Enter your city" :value="old('city')" required>
                </div>

                <!-- utype input -->
                <div class="form-outline mb-4">
                    {{-- <label class="form-label" for="form3Example3">user type</label> --}}
                    <input type="hidden" id="utype" class="form-control form-control-lg p-3" name="utype" placeholder="Enter your utype" :value="old('utype')">
                </div>

                <!-- Password input -->
                <div class="form-outline mb-3">
                  <label class="form-label" for="form3Example4">Password</label>
                  <input type="password" name="password" id="form3Example4" class="form-control form-control-lg p-3"
                    placeholder="Enter password" required autocomplete="new-password"/>
                </div>

                <!-- Confirm Password input -->
                <div class="form-outline mb-3">
                    <label class="form-label" for="form3Example4">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="form3Example4" class="form-control form-control-lg p-3"
                      placeholder="Confirm password" required autocomplete="new-password"/>
                </div>


                <div class="text-center text-lg-start mt-4 pt-2">
                    <button type="submit" class="abtn has-before" name="login">Register</button>
                </div>

              </form>
            </div>
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                  class="img-fluid" alt="Sample image">
            </div>
          </div>
        </div>
      </section>
</x-app-layout>
