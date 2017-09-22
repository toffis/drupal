<?php

namespace Drupal\hello\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Implements an example form.
 */
class CalculatorForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'calculator_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['first_value'] = array(
      '#type' => 'number',
      '#title' => $this->t('First value*'),
    );
    $form['settings']['active'] = array(
        '#type' => 'radios',
        '#title' => $this->t('Operation'),
        '#default_value' => '+',
        '#options' => array('+' => $this->t('Ajouter'), 
                            '-' => $this->t('Soustract'),
                            '*' => $this->t('Multiply'),
                            '/' => $this->t('Divide'),
                      ),
      );
    $form['second_value'] = array(
      '#type' => 'number',
      '#title' => $this->t('Seconde value*'),
    );
    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Calculate'),
      '#button_type' => 'primary',
    );
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    if (!is_numeric($form_state->getValue('first_value'))) {
      $form_state->setErrorByName('first_value', $this->t('The number is numeric'));
    }
    if (!is_numeric($form_state->getValue('second_value'))) {
      $form_state->setErrorByName('second_value', $this->t('The number is numeric'));
    }
    
    if ($form_state->getValue('active') == '/' && $form_state->getValue('second_value') == 0 ) {
      $form_state->setErrorByName('second_value', $this->t('The number is superior to 0'));
    }
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
//    drupal_set_message($this->t('First value is @firstValue <br> Second value is @secondValue <br> Operation is @active', array(
//        '@firstValue' => $form_state->getValue('first_value'),
//        '@secondValue' => $form_state->getValue('second_value'),
//        '@active' => $form_state->getValue('active')
//    )));
    $form_state->setRedirect('hello.hello');
  }

}