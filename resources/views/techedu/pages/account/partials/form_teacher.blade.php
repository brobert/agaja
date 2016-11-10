<ul class="nav nav-tabs mb-10">
    <li class="active">
        <a data-toggle="tab" href="#about">{{ trans('teacher.info.about') }}</a>
    </li>
    @foreach (['education', 'skills', 'courses' ] as $type )
        @if ( count( $teacher->$type ))
            <li>
                <a data-toggle="tab" href="#{{$type}}">{{ trans('teacher.info.' .$type ) }}</a>
            </li>
        @endif
    @endforeach
</ul>

<div class="tab-content">
    <div id="about" class="tab-pane fade in active">
        <p>{{$teacher->description}}</p>
    </div>
    @foreach (['education', 'skills', 'courses' ] as $type )
        @if ( count( $teacher->$type ))
            <div id="{{ $type }}" class="tab-pane fade">
                @include('techedu/pages/teacher/partials/skills', ['label' => 'teacher.' . $type, 'items' => $teacher->$type ])
            </div>
        @endif
    @endforeach
</div>