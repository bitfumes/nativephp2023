<div>
    <h1 class="text-2xl">Reminders</h1>
    @foreach ($reminders as $reminder)
        <p>{{ $reminder }}</p>
    @endforeach
</div>
