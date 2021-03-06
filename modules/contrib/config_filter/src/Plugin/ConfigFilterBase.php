<?php

namespace Drupal\config_filter\Plugin;

use Drupal\Component\Plugin\PluginBase;
use Drupal\Core\Config\StorageInterface;

/**
 * Base class for Config filter plugin plugins.
 */
abstract class ConfigFilterBase extends PluginBase implements ConfigFilterInterface {

  /**
   * The read-only source storage on which the filter operations are performed.
   *
   * @var \Drupal\Core\Config\StorageInterface
   */
  protected $source;

  /**
   * The wrapped storage which calls the filter.
   *
   * @var \Drupal\Core\Config\StorageInterface
   */
  protected $filtered;

  /**
   * {@inheritdoc}
   */
  public function setSourceStorage(StorageInterface $storage) {
    $this->source = $storage;
  }

  /**
   * {@inheritdoc}
   */
  public function setFilteredStorage(StorageInterface $storage) {
    $this->filtered = $storage;
  }

  /**
   * Get the read-only source Storage.
   *
   * @return \Drupal\Core\Config\StorageInterface
   *   The source storage.
   */
  protected function getSourceStorage() {
    return $this->source;
  }

  /**
   * Get the decorator storage which applies the filters.
   *
   * @return \Drupal\Core\Config\StorageInterface
   *   The filtered decorator storage.
   */
  protected function getFilteredStorage() {
    return $this->filtered;
  }

  /**
   * {@inheritdoc}
   */
  public function filterRead($name, $data) {
    return $data;
  }

  /**
   * {@inheritdoc}
   */
  public function filterWrite($name, array $data) {
    return $data;
  }

  /**
   * {@inheritdoc}
   */
  public function filterWriteEmptyIsDelete($name) {
    return NULL;
  }

  /**
   * {@inheritdoc}
   */
  public function filterExists($name, $exists) {
    return $exists;
  }

  /**
   * {@inheritdoc}
   */
  public function filterDelete($name, $delete) {
    return $delete;
  }

  /**
   * {@inheritdoc}
   */
  public function filterReadMultiple(array $names, array $data) {
    return $data;
  }

  /**
   * {@inheritdoc}
   */
  public function filterRename($name, $new_name, $rename) {
    return $rename;
  }

  /**
   * {@inheritdoc}
   */
  public function filterListAll($prefix, array $data) {
    return $data;
  }

  /**
   * {@inheritdoc}
   */
  public function filterDeleteAll($prefix, $delete) {
    return $delete;
  }

  /**
   * {@inheritdoc}
   */
  public function filterCreateCollection($collection) {
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function filterGetAllCollectionNames(array $collections) {
    return $collections;
  }

  /**
   * {@inheritdoc}
   */
  public function filterGetCollectionName($collection) {
    return $collection;
  }

}
