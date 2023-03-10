<x-app-layout>

    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 py-8">

        <h1 class="text-4xl font-bold text-gray-600">{{$post->name}}</h1>

        <div class="text-lg text-gray-500 mb-2">
            {!!$post->extract!!}
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            <div class="lg:col-span-2">

                <figure>
                    @if ($post->image)
                        <img class="w-full h-80 object-cover object-center" src="{{Storage::url($post->image->url)}}" alt="">
                    @else
                        <img class="w-full h-80 object-cover object-center" src="https://cdn.pixabay.com/photo/2015/12/03/08/50/paper-1074131_960_720.jpg" alt="">
                    @endif
                </figure>

                <div class="text-base text-gray-500 mt-4 ">
                    {!!$post->body!!}
                </div>

            </div>

            <aside>
                <h1 class="text-2xl font-bold text-gray-600 mb-4">More on {{$post->category->name}}</h1>

                <ul>
                    @foreach ($similar as $item)
                        <li class="mb-4">
                            <a class="flex" href="{{route('posts.show', $item)}}">
                                @if ($item->image)
                                    <img class="w-36 h-20 object-cover object-center" src="{{Storage::url($item->image->url)}}" alt="">
                                @else
                                    <img class="w-36 h-20 object-cover object-center" src="https://cdn.pixabay.com/photo/2015/12/03/08/50/paper-1074131_960_720.jpg" alt="">
                                @endif
                                <span class="ml-2 text-gray-600">{{$item->name}}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>

            </aside>

        </div>

    </div>

</x-app-layout>