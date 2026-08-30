@props(['content' => '<p>Write here.</p>'])
{{-- The body of a post. Same prose rules as everywhere else, but it sits
     close under the title rather than a full section apart. The HTML comes
     from the post's `content` field in resources/data/collections/posts.json,
     which opens as a rich text editor. --}}
<article class="mx-auto w-full max-w-[40rem] px-6 pt-10">
    <div class="prose">{!! $content !!}</div>
</article>
