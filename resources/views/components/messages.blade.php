@if ($message = Session::get('success'))
<div class="notification first-letter:uppercase has-text-centered is-primary animate__animated animate__fadeOut">
    {{ session('success') }}
</div>
@endif

@if ($message = Session::get('error'))
<div class="notification first-letter:uppercase has-text-centered is-danger animate__animated animate__fadeOut">
    <p class="notification-message">{{ session('error') }}</p>
</div>
@endif