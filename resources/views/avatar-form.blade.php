<x-layout>
  <div class="container container--narrow py-md-5 mt-5 py-5">
    <h2 class="text-center mb-5 mt-5">Upload a New Avatar</h2>
    <form action="/manage-avatar" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <input type="file" name="avatar" required>
        @error('avatar')
        <p class="alert small alert-danger shadow-sm">{{$message}}</p>
        @enderror
      </div>
      <button class="btn btn-dark">Save</button>

    </form>
    

  </div>
</x-layout>