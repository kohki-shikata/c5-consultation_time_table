<?php defined('C5_EXECUTE') or die("Access Denied.");
  $form = Core::make('helper/form');

	$fp = FilePermissions::getGlobal();
	$tp = new TaskPermission();

  $type_list = array(
    '0' => t('(none)'),
    '1' => '◯',
    '2' => '◎',
    '3' => '※',
    '4' => '△',
    '5' => '×',
    '6' => '-',
  );
  
  if(!$controller->mon_label): $controller->mon_label = t('Mon.'); endif;
  if(!$controller->tue_label): $controller->tue_label = t('Tue.'); endif;
  if(!$controller->wed_label): $controller->wed_label = t('Wed.'); endif;
  if(!$controller->thu_label): $controller->thu_label = t('Thu.'); endif;
  if(!$controller->fri_label): $controller->fri_label = t('Fri.'); endif;
  if(!$controller->sat_label): $controller->sat_label = t('Sat.'); endif;
  if(!$controller->sun_label): $controller->sun_label = t('Sun.'); endif;
  
?>

<script>
    var CCM_EDITOR_SECURITY_TOKEN = "<?php   echo Loader::helper('validation/token')->generate('editor')?>";
    $('#redactor-content').redactor({
            minHeight: '130',
            'concrete5': {
                filemanager: <?php   echo $fp->canAccessFileManager()?>,
                sitemap: <?php   echo $tp->canAccessSitemap()?>,
                lightbox: true
            },
            'plugins': [
                'fontfamily','fontsize','fontcolor','concrete5'
            ]
        });
</script>


<div class="ccm-ui ctt-form-edit">
  <div class="form-group">
    <label for="title"><?php echo t('Title')?></label>
    <?php echo $form->text('title', $controller->title, array('style'=>'width: 20em;'));?>
  </div>

  <table>
    <thead>
      <tr>
        <th></th>
        <th><?php echo $form->text('mon_label', $controller->mon_label);?></th>
        <th><?php echo $form->text('tue_label', $controller->tue_label);?></th>
        <th><?php echo $form->text('wed_label', $controller->wed_label);?></th>
        <th><?php echo $form->text('thu_label', $controller->thu_label);?></th>
        <th><?php echo $form->text('fri_label', $controller->fri_label);?></th>
        <th><?php echo $form->text('sat_label', $controller->sat_label);?></th>
        <th><?php echo $form->text('sun_label', $controller->sun_label);?></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>
          <label for="am_label"><?php echo t('AM label')?></label>
          <?php echo $form->text('am_label', $controller->am_label);?>
          <label for="am_caption"><?php echo t('caption')?></label>
          <?php echo $form->text('am_caption', $controller->am_caption);?>
        </th>
        <td class="ctt-mon_am_type-col">
          <span class="ctt-mon_am_type-icon<?php echo $controller->mon_am_type;?>"><?php echo $form->select('mon_am_type', $type_list, $controller->mon_am_type); ?></span>
        </td>
        <td class="ctt-tue_am_type-col">
          <span class="ctt-tue_am_type-icon<?php echo $controller->tue_am_type;?>"><?php echo $form->select('tue_am_type', $type_list, $controller->tue_am_type); ?></span>
        </td>
        <td class="ctt-wed_am_type-col">
          <span class="ctt-wed_am_type-icon<?php echo $controller->wed_am_type;?>"><?php echo $form->select('wed_am_type', $type_list, $controller->wed_am_type); ?></span>
        </td>
        <td class="ctt-thu_am_type-col">
          <span class="ctt-thu_am_type-icon<?php echo $controller->thu_am_type;?>"><?php echo $form->select('thu_am_type', $type_list, $controller->thu_am_type); ?></span>
        </td>
        <td class="ctt-fri_am_type-col">
          <span class="ctt-fri_am_type-icon<?php echo $controller->fri_am_type;?>"><?php echo $form->select('fri_am_type', $type_list, $controller->fri_am_type); ?></span>
        </td>
        <td class="ctt-sat_am_type-col">
          <span class="ctt-sat_am_type-icon<?php echo $controller->sat_am_type;?>"><?php echo $form->select('sat_am_type', $type_list, $controller->sat_am_type); ?></span>
        </td>
        <td class="ctt-sun_am_type-col">
          <span class="ctt-sun_am_type-icon<?php echo $controller->sun_am_type;?>"><?php echo $form->select('sun_am_type', $type_list, $controller->sun_am_type); ?></span>
        </td>
      </tr>
      <tr>
        <th>
          <label for="pm_label"><?php echo t('PM label')?></label>
          <?php echo $form->text('pm_label', $controller->pm_label);?>
          <label for="pm_caption"><?php echo t('caption')?></label>
          <?php echo $form->text('pm_caption', $controller->pm_caption);?>
        </th>
        <td class="ctt-mon_pm_type-col">
          <span class="ctt-mon_am_type-icon<?php echo $controller->mon_am_type;?>"><?php echo $form->select('mon_pm_type', $type_list, $controller->mon_pm_type); ?></span>
        </td>
        <td class="ctt-tue_pm_type-col">
          <span class="ctt-tue_pm_type-icon<?php echo $controller->tue_pm_type;?>"><?php echo $form->select('tue_pm_type', $type_list, $controller->tue_pm_type); ?></span>
        </td>
        <td class="ctt-wed_pm_type-col">
          <span class="ctt-wed_pm_type-icon<?php echo $controller->wed_pm_type;?>"><?php echo $form->select('wed_pm_type', $type_list, $controller->wed_pm_type); ?></span>
        </td>
        <td class="ctt-thu_pm_type-col">
          <span class="ctt-thu_pm_type-icon<?php echo $controller->thu_pm_type;?>"><?php echo $form->select('thu_pm_type', $type_list, $controller->thu_pm_type); ?></span>
        </td>
        <td class="ctt-fri_pm_type-col">
          <span class="ctt-fri_pm_type-icon<?php echo $controller->fri_pm_type;?>"><?php echo $form->select('fri_pm_type', $type_list, $controller->fri_pm_type); ?></span>
        </td>
        <td class="ctt-sat_pm_type-col">
          <span class="ctt-sat_pm_type-icon<?php echo $controller->sat_pm_type;?>"><?php echo $form->select('sat_pm_type', $type_list, $controller->sat_pm_type); ?></span>
        </td>
        <td class="ctt-sun_pm_type-col">
          <span class="ctt-sun_pm_type-icon<?php echo $controller->sun_pm_type;?>"><?php echo $form->select('sun_pm_type', $type_list, $controller->sun_pm_type); ?></span>
        </td>
  
      </tr>
    </tbody>
  </table>
  
  <div class="form-group">
    <label for="footer_caption"><?php echo t('Footer description')?></label>                
    <textarea style="display: none" id="redactor-content" name="footer_caption"><?php echo $footer_caption?></textarea>
  </div>
</div>