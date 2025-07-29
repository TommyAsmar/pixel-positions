@props(['job'])
<div
    class="p-4 bg-white/5 rounded-xl flex gap-x-6 border border-transparent hover:border-blue-600 transition-colors duration-300 group">
    <div>
        <x-employer-logo />
    </div>

    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400">{{$job->employer->name}}</a>

        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-600 transition-colors duration-300">{{ $job->title }}
        </h3>
        <p class="text-sm text-gray-400 mt-auto"> {{$job->salary}} USD</p>
    </div>

    <div class="">
        @foreach ($job->tags as $tag)
            <x-tag :$tag />
        @endforeach
    </div>
</div>