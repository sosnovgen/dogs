


@for($i = 0; $i < 3; $i++)
    <?php $art = $arts[$i] ?>
    {{count($arts)}}
    {{$art[$i]['preview']}}
@endfor