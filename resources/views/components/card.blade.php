@props(["highlight" => false, "name", "power", "skill"])

<div @class(['border rounded-xl p-6 flex flex-col gap-1 max-w-80', 'border-blue-600'=> !$highlight, 'border-red-600'=>$highlight])>
    <span>Name: {{ $name }}</span>
    <span>Power: {{ $power }}</span>
    <span>Skill: {{ $skill }}</span>
    <a href="{{ $attributes->get('href') }}" class="underline text-blue-500">{{ $name }}</a>
</div>

{{-- either we can pass valid html attribute and access it through $attributes or we can pass logic or variable as string and it can be accessed as props --}}

{{-- you can also add {{ $slot }} to make it like {children} in react --}}
