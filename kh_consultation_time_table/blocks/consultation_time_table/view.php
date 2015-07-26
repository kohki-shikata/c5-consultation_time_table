<?php defined('C5_EXECUTE') or die("Access Denied."); 
  
?>

  <div id="ctt-bid<?php echo $bID;?>" class="ctt-wrapper">
    <div class="ctt-inner">
      <?php if ($title) : echo '<h3>' . h($title) . '</h3>'; endif;?>
      <table>
        <thead>
          <tr>
            <th></th>
            <th class="mon_label_col"><span class="mon_label"><?php if ($mon_label) : echo h($mon_label) ; endif;?></span></th>
            <th class="tue_label_col"><span class="tue_label"><?php if ($tue_label) : echo h($tue_label) ; endif;?></span></th>
            <th class="wed_label_col"><span class="wed_label"><?php if ($wed_label) : echo h($wed_label) ; endif;?></span></th>
            <th class="thu_label_col"><span class="thu_label"><?php if ($thu_label) : echo h($thu_label) ; endif;?></span></th>
            <th class="fri_label_col"><span class="fri_label"><?php if ($fri_label) : echo h($fri_label) ; endif;?></span></th>
            <th class="sat_label_col"><span class="sat_label"><?php if ($sat_label) : echo h($sat_label) ; endif;?></span></th>
            <th class="sun_label_col"><span class="sun_label"><?php if ($sun_label) : echo h($sun_label) ; endif;?></span></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>
              <?php if ($am_label) :echo '<span class="ctt-label am">'. h($am_label) . '</span>' ; endif;?>
              <?php if ($am_caption) :echo '<span class="ctt-caption am">' . h($am_caption) . '</span>'; endif;?>
            </th>
            <td class="mon_am_type_col"><?php if ($mon_am_type) : $controller->getIconType($mon_am_type) ; endif;?></td>
            <td class="tue_am_type_col"><?php if ($tue_am_type) : $controller->getIconType($tue_am_type) ; endif;?></td>
            <td class="wed_am_type_col"><?php if ($wed_am_type) : $controller->getIconType($wed_am_type) ; endif;?></td>
            <td class="thu_am_type_col"><?php if ($thu_am_type) : $controller->getIconType($thu_am_type) ; endif;?></td>
            <td class="fri_am_type_col"><?php if ($fri_am_type) : $controller->getIconType($fri_am_type) ; endif;?></td>
            <td class="sat_am_type_col"><?php if ($sat_am_type) : $controller->getIconType($sat_am_type) ; endif;?></td>
            <td class="sun_am_type_col"><?php if ($sun_am_type) : $controller->getIconType($sun_am_type) ; endif;?></td>
          </tr>
          <tr>
            <th>
              <?php if ($pm_label) :echo '<span class="ctt-label pm">'. h($pm_label) . '</span>' ; endif;?>
              <?php if ($pm_caption) :echo '<span class="ctt-caption pm">' . h($pm_caption) . '</span>'; endif;?>
            </th>
            <td class="mon_pm_type_col"><?php if ($mon_pm_type) : $controller->getIconType($mon_pm_type) ; endif;?></td>
            <td class="tue_pm_type_col"><?php if ($tue_pm_type) : $controller->getIconType($tue_pm_type) ; endif;?></td>
            <td class="wed_pm_type_col"><?php if ($wed_pm_type) : $controller->getIconType($wed_pm_type) ; endif;?></td>
            <td class="thu_pm_type_col"><?php if ($thu_pm_type) : $controller->getIconType($thu_pm_type) ; endif;?></td>
            <td class="fri_pm_type_col"><?php if ($fri_pm_type) : $controller->getIconType($fri_pm_type) ; endif;?></td>
            <td class="sat_pm_type_col"><?php if ($sat_pm_type) : $controller->getIconType($sat_pm_type) ; endif;?></td>
            <td class="sun_pm_type_col"><?php if ($sun_pm_type) : $controller->getIconType($sun_pm_type) ; endif;?></td>
          </tr>
        </tbody>
      </table>
      
      <?php if ($footer_caption) :echo '<div class="ctt-ft-desc">' . $footer_caption . '</div>' ; endif;?>
    </div>
  </div>