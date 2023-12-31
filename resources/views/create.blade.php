<x-HTML>
  <x-_navbar />
  <div class="max-w-7xl  mx-auto mt-5">
    <div class="max-w-2xl mx-auto rounded p-4">
        <form action="/listings/store" class="text-laraDark" method="POST">
            @csrf
            <div class="mb-3">
                <label for="company" class="text-xl font-semibold block mb-1">Company Name</label>
                <input type="text" name="company" id="company" class="form-input" value="{{old('company') }} ">
                @error('company')
                    <small class="text-red-500">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="title" class="text-xl font-semibold block mb-1">Job Title</label>
                <input type="text" name="title" id="title" class="form-input" value="{{old('title') }} ">
                @error('title')
                    <small class="text-red-500">{{$message}}</small>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="tags" class="text-xl font-semibold block mb-1">Tags (comma separated) </label>
                <input type="text" name="tags" id="tags" class="form-input" value="{{old('tags') }} ">
                @error('tags')
                    <small class="text-red-500">{{$message}}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="location" class="text-xl font-semibold block mb-1">Job Location</label>
                <input type="text" name="location" id="location" class="form-input" value="{{old('location') }} ">
                @error('location')
                    <small class="text-red-500">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="text-xl font-semibold block mb-1">Company Email</label>
                <input type="text" name="email" id="email" class="form-input" value="{{old('email') }} ">
                @error('email')
                    <small class="text-red-500">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="website" class="text-xl font-semibold block mb-1">Website / Application URL</label>
                <input type="text" name="website" id="website" class="form-input" value="{{old('website') }} ">
                @error('website')
                    <small class="text-red-500">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="text-xl font-semibold block mb-1">Description</label>
                <textarea name="description" id="description"  rows="10" class="borderw-full focus:outline-laravel w-full p-2"  >{{old('description') }}</textarea>
                @error('description')
                    <small class="text-red-500">{{$message}}</small>
                @enderror
            </div>
            <button type="submit" class="bg-laravel w-full text-white py-1 px-3 rounded text-xl font-bold">Save</button>

        </form>

    </div>
    <div class="h-[100px]">
            
    </div>
  </div>
</x-HTML>