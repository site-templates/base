<x-layouts.main :title="$posts->title" :description="$posts->excerpt" current="/writing">
    <x-sections.post-header
        :title="$posts->title"
        :excerpt="$posts->excerpt"
        :dateFormatted="$posts->dateFormatted"
        :readTime="$posts->readTime" />
    <x-sections.post-body :content="$posts->content" />
    <x-sections.writing-rows label="More writing" showLink="0" :excludeSlug="$posts->slug" :items="$entries" />
    <x-sections.newsletter />
</x-layouts.main>
