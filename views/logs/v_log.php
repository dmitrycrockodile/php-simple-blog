<div class="container">
   <table>
      <tr>
         <td>Time</td>
         <td>User Id</td>
         <td>URI</td>
         <td>Referer</td>
      </tr>

      <?php foreach($logs as $log):?>
         <?php if (stristr($log['uri'], '%')):?>
            <tr style="text-align: center;">
               <td><?=$log['time']?></td>
               <td><?=$log['userId']?></td>
               <td style="background-color: pink"><?=$log['uri']?></td>
               <td><?=$log['referer']?></td>
            </tr>
         <?php else: ?>
            <tr style="text-align: center;">
               <td><?=$log['time']?></td>
               <td><?=$log['userId']?></td>
               <td><?=$log['uri']?></td>
               <td><?=$log['referer']?></td>
            </tr>
         <?php endif ?>
      <?php endforeach; ?>
   </table>

   <a href="<?=BASE_URL?>logs">Back</a>
</div>