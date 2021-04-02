@extends('layouts.home')

@section('content')

    <section class="contact-box big-shadow bg-white m-20 flex rounded-3xl">
        <div class="p-10">
            <h1 class="section-title">Contact</h1>
            <h3 class="section-subtitle max-w-md">Fill in the form or use one of the contact methods below to reach me.</h3>
            <ul>
                <li><a href="mailto:info@cattea.ca"><img class="mr-3" loading="lazy"
                            src="{{ asset('img/icons/mail.svg') }}" alt="mail icon">info@cattea.ca</a></li>
                <li><a href="https://facebook.com/CatteaArtistry"><i class="fab fa-facebook mr-3"></i>/CatteaArtistry</a>
                </li>
                <li><a href="https://instagram.com/cattea_artistry"><i
                            class="fab fa-instagram mr-3"></i>&commat;cattea_artistry</a></li>
            </ul>
        </div>
        <form action="" method="POST"
            class="big-shadow rounded-2xl px-20 py-10 flex flex-wrap justify-start align-items-center">
            <div class="form-group-1">
                <div class="form-group m-3">
                    <label for="name">Name</label>
                    <input id="name" name="name" type="text" placeholder="Enter your name"
                        class="mt-1 focus:ring-gray-500 text-gray-500 block placeholder-gray-300 border-gray-300 rounded-2xl bg-gray-100">
                </div>
                <div class="form-group m-3">
                    <label for="email">Email</label>
                    <input id="email" name="email" type="text" placeholder="example@email.com"
                        class="mt-1 focus:ring-gray-500 text-gray-500 block placeholder-gray-300 border-gray-300 rounded-2xl bg-gray-100">
                </div>
            </div>

            <div class="form-group-2">
                <div class="form-group m-3">
                    <label for="phone">Phone</label>
                    <input id="phone" name="phone" type="text" placeholder="604-123-4567"
                        class="mt-1 focus:ring-gray-500 text-gray-500 block placeholder-gray-300 border-gray-300 rounded-2xl bg-gray-100">
                </div>
                <div class="form-group m-3">
                    <label class="block">
                        <span class="text-gray-700">Photography Type</span>
                        <select
                            class="mt-1 focus:ring-gray-500 text-gray-500 block placeholder-gray-300 border-gray-300 rounded-2xl bg-gray-100">
                            <option value="Lifestyle Session">Lifestyle Session</option>
                            <option value="Pet Photo Session">Pet Photo Session</option>
                            <option value="Brand Photo Session">Brand Photo Session</option>
                        </select>
                    </label>
                </div>
            </div>

            <div class="form-group m-3 form-message">
                <label for="message">Message</label>
                <textarea
                    class="focus:ring-gray-500 text-gray-500 block w-full mt-5 placeholder-gray-300 border-gray-300 rounded-2xl bg-gray-100"
                    name="message" id="message" cols="30" rows="10" placeholder="Messages"></textarea>
            </div>

        </form>
    </section>

@endsection
