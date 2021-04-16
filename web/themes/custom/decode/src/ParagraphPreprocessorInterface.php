<?php

namespace Drupal\decode\theme;

interface ParagraphPreprocessorInterface {

  /**
   * Preprocess paragraph render array
   *
   * @param array  $variables
   *
   * @return void
   */
  public function preprocessParagraph(array &$variables): void;

  /**
   * Get bundle of paragraph the preprocessor targets
   *
   * @return string
   */
  public function paragraphBundle(): string;
}