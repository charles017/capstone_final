<x-layout>
  <div class="container py-md-5 container--narrow">
    <div class="text-center">
      <h2>Hello <strong>{{auth()->user()->username}}</strong>, your feed is empty.</h2>
      <p class="lead text-muted">Your feed displays the latest posts from the people you follow.</p>
    </div>
  </div>
</x-layout>