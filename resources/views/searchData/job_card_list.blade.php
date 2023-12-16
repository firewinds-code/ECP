<ul>
    @foreach ($lists as $list)
         <li><a onclick="jobcard({{ $list->gov_id_no }})" href="javaScript::void(0)">{{ $list->gov_id_no }}</a></li>
    @endforeach
</ul>
