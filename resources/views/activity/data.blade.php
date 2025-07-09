<ol>
    @foreach ($allActivities as $activities)
    <li>
        {{ $activities['type'] }}, {{ $activities['user_id'] }},
        {{ $activities['date_time'] }},
        {{ $activities['paid'] }}, {{ $activities['notes'] }}, {{ $activities['satisfaction'] }}
    </li>
    @endforeach
</ol>