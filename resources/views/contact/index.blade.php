@extends('layouts.home')

@section('content')

    <!-- Alert User -->
    @if (Session::has('success'))
        <div class="text-green-500 bg-white rounded-lg p-10 m-10">
            {{ Session::get('success') }}
        </div>
    @endif

    <section
        class="mb-40 contact-box big-shadow bg-white m-2 md:m-20 justify-center md:justify-start flex flex-wrap md:flex-nowrap rounded-3xl">
        <div class="p-10">
            <h1 class="section-title">Contact</h1>
            <h3 class="section-subtitle max-w-md">Fill in the form or use one of the contact methods below to reach me.</h3>
            <ul class="mt-5">
                <li class="p-3"><a href="mailto:info@cattea.ca"><img class="mr-3 inline" loading="lazy"
                            src="{{ asset('img/icons/mail.svg') }}" alt="mail icon">info@cattea.ca</a></li>
                <li class="p-3"><a href="https://facebook.com/CatteaArtistry"><i
                            class="fab fa-facebook mr-3"></i>/CatteaArtistry</a>
                </li>
                <li class="p-3"><a href="https://instagram.com/cattea_artistry"><i
                            class="fab fa-instagram mr-3"></i>&commat;cattea_artistry</a></li>
            </ul>
        </div>
        <form action="{{ route('contact.store') }}" method="POST"
            class="big-shadow rounded-2xl px-20 py-10 flex flex-wrap justify-start align-items-center">
            <div class="form-group-1">
                @csrf
                <div class="form-group m-3">
                    <label for="name">Name</label>
                    <input id="name" name="name" type="text" placeholder="Enter your name"
                        class="mt-1 focus:ring-gray-500 text-gray-500 block placeholder-gray-300 border-gray-300 rounded-2xl bg-gray-100">

                    <!-- Show error -->
                    @if ($errors->has('name'))
                        <div class="text-red-500">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                </div>
                <div class="form-group m-3">
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" placeholder="example@email.com"
                        class="mt-1 focus:ring-gray-500 text-gray-500 block placeholder-gray-300 border-gray-300 rounded-2xl bg-gray-100">

                    <!-- Show error -->
                    @if ($errors->has('email'))
                        <div class="text-red-500">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                </div>
            </div>

            <div class="form-group-2">
                <div class="form-group m-3">
                    <label for="phone">Phone</label>
                    <input id="phone" name="phone" type="text" placeholder="604-123-4567"
                        class="mt-1 focus:ring-gray-500 text-gray-500 block placeholder-gray-300 border-gray-300 rounded-2xl bg-gray-100">

                    <!-- Show error -->
                    @if ($errors->has('phone'))
                        <div class="text-red-500">
                            {{ $errors->first('phone') }}
                        </div>
                    @endif
                </div>
                <div class="form-group m-3">
                    <label class="block">
                        <span class="text-gray-700">Photography Type</span>
                        <select name="type" id="type"
                            class="mt-1 focus:ring-gray-500 text-gray-500 block placeholder-gray-300 border-gray-300 rounded-2xl bg-gray-100">
                            <option value="Lifestyle Session">Lifestyle Session</option>
                            <option value="Pet Photo Session">Pet Photo Session</option>
                            <option value="Brand Photo Session">Brand Photo Session</option>
                        </select>
                    </label>

                    <!-- Show error -->
                    @if ($errors->has('type'))
                        <div class="text-red-500">
                            {{ $errors->first('type') }}
                        </div>
                    @endif
                </div>
            </div>

            <div class="form-group m-3 form-message">
                <label for="messages">Message</label>
                <textarea
                    class="focus:ring-gray-500 text-gray-500 block w-full mt-5 placeholder-gray-300 border-gray-300 rounded-2xl bg-gray-100"
                    name="messages" id="messages" cols="30" rows="10" placeholder="Messages"></textarea>

                <!-- Show error -->
                @if ($errors->has('messages'))
                    <div class="text-red-500">
                        {{ $errors->first('messages') }}
                    </div>
                @endif
            </div>

            <button class="block self-end p-5 m-2 btn px-3 py-2" type="submit">Send Message</button>

        </form>
    </section>

@endsection
