@extends('master')

@section('content')
    
    @if($lists)
    <div class="text-center">
      {!! $lists->render() !!}
    </div>
    @endif
    <table class="list-table">
@forelse ( $lists as $list )


    <tr class="
        @if($list->cafeBoardName == '원리와 방법1') origin
        @elseif($list->cafeBoardName == '글읽고 질문') qna
        @elseif($list->cafeBoardName == '정회원 이상 공지') notice
        @elseif($list->cafeBoardName == '커피 한잔의 여유') coffee
        @else
        @endif
        @if($list->creatorNm == '경영 수업') master
        @endif
        ">
        <td class="list_label">
            <?php 
                $pdate = strtotime($list['createdAt']); 
                $ydate = date( 'Y', $pdate );
                $mdate = date( 'm', $pdate );
                $ddate = date( 'd', $pdate );
                $tdate = date( 'H:m', $pdate );
            ?>
            <span class="board_name"><a href="/sortb/{{ $list->cafeBoardName }}">{{ $list->cafeBoardName }}</a></span>
            <span class="time year"><?php echo $ydate; ?></span>
            <span class="time date">
                <a href="/sortb/{{$list->createdAt}}"><?php echo $mdate."</a>-".$ddate." <small>".$tdate."</small>"; ?>
            </span>
        </td>
        <td class="title">
            @if($list->rootId)
               <a class="parent" target="_blank" data-popup="true" href="http://www.guruchain.com/#/greatboss/1/boards/{{ $list->cafeBoardId }}/articles/{{ $list->rootId }}/read">원글</a>
            @endif
            <a class="@if($list->depth==1) depth @endif" target="_blank" data-popup="true" href="http://www.guruchain.com/#/greatboss/1/boards/{{ $list->cafeBoardId }}/articles/{{ $list->id }}/read">{{ $list->title }}</a>
       
            <span class="creator @if( $list->creatorNm=='경영 수업' ) master @endif"> <a href="/sort/{{ $list->creatorNm }}">{{ $list->creatorNm }}</a> </span>
        </td>
    </tr>

    @empty
      <p>There is no article!</p>
@endforelse
    </table>
    <footer>

    </footer>

@stop
