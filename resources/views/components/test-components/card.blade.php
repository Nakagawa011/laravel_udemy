@props([
    'message' => 'undefine title',
    'content' => 'undefine content',
    'title' => 'undefine title',
    'img' => '/img/sample.png',
])

<div class="w-40 border-2 shadow-md">
    <div>{{ $title }}</div>
    <img src={{ $img }} class=" m-auto" />
    <div>{{ $content }}</div>
    <div>{{ $message }}</div>
</div>
