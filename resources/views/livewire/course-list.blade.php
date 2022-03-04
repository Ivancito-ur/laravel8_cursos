<div class="grid grid-cols-3 gap-4 mt-8">
    @foreach ($courses as $course)
        <x-CourseCard :course="$course" />
    @endforeach
</div>
