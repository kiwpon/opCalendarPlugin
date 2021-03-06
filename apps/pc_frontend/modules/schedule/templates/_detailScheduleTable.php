<?php
  $startTime = op_format_date($schedule->getStartTime(), 'HH時mm分');
  if(!$startTime) $startTime = '--時--分';
  $endTime = op_format_date($schedule->getEndTime(), 'HH時mm分');
  if(!$endTime) $endTime = '--時--分';
?>
<table class="detailScheduleTable">
<tbody>
<tr class="title"><th>タイトル</th><td><?php echo $schedule->getTitle() ?> (<?php echo $schedule->getPublicFlagLabel() ?>)</td></tr>
<tr class="body"><th>スケジュール作成者</th><td><?php echo op_link_to_member($schedule->getMember()) ?></td></tr>
<tr class="start"><th>開始</th><td><?php echo op_format_date($schedule->getStartDate(), 'yyyy年MM月dd日') ?> <?php echo $startTime ?></td></tr>
<tr class="end"><th>終了</th><td><?php echo op_format_date($schedule->getEndDate(), 'yyyy年MM月dd日') ?> <?php echo $endTime ?></td></tr>
<?php if ($schedule->getBody()): ?>
<tr class="body"><th>詳細</th><td><?php echo nl2br($schedule->getBody()) ?></td></tr>
<?php endif ?>
<tr class="members"><th>参加メンバー</th>
<td>
<?php foreach($sf_data->getRaw('schedule')->getScheduleMembers() as $scheduleMember): ?>
<?php echo op_link_to_member($scheduleMember->Member) ?><br />
<?php endforeach; ?>
</td></tr>
<?php if (count($schedule->ScheduleResourceLocks)): ?>
<tr class="members"><th>スケジュールリソース</th>
<td>
<?php foreach($schedule->ScheduleResourceLocks as $scheduleResourceLock): ?>
<?php echo $scheduleResourceLock->ScheduleResource->name ?><br />
<?php endforeach ?>
</td></tr>
<?php endif ?>
</tbody>
</table>
