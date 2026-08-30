@props([
    'heading' => 'Get new posts by email',
    'intro' => 'One email when something new goes up. Usually once a month, never more than twice.',
    'action' => 'https://example.com/subscribe',
    'placeholder' => 'you@example.com',
    'buttonText' => 'Subscribe',
    'note' => 'No spam. Unsubscribe in one click.',
])
{{-- The one recessed panel on the site, and the only place the green is
     allowed to fill a whole shape. Point `action` at whatever your email
     provider gives you — the form posts a single `email` field. --}}
<section class="mx-auto w-full max-w-[40rem] px-6 pt-16 sm:pt-20">
    <div class="rounded-2xl bg-surface p-6 sm:p-7">

        <h2 class="display-row font-display font-semibold text-ink">{{ $heading }}</h2>
        <p class="mt-2 max-w-[50ch] text-base text-pretty text-muted sm:text-sm">{{ $intro }}</p>

        <form action="{{ $action }}" method="post" class="mt-5 flex max-w-md flex-col gap-2 sm:flex-row">
            <label for="newsletter-email" class="sr-only">Email address</label>
            <input id="newsletter-email" type="email" name="email" required placeholder="{{ $placeholder }}" autocomplete="email" class="w-full rounded-full border border-line bg-canvas px-4 py-3 text-base text-ink placeholder:text-muted focus-visible:border-accent focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink sm:py-2.5 sm:text-sm">
            <button type="submit" class="shrink-0 rounded-full bg-accent px-5 py-3 text-base font-medium text-accent-ink hover:bg-accent-deep focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink sm:py-2.5 sm:text-sm">{{ $buttonText }}</button>
        </form>

        <p class="mt-3 text-base text-muted sm:text-sm">{{ $note }}</p>

    </div>
</section>
