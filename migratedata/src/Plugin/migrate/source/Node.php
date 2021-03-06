<?php

namespace Drupal\migratedata\Plugin\migrate\source;

use Drupal\migrate\Event\MigrateRollbackEvent;
use Drupal\migrate\Plugin\migrate\source\SqlBase;
use Drupal\migrate\Row;

/**
 *  Extract users from Mysql database.
 *
 * @MigrateSource(
 *   id = "custom_node"
 * )
 */
class Node extends SqlBase {

  public function query() {
    $fields = [
      'bid',
      'name',
      'body',
      'excerpt',
      'aid',      
      'image',
      'image_alt',
      'image_title',
      'image_description',
    ];

    return $this->select('wordpress_node_table', 'wnt')->fields('wnt', $fields);
  }

  public function fields() {
    $fields = [
      'bid' => $this->t('Beer ID'),
      'name' => $this->t('Name of beer'),
      'body' => $this->t('Full description of the beer'),
      'excerpt' => $this->t('Abstract for this beer'),
      'aid' => $this->t('Account ID of the author'),
      //'countries' => $this->t('Countries of origin. Multiple values, delimited by pipe'),
      'image' => $this->t('Image path'),
      'image_alt' => $this->t('Image ALT'),
      'image_title' => $this->t('Image title'),
      'image_description' => $this->t('Image description'),
      // Note that this field is not part of the query above - it is populated
      // by prepareRow() below. You should document all source properties that
      // are available for mapping after prepareRow() is called.
      //'terms' => $this->t('Applicable styles'),
    ];

    return $fields;
  }

  public function getIds() {
    return [
      'bid' => [
        'type' => 'integer',
        'alias' => 'wnt',
      ],
    ];
  }

  public function prepareRow(Row $row) {

    //return parent::prepareRow($row); // TODO: Change the autogenerated stub
  }

  public function preRollback(MigrateRollbackEvent $event) {
    //parent::preRollback($event); // TODO: Change the autogenerated stub
  }

  public function postRollback(MigrateRollbackEvent $event) {
    //parent::postRollback($event); // TODO: Change the autogenerated stub
  }

}