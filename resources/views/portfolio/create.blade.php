<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Portfolio Item') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-20">

                <form action="{{ route('portfolio.store') }}" method="POST" enctype='multipart/form-data'>
                    @csrf

                    <div class="form-group ">
                        <label for="title">Title</label>
                        @error('title')
                            <br>
                            <small class="text-red-600">{{ $errors->first('title') }}
                            </small>
                        @enderror
                        <input id="title" name="title" type="text" placeholder="Enter the title of the image"
                            class="mt-1 focus:ring-gray-500 text-gray-500 block placeholder-gray-300 border-gray-300 rounded-2xl bg-gray-100 w-80">
                    </div>

                    <div class="form-group mt-5">
                        <label for="altText">Descriptive Text (Alt Text)</label>
                        @error('altText')
                            <br>
                            <small class="text-red-600">{{ $errors->first('altText') }}
                            </small>
                        @enderror
                        <input id="altText" name="altText" type="text" placeholder="Describe the image"
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
                        <label for="imagePath">Upload Image</label>
                        @error('imagePath')
                            <br>
                            <small class="text-red-600">{{ $errors->first('imagePath') }}
                            </small>
                        @enderror
                        <input name="imagePath" type="file"
                            class="mt-1 text-gray-500 block  rounded-2xl p-5 bg-gray-100 w-80">
                    </div>

                    <div class="form-group mt-5">
                        <button class="btn transition-colors hover:bg-gray-500" type="submit">Add Portfolio
                            Item</button>
                    </div>



                </form>

            </div>
        </div>
    </div>
</x-app-layout>
