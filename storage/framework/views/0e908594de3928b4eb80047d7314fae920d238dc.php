<?php $__env->startSection('content'); ?>
    
    <?php if($lists): ?>
    <div class="text-center">
      <?php echo $lists->render(); ?>

    </div>
    <?php endif; ?>
    <table class="list-table">
<?php $__empty_1 = true; $__currentLoopData = $lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>


    <tr class="
        <?php if($list->cafeBoardName == '원리와 방법1'): ?> origin
        <?php elseif($list->cafeBoardName == '글읽고 질문'): ?> qna
        <?php elseif($list->cafeBoardName == '정회원 이상 공지'): ?> notice
        <?php elseif($list->cafeBoardName == '커피 한잔의 여유'): ?> coffee
        <?php else: ?>
        <?php endif; ?>
        <?php if($list->creatorNm == '경영 수업'): ?> master
        <?php endif; ?>
        ">
        <td class="list_label">
            <?php 
                $pdate = strtotime($list['createdAt']); 
                $ydate = date( 'Y', $pdate );
                $mdate = date( 'm', $pdate );
                $ddate = date( 'd', $pdate );
                $tdate = date( 'H:m', $pdate );
            ?>
            <span class="board_name"><a href="/sortb/<?php echo e($list->cafeBoardName); ?>"><?php echo e($list->cafeBoardName); ?></a></span>
            <span class="time year"><?php echo $ydate; ?></span>
            <span class="time date">
                <a href="/sortb/<?php echo e($list->createdAt); ?>"><?php echo $mdate."</a>-".$ddate." <small>".$tdate."</small>"; ?>
            </span>
        </td>
        <td class="title">
            <?php if($list->rootId): ?>
               <a class="parent" target="_blank" href="http://guruchain.com/#/greatboss/1/boards/<?php echo e($list->cafeBoardId); ?>/articles/<?php echo e($list->rootId); ?>/read">원글</a>
            <?php endif; ?>
            <a class="<?php if($list->depth==1): ?> depth <?php endif; ?>" target="_blank" href="http://guruchain.com/#/greatboss/1/boards/<?php echo e($list->cafeBoardId); ?>/articles/<?php echo e($list->id); ?>/read"><?php echo e($list->title); ?></a>
       
            <span class="creator <?php if( $list->creatorNm=='경영 수업' ): ?> master <?php endif; ?>"> <a href="/sort/<?php echo e($list->creatorNm); ?>"><?php echo e($list->creatorNm); ?></a> </span>
        </td>
    </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
      <p>There is no article!</p>
<?php endif; ?>
    </table>
    <footer>

    </footer>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>