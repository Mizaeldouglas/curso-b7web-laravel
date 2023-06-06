
<a
href="{{isset($href) ? $href : '#'}}"
style="
    text-decoration: none;
    background-color: {{$cor}};
    color: azure;border: 0;
    padding: 8px;
    border-radius: 20px;
    margin:10px;
">
{{$slot}}
</a>
