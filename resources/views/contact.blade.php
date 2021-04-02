@extends('layouts.home')

@section('content')

    <section class="contact-box big-shadow bg-white m-20 p-5 rounded-3xl">
        <div>
            <h1 class="section-title">Contact</h1>
            <h3 class="section-subtitle">Fill in the form or use one of the contact methods below to reach me.</h3>
            <ul>
                <li><a href="mailto:info@cattea.ca"><img class="mr-3" loading="lazy"
                            src="{{ asset('img/icons/mail.svg') }}" alt="mail icon">info@cattea.ca</a></li>
                <li><a href="https://facebook.com/CatteaArtistry"><i class="fab fa-facebook mr-3"></i>/CatteaArtistry</a>
                </li>
                <li><a href="https://instagram.com/cattea_artistry"><i
                            class="fab fa-instagram mr-3"></i>&commat;cattea_artistry</a></li>
            </ul>
        </div>
        <form action="" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input id="name" name="name" type="text" placeholder="Enter your name"
                    class="focus:ring-gray-500 text-gray-500 placeholder-gray-300 border-gray-300 rounded-2xl bg-gray-100">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" name="email" type="text" placeholder="example@email.com"
                    class="focus:ring-gray-500 text-gray-500 placeholder-gray-300 border-gray-300 rounded-2xl bg-gray-100">
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input id="phone" name="phone" type="text" placeholder="604-123-4567"
                    class="focus:ring-gray-500 text-gray-500 placeholder-gray-300 border-gray-300 rounded-2xl bg-gray-100">
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input id="phone" name="phone" type="text" placeholder="604-123-4567"
                    class="focus:ring-gray-500 text-gray-500 placeholder-gray-300 border-gray-300 rounded-2xl bg-gray-100">
            </div>

            <div class="form-group">
                <label class="block">
                    <span class="text-gray-700">Photography Type</span>
                    <select
                        class="focus:ring-gray-500 text-gray-500 placeholder-gray-300 border-gray-300 rounded-2xl bg-gray-100">
                        <option value="Lifestyle Session">Lifestyle Session</option>
                        <option value="Pet Photo Session">Pet Photo Session</option>
                        <option value="Brand Photo Session">Brand Photo Session</option>
                    </select>
                </label>
            </div>

            <div class="form-group">
                <textarea
                    class="focus:ring-gray-500 text-gray-500 placeholder-gray-300 border-gray-300 rounded-2xl bg-gray-100"
                    name="message" id="message" cols="30" rows="10" placeholder="Messages"></textarea>
            </div>

        </form>
    </section>

@endsection
