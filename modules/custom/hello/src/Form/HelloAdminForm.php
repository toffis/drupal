<?php
namespace Drupal\hello\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class HelloAdminForm  extends FormBase{
    //put your code here
    public function buildForm(array $form, FormStateInterface $form_state) {
        $form['hello_select'] = [
            '#type' => 'select',
            '#title' => $this->t('Select element'),
            '#options' => [
              'blue-class' => $this->t('Blue'),
              'red-class' => $this->t('Red'),
              'yellow-class' => $this->t('Yellow'),
            ],
        ];
      return $form;
    }

    public function getFormId() {
         return 'hello_admin_form';
    }

    public function submitForm(array &$form, FormStateInterface $form_state) {
        
    }

}
