<?php
namespace Concrete\Package\KhConsultationTimeTable\block\ConsultationTimeTable;

use BlockType;
use \Concrete\Core\Block\BlockController;
class Controller extends BlockController {

     protected $btInterfaceWidth = 800;
     protected $btInterfaceHeight = 700;
     protected $btTable = 'btConsultationTimeTable';

    public function getBlockTypeDescription()
    {
        return t("So easy to make a consultation timetable for typical Japanese Clinic");
    }

    public function getBlockTypeName()
    {
        return t("Consultation Time Table");
    }
  
    public function getIconType($icon_type)
      {
        $icons = array(
          '0' => '',
          '1' => '◯',
          '2' => '◎',
          '3' => '△',
          '4' => '※',
          '5' => '×',
          '6' => '-'
        );
      switch($icon_type) {
        case '1':
          echo '<span class="ctt-type-1">'. $icons['1'] .'</span>';
          break;
        case '2':
          echo '<span class="ctt-type-2">'. $icons['2'] .'</span>';          
          break;
        case '3':
          echo '<span class="ctt-type-3">'. $icons['3'] .'</span>';          
          break;
        case '4':
          echo '<span class="ctt-type-4">'. $icons['4'] .'</span>';          
          break;
        case '5':
          echo '<span class="ctt-type-5">'. $icons['5'] .'</span>';          
          break;
        case '6':
          echo '<span class="ctt-type-6">'. $icons['6'] .'</span>';          
          break;
      }
    }
    
    public function add()
    {
	    $this->requireAsset('redactor');
			$this->requireAsset('core/file-manager');
    }
    
    public function edit()
		{
		    $this->requireAsset('redactor');
		    $this->requireAsset('core/file-manager');
		}

    public function view()
    {
        
        $this->set('title', $this->title);
        $this->set('am_label', $this->am_label);
        $this->set('am_caption', $this->am_caption);
        $this->set('pm_label', $this->pm_label);
        $this->set('pm_caption', $this->pm_caption);
        $this->set('mon_label', $this->mon_label);
        $this->set('tue_label', $this->tue_label);
        $this->set('wed_label', $this->wed_label);
        $this->set('thu_label', $this->thu_label);
        $this->set('fri_label', $this->fri_label);
        $this->set('sat_label', $this->sat_label);
        $this->set('sun_label', $this->sun_label);
        $this->set('mon_am_type', $this->mon_am_type);
        $this->set('tue_am_type', $this->tue_am_type);
        $this->set('wed_am_type', $this->wed_am_type);
        $this->set('thu_am_type', $this->thu_am_type);
        $this->set('fri_am_type', $this->fri_am_type);
        $this->set('sat_am_type', $this->sat_am_type);
        $this->set('sun_am_type', $this->sun_am_type);
        $this->set('mon_pm_type', $this->mon_pm_type);
        $this->set('tue_pm_type', $this->tue_pm_type);
        $this->set('wed_pm_type', $this->wed_pm_type);
        $this->set('thu_pm_type', $this->thu_pm_type);
        $this->set('fri_pm_type', $this->fri_pm_type);
        $this->set('sat_pm_type', $this->sat_pm_type);
        $this->set('sun_pm_type', $this->sun_pm_type);
        $this->set('footer_caption', $this->footer_caption);

    }
    
    public function save($args)
    {
        parent::save($args);
    }
  }