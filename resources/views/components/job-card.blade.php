@props(['job'])
<div
    class="p-4 bg-white/5 rounded-xl flex flex-col text-center border border-transparent hover:border-blue-600 transition-colors duration-300 group">
    <div class="self-start text-sm">{{$job->employer->name}}</div>
    <div class="py-8">
        <h3 class="group-hover:text-blue-600 text-xl font-bold transition-colors duration-300">
            <a href="{{ $job->url }}" target="_blank">
                {{$job->title}}
            </a>
        </h3>
        <p class="text-sm mt-4">{{$job->salary}} USD </p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach ($job->tags as $tag)
                <x-tag :$tag size="small" />

            @endforeach
        </div>

        <x-employer-logo :employer="$job->employer" :width="42" />
    </div>
</div>