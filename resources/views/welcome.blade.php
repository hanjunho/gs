@extends('master')

@section('content')
    <h1> <a href="/">경영수업 시간순 정렬</a></h1>
    @if($lists)
    <ul class="other-sort text-center">
        <li><a target="_blank" href="http://guruchain.com/#/greatboss/1/boards/1179/articles/8147/read">[원리와 방법1] 게시판 정리</a></li>
        <li><a href="/sortc/">커피게시판 제외</a></li>
    </ul>

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
                $mdate = date( 'm-d', $pdate );
                $tdate = date( 'H:m', $pdate );
            ?>
            <span class="year"><?php echo $ydate; ?></span>
            <span class="board_name"><a href="/sortb/{{ $list->cafeBoardName }}">{{ $list->cafeBoardName }}</a></span>
            <span class="date">
                <?php echo $mdate." <small>".$tdate."</small>"; ?>
            </span>
        </td>
        <td class="title">
            @if($list->rootId)
               <a class="parent" target="_blank" href="http://guruchain.com/#/greatboss/1/boards/{{ $list->cafeBoardId }}/articles/{{ $list->rootId }}/read">원글</a><br>
            @endif
            <a class="@if($list->depth==1) depth @endif" target="_blank" href="http://guruchain.com/#/greatboss/1/boards/{{ $list->cafeBoardId }}/articles/{{ $list->id }}/read">{{ $list->title }}</a>
       
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
