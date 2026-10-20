<x-alert class="mb-4 " type='Error' :message="$post->title"/>

<div {{$attributes->merge(['class' => 'my-5']) }} {{$attributes->merge(['other-attr' => 'data1']) }}>
    {{$changeTitle()}}
<h1>{{$post->title}}</h1>
<h3>{{$post->created_at}}</h3>
<h3>{{$post->content}}</h3>

</div>