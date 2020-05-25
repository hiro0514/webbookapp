

<?php $__env->startSection('title','資料検索結果画面'); ?>

<?php $__env->startSection('content'); ?>


<p>　＜資料検索結果＞　</p>
<?php echo csrf_field(); ?>
<!-- <input type="text" name="catalog_name"> -->
<!-- <input type="submit" name="submit" value="検索"> -->


<p><?php echo e($search_count); ?>件の検索結果</p>
<table border="1">
  <tr>
    <th nowrap>ISBN番号</th>
    <th nowrap>資料名</th>
    <th nowrap>分類コード</th>
    <th nowrap>著者</th>
    <th nowrap>出版社</th>
    <th nowrap>出版日</th>
    <th nowrap>資料ID</th>
    <th nowrap>変更</th>
    <th nowrap>削除</th>
  </tr>
  <?php $__currentLoopData = $catalog_name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php if(!$item->registers->isEmpty()): ?>
  <?php $__currentLoopData = $item->registers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $register): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
    <td nowrap><?php echo e($item->catalog_number); ?></td>
    <td nowrap><?php echo e($item->catalog_name); ?></td>
    <td nowrap><?php echo e($item->catalog_code); ?></td>
    <td nowrap><?php echo e($item->catalog_author); ?></td>
    <td nowrap><?php echo e($item->catalog_publishername); ?></td>
    <td nowrap><?php echo e($item->catalog_publication); ?></td>
    <td nowrap><?php echo e($register->catalog_id); ?></td>
    <!-- 栗山先生追記部分 -->
    <!-- <td><a href-"document_change?catalog_id=<?php echo e($item->catalog_id); ?>">変更</a></td> -->

<td nowrap><form class="" action="document_change" method="post">
  <?php echo csrf_field(); ?>
  <input type="hidden" name="catalog_id" value="<?php echo e($register->catalog_id); ?>">
  <input type="hidden" name="catalog_number" value="<?php echo e($register->catalog_number); ?>">
  <input type="hidden" name="catalog_name" value="<?php echo e($item->catalog_name); ?>">
  <input type="hidden" name="catalog_remark" value="<?php echo e($register->catalog_remark); ?>">
    <input type="hidden" name="disposal_date" value="<?php echo e($register->disposal_date); ?>">
  <input type="submit" class="next_button" value="変更">
</form></td>
    <td><a href="./document_change">削除</td>
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php endif; ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>


  <button type="button" name="return_button" onclick="location.href='./document_search'">戻る</button>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\student\Desktop\webbookapp\resources\views/document_search_result.blade.php ENDPATH**/ ?>