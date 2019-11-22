@component('mail::message')

# <u>Post Created</u>

<h1>{{ $post-> topic }}</h1>

{{ $post-> summary }}

@component('mail::button', ['url' => url('/posts/' . $post->id )])
View Post
@endcomponent

Thanks for sharing your post,<br>
Thomas Gale

@endcomponent
