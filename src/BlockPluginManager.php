<?php

namespace Drupal\BlockPlugin;

use Drupal\Core\Plugin\Discovery\AnnotatedClassDiscovery;
use Drupal\Component\Plugin\PluginManagerBase;

class BlockPluginManager extends PluginManagerBase {
  public function __construct(\Traversable $namespaces) {
    $this->discovery = new AnnotatedClassDiscovery('Plugin/Block', $namespaces, 'malotor\block\Annotation\Command');
  }
}
