<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Portfolio Item') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-20">

                <form action="{{ route('portfolio.update', $portfolio->id) }}" method="POST"
                    enctype='multipart/form-data'>
                    @csrf
                    @method("PUT")

                    <div class="mb-10">
                        <img class="rounded shadow-sm mb-2" width="200"
                            src="{{ asset('img/portfolio/') }}/{{ $portfolio->imagePath }}" alt="">
                        <small class="text-gray-400 block">To change image, delete this portfolio item, and add a new
                            one.</small>
                        <small class="text-gray-400 block">To update the portfolio item's details, change the
                            information
                            below.</small>
                    </div>

                    <div class="form-group ">
                        <label for="title">Title</label>
                        @error('title')
                            <br>
                            <small class="text-red-600">{{ $errors->first('title') }}
                            </small>
                        @enderror
                        <input id="title" value="{{ $portfolio->title }}" name="title" type="text"
                            placeholder="Enter the title of the image"
                            class="mt-1 focus:ring-gray-500 text-gray-500 block placeholder-gray-300 border-gray-300 rounded-2xl bg-gray-100 w-80">
                    </div>

                    <div class="form-group mt-5">
                        <label for="altText">Descriptive Text (Alt Text)</label>
                        @error('altText')
                            <br>
                            <small class="text-red-600">{{ $errors->first('altText') }}
                            </small>
                        @enderror
                        <input id="altText" value="{{ $portfolio->altText }}" name="altText" type="text"
                            placeholder="Describe the image"
                            class="mt-1 focus:ring-gray-500 text-gray-500 block placeholder-gray-300 border-gray-300 rounded-2xl bg-gray-100 w-80">
                    </div>


                    <div class="form-group mt-5">
                        <label class="block">
                            <span class="text-gray-700">Category</span>
                            @error('category')
                                <br>
                                <small class="text-red-600">{{ $errors->first('category') }}
                                </small>
                            @enderror
                            <select id="category" name="category"
                                class="mt-1 focus:ring-gray-500 text-gray-500 block placeholder-gray-300 border-gray-300 rounded-2xl bg-gray-100 w-80">
                                <option selected>{{ $portfolio->category }}</option>
                                <option value="Landscape">Landscape</option>
                                <option value="Portraits">Portraits</option>
                                <option value="Pets">Pets</option>
                                <option value="Astrophotography">Astrophotography</option>
                                <option value="Lifestyle">Lifestyle</option>
                                <option value="Pottery">Pottery</option>
                                <option value="Painting">Painting</option>
                            </select>
                        </label>
                    </div>

                    <div class="form-group mt-5">
                        <button class="btn transition-colors hover:bg-gray-500" type="submit">Edit Portfolio
                            Item</button>
                    </div>



                </form>

            </div>
        </div>
    </div>
</x-app-layout>
